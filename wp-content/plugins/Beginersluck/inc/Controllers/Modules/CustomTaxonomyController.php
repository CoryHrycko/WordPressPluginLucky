<?php
/**
 * @package Beginersluck
 */

namespace Inc\Controllers;

use Inc\Api\SettingsApi;
use Inc\Api\Callbacks\AdminCallbacks;

class CustomTaxonomyController extends Controller
{

	public $callbacks;

	public $subpages = array();

	public function register()
	{
		if (! $this->activated('taxonomy_manager')) return;

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
				'page_title' => 'Custom Taxonomies',
				'menu_title' => 'Taxonomy Manager',
				'capability' => 'manage_options',
				'menu_slug' => 'beginers_luck_taxonomies',
				'callback' => array( $this->callbacks, 'adminTaxonomy' )
			)
		);
	}
}