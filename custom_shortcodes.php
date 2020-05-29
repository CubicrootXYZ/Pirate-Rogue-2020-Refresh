<?php

// Add all shortcodes
add_shortcode('topicrect', 'topicrect_func');
add_shortcode('flexrow', 'flexrow_func');
add_shortcode('hpic', 'hpic_func');

function topicrect_func($atts, $content = null) {
    // set up default parameters
    extract(shortcode_atts(array(
        'image' => '',
        'url' => '#',
        'title' => 'Use title=Title',
        'width' => "31%"
       ), $atts));
    return "<div onclick='location.href=\"".$url."\";' style='background-image: url(\"".$image."\"); width:".$width.";' class='topicrect'><div class='topicrect-title'>".$title."</div><div class='topicrect-content'>".$content."</div></div>";
}
function flexrow_func($atts, $content = null) {
    // set up default parameters
    extract(shortcode_atts(array(
        'image' => ''
       ), $atts));
    return do_shortcode("<div class='custom-flexrow'>".$content."</div>");
}
function hpic_func($atts) {
    // set up default parameters
    extract(shortcode_atts(array(
        'image' => '',
        'title' => ''
       ), $atts));
    return do_shortcode("<div class='custom-hpic' style='background-image: url(\"".$image."\")'><div class='custom-hpic-inner' ><h2>".$title."</h2></div></div>");
}
?>