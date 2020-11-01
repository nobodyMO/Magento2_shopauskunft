<?php
namespace Zuckerwelt\Shopauskunft\Block;
class Success extends \Magento\Framework\View\Element\Template
{
    protected $_checkoutSession;
    protected $_helperData;
 
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Checkout\Model\Session $checkoutSession,
        \Zuckerwelt\Shopauskunft\Helper\Data $helperData) {

        parent::__construct($context);
        $this->_checkoutSession = $checkoutSession;
        $this->_helperData = $helperData;
    }

    public function getOrder() {
        return $this->_checkoutSession->getLastRealOrder();
    }

    public function getOrderId() {
        $order = $this->_checkoutSession->getLastRealOrder();
        return $order->getRealOrderId();
    }


    public function isEnable() {
        return $this->_helperData->isEnable();
    }

    public function isSandbox() {
        return $this->_helperData->isSandbox();
    }

    public function getConfigShopauskunft_id() {
        return $this->_helperData->getGeneralConfig('shopauskunft_id');
    }

    public function getConfigShopauskunft_shop_name() {
        return $this->_helperData->getGeneralConfig('shopauskunft_shop_name');
    }

}