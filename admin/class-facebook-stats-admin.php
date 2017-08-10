<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Facebook_Stats
 * @subpackage Facebook_Stats/admin
 * @author     William Bewzenko de Jesus <williambewzenko@gmail.com>
 */
class Facebook_Stats_Admin {

	private $plugin_name;

	private $version;

	public function __construct($plugin_name, $version) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	public function enqueue_styles() {
		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__).'css/facebook-stats-admin.css', array(), $this->version, 'all');
	}

	public function enqueue_scripts() {
		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__).'js/facebook-stats-admin.js', array(), $this->version, false);
	}

}
