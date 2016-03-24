<?php
/**
 * Obsolete namespaces
 *
 * Format: array(<namespace>[, <replacement>])
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
return [
    ['Magento\App', 'Magento\Framework\App'],
    ['Magento\Data', 'Magento\Framework\Data'],
    ['Magento\Filesystem', 'Magento\Framework\Filesystem'],
    ['Magento\Model', 'Magento\Framework\Model'],
    ['Magento\View', 'Magento\Framework\View'],
    ['Magento\DB', 'Magento\Framework\DB'],
    ['Magento\Event', 'Magento\Framework\Event'],
    ['Magento\Acl', 'Magento\Framework\Acl'],
    ['Magento\Archive', 'Magento\Framework\Archive'],
    ['Magento\Session', 'Magento\Framework\Session'],
    ['Magento\Cache', 'Magento\Framework\Cache'],
    ['Magento\ObjectManager', 'Magento\Framework\ObjectManager'],
    ['Magento\Exception', 'Magento\Framework\Exception\LocalizedException'],
    ['Magento\Autoload', 'Magento\Framework\Autoload'],
    ['Magento\Translate', 'Magento\Framework\Translate'],
    ['Magento\Code', 'Magento\Framework\Code'],
    ['Magento\Stdlib', 'Magento\Framework\Stdlib'],
    ['Magento\Phrase', 'Magento\Framework\Phrase'],
    ['Magento\Locale', 'Magento\Framework\Locale'],
    ['Magento\Message', 'Magento\Framework\Message'],
    ['Magento\Logger', 'Psr\Log\LoggerInterface'],
    ['Magento\Error', 'Magento\Framework\Error'],
    ['Magento\Filter', 'Magento\Framework\Filter'],
    ['Magento\DomDocument', 'Magento\Framework\DomDocument'],
    ['Magento\Module', 'Magento\Framework\Module'],
    ['Magento\Css', 'Magento\Framework\Css'],
    ['Magento\Pear', 'Magento\Framework\Pear'],
    ['Magento\Pricing', 'Magento\Framework\Pricing'],
    ['Magento\Profiler', 'Magento\Framework\Profiler'],
    ['Magento\Simplexml', 'Magento\Framework\Simplexml'],
    ['Magento\Controller', 'Magento\Framework\Controller'],
    ['Magento\Convert', 'Magento\Framework\Convert'],
    ['Magento\Shell', 'Magento\Framework\Shell'],
    ['Magento\Encryption', 'Magento\Framework\Encryption'],
    ['Magento\Option', 'Magento\Framework\Option'],
    ['Magento\Service', 'Magento\Framework\Api'],
    ['Magento\System', 'Magento\Framework\System'],
    ['Magento\Url', 'Magento\Framework\Url'],
    ['Magento\Mview', 'Magento\Framework\Mview'],
    ['Magento\Validator', 'Magento\Framework\Validator'],
    ['Magento\Xml', 'Magento\Framework\Xml'],
    ['Magento\Interception', 'Magento\Framework\Interception'],
    ['Magento\Json', 'Magento\Framework\Json'],
    ['Magento\Less', 'Magento\Framework\Less'],
    ['Magento\File', 'Magento\Framework\File'],
    ['Magento\Flag', 'Magento\Framework\Flag'],
    ['Magento\Io', 'Magento\Framework\Io'],
    ['Magento\Mail', 'Magento\Framework\Mail'],
    ['Magento\HTTP', 'Magento\Framework\HTTP'],
    ['Magento\Math', 'Magento\Framework\Math'],
    ['Magento\Framework\Code\Generator\CodeGenerator', 'Magento\Framework\Code\Generator'],
    ['Magento\Gdata', 'Magento\Framework\Gdata'],
    ['Magento\Image', 'Magento\Framework\Image'],
    ['Magento\Oauth', 'Magento\Framework\Oauth'],
    ['Magento\Object', 'Magento\Framework\DataObject'],
    ['Magento\Connect'],
    ['Magento\Framework\Connect'],
    ['Magento\Bundle\Service'],
    ['Magento\Tax\Service'],
    ['Magento\RecurringPayment'],
    ['Magento\PayPalRecurringPayment'],
    ['Magento\ConfigurableProduct\Service'],
    ['Magento\Core\Model\Resource\Variable', 'Magento\Variable\Model\ResourceModel\Variable'],
    ['Magento\Core\Model\TemplateEngine\Decorator', 'Magento\Developer\Model\TemplateEngine\Decorator'],
    ['Magento\Core\Model\Resource\Config', 'Magento\Config\Model\ResourceModel\Config'],
    ['Magento\Backend\Block\System\Config', 'Magento\Config\Block\System\Config'],
    ['Magento\Backend\Controller\Adminhtml\System\Config', 'Magento\Config\Controller\Adminhtml\System\Config'],
    ['Magento\Backend\Model\Config', 'Magento\Config\Model\Config'],
    ['Magento\Core\Model\Variable', 'Magento\Variable\Model\Variable'],
    ['Magento\Catalog\Service'],
    ['Magento\CheckoutAgreements\Service'],
    ['Magento\Checkout\Service'],
    ['Magento\GiftMessage\Service'],
    ['Magento\Backend\Controller\Adminhtml\System\Variable', 'Magento\Variable\Controller\Adminhtml\System\Variable'],
    ['Magento\Framework\Test\Utility', 'Magento\Framework\App\Utility'],
    ['Magento\GoogleShopping'],
    ['Magento\Paypal\Block\Standard'],
    ['Magento\Paypal\Controller\Standard'],
    ['Magento\Framework\View\Asset\ModuleNotation'],
    ['Magento\Framework\Object', 'Magento\Framework\DataObject'],
    ['Magento\DesignEditor'],
    ['Magento\Variable\Model\Resource', 'Magento\Variable\Model\ResourceModel'],
    ['Magento\AdminNotification\Model\Resource', 'Magento\AdminNotification\Model\ResourceModel'],
    ['Magento\Authorization\Model\Resource', 'Magento\Authorization\Model\ResourceModel'],
    ['Magento\Authorizenet\Model\Resource', 'Magento\Authorizenet\Model\ResourceModel'],
    ['Magento\Backend\Model\Resource', 'Magento\Backend\Model\ResourceModel'],
    ['Magento\Backup\Model\Resource', 'Magento\Backup\Model\ResourceModel'],
    ['Magento\Bundle\Model\Resource', 'Magento\Bundle\Model\ResourceModel'],
    ['Magento\Captcha\Model\Resource', 'Magento\Captcha\Model\ResourceModel'],
    ['Magento\CatalogInventory\Model\Resource', 'Magento\CatalogInventory\Model\ResourceModel'],
    ['Magento\Catalog\Model\Resource', 'Magento\Catalog\Model\ResourceModel'],
    ['Magento\CatalogRule\Model\Resource', 'Magento\CatalogRule\Model\ResourceModel'],
    ['Magento\CatalogSearch\Model\Resource', 'Magento\CatalogSearch\Model\ResourceModel'],
    ['Magento\CatalogUrlRewrite\Model\Resource', 'Magento\CatalogUrlRewrite\Model\ResourceModel'],
    ['Magento\CheckoutAgreements\Model\Resource', 'Magento\CheckoutAgreements\Model\ResourceModel'],
    ['Magento\Checkout\Model\Resource', 'Magento\Checkout\Model\ResourceModel'],
    ['Magento\Cms\Model\Resource', 'Magento\Cms\Model\ResourceModel'],
    ['Magento\Config\Model\Resource', 'Magento\Config\Model\ResourceModel'],
    ['Magento\ConfigurableProduct\Model\Resource', 'Magento\ConfigurableProduct\Model\ResourceModel'],
    ['Magento\Cron\Model\Resource', 'Magento\Cron\Model\ResourceModel'],
    ['Magento\CustomerImportExport\Model\Resource', 'Magento\CustomerImportExport\Model\ResourceModel'],
    ['Magento\Customer\Model\Resource', 'Magento\Customer\Model\ResourceModel'],
    ['Magento\Directory\Model\Resource', 'Magento\Directory\Model\ResourceModel'],
    ['Magento\Downloadable\Model\Resource', 'Magento\Downloadable\Model\ResourceModel'],
    ['Magento\Eav\Model\Resource', 'Magento\Eav\Model\ResourceModel'],
    ['Magento\Email\Model\Resource', 'Magento\Email\Model\ResourceModel'],
    ['Magento\EncryptionKey\Model\Resource', 'Magento\EncryptionKey\Model\ResourceModel'],
    ['Magento\GiftMessage\Model\Resource', 'Magento\GiftMessage\Model\ResourceModel'],
    ['Magento\GoogleOptimizer\Model\Resource', 'Magento\GoogleOptimizer\Model\ResourceModel'],
    ['Magento\GroupedProduct\Model\Resource', 'Magento\GroupedProduct\Model\ResourceModel'],
    ['Magento\ImportExport\Model\Resource', 'Magento\ImportExport\Model\ResourceModel'],
    ['Magento\Indexer\Model\Resource', 'Magento\Indexer\Model\ResourceModel'],
    ['Magento\Integration\Model\Resource', 'Magento\Integration\Model\ResourceModel'],
    ['Magento\MediaStorage\Model\Resource', 'Magento\MediaStorage\Model\ResourceModel'],
    ['Magento\NewRelicReporting\Model\Resource', 'Magento\NewRelicReporting\Model\ResourceModel'],
    ['Magento\Newsletter\Model\Resource', 'Magento\Newsletter\Model\ResourceModel'],
    ['Magento\OfflineShipping\Model\Resource', 'Magento\OfflineShipping\Model\ResourceModel'],
    ['Magento\Payment\Model\Resource', 'Magento\Payment\Model\ResourceModel'],
    ['Magento\Paypal\Model\Resource', 'Magento\Paypal\Model\ResourceModel'],
    ['Magento\Persistent\Model\Resource', 'Magento\Persistent\Model\ResourceModel'],
    ['Magento\ProductAlert\Model\Resource', 'Magento\ProductAlert\Model\ResourceModel'],
    ['Magento\Quote\Model\Resource', 'Magento\Quote\Model\ResourceModel'],
    ['Magento\Reports\Model\Resource', 'Magento\Reports\Model\ResourceModel'],
    ['Magento\Review\Model\Resource', 'Magento\Review\Model\ResourceModel'],
    ['Magento\Rule\Model\Resource', 'Magento\Rule\Model\ResourceModel'],
    ['Magento\Sales\Model\Resource', 'Magento\Sales\Model\ResourceModel'],
    ['Magento\SalesRule\Model\Resource', 'Magento\SalesRule\Model\ResourceModel'],
    ['Magento\SalesSequence\Model\Resource', 'Magento\SalesSequence\Model\ResourceModel'],
    ['Magento\Search\Model\Resource', 'Magento\Search\Model\ResourceModel'],
    ['Magento\SendFriend\Model\Resource', 'Magento\SendFriend\Model\ResourceModel'],
    ['Magento\Shipping\Model\Resource', 'Magento\Shipping\Model\ResourceModel'],
    ['Magento\Sitemap\Model\Resource', 'Magento\Sitemap\Model\ResourceModel'],
    ['Magento\Store\Model\Resource', 'Magento\Store\Model\ResourceModel'],
    ['Magento\Swatches\Model\Resource', 'Magento\Swatches\Model\ResourceModel'],
    ['Magento\Tax\Model\Resource', 'Magento\Tax\Model\ResourceModel'],
    ['Magento\Theme\Model\Resource', 'Magento\Theme\Model\ResourceModel'],
    ['Magento\Translation\Model\Resource', 'Magento\Translation\Model\ResourceModel'],
    ['Magento\Ui\Model\Resource', 'Magento\Ui\Model\ResourceModel'],
    ['Magento\UrlRewrite\Model\Resource', 'Magento\UrlRewrite\Model\ResourceModel'],
    ['Magento\User\Model\Resource', 'Magento\User\Model\ResourceModel'],
    ['Magento\CatalogSearch\Test\Unit\Model\Resource', 'Magento\CatalogSearch\Test\Unit\Model\ResourceModel'],
    ['Magento\Catalog\Test\Unit\Model\Resource', 'Magento\Catalog\Test\Unit\Model\ResourceModel'],
    ['Magento\Cms\Test\Unit\Model\Resource', 'Magento\Cms\Test\Unit\Model\ResourceModel'],
    [
        'Magento\ConfigurableProduct\Test\Unit\Model\Resource',
        'Magento\ConfigurableProduct\Test\Unit\Model\ResourceModel'
    ],
    [
        'Magento\CustomerImportExport\Test\Unit\Model\Resource',
        'Magento\CustomerImportExport\Test\Unit\Model\ResourceModel'
    ],
    ['Magento\Customer\Test\Unit\Model\Resource', 'Magento\Customer\Test\Unit\Model\ResourceModel'],
    ['Magento\Directory\Test\Unit\Model\Resource', 'Magento\Directory\Test\Unit\Model\ResourceModel'],
    ['Magento\Eav\Test\Unit\Model\Resource', 'Magento\Eav\Test\Unit\Model\ResourceModel'],
    ['Magento\EncryptionKey\Test\Unit\Model\Resource', 'Magento\EncryptionKey\Test\Unit\Model\ResourceModel'],
    ['Magento\ImportExport\Test\Unit\Model\Resource', 'Magento\ImportExport\Test\Unit\Model\ResourceModel'],
    ['Magento\Indexer\Test\Unit\Model\Resource', 'Magento\Indexer\Test\Unit\Model\ResourceModel'],
    ['Magento\Integration\Test\Unit\Model\Resource', 'Magento\Integration\Test\Unit\Model\ResourceModel'],
    ['Magento\MediaStorage\Test\Unit\Model\Resource', 'Magento\MediaStorage\Test\Unit\Model\ResourceModel'],
    ['Magento\Payment\Test\Unit\Model\Resource', 'Magento\Payment\Test\Unit\Model\ResourceModel'],
    ['Magento\Quote\Test\Unit\Model\Resource', 'Magento\Quote\Test\Unit\Model\ResourceModel'],
    ['Magento\Reports\Test\Unit\Model\Resource', 'Magento\Reports\Test\Unit\Model\ResourceModel'],
    ['Magento\Review\Test\Unit\Model\Resource', 'Magento\Review\Test\Unit\Model\ResourceModel'],
    ['Magento\Rule\Test\Unit\Model\Resource', 'Magento\Rule\Test\Unit\Model\ResourceModel'],
    ['Magento\SalesRule\Test\Unit\Model\Resource', 'Magento\SalesRule\Test\Unit\Model\ResourceModel'],
    ['Magento\SalesSequence\Test\Unit\Model\Resource', 'Magento\SalesSequence\Test\Unit\Model\ResourceModel'],
    ['Magento\Sales\Test\Unit\Model\Resource', 'Magento\Sales\Test\Unit\Model\ResourceModel'],
    ['Magento\Search\Test\Unit\Model\Resource', 'Magento\Search\Test\Unit\Model\ResourceModel'],
    ['Magento\Tax\Test\Unit\Model\Resource', 'Magento\Tax\Test\Unit\Model\ResourceModel'],
    ['Magento\Ui\Test\Unit\Model\Resource', 'Magento\Ui\Test\Unit\Model\ResourceModel'],
    ['Magento\UrlRewrite\Test\Unit\Model\Resource', 'Magento\UrlRewrite\Test\Unit\Model\ResourceModel'],
    ['Magento\User\Test\Unit\Model\Resource', 'Magento\User\Test\Unit\Model\ResourceModel'],
    ['Magento\Weee\Model\Resource', 'Magento\Weee\Model\ResourceModel'],
    ['Magento\Weee\Test\Unit\Model\Resource', 'Magento\Weee\Test\Unit\Model\ResourceModel'],
    ['Magento\Widget\Model\Resource', 'Magento\Widget\Model\ResourceModel'],
    ['Magento\Widget\Test\Unit\Model\Resource', 'Magento\Widget\Test\Unit\Model\ResourceModel'],
    ['Magento\Wishlist\Model\Resource', 'Magento\Wishlist\Model\ResourceModel'],
    ['Magento\Wishlist\Test\Unit\Model\Resource', 'Magento\Wishlist\Test\Unit\Model\ResourceModel'],
    ['Magento\Catalog\Plugin\Model\Resource', 'Magento\Catalog\Plugin\Model\ResourceModel'],
    ['Magento\Catalog\Test\Unit\Plugin\Model\Resource', 'Magento\Catalog\Test\Unit\Plugin\Model\ResourceModel'],
    ['Magento\Framework\Acl\Resource', 'Magento\Framework\Acl\AclResource'],
    ['Magento\Framework\App\Resource', 'Magento\Framework\App\ResourceConnection'],
    ['Magento\Framework\Model\Resource', 'Magento\Framework\Model\ResourceModel'],
    ['Magento\Framework\Model\ModelResource', 'Magento\Framework\Model\ResourceModel'],
    ['Magento\Framework\Model\Test\Unit\Resource', 'Magento\Framework\Model\Test\Unit\ResourceModel'],
    ['Magento\Framework\Model\Test\Unit\ModelResource', 'Magento\Framework\Model\Test\Unit\ResourceModel'],
    [
        'Magento\ConfigurableProduct\Block\Adminhtml\Product\Edit\Tab\Super',
        'Magento\ConfigurableProduct\Block\Adminhtml\Product\Edit\Tab\Variations',
    ],
];
