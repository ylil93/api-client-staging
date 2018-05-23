<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create a new build.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.CreateBuildRequest</code>
 */
class CreateBuildRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * Build resource to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 2;</code>
     */
    private $build = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * ID of the project.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Build resource to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 2;</code>
     * @return \Google\Devtools\Cloudbuild\V1\Build
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Build resource to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 2;</code>
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
