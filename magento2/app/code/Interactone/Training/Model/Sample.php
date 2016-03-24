<?php

namespace Interactone\Training\Model;

use Magento\Framework\Model\AbstractModel;

class Sample extends AbstractModel {


	protected function __construct()
	{
		$this->_init('\Interactone\Training\Model\ResourceModel\Sample');
	}
}