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

get_header();

?>




<div id="content">
<h1 class="table-title" style="margin-bottom: -1px;"><div class='cat-title'><?php wp_title('', true, 'right'); ?></div></h1>


<?php
          the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>

<style>
.taxonomy-description {margin-left: 10px;}
</style>












<style type="text/css">
	.mobile-trending-row {
		margin: 0;
		margin-top: 3px;
	}

	.row:after {
		clear: both;
		display: table;
		content: " ";
	}

	.col-3 {
		width: 25%;
		float: left;
	}

	.col-12 {
		width: 100%;
	}

	.mobile-trending-wrapper {
		padding: 0;
		margin: 5px 10px;
		background: none;
		border: none;
	}

	.mobile-trending-wrapper span {}

	.mobile-trending-wrapper .trending-title {
		background: none;
		color: red;
		padding: 3px 10px;
		font-size: 30px;
		line-height: 1;
		font-weight: 600;
		margin-bottom: 3px;
		text-shadow: none;
	}

	.mobile-trending-wrapper .trending-single {
		padding: 3px;
		box-sizing: border-box;
	}

	.mobile-trending-wrapper .trending-single a {
		font-size: 13px;
		display: block;
		background: #fff;
		border-bottom: 1px solid #e0e0e0;
		padding: 5px;
		padding-bottom: 10px;
		position: relative;

	}

	.mobile-trending-wrapper .trending-single a img {
		border: 1px solid #000;
	}

	.mobile-trending-wrapper .trending-single a span {
		/* display: block;
    color: #8c8c8c; */
	}
</style>


<?php if(is_category('entertainment')): ?>
<div class='trending-btn-wrapper '></div><div class='dropdown-section'><span class='dropdown-text'>Sort by:</span> <div class='dropdown drop-more-hottest'><label for='drop-more-hottest' class='toggle'>Latest Post</label><input type='checkbox' id='drop-more-hottest'><div class='dropdown-content'><a href='/hottest-entertainment'>Hottest Posts</a></div></div></div> 
<?php endif; ?>


<?php if(is_category('video')): ?>
<div class='trending-btn-wrapper '></div><div class='dropdown-section'><span class='dropdown-text'>Sort by:</span> <div class='dropdown drop-more-hottest'><label for='drop-more-hottest' class='toggle'>Latest Post</label><input type='checkbox' id='drop-more-hottest'><div class='dropdown-content'><a href='/hottest-video'>Hottest Posts</a></div></div></div> 
<?php endif; ?>


<?php if(is_category('trending')): ?>
<div class='trending-btn-wrapper '></div><div class='dropdown-section'><span class='dropdown-text'>Sort by:</span> <div class='dropdown drop-more-hottest'><label for='drop-more-hottest' class='toggle'>Latest Post</label><input type='checkbox' id='drop-more-hottest'><div class='dropdown-content'><a href='/hottest-trending'>Hottest Posts</a></div></div></div> 
<?php endif; ?>


<?php if(is_category('news')): ?>
<div class='trending-btn-wrapper '></div><div class='dropdown-section'><span class='dropdown-text'>Sort by:</span> <div class='dropdown drop-more-hottest'><label for='drop-more-hottest' class='toggle'>Latest Post</label><input type='checkbox' id='drop-more-hottest'><div class='dropdown-content'><a href='/hottest-news'>Hottest Posts</a></div></div></div> 
<?php endif; ?>


<?php if(is_category('music')): ?>
<div class='trending-btn-wrapper '></div><div class='dropdown-section'><span class='dropdown-text'>Sort by:</span> <div class='dropdown drop-more-hottest'><label for='drop-more-hottest' class='toggle'>Latest Post</label><input type='checkbox' id='drop-more-hottest'><div class='dropdown-content'><a href='/hottest-music'>Hottest Posts</a></div></div></div> 
<?php endif; ?>


<?php
	cfct_loop();
?>
<!--#content-->




<?php

get_footer();

?>