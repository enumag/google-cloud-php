<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [Documents.ExportDocument][google.cloud.dialogflow.v2.Documents.ExportDocument].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ExportDocumentRequest</code>
 */
class ExportDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the document to export.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * When enabled, export the full content of the document including empirical
     * probability.
     *
     * Generated from protobuf field <code>bool export_full_content = 3;</code>
     */
    protected $export_full_content = false;
    /**
     * When enabled, export the smart messaging allowlist document for partial
     * update.
     *
     * Generated from protobuf field <code>bool smart_messaging_partial_update = 5;</code>
     */
    protected $smart_messaging_partial_update = false;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the document to export.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *     @type \Google\Cloud\Dialogflow\V2\GcsDestination $gcs_destination
     *           Cloud Storage file path to export the document.
     *     @type bool $export_full_content
     *           When enabled, export the full content of the document including empirical
     *           probability.
     *     @type bool $smart_messaging_partial_update
     *           When enabled, export the smart messaging allowlist document for partial
     *           update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the document to export.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the document to export.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>/documents/<Document ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Cloud Storage file path to export the document.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GcsDestination gcs_destination = 2;</code>
     * @return \Google\Cloud\Dialogflow\V2\GcsDestination|null
     */
    public function getGcsDestination()
    {
        return $this->readOneof(2);
    }

    public function hasGcsDestination()
    {
        return $this->hasOneof(2);
    }

    /**
     * Cloud Storage file path to export the document.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GcsDestination gcs_destination = 2;</code>
     * @param \Google\Cloud\Dialogflow\V2\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\GcsDestination::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * When enabled, export the full content of the document including empirical
     * probability.
     *
     * Generated from protobuf field <code>bool export_full_content = 3;</code>
     * @return bool
     */
    public function getExportFullContent()
    {
        return $this->export_full_content;
    }

    /**
     * When enabled, export the full content of the document including empirical
     * probability.
     *
     * Generated from protobuf field <code>bool export_full_content = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setExportFullContent($var)
    {
        GPBUtil::checkBool($var);
        $this->export_full_content = $var;

        return $this;
    }

    /**
     * When enabled, export the smart messaging allowlist document for partial
     * update.
     *
     * Generated from protobuf field <code>bool smart_messaging_partial_update = 5;</code>
     * @return bool
     */
    public function getSmartMessagingPartialUpdate()
    {
        return $this->smart_messaging_partial_update;
    }

    /**
     * When enabled, export the smart messaging allowlist document for partial
     * update.
     *
     * Generated from protobuf field <code>bool smart_messaging_partial_update = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSmartMessagingPartialUpdate($var)
    {
        GPBUtil::checkBool($var);
        $this->smart_messaging_partial_update = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

