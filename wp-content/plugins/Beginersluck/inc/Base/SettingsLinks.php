<?php

namespace Inc\Base;

use Inc\Controllers\Controller;

class SettingsLinks extends Controller
{


    public function register()
    {       //Uses constant PLUGIN defined in main level.
            add_filter("plugin_action_links_$this->plugin" , array($this, 'settings_link'));
    }

    public function settings_link($links)
    {
        $settings_link = '<a href="admin.php?page=beginers_plugin">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }

}