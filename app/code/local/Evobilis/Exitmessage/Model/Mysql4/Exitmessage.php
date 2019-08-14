<?php
class Evobilis_Exitmessage_Model_Mysql4_Exitmessage extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("exitmessage/exitmessage", "id");
    }
}