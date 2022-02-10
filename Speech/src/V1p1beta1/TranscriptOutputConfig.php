<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies an optional destination for the recognition results.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.TranscriptOutputConfig</code>
 */
class TranscriptOutputConfig extends \Google\Protobuf\Internal\Message
{
    protected $output_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_uri
     *           Specifies a Cloud Storage URI for the recognition results. Must be
     *           specified in the format: `gs://bucket_name/object_name`, and the bucket
     *           must already exist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies a Cloud Storage URI for the recognition results. Must be
     * specified in the format: `gs://bucket_name/object_name`, and the bucket
     * must already exist.
     *
     * Generated from protobuf field <code>string gcs_uri = 1;</code>
     * @return string
     */
    public function getGcsUri()
    {
        return $this->readOneof(1);
    }

    public function hasGcsUri()
    {
        return $this->hasOneof(1);
    }

    /**
     * Specifies a Cloud Storage URI for the recognition results. Must be
     * specified in the format: `gs://bucket_name/object_name`, and the bucket
     * must already exist.
     *
     * Generated from protobuf field <code>string gcs_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOutputType()
    {
        return $this->whichOneof("output_type");
    }

}
