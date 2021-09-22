<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" >
  <title><?php the_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="w3-container w3-teal">
    <div class="w3-row w3-teal">
      <div class="w3-col m9 l9">
        <h1><?php bloginfo('name'); ?></h1>
      </div>
      <div class="w3-col m3 l3">
        <form method="get" action="<?php echo esc_url( home_url('/') ); ?>">
          <input name='s' class="w3-input" type="text" placeholder="Search...">
        </form>
      </div>
    </div>
  </header>
  <div class="w3-row">
    <div class="w3-col m3 l3">
      <ul class="w3-ul">
        <?php 
          if( is_active_sidebar( 'sidebar' )):
            dynamic_sidebar( 'sidebar' );
          endif;
        ?>
      </ul>
    </div>
  <main class="w3-col m9 l9">
