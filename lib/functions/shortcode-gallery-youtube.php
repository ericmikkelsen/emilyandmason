<?php

// this gets the url from noembed
function yt_get_json($id) {
    $noembed_yt_url = 'https://noembed.com/embed?url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D';
    $json = file_get_contents( $noembed_yt_url.$id );
    $json = json_decode($json, true);
    return $json;
}

//this pulls the url out of a 
function yt_get_the_id( $url ) {
    $url = explode('watch?v=',$url);
    if (strpos($url[1], '&') !== false) {
        $url = explode('&', $url[1]);
        $id = $url[0];
    } else {
        $id = $url[1];
    }
    return $id;
}

function get_yt($url){
    $id = yt_get_the_id($url);
    $yt = yt_get_json($id);
    return $yt;
}

function gallery_flexbox_css( $height, $width, $selector ,$size = 'medium', $units = 'rem') {
    $ratio = $height / $width;
    $percentage = $ratio * 100;
    $size_em = get_option( $size.'_size_w' )/16/2;
    $flex_grow = $ratio * 2;
    $flex_basis = ( $flex_grow * $size_em ).$units;
    $flex_styles = "
        .{$selector} {
            -webkit-flex-basis: {$flex_basis};
               -moz-flex-basis: {$flex_basis};
                -ms-flex-basis: {$flex_basis};
                    flex-basis: {$flex_basis};
            -webkit-flex-grow: {$flex_grow};
               -moz-flex-grow: {$flex_grow};
                -ms-flex-grow: {$flex_grow};
                    flex-grow: {$flex_grow};
        }
        .{$selector} .Gallery-iframe:before {
            padding-top: {$percentage}%;
        }
    ";
    return $flex_styles;
}

// define the gallery_style callback
add_shortcode( 'gallery_video', 'gallery_youtube_shortcode_em' );

function gallery_youtube_shortcode_em( $atts ){
    $video_urls = explode(',',$atts['urls']);
    $videos = array_map('get_yt', $video_urls);
    $size = $atts['size'];

    $style = '<style>';
    $gallery = " <div class='Gallery'>";
    foreach ($videos as $i => $video) {
        $height = $video['height'];
        $width = $video['width'];
        $hash = hash( 'crc32b', $video['url'].$size, false);
        $selector = 'Gallery-item-'.$hash;

        $video_style = gallery_flexbox_css($height, $width, $selector, $size);
        $video_markup = "<figure class='Gallery-item Gallery-item-".$hash."'>
                            <div class='Gallery-iframe'>
                                ".$video['html']."
                            </div>
                            <p class='h2 u-text-shadow'>".$video['title']."</p>
                        </figure>";
                        
        $style .= $video_style;
        $gallery .= $video_markup;
    }
    $style .= "</style>";
    $gallery .='</div><!-- /.gallery -->';
    return $style.$gallery;
}
