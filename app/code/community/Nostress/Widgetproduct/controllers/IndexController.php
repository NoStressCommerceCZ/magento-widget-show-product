<?php
/** 
 * Magento Module developed by NoStress Commerce 
 * 
 * NOTICE OF LICENSE 
 * 
 * This source file is subject to the Open Software License (OSL 3.0) 
 * that is bundled with this package in the file LICENSE.txt. 
 * It is also available through the world-wide-web at this URL: 
 * http://opensource.org/licenses/osl-3.0.php 
 * If you did of the license and are unable to 
 * obtain it through the world-wide-web, please send an email 
 * to info@nostresscommerce.cz so we can send you a copy immediately. 
 * 
 * @copyright Copyright (c) 2012 NoStress Commerce (http://www.nostresscommerce.cz) 
 * 
 */

/** 
 * {comment}
 * 
 * @category Nostress 
 * @package Nostress_Widgetproduct
 * @author Summit Media 
 */

class Nostress_Widgetproduct_IndexController extends Mage_Core_Controller_Front_Action
{
	protected function _initAction() {
		$this->loadLayout();

		return $this;
	}

	public function indexAction() {
		// automaticky generovany kod
	
		$this->_initAction();
		$this->renderLayout();
	}
}
