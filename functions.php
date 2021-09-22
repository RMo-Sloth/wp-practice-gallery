<?php

require_once('widgets/class-wp-widget-categories.php');

function theme_setup() {
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 900, 600 );

  add_theme_support('post-formats', ['gallery']);
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_widgets() {
  register_sidebar( [
    'name' => __('Sidebar'),
    'id' => 'sidebar'
  ] );
  register_widget('WP_Widget_Categories_Custom');
}
add_action('widgets_init', 'theme_widgets');