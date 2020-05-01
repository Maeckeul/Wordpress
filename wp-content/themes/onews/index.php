<?php

get_header();

?>
        
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Latest News</h2>
        <div class="posts">

        <?php
        if(have_posts()) :
          while(have_posts()) : the_post();
        ?>

          <article class="post">

          <?php 
          $postCategories = get_the_category(); 
          $category = $postCategories[0]->name;
          $categorySlug = $postCategories[0]->slug;
          ?>

            <a href="" class="post__category post__category--color-<?= $categorySlug ?>"><?= $category ?></a>
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