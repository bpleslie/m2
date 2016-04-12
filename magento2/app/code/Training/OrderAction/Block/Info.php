<?php
/**
 * Created by PhpStorm.
 * User: brad
 * Date: 4/8/16
 * Time: 4:37 PM
 */

namespace Training\OrderAction\Block;


use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

class Info extends Template
{

    /**
     * @var Registry
     */
    private $registry;

    public function __construct(
        Template\Context $context,
        Registry $registry,
        array $data
    )
    {
        parent::__construct($context, $data);
        $this->registry = $registry;
    }

    public function getOrderInfo() {
        return $this->registry->registry('order_info');
    }
}