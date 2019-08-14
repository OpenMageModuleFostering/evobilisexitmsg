<?php
	
class Evobilis_Exitmessage_Block_Adminhtml_Exitmessage_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "exitmessage";
				$this->_controller = "adminhtml_exitmessage";
				$this->_updateButton("save", "label", Mage::helper("exitmessage")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("exitmessage")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("exitmessage")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("exitmessage_data") && Mage::registry("exitmessage_data")->getId() ){

				    return Mage::helper("exitmessage")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("exitmessage_data")->getId()));

				} 
				else{

				     return Mage::helper("exitmessage")->__("Add Item");

				}
		}
}