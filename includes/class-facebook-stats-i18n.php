<?php

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Facebook_Stats
 * @subpackage Facebook_Stats/includes
 * @author     William Bewzenko de Jesus <williambewzenko@gmail.com>
 */
class Facebook_Stats_i18n {

	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			'facebook-stats',
			false,
			dirname(dirname(plugin_basename(__FILE__))).'/languages/'
		);
	}

}
