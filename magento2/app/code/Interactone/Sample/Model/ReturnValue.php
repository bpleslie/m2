<?php

namespace Interactone\Sample\Model;

class ReturnValue {

	protected $logger;

	public function __construct(
		\Psr\Log\LoggerInterface $loggerInterface
	)
	{
		$this->logger = $loggerInterface;
		return 'This is my value';
	}

	public function getValue() {
		return get_class($this->logger);
//		return 'This is my value';
	}
}