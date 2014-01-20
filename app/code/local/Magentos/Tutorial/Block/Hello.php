<?php

class Magentos_Tutorial_Block_Hello extends Mage_Core_Block_Template
{
	public function isLoggedIn(){
		return Mage::getStoreConfig('magentos_sekcja/magentos_grupa/taknie');    
		return Mage::getSingleton('customer/session')->isLoggedIn();
	}
}
