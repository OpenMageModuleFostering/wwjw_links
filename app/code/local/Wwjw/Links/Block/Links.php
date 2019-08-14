<?php
class Wwjw_Links_Block_Links extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getLinks()     
     { 
        if (!$this->hasData('links')) {
            $this->setData('links', Mage::registry('links'));
        }
        return $this->getData('links');
        
    }
}