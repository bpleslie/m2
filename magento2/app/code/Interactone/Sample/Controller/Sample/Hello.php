<?php

namespace Interactone\Sample\Controller\Sample;

use Magento\Framework\App\Action\Action;

class Hello extends Action {

	protected $product;

	public function __construct(
		\Magento\Catalog\Model\Product $product
	)
	{
		$this->product = $product;
	}

	public function execute()
	{
		$this->getResponse()->appendBody('Hello World');
	}
}