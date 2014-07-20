<?php
/**
 * Plugin Name: Wordpress eSports
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: An eSports suit for Wordpresss
 * Version: 0.1.0
 * Author: Chris Vantine
 * Author URI: http://github.com/SkidMaster
 * License: GPL2
 */
 
 /*  Copyright 2014  Chris Vantine  (email : justchris.vantine@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
defined('ABSPATH') or die("No script kiddies please!");
if(!class_exists('WP_Plugin_Template')) {
    class WP_Plugin_Template {
        public function __construct() {  
            add_action('admin_init', array(&$this, 'admin_init'));
            add_action('admin_menu', array(&$this, 'add_menu'));

            public function admin_init() {
                // Set up the settings for this plugin
                $this->init_settings();
                // Possibly do additional admin_init tasks
            }

            public function init_settings() {
                register_setting('wp_plugin_template-group', 'setting_a');
                register_setting('wp_plugin_template-group', 'setting_b');
            }
        }

        public static function activate() {
            //do nothing
        }

        public static function deactivate() {
            //do nothing
        }
    }
}
if(class_exists('WP_Plugin_Template'))
{
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('WP_Plugin_Template', 'activate'));
    register_deactivation_hook(__FILE__, array('WP_Plugin_Template', 'deactivate'));

    // instantiate the plugin class
    $wp_plugin_template = new WP_Plugin_Template();
}
?>