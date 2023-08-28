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

$about_text = cfct_about_text();
if (!empty($about_text)) {
?>
<noscript><div id="about" class="group">
	<h3><?php printf(__('About %s', 'carrington-mobile'), get_bloginfo('name')); ?></h3>
<?php
	echo $about_text;
?>
</div></noscript>
<?php
}
?>
<?php if ( is_home() ) : ?> 
<?php else : ?>
</div>
<?php endif; ?>









<div id="footer">
<div class="footer-menu-wrapper">
<div class="footer-col footer-1">

<div align="left">
<h3>Hot Categories</h3>
<ul>
<li> <a href="http://musixnmovies.xyz/category/music/">Naija Music</a> </li>
<li><span style="color: #ff0000;"><a style="color: #ff0000;" href="https://api.whatsapp.com/send?phone=+2349099329192&amp;text=Hello%iMoore" target="_blank" rel="noopener">Whatapp Us</a></span></li>
<li><span style="color: #ff0000;"><a style="color: #ff0000;" href="https://api.whatsapp.com/send?phone=+2349099329192&amp;text=Hello%iMoore/" target="_blank" rel="noopener">Sell Bitcoin/GiftCard</a></span></li>
</ul>
</div>


</div>
<div class="footer-col footer-2">

<div align="left">
<h3>Information</h3>
<ul>
<li> <a href="/about-us/">About Us</a> </li>
<li> <a href="/upload">Submit Songs</a> </li>
<li> <a href="/privacy-policy">Privacy Policy</a> </li>
<li><span style="color: #ff0000;"><a style="color: #ff0000;" href="/contact-us">Contact Us</a></span></li>
</ul>
</div>


</div>
</div>
<hr />
<div class="footer-icons-wrapper">
<a href="https://twitter.com/ogbhenry1" target="_blank">
<i class="icon-social-twitter icons"></i>
</a>
<a href="https://www.facebook.com/henry.mooreii.3" target="_blank">
<i class="icon-social-facebook icons"></i>
</a>
<a href="https://www.instagram.com/iam_imoore/" target="_blank">
<i class="icon-social-instagram icons"></i>
</a>

</div>
<p class="small">
<center>

<div class="drk">
Copyright © 2017 - <script>document.write(new Date().getFullYear())</script> | <?php echo get_bloginfo( 'name' ); ?>
</div>
<style>
.drk{color:#fff;}
</style>

<?php wp_footer(); ?>




<script type="1c012376eb4558dd58f204f1-text/javascript">
(function($) {
var randomtip = function(){
    var length = $("#tips li").length;
    var ran = Math.floor(Math.random()*length) + 1;
    
    $("#tips li:nth-child(" + ran + ")").show();
};


this.randomSideAd = function(){
    var length = $("#randomSideAd li").length;
    var ran = Math.floor(Math.random()*length) + 1;
    $("#randomSideAd li:nth-child(" + ran + ")").show();

    console.log("Ad pos shown: " + ran);
};
 
$(document).ready(function(){   
    randomtip();


    $("body").on("click", "#tip-close", function(e) {
      e.preventDefault();
      $('#tips').remove();
    });


    randomSideAd();
    $("body").on("click", "#randomSideAd-close", function(e) {
      e.preventDefault();
      $('#randomSideAd').remove();
    });




});
})( jQuery );
</script>





<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="e782f2071f55c913a35f0897-|49" defer=""></script>


</body>
</html>