<?php

function udemy_resources() {
    wp_enqueue_style('udemy_styles', get_stylesheet_uri());
}



add_action('wp_enqueue_scripts', 'udemy_resources');
