<?php
class VES_VAdmin_Block_Head extends Mage_Core_Block_Template
{
	protected function _prepareLayout(){
		parent::_prepareLayout();
		if(!Mage::getStoreConfig('vadmin/config/enabled')) return;
		$headBlock = $this->getLayout()->getBlock('head');
		if($headBlock){
			if(in_array('vendors_default',$this->getLayout()->getUpdate()->getHandles())){
				$headBlock->removeItem('skin_css','ves_vadmin/css/styles.css');
				return;
			}
			$headBlock->addItem('link_rel', Mage::helper('adminhtml')->getUrl("adminhtml/vadmin_css/index"),'rel="stylesheet" type="text/css"');
			$headBlock->setTitle(Mage::getStoreConfig('vadmin/head/default_title'));
		}
		$headerBlock = $this->getLayout()->getBlock('header');
		if($headerBlock){
			$headerBlock->setTemplate('ves_vadmin/page/header.phtml');
		}
		/*Disable notification messages*/
		if(!Mage::getStoreConfig('vadmin/header/show_notifications')){
			$this->getLayout()->getBlock('root')->unsetChild('notifications');
		}
		
		if(!Mage::getStoreConfig('vadmin/menu/show_help_link')){
			$this->getLayout()->getBlock('menu')->setTemplate('ves_vadmin/page/menu.phtml');
		}
	}

}