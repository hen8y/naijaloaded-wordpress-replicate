<?php
// This file is part of the Carrington Theme Framework for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2010 Crowd Favorite, Ltd. All rights reserved.
// http://crowdfavorite.com
//
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// **********************************************************************
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
//	ini_set('display_errors', '1');
//	ini_set('error_reporting', E_ALL);
define('CFCT_CORE_VERSION', '3.0.1');
// Path to Carrington Core parent directory (usually the theme).
if (!defined('CFCT_PATH')) {
	define('CFCT_PATH', trailingslashit(TEMPLATEPATH));
}
load_theme_textdomain('carrington');
$cfct_options[] = 'cfct_about_text';
$cfct_options[] = 'cfct_credit';
$cfct_options[] = 'cfct_wp_footer';
include_once(CFCT_PATH.'carrington-core/admin.php');
include_once(CFCT_PATH.'carrington-core/templates.php');
include_once(CFCT_PATH.'carrington-core/utility.php');
include_once(CFCT_PATH.'carrington-core/ajax-load.php');
include_once(CFCT_PATH.'carrington-core/attachment.php');
include_once(CFCT_PATH.'carrington-core/compatibility.php');
cfct_load_plugins();
function cfct_init() {
	cfct_admin_request_handler();
	if (cfct_get_option('cfct_ajax_load') == 'yes') {
		cfct_ajax_load();
	}
}
add_action('init', 'cfct_init');

function cfct_wp_footer() {
	echo get_option('cfct_wp_footer');
}
add_action('wp_footer', 'cfct_wp_footer');

function cfct_about_text() {
	$about_text = get_option('cfct_about_text');
	if (!empty($about_text)) {
		$about_text = cfct_basic_content_formatting($about_text);
	}
	else {
		global $post, $wp_query;
		$orig_post = $post;
		isset($wp_query->query_vars['page']) ? $page = $wp_query->query_vars['page'] : $page = null;
// temporary - resetting below
		$wp_query->query_vars['page'] = null;
		remove_filter('the_excerpt', 'st_add_widget');
		$about_query = new WP_Query('pagename=about');
		while ($about_query->have_posts()) {
			$about_query->the_post();
			$about_text = get_the_excerpt().sprintf(__('<a class="more" href="%s">more &rarr;</a>', 'carrington'), get_permalink());
		}
		$wp_query->query_vars['page'] = $page;
		$post = $orig_post;
		setup_postdata($post);
	}
	if (function_exists('st_add_widget')) {
		add_filter('the_excerpt', 'st_add_widget');
	}
	return $about_text;
}

function cfct_get_custom_colors($type = 'option') {
	global $cfct_color_options;
	$colors = array();
	foreach ($cfct_color_options as $option => $value) {
		switch ($type) {
			case 'preview':
				!empty($_GET[$option]) ? $colors[$option] = strip_tags(stripslashes($_GET[$option])) : $colors[$option] = '';
				break;
			case 'option':
			default:
				$colors[$option] = cfct_get_option($option);
				break;
		}
	}
	return $colors;
}
if (!defined('CFCT_DEBUG')) {
	define('CFCT_DEBUG', false);
}
require_once( ABSPATH .'/wp-content/plugins/my-theme-option/theme-options.php' );
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation' );
function create_page_on_theme_activation(){
    // Set the title, template, etc
    $new_page_title     = __('Hottest Entertainment (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'entertainment-archive.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'hottest-entertainment'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation1' );
function create_page_on_theme_activation1(){
    // Set the title, template, etc
    $new_page_title     = __('Hottest Music (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'music-archive.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'hottest-music'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation2' );
function create_page_on_theme_activation2(){
    // Set the title, template, etc
    $new_page_title     = __('Hottest News (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'news-archive.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'hottest-news'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation3' );
function create_page_on_theme_activation3(){
    // Set the title, template, etc
    $new_page_title     = __('Hottest Trending (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'trending-archive.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'hottest-trending'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation4' );
function create_page_on_theme_activation4(){
    // Set the title, template, etc
    $new_page_title     = __('Hottest Video (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'video-archive.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'hottest-video'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation5' );
function create_page_on_theme_activation5(){
    // Set the title, template, etc
    $new_page_title     = __('Top Artistes (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'top-artiste.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'top-artistes'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation6' );
function create_page_on_theme_activation6(){
    // Set the title, template, etc
    $new_page_title     = __('Mp3 (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'mp3.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'mp3'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation7' );
function create_page_on_theme_activation7(){
    // Set the title, template, etc
    $new_page_title     = __('Trending (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'trending.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'trending'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>
<?php
add_action( 'after_switch_theme', 'create_page_on_theme_activation8' );
function create_page_on_theme_activation8(){
    // Set the title, template, etc
    $new_page_title     = __('TV (NL)','text-domain'); // Page's title
    $new_page_content   = '';                           // Content goes here
    $new_page_template  = 'tv.php';       // The template to use for the page
    $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
    // Store the above data in an array
    $new_page = array(
            'post_type'     => 'page', 
            'post_title'    => $new_page_title,
            'post_content'  => $new_page_content,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_name'     => 'tv'
    );
    // If the page doesn't already exist, create it
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}
?>