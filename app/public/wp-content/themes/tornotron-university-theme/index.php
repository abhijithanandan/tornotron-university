<?php

get_header();

$counter = 0;
while(have_posts()) {
    the_post();
        ?> 
            <h1 class="post-listing" ><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
        <?php
}

get_footer();

?>

