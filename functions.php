<?php

// This file is part of the Carrington Mobile Theme for WordPress
// http://carringtontheme.com
//
// Copyright (c) 2008-2009 Crowd Favorite, Ltd. All rights reserved.
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
load_theme_textdomain('carrington-mobile');
define('CFCT_DEBUG', false);
define('CFCT_PATH', trailingslashit(TEMPLATEPATH));
define('CFCT_HOME_LIST_LENGTH', 5);
define('CFCT_HOME_LATEST_LENGTH', 250);
$cfct_options = array(
'cfct_about_text'
, 'cfct_credit'
, 'cfct_posts_per_archive_page'
, 'cfct_wp_footer'
);
// Optional Custom entry meta in entry header - remove "by""
add_filter( 'genesis_post_info', 'amethyst_filter_post_info' );
function amethyst_filter_post_info($post_info) {
    $post_info = '[post_date] [post_author_posts_link] [post_comments] [post_edit]';
    return $post_info;
}
// Optional Custom post meta in entry footer - remove text
add_filter( 'genesis_post_meta', 'amethyst_filter_post_meta' );
function amethyst_filter_post_meta($post_meta) {
    $post_meta = '[post_categories before=""] [post_tags before=""]';
    return $post_meta;
}
function wpbeginner_numeric_posts_nav() {
     if( is_singular() )
        return;
     global $wp_query;
     /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
     $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
     /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
     if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
     echo '<div class="navigation"><ul>' . "\n";
     /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<a href="' . previous_posts( 0, false ) . "\" $attr>" . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', "<img src='https://i.ibb.co/KzjwZkM/prev-btn.png' width='16' height='16' />&nbsp;&nbsp;&nbsp;&emsp;") . '</a>' . "\n", get_previous_posts_link() );
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
   /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<a href="' . next_posts( 0, false ) . "\" $attr>" . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', "&nbsp;&nbsp;&nbsp;&emsp;<img src='https://i.ibb.co/1qWBbcJ/next-btn.png' width='16' height='16' />") . '</a>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 }
function count_cat_post($category) {
if(is_string($category)) {
    $catID = get_cat_ID($category);
}
elseif(is_numeric($category)) {
    $catID = $category;
} else {
    return 0;
}
$cat = get_category($catID);
return $cat->count;
}
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Changing excerpt length
function new_excerpt_length($length) {
return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
 // Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
//get excerpt by id
function get_excerpt_by_id($post_id){
    $the_post = get_post($post_id); //Gets post ID
    $the_excerpt = ($the_post ? $the_post->post_content : null); //Gets post_content to be used as a basis for the excerpt
    $excerpt_length = 20; //Sets excerpt length by word count
    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
    $words = explode(' ', $the_excerpt, $excerpt_length + 1);
if(count($words) > $excerpt_length) :
        array_pop($words);
        array_push($words, '…');
        $the_excerpt = implode(' ', $words);
    endif;
return $the_excerpt;
}
function time_ago( $type = 'post' ) {
    $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';

    return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');

}
function cfct_blog_init() {
if (cfct_get_option('cfct_ajax_load') == 'yes') {
cfct_ajax_load();
}
}
add_action('init', 'cfct_blog_init');
function cfct_archive_title() {
if(is_author()) {
$output = __('Posts by:');
} elseif(is_category()) {
$output = __('Category Archives:');
} elseif(is_tag()) {
$output = __('Tag Archives:');
} elseif(is_archive()) {
$output = __('Archives:');
}
$output .= ' ';
echo $output;
}
function cfct_mobile_post_gallery_columns($columns) {
return 1;
}
add_filter('cfct_post_gallery_columns', 'cfct_mobile_post_gallery_columns');
if (!is_admin()) {
wp_enqueue_script('jquery');
wp_enqueue_script('carrington-mobile', get_bloginfo('template_directory').'/js/mobile.js', array('jquery'), '1.0');
}
include_once(CFCT_PATH.'carrington-core/carrington.php');
function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

if(empty($first_img)){
$first_img = "https://i.imgur.com/3UuaLW6.jpg";
}
return $first_img;
}
?>
<?php
function current_paged( $var = '' ) {
    if( empty( $var ) ) {
        global $wp_query;
        if( !isset( $wp_query->max_num_pages ) )
            return;
        $pages = $wp_query->max_num_pages;
    }
    else {
        global $$var;
            if( !is_a( $$var, 'WP_Query' ) )
                return;
        if( !isset( $$var->max_num_pages ) || !isset( $$var ) )
            return;
        $pages = absint( $$var->max_num_pages );
    }
    if( $pages < 1 )
        return;
    $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    echo '<div class="pag-current"><span>New Post</span> - Page ' . $page . '</div>  '  ;
}
?>
<?php
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
?>
<?php
function wpse52737_enqueue_comment_reply_script() {
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment_reply' );
    }
}
add_action( 'comment_form_before', 'wpse52737_enqueue_comment_reply_script' );
?>
<?php
add_filter( 'ot_theme_mode', '__return_true' );
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'theme-options.php' );
?>
<?php

