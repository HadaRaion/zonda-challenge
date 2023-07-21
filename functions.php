<?php
/**
 * Zonda-challenge functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Zonda-challenge
 */

function zonda_files() {
  wp_enqueue_script('main-zonda-js', get_theme_file_uri('/build/index.js'), null, '1.0', true);
  wp_enqueue_style('zonda_main_styles', get_theme_file_uri('/build/style-index.css'),  '', '202230720');
  wp_localize_script('main-zonda-js', 'zondaData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));
}

add_action('wp_enqueue_scripts', 'zonda_files');


function zonda_features() {
  add_theme_support('title-tag');
  // add_theme_support('post-thumbnails');
  add_image_size('employeeProfile', 400, 400, true);
  add_image_size('employeeProfile-2x', 800, 800, true);
}

add_action('after_setup_theme', 'zonda_features');

function zonda_post_types() {
  register_post_type('employee', array(
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Employees',
      'add_new_item' => 'Add New Employee',
      'edit_item' => 'Edit Employee',
      'all_items' => 'All Employees',
      'singular_name' => 'Employee'
    ),
    'menu_icon' => 'dashicons-id-alt'
  ));
}
 
add_action('init', 'zonda_post_types');
