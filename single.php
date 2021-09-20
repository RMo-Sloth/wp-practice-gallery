<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <title><?php the_title(); ?></title>
</head>
<body>
  <header class="w3-container w3-teal">
    <div class="w3-row w3-teal">
      <div class="w3-col m9 l9">
        <h1><span>Photo</span>Genik</h1>
      </div>
      <div class="w3-col m3 l3">
        <input class="w3-input" type="text" placeholder="Search...">
      </div>
    </div>
  </header>

  <div class="w3-row">
    <div class="w3-col m3 l3">
      <ul class="w3-ul">
        <li><a href="#">Nature</a></li>
        <li><a href="#">Animals</a></li>
        <li><a href="#">Objects</a></li>
        <li><a href="#">People</a></li>
        <li><a href="#">Abstract</a></li>
      </ul>
    </div>
    <main class="w3-col m9 l9">
      <article class="post">
        <div class="meta">Posted at 2:00pm on 03-29-2017 by Brad</div>
        <hr>
        <img class='w3-animate-right' src="<?php echo get_stylesheet_directory_uri() ;?>/images/1.jpg" alt="">
        <div class="w3-row">
          <div class="w3-col l2">
            <br>
            <a class='w3-btn w3-red' href="<?php echo home_url(); ?>">Back</a>
          </div>
          <div class="w3-col l10">
            <h1>Photo Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis reiciendis maxime nihil. Iste a culpa omnis debitis laudantium. Quaerat sint quam cupiditate vitae explicabo accusamus optio ut vel laboriosam voluptate?</p>
          </div>
        </div>
      </article>
    </main>
  </div>
  <footer>
    <p>Photogenic &copy; <?php echo get_the_date('Y'); ?></p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>