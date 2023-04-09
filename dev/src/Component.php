<?php
/**
 * Copyright 2023 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Dev;

use RuntimeException;

/**
 * @internal
 */
class Component
{
    const VERSION_REGEX = '/^V([0-9])?(p[0-9])?(beta|alpha)?[0-9]?$/';
    private const ROOT_DIR = __DIR__ . '/../../';
    private string $path;
    private string $releaseLevel;
    private string $packageName;
    private string $repoName;
    private string $productDocumentation;
    private string $clientDocumentation;
    private string $description;
    private array $namespaces;

    public function __construct(private ?string $name, string $path = null)
    {
        if ($name !== null) {
            $this->path = $path ?: $this->getComponentPath($name);
            $this->validateComponentFiles();
        }
    }

    private static function getComponentNames(): array
    {
        $components = scandir(self::ROOT_DIR);
        foreach ($components as $i => $name) {
            if (!is_dir(self::ROOT_DIR . $name) || !preg_match('/^[A-Z]/', $name)) {
                unset($components[$i]);
            }
        }

        return $components;
    }

    public static function getComponents(): array
    {
        $components = [];
        foreach (self::getComponentNames() as $name) {
            $components[] = new Component($name);
        }

        return $components;
    }

    public function getId(): string
    {
        return str_replace('google/', '', $this->getPackageName());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getProtoPackage(string $googleapisDir): string
    {
        $gapicClients = $this->getGapicClients();
        $regex = '#\* GENERATED CODE WARNING
 \* Generated by gapic-generator-php from the file
 \* https:\/\/github.com\/googleapis\/googleapis\/blob\/master\/(.*.proto)
 \* Updates to the above are reflected here through a refresh process#';
        $exception = null;
        foreach ($gapicClients as $gapicClient) {
            $gapicClientContent = file_get_contents($gapicClient);
            if (preg_match($regex, $gapicClientContent, $matches)) {
                $proto = realpath($googleapisDir . '/' . $matches[1]);
                if (!file_exists($proto)) {
                    $exception = new \Exception('Could not find protobuf file '. $matches[1]);
                    continue;
                }
                if (!preg_match('/^package ([\.\w]+);$/m', file_get_contents($proto), $matches)) {
                    $exception = new \Exception('Could not find proto package in file ' . $proto);
                    continue;
                }
                $packageParts = explode('.', $matches[1]);
                $packageVersion = array_pop($packageParts);
                return implode('.', $packageParts);
            }
        }

        throw $exception ? $exception : new \Exception('No GAPIC Clients found in ' . $this->name);
    }

    public function getRepoName(): string
    {
        return $this->repoName;
    }

    public function getServiceAddress(): string
    {
        $gapicClients = $this->getGapicClients();
        foreach ($gapicClients as $gapicClient) {
            $gapicClientClass = str_replace([$this->path, '/src/', '.php'], '', $gapicClient);
            $gapicClientClass = str_replace('/', '\\', $gapicClientClass);
            foreach ($this->getNamespaces() as $namespace) {
                if ($serviceAddress = constant($namespace . '\\' . $gapicClientClass . '::SERVICE_ADDRESS')) {
                    return $serviceAddress;
                }
            }
        }
        return '';
    }

    public function getApiShortname(): string
    {
        $serviceAddress = $this->getServiceAddress();
        return substr($serviceAddress, 0, strpos($serviceAddress, '.'));
    }

    public function getIssueTracker(): string
    {
        return sprintf('https://github.com/%s/issues', $this->getRepoName());
    }

    public function getPackageName(): string
    {
        return $this->packageName;
    }

    public function getReleaseLevel(): string
    {
        return $this->releaseLevel;
    }

    public function getClientDocumentation(): string
    {
        return $this->clientDocumentation;
    }

    public function getProductDocumentation(): string
    {
        return $this->productDocumentation;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getNamespaces(): array
    {
        return $this->namespaces;
    }

    /**
     * Formats distribution name like
     *   - google-cloud-policy-troubleshooter
     *   - google-cloud-vision
     *   - google-grafeas
     *   - google-analytics-data
     * This is for the reference documentation URLs
     */
    public function getReferenceDocumentationUid(): string
    {
        return str_replace('/', '-', $this->getPackageName());
    }

    private function getComponentPath(string $component): string
    {
        $components = $this->getComponentNames();

        if (!in_array($component, $components)) {
            throw new \Exception($component ? 'Invalid component provided'
                : 'You are not in a component directory. Run this command from a valid component'
                  . ' directory or provide a valid component using the "component" option.');
        }

        $componentPath = realpath(self::ROOT_DIR . '/' . $component);

        if (!is_dir($componentPath)) {
            throw new RuntimeException(sprintf('component "%s" not found', $component));
        }

        return $componentPath;
    }

    private function validateComponentFiles(): void
    {
        $composerPath = $this->path . '/composer.json';
        if (!file_exists($composerPath)) {
            throw new RuntimeException(
                sprintf('composer.json not found for component "%s"', $this->name)
            );
        }
        $composerJson = json_decode(file_get_contents($composerPath), true);
        if (!$composerJson) {
            throw new RuntimeException(
                sprintf('Invalid composer.json for component "%s"', $this->name)
            );
        }
        if (empty($composerJson['name'])) {
            throw new RuntimeException('composer.json does not contain "name"');
        }
        if (empty($composerJson['extra']['component']['target'])) {
            throw new RuntimeException('composer does not contain extra.component.target');
        }
        if (empty($composerJson['description'])) {
            throw new RuntimeException('composer.json does not contain "description"');
        }
        if (empty($composerJson['autoload']['psr-4'])) {
            throw new RuntimeException('composer does not contain autoload.psr-4');
        }

        $this->packageName = $composerJson['name'];
        $repoName = $composerJson['extra']['component']['target'];
        $this->repoName = preg_replace('/\.git$/', '', $repoName); // Strip trailing ".git"
        $this->description = $composerJson['description'];

        $repoMetadataPath = $this->path . '/.repo-metadata.json';
        if (!file_exists($repoMetadataPath)) {
            throw new RuntimeException(
                sprintf('repo metadata not found for component "%s"', $this->name)
            );
        }
        $repoMetadataJson = json_decode(file_get_contents($repoMetadataPath), true);
        if (!$repoMetadataJson) {
            throw new RuntimeException(
                sprintf('Invalid .repo-metadata.json for component "%s"', $this->name)
            );
        }
        if (empty($repoMetadataJson['release_level'])) {
            throw new RuntimeException(sprintf(
                'repo metadata does not contain "release_level" for component "%s"',
                $component
            ));
        }
        if (empty($repoMetadataJson['release_level'])) {
            throw new RuntimeException(sprintf(
                'repo metadata does not contain "client_documentation" for component "%s"',
                $component
            ));
        }
        $this->releaseLevel = $repoMetadataJson['release_level'];
        $this->clientDocumentation = $repoMetadataJson['client_documentation'];
        $this->productDocumentation = $repoMetadataJson['product_documentation'] ?? '';

        $namespaces = [];
        foreach ($composerJson['autoload']['psr-4'] as $namespace => $dir) {
            if (0 === strpos($dir, 'src')) {
                $namespaces[] = rtrim($namespace, '\\');
            }
        }
        if (empty($namespaces)) {
            throw new RuntimeException('composer autoload.psr-4 does not contain a namespace');
        }
        $this->namespaces = $namespaces;
    }

    /**
     * Get the API versions supported by this component
     */
    public function getVersions(): array
    {
        $versionDirs = array_diff(scandir($this->path . '/src'), ['.', '..']);
        $versions = [];
        foreach ($versionDirs as $version) {
            if (preg_match(self::VERSION_REGEX, $version, $matches)) {
                $versions[] = $matches[0];
            }
        }

        return $versions;
    }

    /**
     * Get the contents of VERSION in the component directory
     */
    public function getLocalVersion(): string
    {
        return trim(file_get_contents(sprintf('%s/VERSION', $this->path)));
    }

    private function getGapicClients(): array
    {
        $gapicClients = [];
        foreach ($this->getVersions() as $version) {
            $gapicPath = sprintf('%s/src/%s%sGapic', $this->path, $version, $version ? '/' : '');
            if (!file_exists($gapicPath)) {
                continue;
            }

            foreach (array_diff(scandir($gapicPath), ['.', '..']) as $gapicClient) {
                $gapicClients[] = $gapicPath . '/' . $gapicClient;
            }
        }
        return $gapicClients;
    }
}