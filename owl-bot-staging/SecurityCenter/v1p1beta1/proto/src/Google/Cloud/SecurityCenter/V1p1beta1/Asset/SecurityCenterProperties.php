<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/asset.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1\Asset;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Security Command Center managed properties. These properties are managed by
 * Security Command Center and cannot be modified by the user.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.Asset.SecurityCenterProperties</code>
 */
class SecurityCenterProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * The full resource name of the Google Cloud resource this asset
     * represents. This field is immutable after create time. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The type of the Google Cloud resource. Examples include: APPLICATION,
     * PROJECT, and ORGANIZATION. This is a case insensitive field defined by
     * Security Command Center and/or the producer of the resource and is
     * immutable after create time.
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     */
    protected $resource_type = '';
    /**
     * The full resource name of the immediate parent of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_parent = 3;</code>
     */
    protected $resource_parent = '';
    /**
     * The full resource name of the project the resource belongs to. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_project = 4;</code>
     */
    protected $resource_project = '';
    /**
     * Owners of the Google Cloud resource.
     *
     * Generated from protobuf field <code>repeated string resource_owners = 5;</code>
     */
    private $resource_owners;
    /**
     * The user defined display name for this resource.
     *
     * Generated from protobuf field <code>string resource_display_name = 6;</code>
     */
    protected $resource_display_name = '';
    /**
     * The user defined display name for the parent of this resource.
     *
     * Generated from protobuf field <code>string resource_parent_display_name = 7;</code>
     */
    protected $resource_parent_display_name = '';
    /**
     * The user defined display name for the project of this resource.
     *
     * Generated from protobuf field <code>string resource_project_display_name = 8;</code>
     */
    protected $resource_project_display_name = '';
    /**
     * Contains a Folder message for each folder in the assets ancestry.
     * The first folder is the deepest nested folder, and the last folder is the
     * folder directly under the Organization.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.Folder folders = 10;</code>
     */
    private $folders;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The full resource name of the Google Cloud resource this asset
     *           represents. This field is immutable after create time. See:
     *           https://cloud.google.com/apis/design/resource_names#full_resource_name
     *     @type string $resource_type
     *           The type of the Google Cloud resource. Examples include: APPLICATION,
     *           PROJECT, and ORGANIZATION. This is a case insensitive field defined by
     *           Security Command Center and/or the producer of the resource and is
     *           immutable after create time.
     *     @type string $resource_parent
     *           The full resource name of the immediate parent of the resource. See:
     *           https://cloud.google.com/apis/design/resource_names#full_resource_name
     *     @type string $resource_project
     *           The full resource name of the project the resource belongs to. See:
     *           https://cloud.google.com/apis/design/resource_names#full_resource_name
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $resource_owners
     *           Owners of the Google Cloud resource.
     *     @type string $resource_display_name
     *           The user defined display name for this resource.
     *     @type string $resource_parent_display_name
     *           The user defined display name for the parent of this resource.
     *     @type string $resource_project_display_name
     *           The user defined display name for the project of this resource.
     *     @type \Google\Cloud\SecurityCenter\V1p1beta1\Folder[]|\Google\Protobuf\Internal\RepeatedField $folders
     *           Contains a Folder message for each folder in the assets ancestry.
     *           The first folder is the deepest nested folder, and the last folder is the
     *           folder directly under the Organization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Asset::initOnce();
        parent::__construct($data);
    }

    /**
     * The full resource name of the Google Cloud resource this asset
     * represents. This field is immutable after create time. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The full resource name of the Google Cloud resource this asset
     * represents. This field is immutable after create time. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The type of the Google Cloud resource. Examples include: APPLICATION,
     * PROJECT, and ORGANIZATION. This is a case insensitive field defined by
     * Security Command Center and/or the producer of the resource and is
     * immutable after create time.
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * The type of the Google Cloud resource. Examples include: APPLICATION,
     * PROJECT, and ORGANIZATION. This is a case insensitive field defined by
     * Security Command Center and/or the producer of the resource and is
     * immutable after create time.
     *
     * Generated from protobuf field <code>string resource_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * The full resource name of the immediate parent of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_parent = 3;</code>
     * @return string
     */
    public function getResourceParent()
    {
        return $this->resource_parent;
    }

    /**
     * The full resource name of the immediate parent of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_parent = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_parent = $var;

        return $this;
    }

    /**
     * The full resource name of the project the resource belongs to. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_project = 4;</code>
     * @return string
     */
    public function getResourceProject()
    {
        return $this->resource_project;
    }

    /**
     * The full resource name of the project the resource belongs to. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_project = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_project = $var;

        return $this;
    }

    /**
     * Owners of the Google Cloud resource.
     *
     * Generated from protobuf field <code>repeated string resource_owners = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceOwners()
    {
        return $this->resource_owners;
    }

    /**
     * Owners of the Google Cloud resource.
     *
     * Generated from protobuf field <code>repeated string resource_owners = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceOwners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_owners = $arr;

        return $this;
    }

    /**
     * The user defined display name for this resource.
     *
     * Generated from protobuf field <code>string resource_display_name = 6;</code>
     * @return string
     */
    public function getResourceDisplayName()
    {
        return $this->resource_display_name;
    }

    /**
     * The user defined display name for this resource.
     *
     * Generated from protobuf field <code>string resource_display_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_display_name = $var;

        return $this;
    }

    /**
     * The user defined display name for the parent of this resource.
     *
     * Generated from protobuf field <code>string resource_parent_display_name = 7;</code>
     * @return string
     */
    public function getResourceParentDisplayName()
    {
        return $this->resource_parent_display_name;
    }

    /**
     * The user defined display name for the parent of this resource.
     *
     * Generated from protobuf field <code>string resource_parent_display_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceParentDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_parent_display_name = $var;

        return $this;
    }

    /**
     * The user defined display name for the project of this resource.
     *
     * Generated from protobuf field <code>string resource_project_display_name = 8;</code>
     * @return string
     */
    public function getResourceProjectDisplayName()
    {
        return $this->resource_project_display_name;
    }

    /**
     * The user defined display name for the project of this resource.
     *
     * Generated from protobuf field <code>string resource_project_display_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceProjectDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_project_display_name = $var;

        return $this;
    }

    /**
     * Contains a Folder message for each folder in the assets ancestry.
     * The first folder is the deepest nested folder, and the last folder is the
     * folder directly under the Organization.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.Folder folders = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * Contains a Folder message for each folder in the assets ancestry.
     * The first folder is the deepest nested folder, and the last folder is the
     * folder directly under the Organization.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.Folder folders = 10;</code>
     * @param \Google\Cloud\SecurityCenter\V1p1beta1\Folder[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFolders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1p1beta1\Folder::class);
        $this->folders = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SecurityCenterProperties::class, \Google\Cloud\SecurityCenter\V1p1beta1\Asset_SecurityCenterProperties::class);

