<nav id="MainNavigation" class="MainNavigation">
    <?php 
        $MainNavigation__links = wp_nav_menu([
            'container'       => false,
            'echo'            => false,
            'theme_location'  => 'main_nav',
		]);

        //remove everythign but the a tags
        $MainNavigation__links = strip_tags($MainNavigation__links, '<a>');

        // add MainNavigation classes to links
        $MainNavigation__links = str_replace( '<a', '<a class="MainNavigation__link"', $MainNavigation__links );

        echo $MainNavigation__links;
    ?>
</nav>