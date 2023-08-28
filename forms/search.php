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

<hr />



<style type="text/css">
<!--
.style1 {
	color: <?php echo ot_get_option( 'random_button_bg_color' ); ?>;
	font-weight: bold;
}
-->
</style>

<div class="footer-search">
<center>
<span class="style1">Looking for something? Search below</span>
<img src="https://www.naijaloaded.com.ng/wp-content/uploads/2018/06/white-down-pointing-backhand-index_1f447-1.png" width="19" height="19">
<br>
<form id="search" action="<?php bloginfo('home'); ?>" method="get">
<div>
<input type="text" name="s" id="s" inputmode="predictOn" placeholder="Search <?php echo get_bloginfo( 'name' ); ?>" value="" /> <input type="submit" name="submit_button" value="GO" />
</div>
</form></center>

<?php if ( is_home() ) : ?> 
</div>
<?php endif; ?>