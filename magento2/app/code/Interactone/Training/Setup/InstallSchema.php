<?php

namespace Interactone\Training\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface {

	public function install( SchemaSetupInterface $setup, ModuleContextInterface $context )
	{
		$installer = $setup;
		$installer->startSetup();

		// modue
		$context->getVersion();

		$table = $installer->getConnection()->newTable('interactone_sample')
		->addColumn(
			'sample_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
			null,
			['identity' => true, 'nullable' => false, 'primary' => true],
			'Block ID'
		)->addColumn(
				'title',
				\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				255,
				['nullable' => false],
				'Block Title'
			)->addColumn(
				'identifier',
				\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				255,
				['nullable' => false],
				'Block String Identifier'
			));

		$installer->endSetup();
		// TODO: Implement install() method.
	}
}