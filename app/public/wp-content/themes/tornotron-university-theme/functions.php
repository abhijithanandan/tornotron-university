<?php

function university_files()
{
    wp_enqueue_style('university_main_style', get_stylesheet_uri()); //hooks
    wp_enqueue_style('university_additional_style', get_theme_file_uri('css/index.css')); //hooks
    wp_enqueue_style('custom_google_fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,400;1,700&display=swap'); //api
    wp_enqueue_style('university_additional_style', 'https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css'); //api

    wp_enqueue_script('main_university_js', get_theme_file_uri('js/index.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
}

add_action('after_setup_theme', 'university_features');

function university_adjust_query($query)
{
    if (!is_admin() and is_post_type_archive($post_types = 'event') and is_main_query()) {
        // if (true) {
        $today = date('Ymd');
        $query->set('posts_per_page', 3);
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'

            )
        ));
    }
}

add_action('pre_get_posts', 'university_adjust_query', 100);
