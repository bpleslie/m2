<?php

namespace Interactone\Sample\Controller\View;

class Bananas extends \Magento\Framework\App\Action\Action {
	public function execute() {
		$this->getResponse()->setBody('it works!');
	}
}