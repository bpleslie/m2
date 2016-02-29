<?php

namespace Interactone\Training\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface {

	public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context )
	{
		// $context->getVersion();

		$installer = $setup;
		$installer->startSetup();

		if ( version_compare($context->getVersion(), '1.0.1', '<') ) {
			// this file runs once, so versions must be in chronological order
		}
	}
}