<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dataproc Node Group.
 * **The Dataproc `NodeGroup` resource is not related to the
 * Dataproc [NodeGroupAffinity][google.cloud.dataproc.v1.NodeGroupAffinity]
 * resource.**
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.NodeGroup</code>
 */
class NodeGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * The Node group [resource name](https://aip.dev/122).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. Node group roles.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.NodeGroup.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $roles;
    /**
     * Optional. The node group instance group configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.InstanceGroupConfig node_group_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $node_group_config = null;
    /**
     * Optional. Node group labels.
     * * Label **keys** must consist of from 1 to 63 characters and conform to
     *   [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * * Label **values** can be empty. If specified, they must consist of from
     *   1 to 63 characters and conform to [RFC 1035]
     *   (https://www.ietf.org/rfc/rfc1035.txt).
     * * The node group must have no more than 32 labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The Node group [resource name](https://aip.dev/122).
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $roles
     *           Required. Node group roles.
     *     @type \Google\Cloud\Dataproc\V1\InstanceGroupConfig $node_group_config
     *           Optional. The node group instance group configuration.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Node group labels.
     *           * Label **keys** must consist of from 1 to 63 characters and conform to
     *             [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     *           * Label **values** can be empty. If specified, they must consist of from
     *             1 to 63 characters and conform to [RFC 1035]
     *             (https://www.ietf.org/rfc/rfc1035.txt).
     *           * The node group must have no more than 32 labels.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * The Node group [resource name](https://aip.dev/122).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The Node group [resource name](https://aip.dev/122).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Node group roles.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.NodeGroup.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Required. Node group roles.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.NodeGroup.Role roles = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dataproc\V1\NodeGroup\Role::class);
        $this->roles = $arr;

        return $this;
    }

    /**
     * Optional. The node group instance group configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.InstanceGroupConfig node_group_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\InstanceGroupConfig|null
     */
    public function getNodeGroupConfig()
    {
        return $this->node_group_config;
    }

    public function hasNodeGroupConfig()
    {
        return isset($this->node_group_config);
    }

    public function clearNodeGroupConfig()
    {
        unset($this->node_group_config);
    }

    /**
     * Optional. The node group instance group configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.InstanceGroupConfig node_group_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\InstanceGroupConfig $var
     * @return $this
     */
    public function setNodeGroupConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\InstanceGroupConfig::class);
        $this->node_group_config = $var;

        return $this;
    }

    /**
     * Optional. Node group labels.
     * * Label **keys** must consist of from 1 to 63 characters and conform to
     *   [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * * Label **values** can be empty. If specified, they must consist of from
     *   1 to 63 characters and conform to [RFC 1035]
     *   (https://www.ietf.org/rfc/rfc1035.txt).
     * * The node group must have no more than 32 labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Node group labels.
     * * Label **keys** must consist of from 1 to 63 characters and conform to
     *   [RFC 1035](https://www.ietf.org/rfc/rfc1035.txt).
     * * Label **values** can be empty. If specified, they must consist of from
     *   1 to 63 characters and conform to [RFC 1035]
     *   (https://www.ietf.org/rfc/rfc1035.txt).
     * * The node group must have no more than 32 labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}