function my_trending_tags() {
echo "";
    $categories =  get_categories(array( 'taxonomy' => 'post_tag', 'orderby' => 'count', 'number' => '10' ));
     foreach ($categories as $category) {
        $termlink = get_category_link( $category->term_id );
        $termname = $category->cat_name;
        $tax_term_id = $category->term_taxonomy_id;
        $images = get_option('taxonomy_image_plugin');
        echo '<a href="' . $termlink . '">';
        echo wp_get_attachment_image( $images[$tax_term_id], 'full' );
        echo '<div align="center"><span>' . $termname . '</span></div></a>';
 }
    echo "";
}
?>
<?php
//Adiing Theme Support
function gt_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
    array('comment-list', 'comment-form', 'search-form', 'caption')
);
}
add_action('after_setup_theme', 'gt_init');
?>
<?php
/*function: generate featured image automatically*/
function autogen_featured_img() {
 global $post;
if (!has_post_thumbnail($post->ID)) {
 $attached_image =
get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );

 if ($attached_image) {
 foreach ($attached_image as $attachment_id => $attachment) {
 set_post_thumbnail($post->ID, $attachment_id);
 }
 }
 }
}
/*This line is used to generate featured images for all old
posts. Remove this once the default images get generated
for all of the old posts*/
add_action('the_post', 'autogen_featured_img');
/* For new upcoming posts, leave them permanently*/
add_action('save_post', 'autogen_featured_img');
add_action('draft_to_publish', 'autogen_featured_img');
add_action('new_to_publish', 'autogen_featured_img');
add_action('pending_to_publish', 'autogen_featured_img');
add_action('future_to_publish', 'autogen_featured_img');
?>
<?php
    remove_filter('term_description','wpautop');
?>
<?php
/**
 * shortcode for listing blog posts
 * Author: Deepak anand
 */
add_shortcode('ajaxloadmoreblogdemo','ajaxloadmoreblogdemo');
function ajaxloadmoreblogdemo($atts, $content = null){
 ob_start();
 $atts = shortcode_atts(
        array(
 'post_type' => 'post',
 'initial_posts' => '4',
 'loadmore_posts' => '4',
 ), $atts, $tag
    );
 $additonalArr = array();
 $additonalArr['appendBtn'] = true;
 $additonalArr["offset"] = 0; ?>
 <div class="dcsAllPostsWrapper"> 
 <input type="hidden" name="dcsPostType" value="<?=$atts['post_type']?>">
     <input type="hidden" name="offset" value="0">
     <input type="hidden" name="dcsloadMorePosts" value="<?=$atts['loadmore_posts']?>">
     <div class="dcsDemoWrapper">
 <?php dcsGetPostsFtn($atts, $additonalArr); ?>
 </div>
 </div>
 <?php
    return ob_get_clean();
}
function dcsGetPostsFtn($atts, $additonalArr=array()){ 
   $args = array(
     'post_type' => $atts['post_type'],
     'posts_per_page' => $atts['initial_posts'],
 'category_name' => trending, 
     'offset' => $additonalArr["offset"]
 );
 $the_query = new WP_Query( $args );
 $havePosts = true;
 if ( $the_query->have_posts() ) {
     while ( $the_query->have_posts() ) {
         $the_query->the_post(); ?>

      <li class="category_list loadMoreRepeat innerWrap">
<div class='cat-post-thumb' style='background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)'>
<a class="the-post-link" href="<?php the_permalink(); ?>">
</a></div><div class='cat-post-text'>
<a href="<?php the_permalink(); ?>"><div class="gtex gtexx"><?php the_title(); ?></div></a>

</a></div>
</li>
         
         <?php
     }
 } else {
    $havePosts = false; 
 }
 wp_reset_postdata();
   if($havePosts && $additonalArr['appendBtn'] ){ ?>
<br><div class='clearfix'></div>
    <div class="btnLoadmoreWrapper">
    <a href="javascript:void(0);" class="btn btn-primary dcsLoadMorePostsbtn load_more_trending" id="more-trending-button">Load more hot posts</a>
    </div>
    
    <!-- loader for ajax -->
    <div class="dcsLoaderImg" style="display: none;">
     <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve" style="
     color: <?php echo ot_get_option( 'color_bg_light' ); ?>;">
     <path fill="<?php echo ot_get_option( 'color_bg_light' ); ?>" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
       <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s" from="0 50 50" to="360 50 50" repeatCount="indefinite"></animateTransform>
   </path>
 </svg>
 </div>
 
    <p class="noMorePostsFound" style="display: none;">No More Posts Found</p>
    <?php
 }
}
/**
 * Enqueue scripts and styles for the front end.
 */
function dcsEnqueue_scripts() {
 wp_enqueue_script( 'dcsLoadMorePostsScript', get_template_directory_uri() . '/js/loadmoreposts.js', array( 'jquery' ), '20131205', true );
 wp_localize_script( 'dcsLoadMorePostsScript', 'dcs_frontend_ajax_object',
 array( 
 'ajaxurl' => admin_url( 'admin-ajax.php' )
 )
 );
}
add_action( 'wp_enqueue_scripts', 'dcsEnqueue_scripts' );
add_action("wp_ajax_dcsAjaxLoadMorePostsAjaxReq","dcsAjaxLoadMorePostsAjaxReq");
add_action("wp_ajax_nopriv_dcsAjaxLoadMorePostsAjaxReq","dcsAjaxLoadMorePostsAjaxReq");
function dcsAjaxLoadMorePostsAjaxReq(){
 extract($_POST);
 $additonalArr = array();
 $additonalArr['appendBtn'] = false;
 $additonalArr["offset"] = $offset;
 $atts["initial_posts"] = $dcsloadMorePosts;
 $atts["post_type"] = $postType;
 dcsGetPostsFtn($atts, $additonalArr);
 die();
}
?>
<?php
 function admin_bar(){
  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );
 ?>