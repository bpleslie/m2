<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Bundle\Test\Unit\Controller\Adminhtml\Bundle\Product\Edit;

use Magento\Framework\TestFramework\Unit\Helper\ObjectManager as ObjectManagerHelper;

class FormTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Magento\Bundle\Controller\Adminhtml\Bundle\Product\Edit\Form */
    protected $controller;

    /** @var ObjectManagerHelper */
    protected $objectManagerHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Magento\Framework\App\RequestInterface
     */
    protected $request;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Magento\Framework\App\ResponseInterface
     */
    protected $response;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Magento\Catalog\Controller\Adminhtml\Product\Builder
     */
    protected $productBuilder;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper
     */
    protected $initializationHelper;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Magento\Framework\App\ViewInterface
     */
    protected $view;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject|\Magento\Backend\App\Action\Context
     */
    protected $context;

    protected function setUp()
    {
        $this->objectManagerHelper = new ObjectManagerHelper($this);

        $this->context = $this->getMockBuilder('\Magento\Backend\App\Action\Context')
            ->disableOriginalConstructor()
            ->getMock();
        $this->request = $this->getMock('Magento\Framework\App\RequestInterface');
        $this->response = $this->getMock(
            '\Magento\Framework\App\ResponseInterface',
            [
                'sendResponse',
                'setBody'
            ]
        );
        $this->productBuilder = $this->getMockBuilder('\Magento\Catalog\Controller\Adminhtml\Product\Builder')
            ->disableOriginalConstructor()
            ->setMethods(['build'])
            ->getMock();
        $this->initializationHelper = $this->getMockBuilder(
            '\Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper'
        )
            ->disableOriginalConstructor()
            ->setMethods(['initialize'])
            ->getMock();
        $this->view = $this->getMock('\Magento\Framework\App\ViewInterface');

        $this->context->expects($this->any())
            ->method('getRequest')
            ->will($this->returnValue($this->request));
        $this->context->expects($this->any())
            ->method('getResponse')
            ->will($this->returnValue($this->response));
        $this->context->expects($this->any())
            ->method('getView')
            ->will($this->returnValue($this->view));

        $this->controller = $this->objectManagerHelper->getObject(
            '\Magento\Bundle\Controller\Adminhtml\Bundle\Product\Edit\Form',
            [
                'context' => $this->context,
                'productBuilder' => $this->productBuilder,
                'initializationHelper' => $this->initializationHelper
            ]
        );
    }

    public function testExecute()
    {
        $product = $this->getMockBuilder('\Magento\Catalog\Model\Product')
            ->disableOriginalConstructor()
            ->setMethods(['_wakeup', 'getId'])
            ->getMock();
        $layout = $this->getMock('\Magento\Framework\View\LayoutInterface');
        $block = $this->getMockBuilder('Magento\Bundle\Block\Adminhtml\Catalog\Product\Edit\Tab\Bundle')
            ->disableOriginalConstructor()
            ->setMethods(['setIndex', 'toHtml'])
            ->getMock();

        $this->productBuilder->expects($this->once())->method('build')->with($this->request)->willReturn($product);
        $this->initializationHelper->expects($this->any())->method('initialize')->willReturn($product);
        $this->response->expects($this->once())->method('setBody')->willReturnSelf();
        $this->view->expects($this->once())->method('getLayout')->willReturn($layout);
        $layout->expects($this->once())->method('createBlock')->willReturn($block);
        $block->expects($this->once())->method('toHtml')->willReturnSelf();

        $this->controller->execute();
    }
}
