<?php
/**
 * Created by PhpStorm.
 * User: brad
 * Date: 3/23/16
 * Time: 3:32 PM
 */

namespace Training\FreeGeoIp\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\HTTP\PhpEnvironment\Request;
use Psr\Log\LoggerInterface;

class LogIpObserver implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        /** @var Request $request */
        $request    = $observer->getData('request');
        $ip         = $request->getClientIp();
        $countryName = $this->getCountryByIp($ip);

        $this->logger->info( $countryName );
    }

    /**
     * @param $ip
     * @return mixed
     */
    private function getCountryByIp($ip)
    {
        $client = new Curl();

        $client->get('http://freegeoip.net/json/' . $ip);

        $body = json_decode($client->getBody());
        $countryName = $body->country_name;
        return $countryName;
    }
}