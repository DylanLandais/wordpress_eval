<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/bid_modifier_source.proto

namespace Google\Ads\GoogleAds\V8\Enums\BidModifierSourceEnum;

use UnexpectedValueException;

/**
 * Enum describing possible bid modifier sources.
 *
 * Protobuf type <code>google.ads.googleads.v8.enums.BidModifierSourceEnum.BidModifierSource</code>
 */
class BidModifierSource
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The bid modifier is specified at the campaign level, on the campaign
     * level criterion.
     *
     * Generated from protobuf enum <code>CAMPAIGN = 2;</code>
     */
    const CAMPAIGN = 2;
    /**
     * The bid modifier is specified (overridden) at the ad group level.
     *
     * Generated from protobuf enum <code>AD_GROUP = 3;</code>
     */
    const AD_GROUP = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CAMPAIGN => 'CAMPAIGN',
        self::AD_GROUP => 'AD_GROUP',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BidModifierSource::class, \Google\Ads\GoogleAds\V8\Enums\BidModifierSourceEnum_BidModifierSource::class);

