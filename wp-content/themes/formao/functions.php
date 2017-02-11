<?php

remove_action('wp_head', 'wp_generator');
add_action('init', 'formao_add_menu');
add_filter('upload_size_limit', 'filter_site_upload_size_limit');
add_filter('upload_mimes', 'custom_upload_mimes');
add_theme_support('post-thumbnails');

function custom_upload_mimes($existing_mimes = array()) {
// add your extension to the array
    $existing_mimes['exe'] = 'application/exe';
    return $existing_mimes;
}

function formao_add_menu() {
    register_nav_menu('main_menu', 'Menu principal');
}

function filter_site_upload_size_limit() {
    $size = 1024 * 1024 * 16;
    return $size;
}
