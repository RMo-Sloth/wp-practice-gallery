<article class="post">
  <?php the_title( '<h2>', '</h2>' ); ?>
  <p class="meta">Posted at <?php the_time(); ?> at <?php the_date(); ?> by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php the_author(); ?></a></p>
</article>