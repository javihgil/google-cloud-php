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

// [START bigqueryreservation_v1_generated_ReservationService_DeleteCapacityCommitment_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\BigQuery\Reservation\V1\ReservationServiceClient;

/**
 * Deletes a capacity commitment. Attempting to delete capacity commitment
 * before its commitment_end_time will fail with the error code
 * `google.rpc.Code.FAILED_PRECONDITION`.
 *
 * @param string $formattedName Resource name of the capacity commitment to delete. E.g.,
 *                              `projects/myproject/locations/US/capacityCommitments/123`
 *                              Please see {@see ReservationServiceClient::capacityCommitmentName()} for help formatting this field.
 */
function delete_capacity_commitment_sample(string $formattedName): void
{
    // Create a client.
    $reservationServiceClient = new ReservationServiceClient();

    // Call the API and handle any network failures.
    try {
        $reservationServiceClient->deleteCapacityCommitment($formattedName);
        printf('Call completed successfully.' . PHP_EOL);
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
    $formattedName = ReservationServiceClient::capacityCommitmentName(
        '[PROJECT]',
        '[LOCATION]',
        '[CAPACITY_COMMITMENT]'
    );

    delete_capacity_commitment_sample($formattedName);
}
// [END bigqueryreservation_v1_generated_ReservationService_DeleteCapacityCommitment_sync]
