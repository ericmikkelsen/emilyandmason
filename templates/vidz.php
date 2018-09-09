<?php
/**
 * Template Name: vidz
 */

get_header();

    get_template_part( 'lib/template-parts/main', 'vidz' ) ;
    get_template_part( 'lib/template-parts/nav', get_post_type() ) ;

get_footer();
