<?php

namespace Interactone\Sample\Model\Plugin;

class Hello {

	protected $returnValue;

	public function __construct(
		\Interactone\Sample\Model\ReturnValue $returnValue
	)
	{
		$this->returnValue = $returnValue;
	}

	public function beforeExecute(\Interactone\Sample\Controller\Sample\Hello $controller) {
		$value = $this->returnValue->getValue();
		$controller->getResponse()->appendBody( $value );
	}
}