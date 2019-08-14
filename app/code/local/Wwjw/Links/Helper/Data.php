<?php

class Wwjw_Links_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getLinkUrl()
	{
		return $this->_getUrl('wwjw_links/index/index');
	}
}