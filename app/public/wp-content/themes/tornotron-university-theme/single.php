<?php

get_header();

$counter = 0;
while(have_posts()) {
    the_post();
        ?> 
            <h1 class="post-heading"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
            <p class="post-content" ><?php the_content(); ?></p>
        <?php
}

get_footer();
?>