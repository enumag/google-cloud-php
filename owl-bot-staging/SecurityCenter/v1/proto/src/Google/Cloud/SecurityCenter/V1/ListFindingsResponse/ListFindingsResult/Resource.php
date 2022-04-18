<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1\ListFindingsResponse\ListFindingsResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information related to the Google Cloud resource that is
 * associated with this finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListFindingsResponse.ListFindingsResult.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * The full resource name of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The human readable name of the resource.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
     */
    protected $display_name = '';
    /**
     * The full resource type of the resource.
     *
     * Generated from protobuf field <code>string type = 6;</code>
     */
    protected $type = '';
    /**
     * The full resource name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_name = 2;</code>
     */
    protected $project_name = '';
    /**
     * The project ID that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_display_name = 3;</code>
     */
    protected $project_display_name = '';
    /**
     * The full resource name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_name = 4;</code>
     */
    protected $parent_name = '';
    /**
     * The human readable name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_display_name = 5;</code>
     */
    protected $parent_display_name = '';
    /**
     * Contains a Folder message for each folder in the assets ancestry.
     * The first folder is the deepest nested folder, and the last folder is
     * the folder directly under the Organization.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Folder folders = 7;</code>
     */
    private $folders;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The full resource name of the resource. See:
     *           https://cloud.google.com/apis/design/resource_names#full_resource_name
     *     @type string $display_name
     *           The human readable name of the resource.
     *     @type string $type
     *           The full resource type of the resource.
     *     @type string $project_name
     *           The full resource name of project that the resource belongs to.
     *     @type string $project_display_name
     *           The project ID that the resource belongs to.
     *     @type string $parent_name
     *           The full resource name of resource's parent.
     *     @type string $parent_display_name
     *           The human readable name of resource's parent.
     *     @type \Google\Cloud\SecurityCenter\V1\Folder[]|\Google\Protobuf\Internal\RepeatedField $folders
     *           Contains a Folder message for each folder in the assets ancestry.
     *           The first folder is the deepest nested folder, and the last folder is
     *           the folder directly under the Organization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The full resource name of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The full resource name of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
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
     * The human readable name of the resource.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The human readable name of the resource.
     *
     * Generated from protobuf field <code>string display_name = 8;</code>
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
     * The full resource type of the resource.
     *
     * Generated from protobuf field <code>string type = 6;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The full resource type of the resource.
     *
     * Generated from protobuf field <code>string type = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The full resource name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_name = 2;</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * The full resource name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_name = $var;

        return $this;
    }

    /**
     * The project ID that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_display_name = 3;</code>
     * @return string
     */
    public function getProjectDisplayName()
    {
        return $this->project_display_name;
    }

    /**
     * The project ID that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_display_name = $var;

        return $this;
    }

    /**
     * The full resource name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_name = 4;</code>
     * @return string
     */
    public function getParentName()
    {
        return $this->parent_name;
    }

    /**
     * The full resource name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_name = $var;

        return $this;
    }

    /**
     * The human readable name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_display_name = 5;</code>
     * @return string
     */
    public function getParentDisplayName()
    {
        return $this->parent_display_name;
    }

    /**
     * The human readable name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_display_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setParentDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_display_name = $var;

        return $this;
    }

    /**
     * Contains a Folder message for each folder in the assets ancestry.
     * The first folder is the deepest nested folder, and the last folder is
     * the folder directly under the Organization.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Folder folders = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFolders()
    {
        return $this->folders;
    }

    /**
     * Contains a Folder message for each folder in the assets ancestry.
     * The first folder is the deepest nested folder, and the last folder is
     * the folder directly under the Organization.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.Folder folders = 7;</code>
     * @param \Google\Cloud\SecurityCenter\V1\Folder[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFolders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\Folder::class);
        $this->folders = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Resource::class, \Google\Cloud\SecurityCenter\V1\ListFindingsResponse_ListFindingsResult_Resource::class);

