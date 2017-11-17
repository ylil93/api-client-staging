<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The authentication information for accessing the master endpoint.
 * Authentication can be done using HTTP basic auth or using client
 * certificates.
 *
 * Generated from protobuf message <code>google.container.v1.MasterAuth</code>
 */
class MasterAuth extends \Google\Protobuf\Internal\Message
{
    /**
     * The username to use for HTTP basic authentication to the master endpoint.
     * For clusters v1.6.0 and later, you can disable basic authentication by
     * providing an empty username.
     *
     * Generated from protobuf field <code>string username = 1;</code>
     */
    private $username = '';
    /**
     * The password to use for HTTP basic authentication to the master endpoint.
     * Because the master endpoint is open to the Internet, you should create a
     * strong password.  If a password is provided for cluster creation, username
     * must be non-empty.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     */
    private $password = '';
    /**
     * Configuration for client certificate authentication on the cluster.  If no
     * configuration is specified, a client certificate is issued.
     *
     * Generated from protobuf field <code>.google.container.v1.ClientCertificateConfig client_certificate_config = 3;</code>
     */
    private $client_certificate_config = null;
    /**
     * [Output only] Base64-encoded public certificate that is the root of
     * trust for the cluster.
     *
     * Generated from protobuf field <code>string cluster_ca_certificate = 100;</code>
     */
    private $cluster_ca_certificate = '';
    /**
     * [Output only] Base64-encoded public certificate used by clients to
     * authenticate to the cluster endpoint.
     *
     * Generated from protobuf field <code>string client_certificate = 101;</code>
     */
    private $client_certificate = '';
    /**
     * [Output only] Base64-encoded private key used by clients to authenticate
     * to the cluster endpoint.
     *
     * Generated from protobuf field <code>string client_key = 102;</code>
     */
    private $client_key = '';

    public function __construct() {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct();
    }

    /**
     * The username to use for HTTP basic authentication to the master endpoint.
     * For clusters v1.6.0 and later, you can disable basic authentication by
     * providing an empty username.
     *
     * Generated from protobuf field <code>string username = 1;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * The username to use for HTTP basic authentication to the master endpoint.
     * For clusters v1.6.0 and later, you can disable basic authentication by
     * providing an empty username.
     *
     * Generated from protobuf field <code>string username = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * The password to use for HTTP basic authentication to the master endpoint.
     * Because the master endpoint is open to the Internet, you should create a
     * strong password.  If a password is provided for cluster creation, username
     * must be non-empty.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The password to use for HTTP basic authentication to the master endpoint.
     * Because the master endpoint is open to the Internet, you should create a
     * strong password.  If a password is provided for cluster creation, username
     * must be non-empty.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Configuration for client certificate authentication on the cluster.  If no
     * configuration is specified, a client certificate is issued.
     *
     * Generated from protobuf field <code>.google.container.v1.ClientCertificateConfig client_certificate_config = 3;</code>
     * @return \Google\Container\V1\ClientCertificateConfig
     */
    public function getClientCertificateConfig()
    {
        return $this->client_certificate_config;
    }

    /**
     * Configuration for client certificate authentication on the cluster.  If no
     * configuration is specified, a client certificate is issued.
     *
     * Generated from protobuf field <code>.google.container.v1.ClientCertificateConfig client_certificate_config = 3;</code>
     * @param \Google\Container\V1\ClientCertificateConfig $var
     * @return $this
     */
    public function setClientCertificateConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Container\V1\ClientCertificateConfig::class);
        $this->client_certificate_config = $var;

        return $this;
    }

    /**
     * [Output only] Base64-encoded public certificate that is the root of
     * trust for the cluster.
     *
     * Generated from protobuf field <code>string cluster_ca_certificate = 100;</code>
     * @return string
     */
    public function getClusterCaCertificate()
    {
        return $this->cluster_ca_certificate;
    }

    /**
     * [Output only] Base64-encoded public certificate that is the root of
     * trust for the cluster.
     *
     * Generated from protobuf field <code>string cluster_ca_certificate = 100;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterCaCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_ca_certificate = $var;

        return $this;
    }

    /**
     * [Output only] Base64-encoded public certificate used by clients to
     * authenticate to the cluster endpoint.
     *
     * Generated from protobuf field <code>string client_certificate = 101;</code>
     * @return string
     */
    public function getClientCertificate()
    {
        return $this->client_certificate;
    }

    /**
     * [Output only] Base64-encoded public certificate used by clients to
     * authenticate to the cluster endpoint.
     *
     * Generated from protobuf field <code>string client_certificate = 101;</code>
     * @param string $var
     * @return $this
     */
    public function setClientCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_certificate = $var;

        return $this;
    }

    /**
     * [Output only] Base64-encoded private key used by clients to authenticate
     * to the cluster endpoint.
     *
     * Generated from protobuf field <code>string client_key = 102;</code>
     * @return string
     */
    public function getClientKey()
    {
        return $this->client_key;
    }

    /**
     * [Output only] Base64-encoded private key used by clients to authenticate
     * to the cluster endpoint.
     *
     * Generated from protobuf field <code>string client_key = 102;</code>
     * @param string $var
     * @return $this
     */
    public function setClientKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_key = $var;

        return $this;
    }

}

