<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/user_lists.proto

namespace Google\Ads\GoogleAds\V8\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule item composed of a number operation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.common.UserListNumberRuleItemInfo</code>
 */
class UserListNumberRuleItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Number comparison operator.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator operator = 1;</code>
     */
    protected $operator = 0;
    /**
     * Number value to be compared with the variable.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>double value = 3;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           Number comparison operator.
     *           This field is required and must be populated when creating a new number
     *           rule item.
     *     @type float $value
     *           Number value to be compared with the variable.
     *           This field is required and must be populated when creating a new number
     *           rule item.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Number comparison operator.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator operator = 1;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Number comparison operator.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.enums.UserListNumberRuleItemOperatorEnum.UserListNumberRuleItemOperator operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V8\Enums\UserListNumberRuleItemOperatorEnum\UserListNumberRuleItemOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Number value to be compared with the variable.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>double value = 3;</code>
     * @return float
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : 0.0;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Number value to be compared with the variable.
     * This field is required and must be populated when creating a new number
     * rule item.
     *
     * Generated from protobuf field <code>double value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

}

