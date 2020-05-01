<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    
    <?php wp_head(); ?>

</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left <?= is_page('contact') ? "left--contact" : "" ?>">
        <h1 class="left__title"><a class="left__title-link" href="<?= home_url() ?>">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>

          <?php
           wp_nav_menu([
            'theme_location' => 'footer'
          ]);
          ?>

          
        </nav>
      </header>
      <main class="right">