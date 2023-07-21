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

function getYearsMonthsWorked($startDate) {
  $today = new DateTime();
  $startDateObj = DateTime::createFromFormat('Ymd', $startDate);

  $interval = $today->diff($startDateObj);

  $years = $interval->y;
  $months = $interval->m;

  $result = '';

  if ($years > 0) {
    $result .= ($years === 1) ? '1 year ' : $years . ' years ';
  }

  if ($months > 0) {
    $result .= ($months === 1) ? '1 month' : $months . ' months';
  }

  return trim($result);
}

function custom_post_navigation($args) {
  if (!isset($args)) {
    $args = 'post';
  }

  $next_post = get_next_post();
  $prev_post = get_previous_post();

  if ($next_post) {
    $next_post_link = get_next_post_link('%link', '<span class="text-xl text-center next-post-link-text">Next ' . $args . '</span>');
  } else {
    $next_post_link = '<span class="text-xl text-center next-post-link-text disabled-link">No next ' . $args . '</span>';
  }

  if ($prev_post) {
    $prev_post_link = get_previous_post_link('%link', '<span class="text-xl text-center prev-post-link-text">Prev ' . $args . '</span>');
  } else {
    $prev_post_link = '<span class="text-xl text-center prev-post-link-text disabled-link">No prev ' . $args . '</span>';
  }

  $post_type_archive_link = get_post_type_archive_link($args);
  $archive_link_text = 'See all ' . $args . 's';

  echo '<nav class="custom-post-navigation">';
  echo $next_post_link;
  if ($post_type_archive_link) {
    echo '<a class="post-list-link" href="' . $post_type_archive_link . '"><span class="text-xl text-center post-list-link-text">' . $archive_link_text . '</span></a>';
  }
  echo $prev_post_link;
  echo '</nav>';
}