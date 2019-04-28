<?php
/**
 *
 * @package Beginersluck
 *
 */

/*
Plugin Name: Beginers Luck
Plugin URI: https://coryhrycko.com/WordPress/Plugins/BeginersLuck
Description: <i>First</i> attempt at memes, no wait a plug in.
Version: 1.0.0
Author: Cory Hrycko
Author URI: https://coryhrycko.com
License: GPLv2
Text Domain: Beginersluck
 */



/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */


// Defined the path to the file within wordpress or abort
defined( 'ABSPATH' ) or die( 'Silence is golden' );

// Require once the Composer Autoload.
if (file_exists(dirname(__FILE__)) . '/vendor/autoload.php') {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}


// WP mandatory activation and deactivation. Making it Procedural into the file.

/**
 * The code that runs the activation of the plugin.
 */

function activate_beginners_luck()
{
    Inc\Base\Activate::activate();
}

register_activation_hook(__FILE__,'actsivate_beginners_luck' );
/**
 * The code that runs the deactivation of the plugin.
 */

function deactivate_beginners_luck()
{
	Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook(__FILE__,'deacitvate_beginers_luck' );

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
};