<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START datamigration_v1_generated_DataMigrationService_CreateConversionWorkspace_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\CloudDms\V1\ConversionWorkspace;
use Google\Cloud\CloudDms\V1\DataMigrationServiceClient;
use Google\Cloud\CloudDms\V1\DatabaseEngine;
use Google\Cloud\CloudDms\V1\DatabaseEngineInfo;
use Google\Rpc\Status;

/**
 * Creates a new conversion workspace in a given project and location.
 *
 * @param string $formattedParent                       The parent which owns this collection of conversion workspaces. Please see
 *                                                      {@see DataMigrationServiceClient::locationName()} for help formatting this field.
 * @param string $conversionWorkspaceId                 The ID of the conversion workspace to create.
 * @param int    $conversionWorkspaceSourceEngine       Engine type.
 * @param string $conversionWorkspaceSourceVersion      Engine named version, for example 12.c.1.
 * @param int    $conversionWorkspaceDestinationEngine  Engine type.
 * @param string $conversionWorkspaceDestinationVersion Engine named version, for example 12.c.1.
 */
function create_conversion_workspace_sample(
    string $formattedParent,
    string $conversionWorkspaceId,
    int $conversionWorkspaceSourceEngine,
    string $conversionWorkspaceSourceVersion,
    int $conversionWorkspaceDestinationEngine,
    string $conversionWorkspaceDestinationVersion
): void {
    // Create a client.
    $dataMigrationServiceClient = new DataMigrationServiceClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $conversionWorkspaceSource = (new DatabaseEngineInfo())
        ->setEngine($conversionWorkspaceSourceEngine)
        ->setVersion($conversionWorkspaceSourceVersion);
    $conversionWorkspaceDestination = (new DatabaseEngineInfo())
        ->setEngine($conversionWorkspaceDestinationEngine)
        ->setVersion($conversionWorkspaceDestinationVersion);
    $conversionWorkspace = (new ConversionWorkspace())
        ->setSource($conversionWorkspaceSource)
        ->setDestination($conversionWorkspaceDestination);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $dataMigrationServiceClient->createConversionWorkspace(
            $formattedParent,
            $conversionWorkspaceId,
            $conversionWorkspace
        );
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            /** @var ConversionWorkspace $result */
            $result = $response->getResult();
            printf('Operation successful with response data: %s' . PHP_EOL, $result->serializeToJsonString());
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = DataMigrationServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $conversionWorkspaceId = '[CONVERSION_WORKSPACE_ID]';
    $conversionWorkspaceSourceEngine = DatabaseEngine::DATABASE_ENGINE_UNSPECIFIED;
    $conversionWorkspaceSourceVersion = '[VERSION]';
    $conversionWorkspaceDestinationEngine = DatabaseEngine::DATABASE_ENGINE_UNSPECIFIED;
    $conversionWorkspaceDestinationVersion = '[VERSION]';

    create_conversion_workspace_sample(
        $formattedParent,
        $conversionWorkspaceId,
        $conversionWorkspaceSourceEngine,
        $conversionWorkspaceSourceVersion,
        $conversionWorkspaceDestinationEngine,
        $conversionWorkspaceDestinationVersion
    );
}
// [END datamigration_v1_generated_DataMigrationService_CreateConversionWorkspace_sync]
