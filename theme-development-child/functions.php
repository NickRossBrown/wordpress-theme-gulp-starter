<?php

add_action('wp_enqueue_scripts', '__customtheme_child_stylesheet');

function __customtheme_child_stylesheet() {
  wp_enqueue_style('__customtheme_child_stylesheet', get_stylesheet_uri() . './bundle.css', array('__customtheme-stylesheet'),'add', '1.0.0');
}

?>