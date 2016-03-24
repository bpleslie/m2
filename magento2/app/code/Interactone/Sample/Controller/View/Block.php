<?php

namespace Interactone\Sample\Controller\View;

class Block extends \Magento\Framework\App\Action\Action {

	public function execute()
	{
		$block = $this->_view->getLayout()
						->createBlock('\Magento\Framework\View\Element\Text\ListText');

		$blockA = $this->_view->getLayout()
						->createBlock('\Magento\Framework\View\Element\Text');

		$blockB = $this->_view->getLayout()
						->createBlock('\Magento\Framework\View\Element\Text');

		$blockA->addText('This is block A');
		$blockB->addText('This is block B');

		$block->insert( $blockA );
		$block->insert( $blockB );

		$this->getResponse()->setBody( $block->toHtml() );
	}
}