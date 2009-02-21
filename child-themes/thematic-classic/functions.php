<?php

// Filter away the default scripts loaded with Thematic
function childtheme_head_scripts() {
    // Abscence makes the heart grow fonder
}
add_filter('thematic_head_scripts','childtheme_head_scripts');

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
function childtheme_menu_args($args) {
    $args = array(
        'show_home' => 'Home',
        'sort_column' => 'menu_order',
        'menu_class' => 'menu',
        'echo' => true
    );
	return $args;
}
add_filter('wp_page_menu_args','childtheme_menu_args');


?>