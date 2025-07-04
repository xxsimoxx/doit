<?php
/**
 * Plugin Name: Do It Bad
 * Plugin URI: https://software.gieffeedizioni.it
 * Description: Let's mess up the dir!
 * Version: 9.0.3
 * Requires CP: 1.1
 * Requires PHP: 7.4
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Author: Gieffe edizioni srl
 * Author URI: https://www.gieffeedizioni.it
 * Premium URI: https://simonefioravanti.it
 * Text Domain: do-it-bad
 * Domain Path: /languages
 */

namespace XXSimoXX\doitbad;

if (!defined('ABSPATH')) {
	die('-1');
}

class Bad {

	public function __construct() {
		add_action('admin_menu', [$this, 'create_menu'], 10);
		$x = json_validate('tddlel');
		$y = str_contains('sdfv<sd', 'sfasds');
	}

	public function create_menu() {
		if (!current_user_can('edit_posts')) {
			return;
		}
		$page = add_menu_page(
			'Do It Bad',
			'Do It Bad',
			'edit_posts',
			'doitbad',
			[$this, 'render_page'],
			'dashicons-pets'
		);
	}

	public function render_page() {
		echo __DIR__;
		echo '<script> jQuery(document).ready(function(){';
		echo ' jQuery("#wpwrap").css("background-image", "url('.plugin_dir_url(__FILE__).'glass2.png)");';
		echo ' jQuery("#wpwrap").css("background-position", "center");';
		echo ' jQuery("#wpwrap").css("background-repeat", "no-repeat");';
		echo ' jQuery("#wpwrap").css("background-size", "cover");';
		echo '});</script>';

		echo '<h1>Doing it bad!</h1>';
		echo 'I am <code>'.__FILE__.'</code>.';
		echo '<h2 id="ciao">Welcome to the sandbox</h2>';
		echo '<pre>';
		// PLAY THERE
		esc_html_e('Hi!', 'bad');

		str_starts_with('a', 'b');
		// END OF GAMES
		echo '</pre>';

	}

	public function DoNothing_yes() {
		return FALSE;
	}

}

?>

new Bad;

