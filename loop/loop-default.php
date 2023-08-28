<?php if(is_archive()): ?>
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

if (have_posts()) {
	echo '<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date()): ?><ul class="disclosure table group skskks  Video "><?php endif; ?>';
	while (have_posts()) {
		the_post();
?>
	<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?><li class="category_list"><?php endif; ?>
<?php
		cfct_excerpt();
?>
	<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?></li><?php endif; ?>



<?php
	}
	echo '<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?></ul><div class="pagination"><?php endif; ?>', cfct_misc('nav-list'),'<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?></div><?php endif; ?>';
	echo '';
}

?></div>

<?php endif; ?>










<?php if ( is_home() ) : ?> 
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

if (have_posts()) {
	echo '<?php if ( is_home() ) : ?><ul class="disclosure table group ul-list-2 disable_featured_post"><?php endif; ?>';
	while (have_posts()) {
		the_post();
?>
	<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?><li class="category_list"><?php endif; ?>
<?php
		cfct_excerpt();
?>
	<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?></li><?php endif; ?>



<?php
	}
	echo '<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?></ul><div class="pagination"><?php endif; ?>', cfct_misc('nav-list'),'<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?></div><?php endif; ?>';
	echo '';
}

?></div>

<?php endif; ?>