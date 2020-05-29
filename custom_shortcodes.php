<?php

// Add all shortcodes
add_shortcode('topicrect', 'topicrect_func');
add_shortcode('flexrow', 'flexrow_func');

function topicrect_func($atts, $content = null) {
    // set up default parameters
    extract(shortcode_atts(array(
        'image' => '',
        'url' => '#',
        'title' => 'Use title=Title',
        'width' => "31%"
       ), $atts));
    return "<div style='width:".$width.";' onclick='location.href=\"".$url."\";' style='background-image: url(".$image.")' class='topicrect'><div class='topicrect-title'>".$title."</div><div class='topicrect-content'>".$content."</div></div>";
}
function flexrow_func($atts, $content = null) {
    // set up default parameters
    extract(shortcode_atts(array(
        'image' => ''
       ), $atts));
    return do_shortcode("<div class='custom-flexrow'>".$content."</div>");
}
?>