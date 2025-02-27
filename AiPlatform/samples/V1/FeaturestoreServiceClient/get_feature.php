<?php
/*
 * Copyright 2022 Google LLC
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

// [START aiplatform_v1_generated_FeaturestoreService_GetFeature_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\Client\FeaturestoreServiceClient;
use Google\Cloud\AIPlatform\V1\Feature;
use Google\Cloud\AIPlatform\V1\GetFeatureRequest;

/**
 * Gets details of a single Feature.
 *
 * @param string $formattedName The name of the Feature resource.
 *                              Format:
 *                              `projects/{project}/locations/{location}/featurestores/{featurestore}/entityTypes/{entity_type}`
 *                              Please see {@see FeaturestoreServiceClient::featureName()} for help formatting this field.
 */
function get_feature_sample(string $formattedName): void
{
    // Create a client.
    $featurestoreServiceClient = new FeaturestoreServiceClient();

    // Prepare the request message.
    $request = (new GetFeatureRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var Feature $response */
        $response = $featurestoreServiceClient->getFeature($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedName = FeaturestoreServiceClient::featureName(
        '[PROJECT]',
        '[LOCATION]',
        '[FEATURESTORE]',
        '[ENTITY_TYPE]',
        '[FEATURE]'
    );

    get_feature_sample($formattedName);
}
// [END aiplatform_v1_generated_FeaturestoreService_GetFeature_sync]
