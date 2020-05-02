<?php

get_header()

?>

<?php 

if(have_posts()):
    while(have_posts()):
        the_post();

?>

<h2 class="right__title"><?php the_title() ?></h2>
<div class="post post--solo"><?php the_content() ?></div>
<div class="post post--solo">
    <a href="<?php the_field('url_du_site') ?>">Voir le site</a>
</div>

<?php

    endwhile;
endif;

?>

<?php 

get_footer()

?>