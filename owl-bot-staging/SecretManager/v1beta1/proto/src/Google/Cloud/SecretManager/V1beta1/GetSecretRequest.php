<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secrets/v1beta1/service.proto

namespace Google\Cloud\SecretManager\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [SecretManagerService.GetSecret][google.cloud.secrets.v1beta1.SecretManagerService.GetSecret].
 *
 * Generated from protobuf message <code>google.cloud.secrets.v1beta1.GetSecretRequest</code>
 */
class GetSecretRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret], in the format `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret], in the format `projects/&#42;&#47;secrets/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secrets\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret], in the format `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret], in the format `projects/&#42;&#47;secrets/&#42;`.
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

}

