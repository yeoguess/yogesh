<?php

    function yeoguess_enqueue() {

    wp_register_style ('yeoguess_bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style ('yeoguess_stylesheet' , get_template_directory_uri() . '/assets/css/style.css');
    wp_register_style ('yeoguess_font-awesome' , get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_register_style ('yeoguess_chocolat' , get_template_directory_uri() . '/assets/css/chocolat.css');
    wp_register_style ('yeoguess_owl.carousel' , get_template_directory_uri() . '/assets/css/owl.carousel.css');

    wp_enqueue_style ('yeoguess_bootstrap');
    wp_enqueue_style ('yeoguess_stylesheet');
    wp_enqueue_style ('yeoguess_font-awesome');
    wp_enqueue_style ('yeoguess_chocolat');
    wp_enqueue_style ('yeoguess_owl.carousel');

    wp_register_script ('yeoguess_jquery.min' ,  get_template_directory_uri() . '/assets/js/jquery-2.1.4.min.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_bootstrap' ,  get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_bars' ,  get_template_directory_uri() . '/assets/js/bars.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_controls' ,  get_template_directory_uri() . '/assets/js/controls.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_counterup' ,  get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_easing' ,  get_template_directory_uri() . '/assets/js/easing.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_easyResponsiveTabs' ,  get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_jquery.chocolat' ,  get_template_directory_uri() . '/assets/js/jquery.chocolat.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_jquery.filterizr' ,  get_template_directory_uri() . '/assets/js/jquery.filterizr.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_move-top' ,  get_template_directory_uri() . '/assets/js/move-top.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_owl.carousel' ,  get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '', true);
    wp_register_script ('yeoguess_waypoints' ,  get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '', true);

    wp_enqueue_script( 'yeoguess_jquery.min' );
    wp_enqueue_script( 'yeoguess_bootstrap' );
    wp_enqueue_script( 'yeoguess_bars' );
    wp_enqueue_script( 'yeoguess_controls' );
    wp_enqueue_script( 'yeoguess_counterup' );
    wp_enqueue_script( 'yeoguess_easing' );
    wp_enqueue_script( 'yeoguess_easyResponsiveTabs' );
    wp_enqueue_script( 'yeoguess_jquery.chocolat' );
    wp_enqueue_script( 'yeoguess_jquery.filterizr' );
    wp_enqueue_script( 'yeoguess_move-top' );
    wp_enqueue_script( 'yeoguess_owl.carousel' );
    wp_enqueue_script( 'yeoguess_waypoints' );
    }

?>
