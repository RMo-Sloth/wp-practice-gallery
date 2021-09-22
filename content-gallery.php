<div class="w3-col m4 l4 pic">
  <?php 
    if(has_post_thumbnail()):
    printf(
      '<div class="post-thumbnail"><a href="%s">%s</a></div>',
      get_the_permalink(),
      get_the_post_thumbnail( $id, 'large', ['class' => 'w3-animate-opacity w3-hover-opacity'])
    );
  endif; 
  the_content();
  ?>
</div>