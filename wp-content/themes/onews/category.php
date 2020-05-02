<?php

get_header();

$postCategories = get_the_category(); 
$category = $postCategories[0]->name;
$categorySlug = $postCategories[0]->slug;
          

?>
        
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title"><?= $category ?></h2>
        <div class="posts">

        <?php
        if(have_posts()) :
          while(have_posts()) : the_post();
        ?>

          <article class="post">

            <a href="<?= get_category_link($postCategories[0]->term_id) ?>" class="post__category post__category--color-<?= $categorySlug ?>"><?= $category ?></a>
            <h3><?php the_title() ?></h3>
            <div class="post__meta">
              <img class="post__author-icon" src="<?= get_template_directory_uri() ?>/assets/images/icon-dar.png" alt="">
              <strong class="post__author"><?php the_author() ?></strong>

              <?php 
              $date = get_the_date(); 
              $datetime = get_the_date('Y-m-d');
              ?>

              <time datetime="<?= $datetime ?>"><?= $date ?></time>
            </div>
            <p><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="post__link">Continue reading</a>
          </article>

        <?php
          endwhile;
        endif;
        ?>

        </div>

<?php

get_footer();

?>