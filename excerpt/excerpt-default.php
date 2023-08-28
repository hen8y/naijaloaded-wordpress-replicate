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

<?php if(is_category() || is_author() || is_multi_author() || is_tag() || is_date() || is_home()): ?>
<div class='cat-post-thumb' style='background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)'>
<a class="the-post-link" href="<?php the_permalink(); ?>">
</a></div><div class='cat-post-text'>
<a class="gtex" href="<?php the_permalink(); ?>"><?php if ( is_home() ) : ?> <div class="gtex1"><?php endif; ?><?php the_title(); ?><?php if ( is_home() ) : ?> </div><?php endif; ?></a>

</a></div>


<style>
.gtex1 {color: <?php echo ot_get_option( 'latestpost_title_color' ); ?>}
</style>

<style>
.gtex {color: <?php echo ot_get_option( 'latestpost_title_color' ); ?>}
</style>

<?php endif; ?>


  <?php if ( is_post_type_archive( 'staff-member' ) ) : ?>

<?php get_template_part( 'all-artistes'); ?>

 
<?php endif; ?>     

<style>   
    .myHoverr{
      color:red !important;
    }
    .myHoverr:hover
    {
      color:red !important;
    }
</style>
