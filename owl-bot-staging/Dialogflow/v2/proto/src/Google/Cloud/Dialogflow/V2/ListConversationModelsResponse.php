<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [ConversationModels.ListConversationModels][google.cloud.dialogflow.v2.ConversationModels.ListConversationModels]
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ListConversationModelsResponse</code>
 */
class ListConversationModelsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of models to return.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationModel conversation_models = 1;</code>
     */
    private $conversation_models;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\ConversationModel[]|\Google\Protobuf\Internal\RepeatedField $conversation_models
     *           The list of models to return.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationModel::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of models to return.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationModel conversation_models = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversationModels()
    {
        return $this->conversation_models;
    }

    /**
     * The list of models to return.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.ConversationModel conversation_models = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\ConversationModel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversationModels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\ConversationModel::class);
        $this->conversation_models = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

