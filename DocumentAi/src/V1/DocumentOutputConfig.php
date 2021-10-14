<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_io.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config that controls the output of documents. All documents will be written
 * as a JSON file.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.DocumentOutputConfig</code>
 */
class DocumentOutputConfig extends \Google\Protobuf\Internal\Message
{
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DocumentAI\V1\DocumentOutputConfig\GcsOutputConfig $gcs_output_config
     *           Output config to write the results to Cloud Storage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentIo::initOnce();
        parent::__construct($data);
    }

    /**
     * Output config to write the results to Cloud Storage.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentOutputConfig.GcsOutputConfig gcs_output_config = 1;</code>
     * @return \Google\Cloud\DocumentAI\V1\DocumentOutputConfig\GcsOutputConfig|null
     */
    public function getGcsOutputConfig()
    {
        return $this->readOneof(1);
    }

    public function hasGcsOutputConfig()
    {
        return $this->hasOneof(1);
    }

    /**
     * Output config to write the results to Cloud Storage.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.DocumentOutputConfig.GcsOutputConfig gcs_output_config = 1;</code>
     * @param \Google\Cloud\DocumentAI\V1\DocumentOutputConfig\GcsOutputConfig $var
     * @return $this
     */
    public function setGcsOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\DocumentOutputConfig\GcsOutputConfig::class);
        $this->writeOneof(1, $var);

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
