<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [EntityTypes.UpdateEntityType][google.cloud.dialogflow.v2.EntityTypes.UpdateEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateEntityTypeRequest</code>
 */
class UpdateEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The entity type to update.
     * Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType entity_type = 1;</code>
     */
    private $entity_type = null;
    /**
     * Optional. The language of entity synonyms defined in `entity_type`. If not
     * specified, the agent's default language is used.
     * [More than a dozen
     * languages](https://dialogflow.com/docs/reference/language) are supported.
     * Note: languages must be enabled in the agent, before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    private $language_code = '';
    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\EntityType $entity_type
     *           Required. The entity type to update.
     *           Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`.
     *     @type string $language_code
     *           Optional. The language of entity synonyms defined in `entity_type`. If not
     *           specified, the agent's default language is used.
     *           [More than a dozen
     *           languages](https://dialogflow.com/docs/reference/language) are supported.
     *           Note: languages must be enabled in the agent, before they can be used.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The mask to control which fields get updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The entity type to update.
     * Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType entity_type = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2\EntityType
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Required. The entity type to update.
     * Format: `projects/<Project ID>/agent/entityTypes/<EntityType ID>`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType entity_type = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\EntityType $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\EntityType::class);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Optional. The language of entity synonyms defined in `entity_type`. If not
     * specified, the agent's default language is used.
     * [More than a dozen
     * languages](https://dialogflow.com/docs/reference/language) are supported.
     * Note: languages must be enabled in the agent, before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language of entity synonyms defined in `entity_type`. If not
     * specified, the agent's default language is used.
     * [More than a dozen
     * languages](https://dialogflow.com/docs/reference/language) are supported.
     * Note: languages must be enabled in the agent, before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Optional. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
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

