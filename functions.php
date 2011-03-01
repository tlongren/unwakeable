<?php 
// Current version of Unwakeable
$content_width = 560;
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'nav-menus' );
}
if (function_exists('register_nav_menu')) {
	register_nav_menu('main-menu', __('Main Menu'));
}
function defaultUnwakeableMenu() {
	echo "<ul id=\"menu\">";
	wp_list_pages('sort_column=menu_order&depth=1&title_li=');
	echo "</ul>";
}
define('K2_CURRENT', '1.5.6');

// Is this MU or no?
define('K2_MU', (isset($wpmu_version) or (strpos($wp_version, 'wordpress-mu') !== false)));

// Are we using K2 Styles?
define('K2_CHILD_THEME', get_stylesheet() != get_template());

// Features that can be disabled by Child Themes
@define( 'K2_STYLES', true );
@define( 'K2_HEADERS', true );

// WordPress compatibility
@define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
@define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content' );

/* Blast you red baron! Initialize the k2 system! */
require_once(TEMPLATEPATH . '/app/classes/k2.php');
K2::init();
?>