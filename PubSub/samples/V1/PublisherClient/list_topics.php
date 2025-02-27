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

// [START pubsub_v1_generated_Publisher_ListTopics_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\PubSub\V1\PublisherClient;
use Google\Cloud\PubSub\V1\Topic;

/**
 * Lists matching topics.
 *
 * @param string $formattedProject The name of the project in which to list topics.
 *                                 Format is `projects/{project-id}`. Please see
 *                                 {@see PublisherClient::projectName()} for help formatting this field.
 */
function list_topics_sample(string $formattedProject): void
{
    // Create a client.
    $publisherClient = new PublisherClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $publisherClient->listTopics($formattedProject);

        /** @var Topic $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
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
    $formattedProject = PublisherClient::projectName('[PROJECT]');

    list_topics_sample($formattedProject);
}
// [END pubsub_v1_generated_Publisher_ListTopics_sync]
