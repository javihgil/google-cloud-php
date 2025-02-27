<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for simulating a SecurityHealthAnalyticsCustomModule against
 * a given resource.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.SimulateSecurityHealthAnalyticsCustomModuleResponse</code>
 */
class SimulateSecurityHealthAnalyticsCustomModuleResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Result for test case in the corresponding request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SimulateSecurityHealthAnalyticsCustomModuleResponse.SimulatedResult result = 1;</code>
     */
    private $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleResponse\SimulatedResult $result
     *           Result for test case in the corresponding request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Result for test case in the corresponding request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SimulateSecurityHealthAnalyticsCustomModuleResponse.SimulatedResult result = 1;</code>
     * @return \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleResponse\SimulatedResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Result for test case in the corresponding request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SimulateSecurityHealthAnalyticsCustomModuleResponse.SimulatedResult result = 1;</code>
     * @param \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleResponse\SimulatedResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleResponse\SimulatedResult::class);
        $this->result = $var;

        return $this;
    }

}

