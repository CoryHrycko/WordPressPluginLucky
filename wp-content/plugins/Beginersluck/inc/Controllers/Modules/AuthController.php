<?php


namespace Inc\Controllers;

use Inc\Api\SettingsApi;
use Inc\Api\Callbacks\AdminCallbacks;
/**
 *
 */
class AuthController extends Controller
{
	public $callbacks;
	public $subpages = array();
	public function register()
	{
		if ( ! $this->activated( 'login_manager' ) ) return;
		$this->settings = new SettingsApi();
		$this->callbacks = new AdminCallbacks();
		$this->setSubpages();
		$this->settings->addSubPages( $this->subpages )->register();
	}
	public function setSubpages()
	{
		$this->subpages = array(
			array(
				'parent_slug' => 'beginers_luck_plugin',
				'page_title' => 'Login Manager',
				'menu_title' => 'Login Manager',
				'capability' => 'manage_options',
				'menu_slug' => 'beginers_luck_auth',
				'callback' => array( $this->callbacks, 'adminAuth' )
			)
		);
	}
}