<?php

function university_files() {
    wp_enqueue_style('university_main_style', get_stylesheet_uri()); //hooks
    wp_enqueue_style('university_additional_style', get_theme_file_uri('index.css')); //hooks
    wp_enqueue_style('custom_google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,400;1,700&display=swap'); //api
    wp_enqueue_style('university_additional_style', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css'); //api
}

?> 

<?php

add_action('wp_enqueue_scripts', 'university_files');

?>