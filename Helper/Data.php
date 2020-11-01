<?php

namespace Zuckerwelt\Shopauskunft\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{

	const XML_PATH = 'shopauskunft/';
    const ENABLE = 'shopauskunft/general/enabled';
    const SANDBOX = 'shopauskunft/general/sandbox';

 
    /**
     * Check if module is enable
     *
     * @return boolean
     */
    public function isEnable()
    {
        return $this->getConfigValue(self::ENABLE);
    }

    /**
     * Check if module mode is sandbox
     *
     * @return boolean
     */
    public function isSandbox()
    {
        return $this->getConfigValue(self::SANDBOX);
    }


	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
	}

	public function getGeneralConfig($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH .'general/'. $code, $storeId);
	}

}