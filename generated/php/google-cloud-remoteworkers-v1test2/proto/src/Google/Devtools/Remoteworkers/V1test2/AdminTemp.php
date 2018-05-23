<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteworkers/v1test2/bots.proto

namespace Google\Devtools\Remoteworkers\V1test2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AdminTemp is a prelimiary set of administration tasks. It's called "Temp"
 * because we do not yet know the best way to represent admin tasks; it's
 * possible that this will be entirely replaced in later versions of this API.
 * If this message proves to be sufficient, it will be renamed in the alpha or
 * beta release of this API.
 * This message (suitably marshalled into a protobuf.Any) can be used as the
 * inline_assignment field in a lease; the lease assignment field should simply
 * be `"admin"` in these cases.
 * This message is heavily based on Swarming administration tasks from the LUCI
 * project (http://github.com/luci/luci-py/appengine/swarming).
 *
 * Generated from protobuf message <code>google.devtools.remoteworkers.v1test2.AdminTemp</code>
 */
class AdminTemp extends \Google\Protobuf\Internal\Message
{
    /**
     * The admin action; see `Command` for legal values.
     *
     * Generated from protobuf field <code>.google.devtools.remoteworkers.v1test2.AdminTemp.Command command = 1;</code>
     */
    private $command = 0;
    /**
     * The argument to the admin action; see `Command` for semantics.
     *
     * Generated from protobuf field <code>string arg = 2;</code>
     */
    private $arg = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Remoteworkers\V1Test2\Bots::initOnce();
        parent::__construct();
    }

    /**
     * The admin action; see `Command` for legal values.
     *
     * Generated from protobuf field <code>.google.devtools.remoteworkers.v1test2.AdminTemp.Command command = 1;</code>
     * @return int
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * The admin action; see `Command` for legal values.
     *
     * Generated from protobuf field <code>.google.devtools.remoteworkers.v1test2.AdminTemp.Command command = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCommand($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Remoteworkers\V1test2\AdminTemp_Command::class);
        $this->command = $var;

        return $this;
    }

    /**
     * The argument to the admin action; see `Command` for semantics.
     *
     * Generated from protobuf field <code>string arg = 2;</code>
     * @return string
     */
    public function getArg()
    {
        return $this->arg;
    }

    /**
     * The argument to the admin action; see `Command` for semantics.
     *
     * Generated from protobuf field <code>string arg = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setArg($var)
    {
        GPBUtil::checkString($var, True);
        $this->arg = $var;

        return $this;
    }

}
