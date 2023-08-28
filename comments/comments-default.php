<?php

// This file is part of the Carrington Mobile Theme for WordPress
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
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

// If post requires a password, don't show comments.
if (post_password_required()) {
	echo '<p>' . __( 'This post is password protected. Enter the password to view any comments.', 'carrington-mobile' ) . '</p>';
	
	return;
}

// All clear? Ok, let's show comments.
if (have_comments() || comments_open()) {
?>

<div class="comment-title">
<span><?php comments_number(__('No Comments Yet', 'carrington-mobile'), __('1 Comment', 'carrington-mobile'), __('% Comments', 'carrington-mobile')) ?></span>


<a href="#respond" class="btn btn-md btn-orange">Drop a Comment</a>
</div>

<?php
	if (have_comments()) {
		echo '<ol class="commentlist">', wp_list_comments('callback=cfct_threaded_comment'), '</ol>';
	}
	cfct_form('comment');

	// If there are multiple comment pages, and pagination is on.
	if (get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) {
?>
		<p class="pagination">
			<span class="next"><?php previous_comments_link( __( 'Older Comments', 'carrington-mobile' ) ); ?></span>
			<span class="prev"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'carrington-mobile' ) ); ?></span>
		</p>
<?php
	}
}
?>


<br>
<link href="https://fonts.googleapis.com/css?family=Acme:400,600" rel="stylesheet">
<p align="center"><span class="style1"><span class="style2"><span class="style4"><a href="#top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/YyC5.gif" width="50" height="" border="0"><br>
<strong style="color:red">Go Back To The Top</strong></a> </span></span></span></p>




<?php if ( is_single() ) : ?>


<p><div class="mobile-media-of-the-week">
<div class="title">Music of the Week</div>
<?php query_posts('category_name=music-of-the-week&showposts=1'); while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="album-art">
<img class="album-art-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" />
<div class="album-art-title">
<span class="album-art-artiste"><?php echo get_post_meta(get_the_id(), '_deck', true); ?></span>
<span class="album-art-track"><?php echo get_post_meta(get_the_id(), '_deck1', true); ?></span>
</div>
</a>

<?php endwhile; ?>		<?php wp_reset_query(); ?>
</div></p>




















<img class="" src="https://i.ibb.co/1Gt6cPQ/faint-black-line.png" width="728" height="3" />








<?php query_posts('category_name=video-of-the-week&showposts=1'); while (have_posts()) : the_post(); ?>




<p><div class="mobile-media-of-the-week video-of-the-week">
<div class="title">Video of the Week</div>
<div class="mobile-media-of-the-week-inner" style="">
<center><iframe src="<?php echo get_post_meta(get_the_id(), '_my_custom_url', true); ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe></center>
<a class="mobile-media-of-the-week-link" href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" style=""><span style=""><?php echo get_post_meta(get_the_id(), '_deck', true); ?> – <?php echo get_post_meta(get_the_id(), '_deck1', true); ?></span></a></div>
</div></p>



<?php endwhile; ?>		<?php wp_reset_query(); ?>

<?php endif; ?>