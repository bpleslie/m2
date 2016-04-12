<?php

namespace Training\OrderAction\Controller\Info;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\Page;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\Data\OrderItemInterface;
use Magento\Sales\Api\OrderRepositoryInterface;

class Index extends Action
{

    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;
    /**
     * @var Registry
     */
    private $registry;

    public function __construct(
        Context $context,
        OrderRepositoryInterface $orderRepository,
        Registry $registry
    )
    {
        parent::__construct($context);
        $this->orderRepository = $orderRepository;
        $this->registry = $registry;
    }

    public function execute()
    {
//        try {
            $orderId    = $this->getRequest()->getParam('order_id');
            $order      = $this->orderRepository->get($orderId);
            $orderData  = $this->buildOrderData($order);
            $isJson     = $this->getRequest()->getParam('json', false);

            if ( $isJson ) {
                /** @var Json $result */
                $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);
                $result->setData($orderData);
            }
            else {
                $this->registry->register('order_info', $orderData);

                /** @var Page $result */
                $result = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
                $result->getConfig()->getTitle()->set( __('Order Info Page') );
            }

//        } catch (\Exception $e) {
//            /** @var Raw $result */
//            $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//            $result->setContents( $e->getMessage() );
//        }

        return $result;
    }

    /**
     * @param OrderInterface $order
     * @return array
     */
    public function buildOrderData(OrderInterface $order)
    {
        $orderData = [
            'total' => $order->getGrandTotal(),
            'total_invoiced' => $order->getTotalInvoiced(),
            'status' => $order->getStatus(),
            'items' => $this->buildOrderItemData($order)
        ];
        return $orderData;
    }

    /**
     * @param OrderInterface $order
     * @return array
     */
    public function buildOrderItemData(OrderInterface $order)
    {
        return array_map(function (OrderItemInterface $item) {
            return [
                'sku' => $item->getSku(),
                'item_id' => $item->getQuoteItemId(),
                'price' => $item->getPrice(),
                'qty' => $item->getQtyOrdered()
            ];
        }, $order->getItems());
    }
}