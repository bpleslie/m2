<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\BraintreeTwo\Controller\Payment;

use Magento\BraintreeTwo\Gateway\Command\GetPaymentNonceCommand;
use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Webapi\Exception;
use Psr\Log\LoggerInterface;

/**
 * Class GetNonce
 */
class GetNonce extends Action
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var Session
     */
    private $session;

    /**
     * @var GetPaymentNonceCommand
     */
    private $command;

    /**
     * @param Context $context
     * @param LoggerInterface $logger
     * @param Session $session
     * @param GetPaymentNonceCommand $command
     */
    public function __construct(
        Context $context,
        LoggerInterface $logger,
        Session $session,
        GetPaymentNonceCommand $command
    ) {
        parent::__construct($context);
        $this->logger = $logger;
        $this->session = $session;
        $this->command = $command;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $response = $this->resultFactory->create(ResultFactory::TYPE_JSON);

        try {
            $publicHash = $this->getRequest()->getParam('public_hash');
            $customerId = $this->session->getCustomerId();
            $result = $this->command->execute(['publicHash' => $publicHash, 'customerId' => $customerId])
                ->get();
            $response->setData(['paymentMethodNonce' => $result['paymentMethodNonce']]);

        } catch (\Exception $e) {
            $this->logger->critical($e);
            return $this->processBadRequest($response);
        }

        return $response;
    }

    /**
     * Return response for bad request
     * @param ResultInterface $response
     * @return ResultInterface
     */
    private function processBadRequest(ResultInterface $response)
    {
        $response->setHttpResponseCode(Exception::HTTP_BAD_REQUEST);
        $response->setData(['message' => __('Sorry, but something went wrong')]);

        return $response;
    }
}
