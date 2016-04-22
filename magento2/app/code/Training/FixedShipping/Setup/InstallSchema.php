<?php
/**
 * Created by PhpStorm.
 * User: brad
 * Date: 4/22/16
 * Time: 4:25 PM
 */

namespace Training\FixedShipping\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Psr\Log\LoggerInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        try {
            $setup->getConnection()->addColumn(
                $setup->getTable('salesrule'),
                'fixed_shipping_amount',
                [
                    'type' => Table::TYPE_DECIMAL,
                    'length' => 12,4,
                    'nullable' => true,
                    'comment' => 'Fixed shipping amount'
                ]
            );
        }
        catch (\Exception $e ) {
            $this->logger->warning( $e );
        }
    }
}