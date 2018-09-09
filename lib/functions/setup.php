<?php //Register Nav

//MENUS
    register_nav_menus( [
        'main_nav' => 'main-navigation',
    ] );

//FEATURES
    $features = [
        'post-thumbnails',
        'title-tag',
    ];

    array_map( 'add_theme_support', $features );

//POST FORMATS
    // $post_formats = [ 'audio' ];
    // add_theme_support( 'post-formats', $post_formats );
