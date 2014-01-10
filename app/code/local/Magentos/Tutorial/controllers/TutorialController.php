<?php 
/**
 * http://magentos.pl/wlasny-kontroler-i-router-w-magento/
 * magentoanalyst@gmail.com
 */


class Magentos_Tutorial_TutorialController extends Mage_Core_Controller_Front_Action
{
    public function someAction(){
        echo Mage::getUrl('magentos/tutorial/some');
    }
}