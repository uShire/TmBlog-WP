<?php

function tmBlog_support() {
    //displays branding
    add_theme_support( 'custom-logo' );

    //displays menus
    add_theme_support( 'menus' );

    //displays images on posts
    add_theme_support( 'post-thumbnails' );



} 
add_action('after_setup_theme', 'tmBlog_support');