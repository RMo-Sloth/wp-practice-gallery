function theme_setup() {
  add_theme_support('post-thumbnails');
  set_post_thumbnal_size( 900, 600 );

  add_theme_support('post-formats', ['gallery']);
}
add_action( 'after_setup_theme', 'theme_setup' );