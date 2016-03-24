<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Block\Adminhtml;

/**
 * Adminhtml sales shipments block
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Shipment extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_shipment';
        $this->_blockGroup = 'Magento_Sales';
        $this->_headerText = __('Shipments');
        parent::_construct();
        $this->buttonList->remove('add');
    }
}
