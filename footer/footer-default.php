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

cfct_form('search');

if (is_page()) {
	global $post;
	$parent = $post->ID;
	ob_start();
	wp_list_pages('title_li=&depth=1&child_of='.$parent);
	$sub_pages = ob_get_contents();
	ob_end_clean();
} else {
	$sub_pages = '';
}

if (!empty($sub_pages)) {
	$sub_pages = '<noscript><strong class="title">'.__('Sub Pages', 'carrington-mobile').'</strong></li></noscript>'.$sub_pages.'<li><strong class="title">'.__('Top Level Pages', 'carrington-mobile').'</strong>';
}

?>




<noscript>
<p id="navigation-bottom" class="navigation">
	<?php cfct_misc('main-nav'); ?>
</p>
</noscript>


<?php

cfct_template_file('footer', 'bottom');

?>