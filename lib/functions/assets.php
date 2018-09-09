<?php

function assets() {

    $location_uri = get_stylesheet_directory_uri();

    $styles = json_decode( file_get_contents( get_stylesheet_directory().'/css/manifest.css.json' ) );

    foreach ($styles as $key => $file_name) {
        $handle = str_replace('.css', '', $key);
        $src = $location_uri . '/css/' . $file_name;
        wp_enqueue_style( $handle, $src, false, null);
    }
}

add_action('wp_enqueue_scripts', 'assets', 100);