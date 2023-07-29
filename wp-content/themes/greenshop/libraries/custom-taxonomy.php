<?php

add_action('init', 'greenshop_init_posttypes');

function greenshop_init_posttypes()
{

    $fights_args = array(
        'labels' => array(
            'name' => 'Fights',
            'singular_name' => 'Fights',
            'all_items' => 'All fights',
            'add_new' => 'Add new fight',
            'add_new_item' => 'Add new fight',
            'edit_item' => 'Edit fight',
            'new_item' => 'New fight',
            'view_item' => 'See the fight',
            'search_items' => 'Search fight',
            'not_found' => 'fights not found',
            'not_found_in_trash' => 'fights not found in trash',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_bar' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author',
            'custom-fields',
            'post-formats'
        ),
        'has_archive' => true
    );

    register_post_type('fights', $fights_args);

    $events_args = array(
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Events',
            'all_items' => 'All events',
            'add_new' => 'Add new event',
            'add_new_item' => 'Add new event',
            'edit_item' => 'Edit event',
            'new_item' => 'New event',
            'view_item' => 'See the event',
            'search_items' => 'Search event',
            'not_found' => 'Events not found',
            'not_found_in_trash' => 'Events not found in trash',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_bar' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author',
            'custom-fields',
            'post-formats',
        ),
        'has_archive' => true
    );

    register_post_type('events', $events_args);

}

add_action('init', 'greenshop_init_taxonomies');

function greenshop_init_taxonomies()
{

    register_taxonomy(
        'Locations',
        array('events', 'fights'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Locations',
                'singular_name' => 'Locations',
                'search_items' => 'Search locations',
                'popular_items' => 'Popular locations',
                'all_items' => 'All locations',
                'edit_item' => 'Edit citiy',
                'update_item' => 'Update locations',
                'add_new_item' => 'Add new location',
                'new_item_name' => 'New location name',
                'separate_items_with_commas' => 'Separate locations with comas',
                'add_or_remove_items' => 'Add or remove locations',
                'choose_from_most_used' => 'Choose from most used locations',
                'menu_name' => 'locations'
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrire' => array(
                'slug' => 'location'
            )
        )
    );
}

?>