<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/resources.proto

namespace Google\Cloud\ServiceManagement\V1;

/**
 * Code describes the status of the operation (or one of its steps).
 *
 * Protobuf enum <code>Google\Api\Servicemanagement\V1\OperationMetadata\Status</code>
 */
class OperationMetadata_Status
{
    /**
     * Unspecifed code.
     *
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * The operation or step has completed without errors.
     *
     * Generated from protobuf enum <code>DONE = 1;</code>
     */
    const DONE = 1;
    /**
     * The operation or step has not started yet.
     *
     * Generated from protobuf enum <code>NOT_STARTED = 2;</code>
     */
    const NOT_STARTED = 2;
    /**
     * The operation or step is in progress.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 3;</code>
     */
    const IN_PROGRESS = 3;
    /**
     * The operation or step has completed with errors. If the operation is
     * rollbackable, the rollback completed with errors too.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;
    /**
     * The operation or step has completed with cancellation.
     *
     * Generated from protobuf enum <code>CANCELLED = 5;</code>
     */
    const CANCELLED = 5;
}
