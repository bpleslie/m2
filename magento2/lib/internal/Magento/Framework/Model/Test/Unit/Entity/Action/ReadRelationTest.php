<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Model\Test\Unit\Entity\Action;

use Magento\Framework\Model\Entity\MetadataPool;
use Magento\Framework\Model\ResourceModel\Db\Relation\ActionPool as RelationActionPool;
use Magento\Framework\Model\Entity\Action\ReadRelation;

/**
 * Class ReadRelationTest
 */
class ReadRelationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $metadataPoolMock;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $relationActionPoolMock;

    /**
     * @var ReadRelation
     */
    protected $readRelation;

    protected function setUp()
    {
        $this->metadataPoolMock = $this->getMockBuilder(MetadataPool::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->relationActionPoolMock = $this->getMockBuilder(RelationActionPool::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->readRelation = new ReadRelation(
            $this->metadataPoolMock,
            $this->relationActionPoolMock
        );
    }

    public function testExecute()
    {
        $entityType = 'Type';
        $entity = new \stdClass();
        $action = $this->getMockBuilder(\stdClass::class)
            ->disableOriginalConstructor()
            ->setMethods(['execute'])
            ->getMock();
        $this->relationActionPoolMock->expects($this->once())
            ->method('getActions')
            ->with($entityType, 'read')
            ->willReturn([$action]);
        $action->expects($this->once())->method('execute')->with($entityType, $entity)->willReturn($entity);
        $this->assertEquals($entity, $this->readRelation->execute($entityType, $entity));
    }
}
