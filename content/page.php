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

?>






		
								<div class="nkimg">
					<div class="nkpost-title">

<h1><?php the_title(); ?></h1>


<div id="content">
<?php
the_content();

$args = array(
	'before' => '<p class="pages-link">'. __('Pages: ', 'carrington-mobile'),
	'after' => "</p>\n",
	'next_or_number' => 'number'
);
	
wp_link_pages($args);
?>

</div></div></div>