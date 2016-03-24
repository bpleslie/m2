<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

namespace Magento\SalesRule\Helper;

/**
 * Helper for coupon codes creating and managing
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Coupon extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Constants which defines all possible coupon codes formats
     */
    const COUPON_FORMAT_ALPHANUMERIC = 'alphanum';

    const COUPON_FORMAT_ALPHABETICAL = 'alpha';

    const COUPON_FORMAT_NUMERIC = 'num';

    /**
     * Defines type of Coupon
     */
    const COUPON_TYPE_SPECIFIC_AUTOGENERATED = 1;

    /**
     * XML paths to coupon codes generation options
     */
    const XML_PATH_SALES_RULE_COUPON_LENGTH = 'promo/auto_generated_coupon_codes/length';

    const XML_PATH_SALES_RULE_COUPON_FORMAT = 'promo/auto_generated_coupon_codes/format';

    const XML_PATH_SALES_RULE_COUPON_PREFIX = 'promo/auto_generated_coupon_codes/prefix';

    const XML_PATH_SALES_RULE_COUPON_SUFFIX = 'promo/auto_generated_coupon_codes/suffix';

    const XML_PATH_SALES_RULE_COUPON_DASH_INTERVAL = 'promo/auto_generated_coupon_codes/dash';

    /**
     * @var array
     */
    protected $_couponParameters;

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param array $couponParameters
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        array $couponParameters
    ) {
        $this->_couponParameters = $couponParameters;
        parent::__construct($context);
    }

    /**
     * Get all possible coupon codes formats
     *
     * @return array
     */
    public function getFormatsList()
    {
        return [
            self::COUPON_FORMAT_ALPHANUMERIC => __('Alphanumeric'),
            self::COUPON_FORMAT_ALPHABETICAL => __('Alphabetical'),
            self::COUPON_FORMAT_NUMERIC => __('Numeric')
        ];
    }

    /**
     * Get default coupon code length
     *
     * @return int
     */
    public function getDefaultLength()
    {
        return (int)$this->scopeConfig->getValue(self::XML_PATH_SALES_RULE_COUPON_LENGTH, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get default coupon code format
     *
     * @return int
     */
    public function getDefaultFormat()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SALES_RULE_COUPON_FORMAT, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get default coupon code prefix
     *
     * @return string
     */
    public function getDefaultPrefix()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SALES_RULE_COUPON_PREFIX, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get default coupon code suffix
     *
     * @return string
     */
    public function getDefaultSuffix()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SALES_RULE_COUPON_SUFFIX, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get dashes occurrences frequency in coupon code
     *
     * @return int
     */
    public function getDefaultDashInterval()
    {
        return (int)$this->scopeConfig->getValue(self::XML_PATH_SALES_RULE_COUPON_DASH_INTERVAL, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get Coupon's alphabet as array of chars
     *
     * @param string $format
     * @return array|bool
     */
    public function getCharset($format)
    {
        return str_split($this->_couponParameters['charset'][$format]);
    }

    /**
     * Retrieve Separator
     *
     * @return string
     */
    public function getCodeSeparator()
    {
        return $this->_couponParameters['separator'];
    }
}
