<?php

namespace Interactone\Training\Model\ResourceModel\Sample;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {

	protected function _construct()
	{
		// model, resource model
		$this->_init('\Interactone\Training\Model\Sample', '\Interactone\Training\Model\ResourceModel\Sample');
	}

}