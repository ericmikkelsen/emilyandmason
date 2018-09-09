<?php
/**
 * Template Name: Homepage
 */

get_header();

    get_template_part( 'lib/template-parts/main', 'home' ) ;
    get_template_part( 'lib/template-parts/nav', get_post_type() ) ;

get_footer();