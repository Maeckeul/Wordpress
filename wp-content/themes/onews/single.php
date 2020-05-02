<?php

get_header();

?>
        
        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title"><?php the_title() ?></h2>
        <div class="posts">

        <?php
        if(have_posts()) :
          while(have_posts()) : the_post();
        ?>

          <article class="post post--solo">

          <?php 
          $postCategories = get_the_category(); 
          $category = $postCategories[0]->name;
          $categorySlug = $postCategories[0]->slug;
          ?>

            <a href="<?= get_category_link($postCategories[0]->term_id) ?>" class="post__category post__category--color-<?= $categorySlug ?>"><?= $category ?></a>
            <div class="post__meta">
              <img class="post__author-icon" src="<?= get_template_directory_uri() ?>/assets/images/icon-dar.png" alt="">
              <strong class="post__author"><?php the_author() ?></strong>

              <?php 
              $date = get_the_date(); 
              $datetime = get_the_date('Y-m-d');
              ?>

              <time datetime="<?= $datetime ?>"><?= $date ?></time>
            </div>
            <div><?php the_content() ?></div>
            
            <div class="post__nav__link">
              <div><?php previous_post_link() ?></div>
              <div><?php next_post_link() ?></div>
            </div>
          </article>

        <?php
          endwhile;
        endif;
        ?>

        </div>
        
        <div>
          <h3>Plus d'articles de cette catégorie ?</h3>
          
          <?php
            $args = [
              'cat' => $postCategories[0]->term_id,
              'post__not_in' => [get_the_ID()]
            ];

            $query = new WP_Query($args);

            if($query->have_posts()) {
              echo '<ul>';
              while( $query->have_posts()) {
                $query->the_post();
                echo '<li>' . get_the_title() . '</li>';
              }
              echo '</ul>';
            } else {
              echo '<div>Il n\' y a pas plus d\'articles dans cette catégorie</div>';
            }

            wp_reset_postdata();
          ?>
          
        </div>

<?php

get_footer();

?>