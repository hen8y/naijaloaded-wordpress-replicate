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

global $post, $user_ID, $user_identity, $comment_author, $comment_author_email, $comment_author_url;

$req = get_option('require_name_email');

// if post is open to new comments
if ('open' == $post->comment_status) {
	// if you need to be regestered to post comments..
	if ( get_option('comment_registration') && !$user_ID ) { ?>

<p id="you-must-be-logged-in-to-comment"><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'carrington-mobile'), get_bloginfo('wpurl').'/wp-login.php?redirect_to='.get_permalink()); ?></p>

<?php
	}
	else { 
?>

<form id="respond" action="<?php bloginfo('wpurl'); ?>/wp-comments-post.php" method="post">
	
<h3 class="title-divider"><span>Drop your Comment</span></h3>

	<?php // if you're logged in...
			if ($user_ID) {
	?>
		<p><?php printf(__('Logged in as <a href="%s">%s</a>. ', 'carrington-mobile'), get_bloginfo('wpurl').'/wp-admin/profile.php', $user_identity); wp_loginout() ?></p>
	<?php
			} else { 
	?>
		<p>
					<label for="author"><small><?php _e('Name', 'carrington-mobile'); if ($req) { _e(' (required)', 'carrington-mobile'); } ?></small></label>
<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" />
		</p>
		<p>
<label for="email"><small><?php _e('Email', 'carrington-mobile');
			if ($req) {
				_e(' (required, but never shared)', 'carrington-mobile');
			}
			else {
				_e(' (never shared)', 'carrington-mobile');
			} ?></small></label>
			<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" />
					</p>
		
	<?php 
			} 
	?>

	<p>
<label for="author"><small>Comment</small></label>
<textarea name="comment" id="comment" rows="8" cols="40"></textarea></p>
	<p>
		<input name="submit" type="submit" id="submit" value="<?php _e('Post Comment', 'carrington-mobile'); ?>" tabindex="5" />
		<input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
	</p>
<?php
do_action('comment_form', $post->ID);
?>
</form>








<style>
#submit {
background-color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
    box-shadow: inset -1px -1px 3px rgba(47, 47, 47, 0.7);
    border-radius: 5px !important;
    border: none;
    padding: 7px 15px;
    color: #fff;
    font-weight: 600;
    font-size: 14px;
    -webkit-appearance: none;

} 
</style>

<style>
.title-divider {
    position: relative;
    /*background: none;*/
}

.title-divider span {
    font-family: Roboto;
    text-transform: uppercase;
    font-weight: 800;
    font-size: 19px;
    margin-bottom: 10px;
    /* font-weight: 600; */
    /* background: #808080; */
    color: #333;
    padding: 5px 5px;
    background: linear-gradient(90deg,#cd122d,#154284);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: #fff;
    position: relative;
    z-index: 10;
}
.title-divider::after {
    content: "";
    display: block;
    position: absolute;
    width: 230px;
    height: 100%;
    top: 0;
    background: #fff;
    z-index: 1;
}
</style>

<?php 
	} // If registration required and not logged in 
} // If you delete this the sky will fall on your head
?>