<?php
namespace Magento\Integration\Model\ConfigBasedIntegrationManager;

/**
 * Interceptor class for @see
 * \Magento\Integration\Model\ConfigBasedIntegrationManager
 */
class Interceptor extends \Magento\Integration\Model\ConfigBasedIntegrationManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Model\IntegrationConfig $integrationConfig, \Magento\Integration\Api\IntegrationServiceInterface $integrationService, \Magento\Authorization\Model\Acl\AclRetriever $aclRetriever)
    {
        $this->___init();
        parent::__construct($integrationConfig, $integrationService, $aclRetriever);
    }

    /**
     * {@inheritdoc}
     */
    public function processIntegrationConfig(array $integrations)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processIntegrationConfig');
        if (!$pluginInfo) {
            return parent::processIntegrationConfig($integrations);
        } else {
            return $this->___callPlugins('processIntegrationConfig', func_get_args(), $pluginInfo);
        }
    }
}
