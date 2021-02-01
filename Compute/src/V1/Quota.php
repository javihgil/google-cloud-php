<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A quotas entry.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Quota</code>
 */
class Quota extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Quota limit for this metric.
     *
     * Generated from protobuf field <code>double limit = 102976443;</code>
     */
    private $limit = 0.0;
    /**
     * [Output Only] Name of the quota metric.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Quota.Metric metric = 264631728;</code>
     */
    private $metric = 0;
    /**
     * [Output Only] Owning resource. This is the resource on which this quota is applied.
     *
     * Generated from protobuf field <code>string owner = 106164915;</code>
     */
    private $owner = '';
    /**
     * [Output Only] Current usage of this metric.
     *
     * Generated from protobuf field <code>double usage = 111574433;</code>
     */
    private $usage = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $limit
     *           [Output Only] Quota limit for this metric.
     *     @type int $metric
     *           [Output Only] Name of the quota metric.
     *     @type string $owner
     *           [Output Only] Owning resource. This is the resource on which this quota is applied.
     *     @type float $usage
     *           [Output Only] Current usage of this metric.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Quota limit for this metric.
     *
     * Generated from protobuf field <code>double limit = 102976443;</code>
     * @return float
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * [Output Only] Quota limit for this metric.
     *
     * Generated from protobuf field <code>double limit = 102976443;</code>
     * @param float $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkDouble($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the quota metric.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Quota.Metric metric = 264631728;</code>
     * @return int
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * [Output Only] Name of the quota metric.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Quota.Metric metric = 264631728;</code>
     * @param int $var
     * @return $this
     */
    public function setMetric($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Quota\Metric::class);
        $this->metric = $var;

        return $this;
    }

    /**
     * [Output Only] Owning resource. This is the resource on which this quota is applied.
     *
     * Generated from protobuf field <code>string owner = 106164915;</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * [Output Only] Owning resource. This is the resource on which this quota is applied.
     *
     * Generated from protobuf field <code>string owner = 106164915;</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * [Output Only] Current usage of this metric.
     *
     * Generated from protobuf field <code>double usage = 111574433;</code>
     * @return float
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * [Output Only] Current usage of this metric.
     *
     * Generated from protobuf field <code>double usage = 111574433;</code>
     * @param float $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkDouble($var);
        $this->usage = $var;

        return $this;
    }

}
