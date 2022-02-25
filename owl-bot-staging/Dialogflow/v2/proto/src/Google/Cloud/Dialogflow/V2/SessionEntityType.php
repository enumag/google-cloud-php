<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session_entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A session represents a conversation between a Dialogflow agent and an
 * end-user. You can create special entities, called session entities, during a
 * session. Session entities can extend or replace custom entity types and only
 * exist during the session that they were created for. All session data,
 * including session entities, is stored by Dialogflow for 20 minutes.
 * For more information, see the [session entity
 * guide](https://cloud.google.com/dialogflow/docs/entities-session).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SessionEntityType</code>
 */
class SessionEntityType extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique identifier of this session entity type. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity Type
     * Display Name>`, or `projects/<Project ID>/agent/environments/<Environment
     * ID>/users/<User ID>/sessions/<Session ID>/entityTypes/<Entity Type Display
     * Name>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment. If `User ID` is not specified, we assume default '-' user.
     * `<Entity Type Display Name>` must be the display name of an existing entity
     * type in the same agent that will be overridden or supplemented.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. Indicates whether the additional data should override or
     * supplement the custom entity type definition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType.EntityOverrideMode entity_override_mode = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entity_override_mode = 0;
    /**
     * Required. The collection of entities associated with this session entity
     * type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique identifier of this session entity type. Format:
     *           `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity Type
     *           Display Name>`, or `projects/<Project ID>/agent/environments/<Environment
     *           ID>/users/<User ID>/sessions/<Session ID>/entityTypes/<Entity Type Display
     *           Name>`.
     *           If `Environment ID` is not specified, we assume default 'draft'
     *           environment. If `User ID` is not specified, we assume default '-' user.
     *           `<Entity Type Display Name>` must be the display name of an existing entity
     *           type in the same agent that will be overridden or supplemented.
     *     @type int $entity_override_mode
     *           Required. Indicates whether the additional data should override or
     *           supplement the custom entity type definition.
     *     @type \Google\Cloud\Dialogflow\V2\EntityType\Entity[]|\Google\Protobuf\Internal\RepeatedField $entities
     *           Required. The collection of entities associated with this session entity
     *           type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\SessionEntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique identifier of this session entity type. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity Type
     * Display Name>`, or `projects/<Project ID>/agent/environments/<Environment
     * ID>/users/<User ID>/sessions/<Session ID>/entityTypes/<Entity Type Display
     * Name>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment. If `User ID` is not specified, we assume default '-' user.
     * `<Entity Type Display Name>` must be the display name of an existing entity
     * type in the same agent that will be overridden or supplemented.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique identifier of this session entity type. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity Type
     * Display Name>`, or `projects/<Project ID>/agent/environments/<Environment
     * ID>/users/<User ID>/sessions/<Session ID>/entityTypes/<Entity Type Display
     * Name>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment. If `User ID` is not specified, we assume default '-' user.
     * `<Entity Type Display Name>` must be the display name of an existing entity
     * type in the same agent that will be overridden or supplemented.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Indicates whether the additional data should override or
     * supplement the custom entity type definition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType.EntityOverrideMode entity_override_mode = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getEntityOverrideMode()
    {
        return $this->entity_override_mode;
    }

    /**
     * Required. Indicates whether the additional data should override or
     * supplement the custom entity type definition.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType.EntityOverrideMode entity_override_mode = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setEntityOverrideMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\SessionEntityType\EntityOverrideMode::class);
        $this->entity_override_mode = $var;

        return $this;
    }

    /**
     * Required. The collection of entities associated with this session entity
     * type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntities()
    {
        return $this->entities;
    }

    /**
     * Required. The collection of entities associated with this session entity
     * type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType.Entity entities = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\EntityType\Entity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\EntityType\Entity::class);
        $this->entities = $arr;

        return $this;
    }

}

