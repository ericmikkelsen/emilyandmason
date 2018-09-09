<?php 

function shortcode_faq( $atts, $content ) {
    $a = shortcode_atts( array(
        'question' => 'something',
        'h'  => 2,
    ), $atts );
    $h = $a['h'];
    $question = $a['question'];
    $answer = strip_tags($content, '<a>');
    
    $faq = '
        <div class="FAQ gutters-400">
            <h'.$h.' class="FAQ__question">
                '.$question.'
            </h'.$h.'>
            <p class="FAQ__answer">
                '.$answer.'
            </p>
        </div>
    ';

    return $faq;
}
add_shortcode( 'faq', 'shortcode_faq' );