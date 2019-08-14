<?
class Evobilis_Exitmessage_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    
		if($_POST['evobilis_exitmsg_feedback']==NULL){
		$this->getResponse()->setHeader('HTTP/1.1','404 Not Found');
		$this->getResponse()->setHeader('Status','404 File not found');
		$pageId = Mage::getStoreConfig('web/default/cms_no_route');
		if (!Mage::helper('cms/page')->renderPage($this, $pageId)) {
			$this->_forward('defaultNoRoute');
		} 
		}
		else
		{
			if($_POST['evobilis_exitmsg_feedback_msg']!=NULL)
			{
				$email=Mage::getSingleton('customer/session')->getCustomer()->getEmail();
				if($email==NULL)
				$email=$_POST['email'];
				$sql = Mage::getSingleton('core/resource')->getConnection('core_write');
				$sql->query("insert into evobilis_exitmsg_feedback values('','".$_POST['evobilis_exitmsg_feedback_msg']."','".$email."','".Zend_Date::now()->toString('yyyyMMddHHmmss')."')");
				$msg="Message: ".$_POST['evobilis_exitmsg_feedback_msg'];
				$mail = new Zend_Mail();
				$mail->setBodyHtml($msg);
				$mail->setFrom(Mage::getStoreConfig('trans_email/ident_general/email'),Mage::getStoreConfig('trans_email/ident_general/name'));
				$mail->addTo(Mage::getStoreConfig('trans_email/ident_general/email'));
				$mail->setSubject("New Feedback Submitted");
				$mail->send();
				echo 'done';
			}
		}
	
	}
	
	
}
?>