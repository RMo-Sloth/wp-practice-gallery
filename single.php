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
      HELLO
    </main>
  </div>
  <footer>
    <p>Photogenic &copy; <?php echo get_the_date('Y'); ?></p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>