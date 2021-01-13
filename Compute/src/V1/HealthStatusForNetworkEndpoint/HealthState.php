<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\HealthStatusForNetworkEndpoint;

use UnexpectedValueException;

/**
 * Health state of the network endpoint determined based on the health checks configured.
 *
 * Protobuf type <code>google.cloud.compute.v1.HealthStatusForNetworkEndpoint.HealthState</code>
 */
class HealthState
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_HEALTH_STATE = 0;</code>
     */
    const UNDEFINED_HEALTH_STATE = 0;
    /**
     * Generated from protobuf enum <code>DRAINING = 212019946;</code>
     */
    const DRAINING = 212019946;
    /**
     * Generated from protobuf enum <code>HEALTHY = 171365757;</code>
     */
    const HEALTHY = 171365757;
    /**
     * Generated from protobuf enum <code>UNHEALTHY = 193682628;</code>
     */
    const UNHEALTHY = 193682628;
    /**
     * Generated from protobuf enum <code>UNKNOWN = 164706346;</code>
     */
    const UNKNOWN = 164706346;

    private static $valueToName = [
        self::UNDEFINED_HEALTH_STATE => 'UNDEFINED_HEALTH_STATE',
        self::DRAINING => 'DRAINING',
        self::HEALTHY => 'HEALTHY',
        self::UNHEALTHY => 'UNHEALTHY',
        self::UNKNOWN => 'UNKNOWN',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

