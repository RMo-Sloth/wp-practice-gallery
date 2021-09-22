<?php get_header();
  if( have_posts() ):
    while( have_posts() ): the_post(); ?>
      <article class="post">
        <p class="meta">Posted at <?php the_time(); ?> on <?php the_date(); ?> by <a href="<?php get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php the_author(); ?></a></p>
        <hr>
        <?php the_post_thumbnail( 'large', [ 'class' => 'w3-animate-right'] ); ?>
        <div class="w3-row">
          <div class="w3-col l2">
            <br />
            <a href="<?php echo site_url(); ?>" class="w3-btn w3-red">Back</a>
          </div>
          <div class="w3-col l10">
          <?php the_title('<h1>', '</h1>');
            the_content();
          ?>
          </div>
        </div>
      </article>
    <?php endwhile;
  else:
    wpautop( __('No valid posts have been found') );
  endif;
get_footer();