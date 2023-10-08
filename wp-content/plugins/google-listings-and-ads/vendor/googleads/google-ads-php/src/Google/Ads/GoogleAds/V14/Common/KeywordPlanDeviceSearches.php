<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/keyword_plan_common.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The total searches for the device type during the specified time period.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.KeywordPlanDeviceSearches</code>
 */
class KeywordPlanDeviceSearches extends \Google\Protobuf\Internal\Message
{
    /**
     * The device type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.DeviceEnum.Device device = 1;</code>
     */
    protected $device = 0;
    /**
     * The total searches for the device.
     *
     * Generated from protobuf field <code>optional int64 search_count = 2;</code>
     */
    protected $search_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $device
     *           The device type.
     *     @type int|string $search_count
     *           The total searches for the device.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\KeywordPlanCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The device type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.DeviceEnum.Device device = 1;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.DeviceEnum.Device device = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\DeviceEnum\Device::class);
        $this->device = $var;

        return $this;
    }

    /**
     * The total searches for the device.
     *
     * Generated from protobuf field <code>optional int64 search_count = 2;</code>
     * @return int|string
     */
    public function getSearchCount()
    {
        return isset($this->search_count) ? $this->search_count : 0;
    }

    public function hasSearchCount()
    {
        return isset($this->search_count);
    }

    public function clearSearchCount()
    {
        unset($this->search_count);
    }

    /**
     * The total searches for the device.
     *
     * Generated from protobuf field <code>optional int64 search_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSearchCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->search_count = $var;

        return $this;
    }

}

