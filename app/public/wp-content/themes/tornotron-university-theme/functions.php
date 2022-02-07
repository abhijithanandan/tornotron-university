<?php

function university_files() {
    wp_enqueue_style('university_main_style', get_stylesheet_uri()); //hooks
    wp_enqueue_style('university_additional_style', get_theme_file_uri('index.css')); //hooks
}

?> 

<?php

add_action('wp_enqueue_scripts', 'university_files');

?>