<?php

// Add all shortcodes
add_shortcode('topicrect', 'topicrect_func');

function topicrect_func($atts, $content = null) {
    // set up default parameters
    extract(shortcode_atts(array(
        'image' => '',
        'url' => '#',
        'title' => 'Use title=Title'
       ), $atts));
    return "<a href='".$url."'><div style='background-image: url(".$image.")' class='topicrect'><div class='topicrect-title'>".$title."</div><div class='topicrect-content'>".$content."</div></div></a>";
}
?>