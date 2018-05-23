<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/agent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Agents.ImportAgent][google.cloud.dialogflow.v2beta1.Agents.ImportAgent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.ImportAgentRequest</code>
 */
class ImportAgentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project that the agent to import is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    protected $agent;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Agent::initOnce();
        parent::__construct();
    }

    /**
     * Required. The project that the agent to import is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project that the agent to import is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The URI to a Google Cloud Storage file containing the agent to import.
     * Note: The URI must start with "gs://".
     *
     * Generated from protobuf field <code>string agent_uri = 2;</code>
     * @return string
     */
    public function getAgentUri()
    {
        return $this->readOneof(2);
    }

    /**
     * The URI to a Google Cloud Storage file containing the agent to import.
     * Note: The URI must start with "gs://".
     *
     * Generated from protobuf field <code>string agent_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The agent to import.
     * Example for how to import an agent via the command line:
     * curl \
     *   'https://dialogflow.googleapis.com/v2beta1/projects/<project_name>/agent:import\
     *    -X POST \
     *    -H 'Authorization: Bearer '$(gcloud auth print-access-token) \
     *    -H 'Accept: application/json' \
     *    -H 'Content-Type: application/json' \
     *    --compressed \
     *    --data-binary "{
     *       'agentContent': '$(cat <agent zip file> | base64 -w 0)'
     *    }"
     *
     * Generated from protobuf field <code>bytes agent_content = 3;</code>
     * @return string
     */
    public function getAgentContent()
    {
        return $this->readOneof(3);
    }

    /**
     * The agent to import.
     * Example for how to import an agent via the command line:
     * curl \
     *   'https://dialogflow.googleapis.com/v2beta1/projects/<project_name>/agent:import\
     *    -X POST \
     *    -H 'Authorization: Bearer '$(gcloud auth print-access-token) \
     *    -H 'Accept: application/json' \
     *    -H 'Content-Type: application/json' \
     *    --compressed \
     *    --data-binary "{
     *       'agentContent': '$(cat <agent zip file> | base64 -w 0)'
     *    }"
     *
     * Generated from protobuf field <code>bytes agent_content = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAgent()
    {
        return $this->whichOneof("agent");
    }

}
