<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating an organization's settings.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.UpdateOrganizationSettingsRequest</code>
 */
class UpdateOrganizationSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The organization settings resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.OrganizationSettings organization_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $organization_settings = null;
    /**
     * The FieldMask to use when updating the settings resource.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1p1beta1\OrganizationSettings $organization_settings
     *           Required. The organization settings resource to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The FieldMask to use when updating the settings resource.
     *           If empty all mutable fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The organization settings resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.OrganizationSettings organization_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1p1beta1\OrganizationSettings|null
     */
    public function getOrganizationSettings()
    {
        return $this->organization_settings;
    }

    public function hasOrganizationSettings()
    {
        return isset($this->organization_settings);
    }

    public function clearOrganizationSettings()
    {
        unset($this->organization_settings);
    }

    /**
     * Required. The organization settings resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.OrganizationSettings organization_settings = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1p1beta1\OrganizationSettings $var
     * @return $this
     */
    public function setOrganizationSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1p1beta1\OrganizationSettings::class);
        $this->organization_settings = $var;

        return $this;
    }

    /**
     * The FieldMask to use when updating the settings resource.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The FieldMask to use when updating the settings resource.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

