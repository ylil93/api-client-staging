<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/streetview/publish/v1/rpcmessages.proto

namespace Google\Streetview\Publish\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to delete multiple photos.
 *
 * Generated from protobuf message <code>google.streetview.publish.v1.BatchDeletePhotosRequest</code>
 */
class BatchDeletePhotosRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. List of delete photo requests.
     *
     * Generated from protobuf field <code>repeated string photo_ids = 1;</code>
     */
    private $photo_ids;

    public function __construct() {
        \GPBMetadata\Google\Streetview\Publish\V1\Rpcmessages::initOnce();
        parent::__construct();
    }

    /**
     * Required. List of delete photo requests.
     *
     * Generated from protobuf field <code>repeated string photo_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPhotoIds()
    {
        return $this->photo_ids;
    }

    /**
     * Required. List of delete photo requests.
     *
     * Generated from protobuf field <code>repeated string photo_ids = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPhotoIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->photo_ids = $arr;

        return $this;
    }

}
