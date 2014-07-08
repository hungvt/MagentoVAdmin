<?php
class VES_VAdmin_Vadmin_CssController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
    	$this->getResponse()->setHeader('Content-type', 'text/css'); 
    	$this->loadLayout()->renderLayout();
    }
}