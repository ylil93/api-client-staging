<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/context.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a context.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Context</code>
 */
class Context extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique identifier of the context. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context ID>`,
     * or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>/contexts/<Context ID>`. Note: Environments and
     * users are under construction and will be available soon. The Context ID is
     * always converted to lowercase. If <Environment ID> is not specified, we
     * assume default 'draft' environment. If <User ID> is not specified, we
     * assume default '-' user.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional. The number of conversational query requests after which the
     * context expires. If set to `0` (the default) the context expires
     * immediately. Contexts expire automatically after 10 minutes even if there
     * are no matching queries.
     *
     * Generated from protobuf field <code>int32 lifespan_count = 2;</code>
     */
    private $lifespan_count = 0;
    /**
     * Optional. The collection of parameters associated with this context.
     * Refer to [this doc](https://dialogflow.com/docs/actions-and-parameters) for
     * syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 3;</code>
     */
    private $parameters = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Context::initOnce();
        parent::__construct();
    }

    /**
     * Required. The unique identifier of the context. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context ID>`,
     * or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>/contexts/<Context ID>`. Note: Environments and
     * users are under construction and will be available soon. The Context ID is
     * always converted to lowercase. If <Environment ID> is not specified, we
     * assume default 'draft' environment. If <User ID> is not specified, we
     * assume default '-' user.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique identifier of the context. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context ID>`,
     * or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>/contexts/<Context ID>`. Note: Environments and
     * users are under construction and will be available soon. The Context ID is
     * always converted to lowercase. If <Environment ID> is not specified, we
     * assume default 'draft' environment. If <User ID> is not specified, we
     * assume default '-' user.
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
     * Optional. The number of conversational query requests after which the
     * context expires. If set to `0` (the default) the context expires
     * immediately. Contexts expire automatically after 10 minutes even if there
     * are no matching queries.
     *
     * Generated from protobuf field <code>int32 lifespan_count = 2;</code>
     * @return int
     */
    public function getLifespanCount()
    {
        return $this->lifespan_count;
    }

    /**
     * Optional. The number of conversational query requests after which the
     * context expires. If set to `0` (the default) the context expires
     * immediately. Contexts expire automatically after 10 minutes even if there
     * are no matching queries.
     *
     * Generated from protobuf field <code>int32 lifespan_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLifespanCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->lifespan_count = $var;

        return $this;
    }

    /**
     * Optional. The collection of parameters associated with this context.
     * Refer to [this doc](https://dialogflow.com/docs/actions-and-parameters) for
     * syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 3;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Optional. The collection of parameters associated with this context.
     * Refer to [this doc](https://dialogflow.com/docs/actions-and-parameters) for
     * syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct parameters = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->parameters = $var;

        return $this;
    }

}
