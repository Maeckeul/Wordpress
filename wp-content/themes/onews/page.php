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
            <div><?php the_content() ?></div>
          </article>

        <?php
          endwhile;
        endif;
        ?>

        </div>

<?php

get_footer();

?>