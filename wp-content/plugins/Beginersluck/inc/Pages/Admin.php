<?php
/**
 * @package Beginersluck
 */

namespace Inc\Pages;

use Inc\Api\SettingsApi;
use Inc\Controllers\Controller;
use Inc\Api\Callbacks\AdminCallbacks;
use Inc\Api\Callbacks\ManagerCallbacks;

class Admin extends Controller
{
    // Variables.
    public $callbacks;

	public $callbacks_mngr;


	public $settings;

    public $pages = [];

    public $subpages = [];



    public function register()
    {
        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->callbacks_mngr = new ManagerCallBacks();

        $this->setPages();

        $this->setSubpages();

        $this->setSettings();

	    $this->setSections();

	    $this->setFields();

        $this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubPages( $this->subpages )->register();
    }

	/**
	 * Setters Section.
	 */

    public function setPages()
    {
        $this->pages = [
            [
                'page_title' => 'BeginersLuck Plugin',
                'menu_title' => 'BeginersLuck',
                'capability' => 'manage_options',
                'menu_slug' => 'beginers_luck_plugin',
                'callback' => array($this->callbacks, 'adminDashboard'),
                'icon_url' => 'dashicons-store',
                'position' => 110
            ]
        ];
    }

    public function setSubpages()
    {
        $this->subpages = [
            [
                'parent_slug' => 'beginers_luck_plugin',
                'page_title' => 'Custom Post Types',
                'menu_title' => 'CPT',
                'capability' => 'manage_options',
                'menu_slug' => 'beginers_luck_cpt',
                'callback' => function() { echo '<h1>CPT Manager</h1>'; }
            ],
            [
                'parent_slug' => 'beginers_luck_plugin',
                'page_title' => 'Custom Taxonomies',
                'menu_title' => 'Taxonomies',
                'capability' => 'manage_options',
                'menu_slug' => 'beginers_luck_taxonomies',
                'callback' => function() { echo '<h1>Taxonomies Manager</h1>'; }
            ],
            [
                'parent_slug' => 'beginers_luck_plugin',
                'page_title' => 'Custom Widgets',
                'menu_title' => 'Widgets',
                'capability' => 'manage_options',
                'menu_slug' => 'beginers_luck_widgets',
                'callback' => function() { echo '<h1>Widgets Manager</h1>'; }
            ]
        ];
    }

	public function setSettings()
	{
		/**
		 * THIS IS WHERE YOU PUT IN YOUR OPTIONS FOR THE FORM TO PROCESS
		 */

			$args = array(
				array(
				'option_group' => 'Beginersluck_plugin_settings',
				'option_name'  => 'beginers_luck_plugin',
				'callback'     => [ $this->callbacks_mngr, 'checkboxSanitize' ]
				));

		$this->settings->setSettings($args);
	}
	public function setSections()
	{
		$args = [
			[
				'id' => 'luck_admin_index',
				'title' => 'Settings Manager',
				'callback' => [ $this->callbacks_mngr, 'adminSectionManager' ],
				'page' => 'beginers_luck_plugin'
			]
		];

		$this->settings->setSections($args);
	}
	public function setFields()
	{

		$args = array();

		foreach ( $this->managers as $key => $value ) {
			$args[] = array(
				'id'       => $key,
				'title'    => $value,
				'callback' => [ $this->callbacks_mngr, 'checkboxField' ],
				'page'     => 'beginers_luck_plugin',
				'section'  => 'luck_admin_index',
				'args'     => [
					'option_name' => 'beginers_luck_plugin',
					'label_for' => $key,
					'class'     => 'ui-toggle'
				]
			);
		}
		$this->settings->setFields($args);
	}


}