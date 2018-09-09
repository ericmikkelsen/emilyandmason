<main class="Main gutters-400">
    <h1 class="h1 u-text-shadow">
        <?php the_title(); ?>
    </h1>
    <?php
    
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_content();   

                $fields = get_fields( $post->ID );
                $video_urls = implode(',',array_column( $fields['videos'], 'youtube_url' ));
                echo do_shortcode( '[gallery_video urls="'.$video_urls.'" size="large"]' );
            }
        }

        
    ?>
</main>