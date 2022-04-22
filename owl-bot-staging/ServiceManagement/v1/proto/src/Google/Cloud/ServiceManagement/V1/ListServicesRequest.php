<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `ListServices` method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.ListServicesRequest</code>
 */
class ListServicesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Include services produced by the specified project.
     *
     * Generated from protobuf field <code>string producer_project_id = 1;</code>
     */
    protected $producer_project_id = '';
    /**
     * The max number of items to include in the response list. Page size is 50
     * if not specified. Maximum value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     */
    protected $page_size = 0;
    /**
     * Token identifying which result to start with; returned by a previous list
     * call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     */
    protected $page_token = '';
    /**
     * Include services consumed by the specified consumer.
     * The Google Service Management implementation accepts the following
     * forms:
     * - project:<project_id>
     *
     * Generated from protobuf field <code>string consumer_id = 7 [deprecated = true];</code>
     * @deprecated
     */
    protected $consumer_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $producer_project_id
     *           Include services produced by the specified project.
     *     @type int $page_size
     *           The max number of items to include in the response list. Page size is 50
     *           if not specified. Maximum value is 100.
     *     @type string $page_token
     *           Token identifying which result to start with; returned by a previous list
     *           call.
     *     @type string $consumer_id
     *           Include services consumed by the specified consumer.
     *           The Google Service Management implementation accepts the following
     *           forms:
     *           - project:<project_id>
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Include services produced by the specified project.
     *
     * Generated from protobuf field <code>string producer_project_id = 1;</code>
     * @return string
     */
    public function getProducerProjectId()
    {
        return $this->producer_project_id;
    }

    /**
     * Include services produced by the specified project.
     *
     * Generated from protobuf field <code>string producer_project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProducerProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->producer_project_id = $var;

        return $this;
    }

    /**
     * The max number of items to include in the response list. Page size is 50
     * if not specified. Maximum value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The max number of items to include in the response list. Page size is 50
     * if not specified. Maximum value is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Token identifying which result to start with; returned by a previous list
     * call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token identifying which result to start with; returned by a previous list
     * call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Include services consumed by the specified consumer.
     * The Google Service Management implementation accepts the following
     * forms:
     * - project:<project_id>
     *
     * Generated from protobuf field <code>string consumer_id = 7 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getConsumerId()
    {
        @trigger_error('consumer_id is deprecated.', E_USER_DEPRECATED);
        return $this->consumer_id;
    }

    /**
     * Include services consumed by the specified consumer.
     * The Google Service Management implementation accepts the following
     * forms:
     * - project:<project_id>
     *
     * Generated from protobuf field <code>string consumer_id = 7 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setConsumerId($var)
    {
        @trigger_error('consumer_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->consumer_id = $var;

        return $this;
    }

}

