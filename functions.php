<?php

function university_files() {
    wp_enqueue_script("fc_university_main_js", get_theme_file_uri().'/build/index.js', array('jquery'), '1.0', true);
    wp_enqueue_style("custom-google-font", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("fc_university_main_styles", get_theme_file_uri().'/build/style-index.css');
    wp_enqueue_style("fc_university_extra_styles", get_theme_file_uri().'/build/index.css');
}

add_action('wp_enqueue_scripts', 'university_files');


function university_features() {
    
    //=================== COMMENTED OUT DYNAMIC MENU REGISTRATION =========================
    // register_nav_menu('headerMenu', 'Our Header Main Menu');
    // register_nav_menu('location--footer_menu_first', 'Footer - First');
    // register_nav_menu('location--footer_menu_second', 'Footer - Second');

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');