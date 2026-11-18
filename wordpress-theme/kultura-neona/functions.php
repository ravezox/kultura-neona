<?php
if (!defined('ABSPATH')) exit;
add_action('after_setup_theme', function () {
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
 add_theme_support('woocommerce');
});
add_action('wp_enqueue_scripts', function () {
 wp_enqueue_style('kultura-neona-style', get_stylesheet_uri(), array(), '0.1.0');
});
add_action('after_switch_theme', function () {
 $pages = array('svetilniki' => 'Авторские светильники', 'rabbit' => 'Заяц с морковкой', 'lion' => 'Львёнок', 'owl' => 'Совушка', 'cloud' => 'Облачко', 'rocket' => 'Ракета');
 $parent = 0;
 foreach ($pages as $slug => $title) {
  $existing = get_page_by_path($slug);
  if (!$existing) {
   $id = wp_insert_post(array('post_type'=>'page','post_title'=>$title,'post_name'=>$slug,'post_status'=>'publish','post_parent'=>0));
  } else { $id = $existing->ID; }
 }
});
