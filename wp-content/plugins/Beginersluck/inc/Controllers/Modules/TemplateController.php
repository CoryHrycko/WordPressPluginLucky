<?php


namespace Inc\Controllers;

use Inc\Api\SettingsApi;
use Inc\Api\Callbacks\AdminCallbacks;

class TemplateController extends Controller
{
	public $callbacks;
	public $subpages = array();
	public function register()
	{
		if ( ! $this->activated( 'templates_manager' ) ) return;
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
				'page_title' => 'Templates Manager',
				'menu_title' => 'Templates Manager',
				'capability' => 'manage_options',
				'menu_slug' => 'beginers_luck_templates',
				'callback' => array( $this->callbacks, 'adminTemplates' )
			)
		);
	}
}