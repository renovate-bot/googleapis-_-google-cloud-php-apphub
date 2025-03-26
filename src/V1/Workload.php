<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apphub/v1/workload.proto

namespace Google\Cloud\AppHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Workload is an App Hub data model that contains a discovered workload, which
 * represents a binary deployment (such as managed instance groups (MIGs) and
 * GKE deployments) that performs the smallest logical subset of business
 * functionality.
 *
 * Generated from protobuf message <code>google.cloud.apphub.v1.Workload</code>
 */
class Workload extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The resource name of the Workload. Format:
     * `"projects/{host-project-id}/locations/{location}/applications/{application-id}/workloads/{workload-id}"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Optional. User-defined name for the Workload.
     * Can have a maximum length of 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Optional. User-defined description of a Workload.
     * Can have a maximum length of 2048 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Output only. Reference of an underlying compute resource represented by the
     * Workload. These are immutable.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.WorkloadReference workload_reference = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $workload_reference = null;
    /**
     * Output only. Properties of an underlying compute resource represented by
     * the Workload. These are immutable.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.WorkloadProperties workload_properties = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $workload_properties = null;
    /**
     * Required. Immutable. The resource name of the original discovered workload.
     *
     * Generated from protobuf field <code>string discovered_workload = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $discovered_workload = '';
    /**
     * Optional. Consumer provided attributes.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Attributes attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $attributes = null;
    /**
     * Output only. Create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. A universally unique identifier (UUID) for the `Workload` in
     * the UUID4 format.
     *
     * Generated from protobuf field <code>string uid = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     */
    protected $uid = '';
    /**
     * Output only. Workload state.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Workload.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. The resource name of the Workload. Format:
     *           `"projects/{host-project-id}/locations/{location}/applications/{application-id}/workloads/{workload-id}"`
     *     @type string $display_name
     *           Optional. User-defined name for the Workload.
     *           Can have a maximum length of 63 characters.
     *     @type string $description
     *           Optional. User-defined description of a Workload.
     *           Can have a maximum length of 2048 characters.
     *     @type \Google\Cloud\AppHub\V1\WorkloadReference $workload_reference
     *           Output only. Reference of an underlying compute resource represented by the
     *           Workload. These are immutable.
     *     @type \Google\Cloud\AppHub\V1\WorkloadProperties $workload_properties
     *           Output only. Properties of an underlying compute resource represented by
     *           the Workload. These are immutable.
     *     @type string $discovered_workload
     *           Required. Immutable. The resource name of the original discovered workload.
     *     @type \Google\Cloud\AppHub\V1\Attributes $attributes
     *           Optional. Consumer provided attributes.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Update time.
     *     @type string $uid
     *           Output only. A universally unique identifier (UUID) for the `Workload` in
     *           the UUID4 format.
     *     @type int $state
     *           Output only. Workload state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apphub\V1\Workload::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. The resource name of the Workload. Format:
     * `"projects/{host-project-id}/locations/{location}/applications/{application-id}/workloads/{workload-id}"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The resource name of the Workload. Format:
     * `"projects/{host-project-id}/locations/{location}/applications/{application-id}/workloads/{workload-id}"`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Optional. User-defined name for the Workload.
     * Can have a maximum length of 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User-defined name for the Workload.
     * Can have a maximum length of 63 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. User-defined description of a Workload.
     * Can have a maximum length of 2048 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. User-defined description of a Workload.
     * Can have a maximum length of 2048 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Reference of an underlying compute resource represented by the
     * Workload. These are immutable.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.WorkloadReference workload_reference = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AppHub\V1\WorkloadReference|null
     */
    public function getWorkloadReference()
    {
        return $this->workload_reference;
    }

    public function hasWorkloadReference()
    {
        return isset($this->workload_reference);
    }

    public function clearWorkloadReference()
    {
        unset($this->workload_reference);
    }

    /**
     * Output only. Reference of an underlying compute resource represented by the
     * Workload. These are immutable.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.WorkloadReference workload_reference = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AppHub\V1\WorkloadReference $var
     * @return $this
     */
    public function setWorkloadReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppHub\V1\WorkloadReference::class);
        $this->workload_reference = $var;

        return $this;
    }

    /**
     * Output only. Properties of an underlying compute resource represented by
     * the Workload. These are immutable.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.WorkloadProperties workload_properties = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AppHub\V1\WorkloadProperties|null
     */
    public function getWorkloadProperties()
    {
        return $this->workload_properties;
    }

    public function hasWorkloadProperties()
    {
        return isset($this->workload_properties);
    }

    public function clearWorkloadProperties()
    {
        unset($this->workload_properties);
    }

    /**
     * Output only. Properties of an underlying compute resource represented by
     * the Workload. These are immutable.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.WorkloadProperties workload_properties = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AppHub\V1\WorkloadProperties $var
     * @return $this
     */
    public function setWorkloadProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppHub\V1\WorkloadProperties::class);
        $this->workload_properties = $var;

        return $this;
    }

    /**
     * Required. Immutable. The resource name of the original discovered workload.
     *
     * Generated from protobuf field <code>string discovered_workload = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDiscoveredWorkload()
    {
        return $this->discovered_workload;
    }

    /**
     * Required. Immutable. The resource name of the original discovered workload.
     *
     * Generated from protobuf field <code>string discovered_workload = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDiscoveredWorkload($var)
    {
        GPBUtil::checkString($var, True);
        $this->discovered_workload = $var;

        return $this;
    }

    /**
     * Optional. Consumer provided attributes.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Attributes attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\AppHub\V1\Attributes|null
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    public function hasAttributes()
    {
        return isset($this->attributes);
    }

    public function clearAttributes()
    {
        unset($this->attributes);
    }

    /**
     * Optional. Consumer provided attributes.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Attributes attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\AppHub\V1\Attributes $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppHub\V1\Attributes::class);
        $this->attributes = $var;

        return $this;
    }

    /**
     * Output only. Create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Create time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. A universally unique identifier (UUID) for the `Workload` in
     * the UUID4 format.
     *
     * Generated from protobuf field <code>string uid = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. A universally unique identifier (UUID) for the `Workload` in
     * the UUID4 format.
     *
     * Generated from protobuf field <code>string uid = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. Workload state.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Workload.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Workload state.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Workload.State state = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AppHub\V1\Workload\State::class);
        $this->state = $var;

        return $this;
    }

}

