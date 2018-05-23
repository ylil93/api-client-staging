<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for build operations.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.BuildOperationMetadata</code>
 */
class BuildOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The build that the operation is tracking.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 1;</code>
     */
    private $build = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * The build that the operation is tracking.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 1;</code>
     * @return \Google\Devtools\Cloudbuild\V1\Build
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * The build that the operation is tracking.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 1;</code>
     * @param \Google\Devtools\Cloudbuild\V1\Build $var
     * @return $this
     */
    public function setBuild($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\Build::class);
        $this->build = $var;

        return $this;
    }

}
