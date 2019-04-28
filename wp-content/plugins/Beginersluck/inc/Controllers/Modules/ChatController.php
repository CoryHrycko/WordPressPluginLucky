<?php


namespace Inc\Controllers;


use Inc\Api\SettingsApi;
use Inc\Api\Callbacks\AdminCallbacks;
/**
 *
 */
class ChatController extends Controller
{
	public $callbacks;
	public $subpages = array();
	public function register()
	{
		if ( ! $this->activated( 'chat_manager' ) ) return;
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
				'page_title' => 'Widgets Manager',
				'menu_title' => 'Widgets Manager',
				'capability' => 'manage_options',
				'menu_slug' => 'beginers_luck_chat',
				'callback' => array( $this->callbacks, 'adminChat' )
			)
		);
	}
}