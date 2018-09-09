<?php
    $images = [
        'yellow'    => [
            'url'       => 'emily.svg',
            'position'  => 'bottom right',
            'repeat'    => 'no-repeat',
        ],
        'pink' => [
            'url'       => 'mason.svg',
            'position'  => 'bottom left',
            'repeat'    => 'no-repeat',
        ],
        'blue' => [
            'url'       => 'its-nice-to-be-nice.svg',
            'position'  => 'right 19.5rem',
            'repeat'    => 'no-repeat',
        ],
    ];

    if( $color = get_field('theme_color') ) {
        $url = get_template_directory_uri().'/images/'.$images[$color]['url'];
        $repeat = $images[$color]['repeat'];
        $position = $images[$color]['position'];

?>

<style style="display:none">
    body {
        background-image: url(<?php echo $url; ?>);
        background-position: <?php echo $position; ?>;
        background-repeat: <?php echo $repeat; ?>;
        background-size: auto 14em;
    }
</style>

<?php } ?>