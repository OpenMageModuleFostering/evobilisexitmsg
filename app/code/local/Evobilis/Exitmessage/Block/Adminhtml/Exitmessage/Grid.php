<?php

class Evobilis_Exitmessage_Block_Adminhtml_Exitmessage_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("exitmessageGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("ASC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("exitmessage/exitmessage")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("exitmessage")->__("ID"),
				"width" => "10px",
			    "type" => "number",
				"index" => "id",
				));
				
				$this->addColumn("feedback", array(
				"header" => Mage::helper("exitmessage")->__("Feedback"),
				"width" => "650px",
				"index" => "feedback",
				));
				
				$this->addColumn("email", array(
				"header" => Mage::helper("exitmessage")->__("Email Address"),
				"index" => "email",
				));
				
								$this->addColumn("date", array(
				"header" => Mage::helper("exitmessage")->__("Date Submitted"),
				"index" => "date",
				));
                
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		

		
	
			

}