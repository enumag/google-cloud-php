<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/fulfillment.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Fulfillments.UpdateFulfillment][google.cloud.dialogflow.v2.Fulfillments.UpdateFulfillment].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateFulfillmentRequest</code>
 */
class UpdateFulfillmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The fulfillment to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Fulfillment fulfillment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $fulfillment = null;
    /**
     * Required. The mask to control which fields get updated. If the mask is not
     * present, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Fulfillment $fulfillment
     *           Required. The fulfillment to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The mask to control which fields get updated. If the mask is not
     *           present, all fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The fulfillment to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Fulfillment fulfillment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Fulfillment|null
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    public function hasFulfillment()
    {
        return isset($this->fulfillment);
    }

    public function clearFulfillment()
    {
        unset($this->fulfillment);
    }

    /**
     * Required. The fulfillment to update.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Fulfillment fulfillment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Fulfillment $var
     * @return $this
     */
    public function setFulfillment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Fulfillment::class);
        $this->fulfillment = $var;

        return $this;
    }

    /**
     * Required. The mask to control which fields get updated. If the mask is not
     * present, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The mask to control which fields get updated. If the mask is not
     * present, all fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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

