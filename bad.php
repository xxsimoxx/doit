<?php
/**
 * Plugin Name: Do It Bad
 * Plugin URI: https://software.gieffeedizioni.it
 * Description: Statistics for Update Manager by CodePotent.
 * Version: 1.0.0
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Author: Gieffe edizioni srl
 * Author URI: https://www.gieffeedizioni.it
 * Text Domain: do-it-bad
 * Domain Path: /languages
 */

namespace XXSimoXX\doitbad;

if (!defined('ABSPATH')) {
	die('-1');
}

function render_page () {
	echo '<h1>Doing it bad!</h1>';
	echo 'I am <code>' . __FILE__ . '</code>.';

}

add_action('admin_menu', '\XXSimoXX\doitbad\create_menu', 10);

function create_menu() {
	if (!current_user_can('edit_posts')) {
		return;
	}
	$page = add_menu_page(
		'Do It Bad',
		'Do It Bad',
		'edit_posts',
		'doitbad',
		'\XXSimoXX\doitbad\render_page'
	);
}
