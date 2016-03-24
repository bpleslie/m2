<?php

namespace Interactone\Sample\Controller\View;

class Template extends \Magento\Framework\App\Action\Action {

	public function execute() {
		// similar to loadLayout in m1
		$block = $this->_view
			->getLayout()
			->createBlock('\Interactone\Sample\Block\Template');

		$block->setTemplate('Interactone_Sample::template.phtml');
		$block->assign('sample','This is my sample');

		$this->getResponse()->setBody( $block->toHtml() );
	}
}