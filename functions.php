<?php

$template_parts = 'lib/template-parts';

//functions
$includes = [
    __DIR__.'/lib/functions/assets.php',
    __DIR__.'/lib/functions/setup.php',
    __DIR__.'/lib/functions/shortcode-faq.php',
    __DIR__.'/lib/functions/shortcode-gallery-youtube.php',
];

foreach ( $includes as $include ) {
    require_once($include);
}