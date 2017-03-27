<?php

// Register Nav Walker class_alias
    // require_once('wp_bootstrap_navwalker.php');

// Setup
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );

// Includes
    include(get_template_directory() . '/includes/front/enqueue.php');
    include(get_template_directory() . '/includes/front/init.php' );
    include(get_template_directory() . '/includes/setup.php');
    include(get_template_directory() . '/includes/widgets.php');

// Acion and Filter Hooks
  	add_action('wp_enqueue_scripts', 'yeoguess_enqueue');
    add_action('after_setup_theme', 'yeoguess_setup_theme');
    add_action('widgets_init', 'yeoguess_widgets');
    add_action('init', 'create_post_type');

?>
