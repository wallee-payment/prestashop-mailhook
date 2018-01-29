<?php
/**
 * Mail Hook Module
 * 
 * The purpose of the module is to provide a hook for the e-mail sending 
 * action. See README for more information.
 * 
 * @author Thomas Hunziker
 * 
 */

if (! defined('_PS_VERSION_')){
	exit();
}

/**
 * Mailhook Module
 *
 * @author Thomas Hunziker
 *
 */
class Mailhook extends Module {

	public function __construct(){
		$this->name = 'mailhook';
		$this->tab = 'administration';
		$this->version = 1.0;
		$this->author = 'customweb ltd';
		$this->need_instance = 0;
		
		parent::__construct();
		
		$this->displayName = $this->l('Mail Hook');
		$this->description = $this->l('This module adds a hook to the mail sending functionality of PrestaShop. The module overrides only the Mail class. No other functionality is provided.');
	}
	
}
