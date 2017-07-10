<?php
/**
 * Created by PhpStorm.
 * User: Nihrom
 * Date: 10.07.2017
 * Time: 12:13
 */
/**
 * Register styles.
 */
function specmir_styles() {

    wp_register_style( 'font-awesome', get_template_directory_uri().'/assets/vendors/font-awesome/css/font-awesome.min.css', false, '3' );
    wp_enqueue_style( 'font-awesome' );

    wp_register_style( 'bootstrap', get_template_directory_uri().'/assets/vendors/bootstrap/dist/css/bootstrap.min.css', false, '4' );
    wp_enqueue_style( 'bootstrap' );

    wp_register_style( 'aos', get_template_directory_uri().'/assets/vendors/aos/dist/aos.css', false, '1' );
    wp_enqueue_style( 'aos' );

    wp_register_style( 'style', get_template_directory_uri().'/style.css', false);
    wp_enqueue_style( 'style' );


}
add_action( 'wp_enqueue_scripts', 'specmir_styles' );

/**
 * Register Script
 */
function specmir_scripts() {

    wp_register_script( 'jquery', get_template_directory_uri().'/assets/vendors/jquery/jquery-3.2.1.min.js', array(), '3', true );
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'bootstrap', get_template_directory_uri().'/assets/vendors/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), '4', true );
    wp_enqueue_script( 'bootstrap' );

    wp_register_script( 'aos', get_template_directory_uri().'/assets/vendors/aos/dist/aos.js', array( 'jquery' ), '1', true );
    wp_enqueue_script( 'aos' );

}
add_action( 'wp_enqueue_scripts', 'specmir_scripts' );