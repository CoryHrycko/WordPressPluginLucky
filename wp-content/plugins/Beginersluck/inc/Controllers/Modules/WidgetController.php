<?php
/**
 * @package Beginersluck
 */

namespace Inc\Controllers;

use Inc\Api\SettingsApi;
use Inc\Api\Callbacks\AdminCallbacks;

class WidgetController extends Controller
{

	public $callbacks;

	public $subpages = array();

	public function register()
	{
		if ( ! $this->activated( 'media_widget' ) ) return;

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
				'page_title' => 'Media Widget Manager',
				'menu_title' => 'Media Widget Manager',
				'capability' => 'manage_options',
				'menu_slug' => 'beginers_luck_widgets',
				'callback' => array( $this->callbacks, 'adminWidget' )
			)
		);
	}
}