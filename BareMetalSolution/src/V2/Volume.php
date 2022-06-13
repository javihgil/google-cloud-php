<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/baremetalsolution.proto

namespace Google\Cloud\BaremetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A storage volume.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.Volume</code>
 */
class Volume extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of this `Volume`.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * Format:
     * `projects/{project}/locations/{location}/volumes/{volume}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * The storage type for this volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.StorageType storage_type = 2;</code>
     */
    private $storage_type = 0;
    /**
     * The state of this storage volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.State state = 3;</code>
     */
    private $state = 0;
    /**
     * The requested size of this storage volume, in GiB.
     *
     * Generated from protobuf field <code>int64 requested_size_gib = 4;</code>
     */
    private $requested_size_gib = 0;
    /**
     * The current size of this storage volume, in GiB, including space reserved
     * for snapshots. This size might be different than the requested size if the
     * storage volume has been configured with auto grow or auto shrink.
     *
     * Generated from protobuf field <code>int64 current_size_gib = 5;</code>
     */
    private $current_size_gib = 0;
    /**
     * The size, in GiB, that this storage volume has expanded as a result of an
     * auto grow policy. In the absence of auto-grow, the value is 0.
     *
     * Generated from protobuf field <code>int64 auto_grown_size_gib = 6;</code>
     */
    private $auto_grown_size_gib = 0;
    /**
     * The space remaining in the storage volume for new LUNs, in GiB, excluding
     * space reserved for snapshots.
     *
     * Generated from protobuf field <code>int64 remaining_space_gib = 7;</code>
     */
    private $remaining_space_gib = 0;
    /**
     * Details about snapshot space reservation and usage on the storage volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.SnapshotReservationDetail snapshot_reservation_detail = 8;</code>
     */
    private $snapshot_reservation_detail = null;
    /**
     * The behavior to use when snapshot reserved space is full.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.SnapshotAutoDeleteBehavior snapshot_auto_delete_behavior = 9;</code>
     */
    private $snapshot_auto_delete_behavior = 0;
    /**
     * The name of the snapshot schedule policy in use for this volume, if any.
     *
     * Generated from protobuf field <code>string snapshot_schedule_policy = 10 [(.google.api.resource_reference) = {</code>
     */
    private $snapshot_schedule_policy = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of this `Volume`.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           Format:
     *           `projects/{project}/locations/{location}/volumes/{volume}`
     *     @type int $storage_type
     *           The storage type for this volume.
     *     @type int $state
     *           The state of this storage volume.
     *     @type int|string $requested_size_gib
     *           The requested size of this storage volume, in GiB.
     *     @type int|string $current_size_gib
     *           The current size of this storage volume, in GiB, including space reserved
     *           for snapshots. This size might be different than the requested size if the
     *           storage volume has been configured with auto grow or auto shrink.
     *     @type int|string $auto_grown_size_gib
     *           The size, in GiB, that this storage volume has expanded as a result of an
     *           auto grow policy. In the absence of auto-grow, the value is 0.
     *     @type int|string $remaining_space_gib
     *           The space remaining in the storage volume for new LUNs, in GiB, excluding
     *           space reserved for snapshots.
     *     @type \Google\Cloud\BaremetalSolution\V2\Volume\SnapshotReservationDetail $snapshot_reservation_detail
     *           Details about snapshot space reservation and usage on the storage volume.
     *     @type int $snapshot_auto_delete_behavior
     *           The behavior to use when snapshot reserved space is full.
     *     @type string $snapshot_schedule_policy
     *           The name of the snapshot schedule policy in use for this volume, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Baremetalsolution::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of this `Volume`.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * Format:
     * `projects/{project}/locations/{location}/volumes/{volume}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of this `Volume`.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * Format:
     * `projects/{project}/locations/{location}/volumes/{volume}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The storage type for this volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.StorageType storage_type = 2;</code>
     * @return int
     */
    public function getStorageType()
    {
        return $this->storage_type;
    }

    /**
     * The storage type for this volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.StorageType storage_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStorageType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BaremetalSolution\V2\Volume\StorageType::class);
        $this->storage_type = $var;

        return $this;
    }

    /**
     * The state of this storage volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.State state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of this storage volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.State state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BaremetalSolution\V2\Volume\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The requested size of this storage volume, in GiB.
     *
     * Generated from protobuf field <code>int64 requested_size_gib = 4;</code>
     * @return int|string
     */
    public function getRequestedSizeGib()
    {
        return $this->requested_size_gib;
    }

    /**
     * The requested size of this storage volume, in GiB.
     *
     * Generated from protobuf field <code>int64 requested_size_gib = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRequestedSizeGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->requested_size_gib = $var;

        return $this;
    }

    /**
     * The current size of this storage volume, in GiB, including space reserved
     * for snapshots. This size might be different than the requested size if the
     * storage volume has been configured with auto grow or auto shrink.
     *
     * Generated from protobuf field <code>int64 current_size_gib = 5;</code>
     * @return int|string
     */
    public function getCurrentSizeGib()
    {
        return $this->current_size_gib;
    }

    /**
     * The current size of this storage volume, in GiB, including space reserved
     * for snapshots. This size might be different than the requested size if the
     * storage volume has been configured with auto grow or auto shrink.
     *
     * Generated from protobuf field <code>int64 current_size_gib = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurrentSizeGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->current_size_gib = $var;

        return $this;
    }

    /**
     * The size, in GiB, that this storage volume has expanded as a result of an
     * auto grow policy. In the absence of auto-grow, the value is 0.
     *
     * Generated from protobuf field <code>int64 auto_grown_size_gib = 6;</code>
     * @return int|string
     */
    public function getAutoGrownSizeGib()
    {
        return $this->auto_grown_size_gib;
    }

    /**
     * The size, in GiB, that this storage volume has expanded as a result of an
     * auto grow policy. In the absence of auto-grow, the value is 0.
     *
     * Generated from protobuf field <code>int64 auto_grown_size_gib = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAutoGrownSizeGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->auto_grown_size_gib = $var;

        return $this;
    }

    /**
     * The space remaining in the storage volume for new LUNs, in GiB, excluding
     * space reserved for snapshots.
     *
     * Generated from protobuf field <code>int64 remaining_space_gib = 7;</code>
     * @return int|string
     */
    public function getRemainingSpaceGib()
    {
        return $this->remaining_space_gib;
    }

    /**
     * The space remaining in the storage volume for new LUNs, in GiB, excluding
     * space reserved for snapshots.
     *
     * Generated from protobuf field <code>int64 remaining_space_gib = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemainingSpaceGib($var)
    {
        GPBUtil::checkInt64($var);
        $this->remaining_space_gib = $var;

        return $this;
    }

    /**
     * Details about snapshot space reservation and usage on the storage volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.SnapshotReservationDetail snapshot_reservation_detail = 8;</code>
     * @return \Google\Cloud\BaremetalSolution\V2\Volume\SnapshotReservationDetail|null
     */
    public function getSnapshotReservationDetail()
    {
        return $this->snapshot_reservation_detail;
    }

    public function hasSnapshotReservationDetail()
    {
        return isset($this->snapshot_reservation_detail);
    }

    public function clearSnapshotReservationDetail()
    {
        unset($this->snapshot_reservation_detail);
    }

    /**
     * Details about snapshot space reservation and usage on the storage volume.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.SnapshotReservationDetail snapshot_reservation_detail = 8;</code>
     * @param \Google\Cloud\BaremetalSolution\V2\Volume\SnapshotReservationDetail $var
     * @return $this
     */
    public function setSnapshotReservationDetail($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BaremetalSolution\V2\Volume\SnapshotReservationDetail::class);
        $this->snapshot_reservation_detail = $var;

        return $this;
    }

    /**
     * The behavior to use when snapshot reserved space is full.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.SnapshotAutoDeleteBehavior snapshot_auto_delete_behavior = 9;</code>
     * @return int
     */
    public function getSnapshotAutoDeleteBehavior()
    {
        return $this->snapshot_auto_delete_behavior;
    }

    /**
     * The behavior to use when snapshot reserved space is full.
     *
     * Generated from protobuf field <code>.google.cloud.baremetalsolution.v2.Volume.SnapshotAutoDeleteBehavior snapshot_auto_delete_behavior = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setSnapshotAutoDeleteBehavior($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BaremetalSolution\V2\Volume\SnapshotAutoDeleteBehavior::class);
        $this->snapshot_auto_delete_behavior = $var;

        return $this;
    }

    /**
     * The name of the snapshot schedule policy in use for this volume, if any.
     *
     * Generated from protobuf field <code>string snapshot_schedule_policy = 10 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSnapshotSchedulePolicy()
    {
        return $this->snapshot_schedule_policy;
    }

    /**
     * The name of the snapshot schedule policy in use for this volume, if any.
     *
     * Generated from protobuf field <code>string snapshot_schedule_policy = 10 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshotSchedulePolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot_schedule_policy = $var;

        return $this;
    }

}
