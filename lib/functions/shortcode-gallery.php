<?php
// define the gallery_style callback
add_shortcode( 'gallery', 'gallery_shortcode_em' );

function gallery_shortcode_em( $atts ){
  $image_ids = explode(',',$atts['ids']);
  $size = $atts['size'];
  $size_em = get_option( $size . '_size_w' )/16/4;
  $gallery_items = [];
  $gallery_style = "
    display: -webkit-flex;
    display: -ms-flexbox;
    display: -ms-flex;
    display: flex;
    width:100%;
    flex-wrap: wrap;
  ";
  $gallery = "
  <div class='gallery' style='{$gallery_style}'>";
  foreach ($image_ids as $image_id) {
    $dimensions = wp_get_attachment_image_src($image_id, $size);
    $flex_grow = ($dimensions[1] / $dimensions[2])*2;
    $flex_basis = ($flex_grow * $size_em).'em';
    $image_style = "
      -webkit-flex-basis: {$flex_basis};
         -moz-flex-basis: {$flex_basis};
          -ms-flex-basis: {$flex_basis};
              flex-basis: {$flex_basis};
      -webkit-flex-grow: {$flex_grow};
         -moz-flex-grow: {$flex_grow};
          -ms-flex-grow: {$flex_grow};
              flex-grow: {$flex_grow};
              margin: .72em .36em 0;
    ";
    $image = wp_get_attachment_image($image_id, $size);
    $image = "<figure class='gallery-item gallery-item-{$image_id}' style='{$image_style}'>{$image}</figure>";
    $gallery .= $image;
  }
  $gallery .='</div><!-- /.gallery -->';
  return $gallery;
}
