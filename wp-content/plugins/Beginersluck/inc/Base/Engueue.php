<?php


namespace Inc\Base;

use Inc\Controllers\Controller;

class Engueue extends Controller
{

    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }
    function enqueue()
    {
        //script automation
        wp_enqueue_style('mypluginstyle', $this->plugin_url . '/assets/mystyle.css');
        wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/myscript.js');
    }
}