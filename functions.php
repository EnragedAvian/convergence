<?php
wp_enqueue_style( 'style', get_stylesheet_uri(), 1.3);
wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', false, 'all');
wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/menu.js', false, 'all');
add_theme_support( 'post-thumbnails' );