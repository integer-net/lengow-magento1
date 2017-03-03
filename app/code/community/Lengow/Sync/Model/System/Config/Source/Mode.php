<?php
class Lengow_Sync_Model_System_Config_Source_Mode
{
    const LIVE = 0;

    const SANDBOX = 1;

    /**
     * @var Lengow_Sync_Helper_Data
     */
    protected $_helper;

    public function __construct()
    {
        $this->_helper = Mage::helper('lensync');
    }

    public function toOptionArray()
    {
        return [
            self::LIVE    => $this->_helper->__('Live'),
            self::SANDBOX => $this->_helper->__('Sandbox'),
        ];
    }
}