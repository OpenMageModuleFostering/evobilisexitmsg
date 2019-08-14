<?php
class Evobilis_Exitmessage_Block_Adminhtml_Exitmessage_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("exitmessage_form", array("legend"=>Mage::helper("exitmessage")->__("Item information")));

				

				if (Mage::getSingleton("adminhtml/session")->getExitmessageData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getExitmessageData());
					Mage::getSingleton("adminhtml/session")->setExitmessageData(null);
				} 
				elseif(Mage::registry("exitmessage_data")) {
				    $form->setValues(Mage::registry("exitmessage_data")->getData());
				}
				return parent::_prepareForm();
		}
}
