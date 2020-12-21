<?php

function decagon_files() {
    wp_enqueue_script('main-decagon-js', get_theme_file_uri('/index.js'), NULL, '1.0', true);
    wp_enqueue_script('main-decagon-juery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Munish+Condensed:300,300i,600,600i,800,800i|Mulish:100,300,300i,600,600i,800,800i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'decagon_files');