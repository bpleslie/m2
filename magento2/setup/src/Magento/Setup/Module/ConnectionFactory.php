<?php
/**
 * Connection adapter factory
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Setup\Module;

use Magento\Framework\Model\ResourceModel\Type\Db\Pdo\Mysql;
use Magento\Framework\Stdlib;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ConnectionFactory
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ConnectionFactory implements \Magento\Framework\Model\ResourceModel\Type\Db\ConnectionFactoryInterface
{
    /**
     * @var ServiceLocatorInterface
     */
    private $serviceLocator;

    /**
     * Constructor
     *
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function __construct(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $connectionConfig)
    {

        $quote = new \Magento\Framework\DB\Platform\Quote();
        $selectFactory = new \Magento\Framework\DB\SelectFactory(
            new \Magento\Framework\DB\Select\SelectRenderer(
                [
                    'distinct' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\DistinctRenderer(),
                            'sort' => 100,
                        ],
                    'columns' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\ColumnsRenderer($quote),
                            'sort' => 200,
                        ],
                    'union' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\UnionRenderer(),
                            'sort' => 300,
                        ],
                    'from' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\FromRenderer($quote),
                            'sort' => 400,
                        ],
                    'where' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\WhereRenderer(),
                            'sort' => 500,
                        ],
                    'group' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\GroupRenderer($quote),
                            'sort' => 600,
                        ],
                    'having' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\HavingRenderer(),
                            'sort' => 700,
                        ],
                    'order' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\OrderRenderer($quote),
                            'sort' => 800,
                        ],
                    'limit' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\LimitRenderer(),
                            'sort' => 900,
                        ],
                    'for_update' =>
                        [
                            'renderer' => new \Magento\Framework\DB\Select\ForUpdateRenderer(),
                            'sort' => 1000,
                        ],
                ]
            )
        );
        $resourceInstance = new Mysql(
            new Stdlib\StringUtils(),
            new Stdlib\DateTime(),
            $selectFactory,
            $connectionConfig
        );

        return $resourceInstance->getConnection($this->serviceLocator->get(\Magento\Framework\DB\Logger\Quiet::class));
    }
}
