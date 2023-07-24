<?php

add_action('init', 'greenshop_init_posttypes');

function greenshop_init_posttypes()
{

    $countries_args = array(
        'labels' => array(
            'name' => 'Countries',
            'singular_name' => 'Countries',
            'all_items' => 'All countries',
            'add_new' => 'Add new country',
            'add_new_item' => 'Add new country',
            'edit_item' => 'Edit country',
            'new_item' => 'New country',
            'view_item' => 'See the country',
            'search_items' => 'Search country',
            'not_found' => 'Countries not found',
            'not_found_in_trash' => 'Countries not found in trash',
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
            'custom-fields'
        ),
        'has_archive' => true
    );

    register_post_type('countries', $countries_args);

    $cities_args = array(
        'labels' => array(
            'name' => 'Cities',
            'singular_name' => 'Cities',
            'all_items' => 'All cities',
            'add_new' => 'Add new city',
            'add_new_item' => 'Add new city',
            'edit_item' => 'Edit city',
            'new_item' => 'New city',
            'view_item' => 'See the city',
            'search_items' => 'Search city',
            'not_found' => 'Cities not found',
            'not_found_in_trash' => 'Cities not found in trash',
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
            'custom-fields'
        ),
        'has_archive' => true
    );

    register_post_type('cities', $cities_args);

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

}

add_action('init', 'greenshop_init_taxonomies');

function greenshop_init_taxonomies()
{

    // connects Cities to Countries, add_action not needed

    // fix for error: array to string conversion

    $labels = array(
        'name' => 'Cities',
        'singular_name' => 'Cities',
        'search_items' => 'Search cities',
        'popular_items' => 'Popular cities',
        'all_items' => 'All cities',
        'edit_item' => 'Edit citiy',
        'update_item' => 'Update cities',
        'add_new_item' => 'Add new city',
        'new_item_name' => 'New city name',
        'separate_items_with_commas' => 'Separate cities with comas',
        'add_or_remove_items' => 'Add or remove cities',
        'choose_from_most_used' => 'Choose from most used cities',
        'menu_name' => 'Cities'
    );

    $labels = json_encode($labels);

    $cities = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrire' => array(
            'slug' => 'city'
        )
    );

    $cities = json_encode($cities);

    register_taxonomy(
        'cities',
        array('countries'),
        $cities
    );
}

?>