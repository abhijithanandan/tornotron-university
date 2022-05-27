<?php
function university_post_types() {
    register_post_type('event', array(
        'has_archive' => true,
        'public' => true, 
        'labels' => array(
            'name' => 'Events',
            'all_item' => 'All Events', 
            'edit_item' => 'Edit Event', 
            'singular_name' => 'Event', 
            'add_new_item' => 'Add New Event'
        ), 
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'university_post_types');