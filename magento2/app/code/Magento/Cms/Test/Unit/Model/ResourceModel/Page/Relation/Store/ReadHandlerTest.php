<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Cms\Test\Unit\Model\ResourceModel\Page\Relation\Store;

use Magento\Cms\Model\ResourceModel\Page;
use Magento\Cms\Model\ResourceModel\Page\Relation\Store\ReadHandler;
use Magento\Framework\Model\Entity\MetadataPool;

class ReadHandlerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ReadHandler
     */
    protected $model;

    /**
     * @var MetadataPool|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $metadataPool;

    /**
     * @var Page|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $resourcePage;

    protected function setUp()
    {
        $this->metadataPool = $this->getMockBuilder('Magento\Framework\Model\Entity\MetadataPool')
            ->disableOriginalConstructor()
            ->getMock();

        $this->resourcePage = $this->getMockBuilder('Magento\Cms\Model\ResourceModel\Page')
            ->disableOriginalConstructor()
            ->getMock();

        $this->model = new ReadHandler(
            $this->metadataPool,
            $this->resourcePage
        );
    }

    public function testExecute()
    {
        $entityId = 1;
        $storeId = 1;

        $this->resourcePage->expects($this->once())
            ->method('lookupStoreIds')
            ->willReturn([$storeId]);

        $page = $this->getMockBuilder('Magento\Cms\Model\Page')
            ->disableOriginalConstructor()
            ->getMock();

        $page->expects($this->exactly(2))
            ->method('getId')
            ->willReturn($entityId);
        $page->expects($this->once())
            ->method('setData')
            ->with('store_id', [$storeId])
            ->willReturnSelf();

        $result = $this->model->execute('', $page);
        $this->assertInstanceOf('Magento\Cms\Model\Page', $result);
    }

    public function testExecuteWithNoId()
    {
        $page = $this->getMockBuilder('Magento\Cms\Model\Page')
            ->disableOriginalConstructor()
            ->getMock();

        $page->expects($this->once())
            ->method('getId')
            ->willReturn(false);

        $result = $this->model->execute('', $page);
        $this->assertInstanceOf('Magento\Cms\Model\Page', $result);
    }
}
