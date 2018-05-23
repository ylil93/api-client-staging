<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Optional. Contains information about a button.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.Message.Card.Button</code>
 */
class Intent_Message_Card_Button extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The text to show on the button.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    private $text = '';
    /**
     * Optional. The text to send back to the Dialogflow API or a URI to
     * open.
     *
     * Generated from protobuf field <code>string postback = 2;</code>
     */
    private $postback = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct();
    }

    /**
     * Optional. The text to show on the button.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Optional. The text to show on the button.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Optional. The text to send back to the Dialogflow API or a URI to
     * open.
     *
     * Generated from protobuf field <code>string postback = 2;</code>
     * @return string
     */
    public function getPostback()
    {
        return $this->postback;
    }

    /**
     * Optional. The text to send back to the Dialogflow API or a URI to
     * open.
     *
     * Generated from protobuf field <code>string postback = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPostback($var)
    {
        GPBUtil::checkString($var, True);
        $this->postback = $var;

        return $this;
    }

}
