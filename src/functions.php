<?php
// register a menu 
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

//add featured image
add_theme_support( 'post-thumbnails' );

add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'themes/dkb-stupid-nft/node_modules';
  return $exclude_filters;
});