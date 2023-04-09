<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Table data read event.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.TableDataRead</code>
 */
class TableDataRead extends \Google\Protobuf\Internal\Message
{
    /**
     * List of the accessed fields. Entire list is truncated if the record size
     * exceeds 100K.
     *
     * Generated from protobuf field <code>repeated string fields = 2;</code>
     */
    private $fields;
    /**
     * True if the fields list was truncated.
     *
     * Generated from protobuf field <code>bool fields_truncated = 8;</code>
     */
    protected $fields_truncated = false;
    /**
     * List of the referenced policy tags. That is, policy tags attached to the
     * accessed fields or their ancestors.
     * Policy tag resource name is a string of the format:
     * `projects/<project_id>/locations/<location_id>/taxonomies/<taxonomy_id>/policyTags/<policy_tag_id>`
     *
     * Generated from protobuf field <code>repeated string policy_tags = 9;</code>
     */
    private $policy_tags;
    /**
     * True if the policy tag list was truncated. At most 100 policy tags can be
     * saved.
     *
     * Generated from protobuf field <code>bool policy_tags_truncated = 10;</code>
     */
    protected $policy_tags_truncated = false;
    /**
     * Describes how the table data was read.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDataRead.Reason reason = 3;</code>
     */
    protected $reason = 0;
    /**
     * The URI of the job that read a table.
     * Present if the reason is JOB but can be redacted for privacy reasons.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     */
    protected $job_name = '';
    /**
     * The URI of the read session that read a table.
     * Present if the reason is CREATE_READ_SESSION.
     * Format:
     * `projects/<project_id>/locations/<location>/sessions/<session_id>`.
     *
     * Generated from protobuf field <code>string session_name = 5;</code>
     */
    protected $session_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $fields
     *           List of the accessed fields. Entire list is truncated if the record size
     *           exceeds 100K.
     *     @type bool $fields_truncated
     *           True if the fields list was truncated.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $policy_tags
     *           List of the referenced policy tags. That is, policy tags attached to the
     *           accessed fields or their ancestors.
     *           Policy tag resource name is a string of the format:
     *           `projects/<project_id>/locations/<location_id>/taxonomies/<taxonomy_id>/policyTags/<policy_tag_id>`
     *     @type bool $policy_tags_truncated
     *           True if the policy tag list was truncated. At most 100 policy tags can be
     *           saved.
     *     @type int $reason
     *           Describes how the table data was read.
     *     @type string $job_name
     *           The URI of the job that read a table.
     *           Present if the reason is JOB but can be redacted for privacy reasons.
     *           Format: `projects/<project_id>/jobs/<job_id>`.
     *     @type string $session_name
     *           The URI of the read session that read a table.
     *           Present if the reason is CREATE_READ_SESSION.
     *           Format:
     *           `projects/<project_id>/locations/<location>/sessions/<session_id>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * List of the accessed fields. Entire list is truncated if the record size
     * exceeds 100K.
     *
     * Generated from protobuf field <code>repeated string fields = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * List of the accessed fields. Entire list is truncated if the record size
     * exceeds 100K.
     *
     * Generated from protobuf field <code>repeated string fields = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fields = $arr;

        return $this;
    }

    /**
     * True if the fields list was truncated.
     *
     * Generated from protobuf field <code>bool fields_truncated = 8;</code>
     * @return bool
     */
    public function getFieldsTruncated()
    {
        return $this->fields_truncated;
    }

    /**
     * True if the fields list was truncated.
     *
     * Generated from protobuf field <code>bool fields_truncated = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setFieldsTruncated($var)
    {
        GPBUtil::checkBool($var);
        $this->fields_truncated = $var;

        return $this;
    }

    /**
     * List of the referenced policy tags. That is, policy tags attached to the
     * accessed fields or their ancestors.
     * Policy tag resource name is a string of the format:
     * `projects/<project_id>/locations/<location_id>/taxonomies/<taxonomy_id>/policyTags/<policy_tag_id>`
     *
     * Generated from protobuf field <code>repeated string policy_tags = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyTags()
    {
        return $this->policy_tags;
    }

    /**
     * List of the referenced policy tags. That is, policy tags attached to the
     * accessed fields or their ancestors.
     * Policy tag resource name is a string of the format:
     * `projects/<project_id>/locations/<location_id>/taxonomies/<taxonomy_id>/policyTags/<policy_tag_id>`
     *
     * Generated from protobuf field <code>repeated string policy_tags = 9;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->policy_tags = $arr;

        return $this;
    }

    /**
     * True if the policy tag list was truncated. At most 100 policy tags can be
     * saved.
     *
     * Generated from protobuf field <code>bool policy_tags_truncated = 10;</code>
     * @return bool
     */
    public function getPolicyTagsTruncated()
    {
        return $this->policy_tags_truncated;
    }

    /**
     * True if the policy tag list was truncated. At most 100 policy tags can be
     * saved.
     *
     * Generated from protobuf field <code>bool policy_tags_truncated = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setPolicyTagsTruncated($var)
    {
        GPBUtil::checkBool($var);
        $this->policy_tags_truncated = $var;

        return $this;
    }

    /**
     * Describes how the table data was read.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDataRead.Reason reason = 3;</code>
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Describes how the table data was read.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.TableDataRead.Reason reason = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Audit\BigQueryAuditMetadata\TableDataRead\Reason::class);
        $this->reason = $var;

        return $this;
    }

    /**
     * The URI of the job that read a table.
     * Present if the reason is JOB but can be redacted for privacy reasons.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * The URI of the job that read a table.
     * Present if the reason is JOB but can be redacted for privacy reasons.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

    /**
     * The URI of the read session that read a table.
     * Present if the reason is CREATE_READ_SESSION.
     * Format:
     * `projects/<project_id>/locations/<location>/sessions/<session_id>`.
     *
     * Generated from protobuf field <code>string session_name = 5;</code>
     * @return string
     */
    public function getSessionName()
    {
        return $this->session_name;
    }

    /**
     * The URI of the read session that read a table.
     * Present if the reason is CREATE_READ_SESSION.
     * Format:
     * `projects/<project_id>/locations/<location>/sessions/<session_id>`.
     *
     * Generated from protobuf field <code>string session_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_name = $var;

        return $this;
    }

}

