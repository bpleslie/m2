<?php

namespace Interactone\Sample\Controller\View;

class Index extends \Magento\Framework\App\Action\Action {

	public function __construct(
		\Magento\Framework\App\Action\Context $context, // context must come first
		\Magento\Framework\View\Result\PageFactory $pageFactory
	)
	{
		$this->pageFactory = $pageFactory;
		parent::__construct( $context );
	}

	public function execute() {

		$page = $this->pageFactory->create();
		$page->addHandle('default');
		return $page;
//		// similar to loadLayout in m1
//		$block = $this->_view
//					->getLayout()
//					->createBlock('\Magento\Framework\View\Element\Template');
//
//		$block->setTemplate('Interactone_Sample::test.phtml');
//
//		$this->getResponse()->setBody( $block->toHtml() );
	}
}