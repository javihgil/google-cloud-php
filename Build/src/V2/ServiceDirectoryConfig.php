<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ServiceDirectoryConfig represents Service Directory configuration for a
 * connection.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.ServiceDirectoryConfig</code>
 */
class ServiceDirectoryConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Service Directory service name.
     * Format:
     * projects/{project}/locations/{location}/namespaces/{namespace}/services/{service}.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $service = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Required. The Service Directory service name.
     *           Format:
     *           projects/{project}/locations/{location}/namespaces/{namespace}/services/{service}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Service Directory service name.
     * Format:
     * projects/{project}/locations/{location}/namespaces/{namespace}/services/{service}.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Required. The Service Directory service name.
     * Format:
     * projects/{project}/locations/{location}/namespaces/{namespace}/services/{service}.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

}
