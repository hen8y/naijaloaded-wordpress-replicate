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



cfct_footer();

?>





<div class="fixedbar">
<div class="boxfloat">

<a id="tip-close"><img src="https://www.naijaloaded.com.ng/wp-content/uploads/close.png"></a>

<ul id="tips">

<li><a class="mba-link-wrapper" href="<?php echo ot_get_option( 'sticky_music_url' ); ?>" target="_blank" rel="noopener">
<span class="mba-row">
<span class="mba-thumbnail">
<img src="<?php echo ot_get_option( 'sticky_music_image1' ); ?>" />
</span>
<span class="mba-info">
<span class="mba-title"><?php echo ot_get_option( 'sticky_ads_music_ofday' ); ?></span>
<span class="mba-track gten"><?php echo ot_get_option( 'sticky_musicoftheday_artiste' ); ?> – <?php echo ot_get_option( 'sticky_musicoftheday_songtitle' ); ?></span>
</span></span></a></li>

<li><a href="<?php echo ot_get_option( 'sticky_music_image_url2' ); ?>" target="_blank" rel="noopener"><img class="aligncenter wp-image-591900" src="<?php echo ot_get_option( 'sticky_music_image2' ); ?>" alt="" width="320" height="107" /></a></li>

<li><a href="<?php echo ot_get_option( 'sticky_music_image_url3' ); ?>" target="_blank" rel="noopener"><img class="aligncenter size-full wp-image-593296" src="<?php echo ot_get_option( 'sticky_music_image3' ); ?>" alt="" width="320" height="100" /></a></li>

<li><center>

<?php echo ot_get_option( 'sticky_ads_code1' ); ?>
</center></li>


<li><center>

<?php echo ot_get_option( 'sticky_ads_code2' ); ?>
</center></li>

</ul>
</div>
</div>

<script type="1c012376eb4558dd58f204f1-text/javascript">
  	jQuery(document).ready(function($) {
    $('.top-artiste-slider').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3
	});
	
    });	
  </script>






<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="1c012376eb4558dd58f204f1-|49" defer=""></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/core.js"></script>