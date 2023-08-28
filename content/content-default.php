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
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

?>

<div class="post-page-featured-image">
<img class="" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">

 <a class="cat-wrapper" href="/category/<?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>"> <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
</a> 
<span class="watermark"></span>
</div>
<h1 class="post-title"><?php the_title(); ?></h1>
<p class="byline small">Posted by <b><?php the_author_posts_link(); ?></b><img src="https://i.ibb.co/CPzf3Cr/instagram-verified-badge-png.png" alt="" width="16" height="16"> on <?php the_date(); ?></b>
</b>
<span class="comment-count"><?php comments_number( '0', '1', '% ' ); ?> </span>

<img class="alignnone size-medium" src="https://i.ibb.co/h87BLB9/faint-black-line.png" width="728" height="3" />
<br>

<?php
the_content();

$args = array(
	'before' => '<p class="pages-link">'. __('Pages: ', 'carrington-mobile'),
	'after' => "</p>\n",
	'next_or_number' => 'number'
);
	
wp_link_pages($args);
?>


<?php 
 $_my_custom_url1 = get_post_meta(get_the_id(), '_my_custom_url1', true);
 if ($_my_custom_url1) { ?> 

<span style="color: #ffffff;">.</span>
<div class="post-you-may-like">
<h3>RECOMMENDED SONGS FOR YOU 👇</h3>
<?php query_posts('category_name=music,audio,mp3,download-mp3,song,songs&showposts=10'); while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
<span class="image-you-may-like">
<img class="recommended-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
</span>
<span class="title-you-may-like"> <div class="gten"><?php the_title(); ?></div> </span>
</a>
<?php endwhile; ?>		<?php wp_reset_query(); ?>
</div>

<?php 
 } else { 
// do nothing; 
}
 ?>



<?php if(has_category('mp4') || has_category('download-mp4') || has_category('mp4-download') || has_category('videos') || has_category('video') || has_category('music-video')): ?>

<span style="color: #ffffff;">.</span>
<div class="post-you-may-like">
<h3>RECOMMENDED VIDEOS FOR YOU 👇</h3>
<?php query_posts('category_name=video,videos,mp4,download-mp4,mp4-download,music-video&showposts=10'); while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
<span class="image-you-may-like">
<img class="recommended-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
</span>
<span class="title-you-may-like"> <div class="gten"><?php the_title(); ?></div> </span>
</a>
<?php endwhile; ?>		<?php wp_reset_query(); ?>
</div>

<?php endif; ?>

<div class='page-tag-button-wrapper'>
<span class='page-tag-text'>Click to see more posts about 👇</span> 

<?php the_tags('<span class="darkng"> ',' ','</span>'); ?> 
</div>






<h2 class="section_header_2"><span class="section_header_2__text">Read Also </span></h2>








<div class="relpost-thumb-wrapper"><div class="relpost-thumb-container"><div style="clear: both"></div><div style="clear: both"></div>

<div class="relpost-block-container">

<?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 3, // Number of related posts that will be shown.
'caller_get_posts'=>1
);

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '';
while( $my_query->have_posts() ) {
$my_query->the_post();?>

<a class="relpost-block-single" href="<?php the_permalink(); ?>"><div class="relpost-custom-block-single" style="width: 300px; height: 75px;"><div class="relpost-block-single-image" alt="<?php the_title(); ?>" style="background: transparent url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>) no-repeat scroll 0% 0%; width: 300px; height: 0px;"></div><div class="relpost-block-single-text" style="font-family: Arial;  font-size: 12px;  color: #333333;"><?php the_title(); ?></div></div></a>

<?
}
echo '';
}
}
$post = $orig_post;
wp_reset_query(); ?>

</div><div style="clear: both"></div></div></div>




<style>
.darkng a, .terms a:visited, .terms a:active { 
display: inline-block;
        background: #fff;
        color: #2da2d2;
        border: 2px solid #2da2d2;
        font-size: 16px;
        margin-right: 10px;
        border-radius: 0px;
        padding: 8px 15px;
        margin-bottom: 15px;
        line-height: 1;

        margin-bottom: 10px;
}
 
.darkng a:hover { 
color: #2da2d2;
        border: 2px solid #2da2d2;
        background: rgb(45 162 210 / 7%);
}
</style>