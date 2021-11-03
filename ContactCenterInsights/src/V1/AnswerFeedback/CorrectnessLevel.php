<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\AnswerFeedback;

use UnexpectedValueException;

/**
 * The correctness level of an answer.
 *
 * Protobuf type <code>google.cloud.contactcenterinsights.v1.AnswerFeedback.CorrectnessLevel</code>
 */
class CorrectnessLevel
{
    /**
     * Correctness level unspecified.
     *
     * Generated from protobuf enum <code>CORRECTNESS_LEVEL_UNSPECIFIED = 0;</code>
     */
    const CORRECTNESS_LEVEL_UNSPECIFIED = 0;
    /**
     * Answer is totally wrong.
     *
     * Generated from protobuf enum <code>NOT_CORRECT = 1;</code>
     */
    const NOT_CORRECT = 1;
    /**
     * Answer is partially correct.
     *
     * Generated from protobuf enum <code>PARTIALLY_CORRECT = 2;</code>
     */
    const PARTIALLY_CORRECT = 2;
    /**
     * Answer is fully correct.
     *
     * Generated from protobuf enum <code>FULLY_CORRECT = 3;</code>
     */
    const FULLY_CORRECT = 3;

    private static $valueToName = [
        self::CORRECTNESS_LEVEL_UNSPECIFIED => 'CORRECTNESS_LEVEL_UNSPECIFIED',
        self::NOT_CORRECT => 'NOT_CORRECT',
        self::PARTIALLY_CORRECT => 'PARTIALLY_CORRECT',
        self::FULLY_CORRECT => 'FULLY_CORRECT',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CorrectnessLevel::class, \Google\Cloud\ContactCenterInsights\V1\AnswerFeedback_CorrectnessLevel::class);
