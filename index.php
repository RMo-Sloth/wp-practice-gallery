<?php get_header();
  if( have_posts() ):
    while( have_posts() ): the_post();
      get_template_part('content', get_post_format() );
    endwhile;
  else:
    wpautop( __('No valid posts have been found') );
  endif;
get_footer();