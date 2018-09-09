<?php 

    get_header();
        get_template_part( 'lib/template-parts/style', get_post_type() ) ;
        get_template_part( 'lib/template-parts/main', get_post_type() ) ;
        get_template_part( 'lib/template-parts/nav', get_post_type() ) ;

    get_footer();

?>