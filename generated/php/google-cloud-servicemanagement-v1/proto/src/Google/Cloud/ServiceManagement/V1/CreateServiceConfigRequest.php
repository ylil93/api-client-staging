<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateServiceConfig method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.CreateServiceConfigRequest</code>
 */
class CreateServiceConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     */
    private $service_name = '';
    /**
     * The service configuration resource.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 2;</code>
     */
    private $service_config = null;

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct();
    }

    /**
     * The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * The name of the service.  See the [overview](/service-management/overview)
     * for naming requirements.  For example: `example.googleapis.com`.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * The service configuration resource.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 2;</code>
     * @return \Google\Api\Service
     */
    public function getServiceConfig()
    {
        return $this->service_config;
    }

    /**
     * The service configuration resource.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 2;</code>
     * @param \Google\Api\Service $var
     * @return $this
     */
    public function setServiceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Service::class);
        $this->service_config = $var;

        return $this;
    }

}
