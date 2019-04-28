<?php
/**
 *
 * @package Beginersluck
 *
 */

namespace Inc\Base;

class Activate
{

	public static function activate() {
			flush_rewrite_rules();

		if ( get_option('beginers_luck_plugin') ) {
			return;
		}
		$default = array();
		update_option( 'beginers_luck_plugin', $default );
	}

}