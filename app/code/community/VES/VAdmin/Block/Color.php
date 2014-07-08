<?php
class VES_VAdmin_Block_Color extends Mage_Core_Block_Template
{
	
	public function getColor($url){
		$color = Mage::getStoreConfig($url);//lay gia tri tren trinh duyet
	 return $color;	
	}
	
	/*public function getSaveConfigButtonHover(){
		return Mage::getStoreConfig('vadmin/config/Save_Button_Detail_Product');
	}*/
}