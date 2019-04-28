<?php


namespace Inc\Base;

use Inc\Api\SettingsApi;
use Inc\Controllers\Controller;
use Inc\Api\Callbacks\AdminCallbacks;

class CustomPostTypeController extends Controller
{

	public $callbacks;

	public $subpages = [];


	public function register()
	{
		$option = get_option( 'beginers_luck_plugin' );

		$activated = isset($option['cpt_manager']) ? $option['cpt_manager'] : false;

		if ( ! $activated ) return; // BANG!

		$this->settings = new SettingsApi();

		$this->callbacks = new AdminCallbacks();

		$this->setSubpages();

		$this->settings->addSubPages( $this->subpages )->register();


		add_action( 'init', array( $this, 'activate') );

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
			]
		];
	}


	public function activate()
	{
			register_post_type( 'lucky_stuff',

				array(
					'labels' => array(
						'name' => 'Products',
						'singular_name' => 'Product'
					),
					'public' => true,
					'has_archive' => true,
				)

			);
	}
}