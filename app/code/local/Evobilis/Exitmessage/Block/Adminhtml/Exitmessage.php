<?php


class Evobilis_Exitmessage_Block_Adminhtml_Exitmessage extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_exitmessage";
	$this->_blockGroup = "exitmessage";
	$this->_headerText = Mage::helper("exitmessage")->__("Checkout Exit Feedbacks");
	parent::__construct();
$this->_removeButton('delete');
$this->_removeButton('save');	
$this->_removeButton('add');	
	}

}