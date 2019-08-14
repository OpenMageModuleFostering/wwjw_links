<?php
class Wwjw_Links_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
		$this->loadLayout();     
		$this->renderLayout();
    }
    public function postAction(){
    	$this->loadLayout();
    	$this->renderLayout();
    }
}