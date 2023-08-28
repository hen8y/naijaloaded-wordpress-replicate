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

cfct_header();

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<body <?php body_class(); ?>>
          <?php wp_body_open(); ?>



<body bclass="bor-class" id="is-list">
<h1 id="site-name">
<a href="/"class="header-main-link"><img src="http://musixnmovies.xyz/wp-content/uploads/2022/01/mm-favico.png" width="180" height="12" border="0" margin-top="20px" class="alignnone size-full wp-image-203" /></a>
</h1>
<p id="navigation-top" class="navigation">
<a class="to-home" href="/">Home</a> |
<a href="#pages">Pages</a> </p>


<center>
<div class="mobile-menu">

<div class="mobile-menu">
<ul class="mobile-menu-main">
<li><a class="gten myHover" href="http://musixnmovies.xyz/"><i class="icon-home icons gten gtexdef"></i> Home</a></li>
<li><a href="http://musixnmovies.xyz/category/music/"><i class="icon-music-tone-alt icons gten1 gtexdef"></i> Music</a></li>
<li><a class="gten" href="http://musixnmovies.xyz/category/videos/"><i class="icon-film icons gten gtexdef"></i> Video</a></li>
</ul>
<a href="http://musixnmovies.xyz/upload"  style="color: #ff0000;">Upload Your Song</a> <strong class="menu-divider">|</strong> 
<span style="color: #ff0000;"><a style="color: #ff0000;" href="http://musixnmovies.xyz/contact-us/" target="_blank" rel="noopener">ADVERTISE HERE</a>

</span>
</div>
</div>
</center>
<p>
<div align="center">
<form id="search" class="home-search" action="<?php bloginfo('home'); ?>" method="get">
<div>
<div class="home-search-text-wrapper"><input type="text" name="s" class="home-search-text" id="" inputmode="predictOn" value="" placeholder="Search <?php echo get_bloginfo( 'name' ); ?>" /> <input type="submit" name="submit_button" value="GO" /></div>
</div>
</form>
</div>
<style>
.audiomack{
  background: #21252c;
  border: 1px solid #2c3037;
  border-radius: 5px;
  margin-top: 5px;
 
}
.follow{
  color: #ffa200;
  font-size: 12px;
  display: inline-box;
  margin: 10px;
	
}</style>
<center><div class="follow"style="clear:both"><h1>Give Us</h1> <a href="tel:+2347025994280"><img class="audiomack" src="https://i.ibb.co/k3LBgMX/Ekovibes-Call.png"></a></div></center>
	<div class='lbcdn' data-cdnpb="1250" data-format="lbd"></div><script class="slbcdn" src="https://cp.adnaira.ng/cdn/scdn/scdn.js"></script>



<style>
.more-hottest-posts-btn, .section_header_2__text {background: <?php echo ot_get_option( 'random_button_bg_color' ); ?> !important;

}

.cat-wrapper {background: <?php echo ot_get_option( 'sticky_adsfooter_bg_color' ); ?> !important;}
</style>







<a onclick="retheme()" id="darkButton" class="darkButton">
<button class="button-ped" onclick="toggle_light_mode()">
        Quickly Switch Theme
    </button>
</a>


<?php if ( is_home() ) : ?>
<?php if ( !is_paged() ) : ?>
<div id="content">




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




<style>   
.gtexx {color: <?php echo ot_get_option( 'trendingpost_title_color' ); ?> !important;}
</style>












<div class="sections-wrapper">

<div class='post-section' id='trending-posts-section'>

<h2 class="section_header_2"><span class="section_header_2__text">Hottest Posts</span></h2>

<ul class='disclosure table group  ul-list-1 disable_featured_post' id="trending-section-item-list">
<?php echo do_shortcode('[ajaxloadmoreblogdemo post_type="post" initial_posts="6" loadmore_posts="6"]'); ?>


</ul>


</div>








<div class="post-section" id="new-posts-section"><a id="latest_post"></a>
<h2 class="section_header_2"><span class="section_header_2__text">New Posts</span></h2>
<?php endif; ?>
<?php endif; ?>

<?php 
if ( is_home() && get_query_var( 'paged' ) >= 2 ) : ?>
<font color="<?php echo ot_get_option( 'latestpost_title_color' ); ?>">
<?php current_paged(); ?>
</font>
<br />
<br />

<?php endif; ?>





<!-- Theme Functions JS -->
<script type='text/javascript'>
//<![CDATA[
function retheme() {
  var cc = document.body.className;
  if (cc.indexOf("darktheme") > -1) {
    document.body.className = cc.replace("darktheme", "");
    if (opener) {opener.document.body.className = cc.replace("darktheme", "");}
    localStorage.setItem("preferredmode", "light");
  } else {
    document.body.className += " darktheme";
    if (opener) {opener.document.body.className += " darktheme";}
    localStorage.setItem("preferredmode", "dark");
  }
}
(
function setThemeMode() {
  var x = localStorage.getItem("preferredmode");
  if (x == "dark") {
    document.body.className += " darktheme";
  }
})();
//]]>
</script>



<style>
<!-- theme switch is a button icon adjust this as your icon stylesheet -->
#theme-switch{font-size:20px;position:absolute;top:0;right:35px;z-index:19}
<!-- Here is your stylesheet for dark mode editd these colors and style name except body darktheme -->
body.darktheme {color:#fff;background-color:#000}
body.darktheme .footer-search {color:#fff;background-color:#16191f}
body.darktheme .lin-element-name a{color:#fff;background-color:#000}
body.darktheme #your-element-name{color:#fff;background-color:#000}
body.darktheme your-element-name ul li a{color:#fff;background-color:#000}

<?php if ( is_home() ) : ?> 
<?php else : ?>
body.darktheme .group {color:#fff;background-color:#16191f}
<?php endif; ?>
  
body.darktheme ul.table.disclosure li, ul.table li.disclosure, .home-search input.home-search-text, #search #s, body.darktheme {color:#fff;background-color:#2c3037}


body.darktheme .home-search input.home-search-text, #search #s {width: 70%;
    border: 2px solid #2c3037;
    background: #21252c;
    line-height: 30px;
    box-sizing: border-box;
    border-radius: 8px;
    padding: 0 35px 0px 10px !important;
    font-size: 15px;
     -webkit-appearance: none;}




body.darktheme .tp-wrapper {
    padding: 0 10px;
    max-width: 240px;
border: 1px solid #2c3037;
background-color: #21252c;
}

body.darktheme .pag-current, body.darktheme .row, body.darktheme .mobile-trending-wrapper, body.darktheme .col-121, body.darktheme .top-artiste-slider-wrapper {background: #16191f !important}

body.darktheme ul.table.disclosure li, ul.table li.disclosure {
    background: #16191f;
        display: flex;
        clear: both;
        margin: 0px 5px 5px 5px !important;
        position: relative;
        padding: 0 !important;
}


body.darktheme .tagimg {
background: <?php echo ot_get_option( 'color_bg_light' ); ?>;}

body.darktheme .mobile-media-of-the-week {
  background: #21252c;
  margin-bottom: 20px;
border-bottom: 1px solid #ccc;
}


body.darktheme .commentlist .li-comment, commentlist .li-comment:nth-child(odd){
color:black; background-color:#ccc  
}

body.darktheme .audiomack: {
  background: #21252c}





body.darktheme #author, body.darktheme #email, body.darktheme #comment, body.darktheme #url{ 
font-family: "Open Sans", "Droid Sans", Arial;
font-style:italic;
color:#484f57;
letter-spacing:.1em;
background:#21252c;
border: 1px solid #484f57 !important;
} 




body.darktheme ul.table li{border-bottom:1px solid #21252c;padding:15px}











.home-search input[type="submit"], #search input[type="submit"] {
    background: <?php echo ot_get_option( 'color_bg_dark' ); ?> url(https://api.iconify.design/simple-line-icons:magnifier.svg?color=%23fff) no-repeat center center;
    background: <?php echo ot_get_option( 'color_bg_light' ); ?>;
    background-size: 20px;
    border-radius: 0 8px 8px 0px !important;
    background-position: 12px 3px;
    box-sizing: border-box;
    border: 0;
    color: #fff;
    /* color: <?php echo ot_get_option( 'color_bg_dark' ); ?>; */
    font-size: 18px;
    line-height: 0;
    vertical-align: middle;
    height: 34px;
    width: 42px;
    margin-left: -44px;
    margin-top: -3px;
     -webkit-appearance: none;
  -webkit-border-radius: 0;
}

body.darktheme .gtex {color: #ff8a3d !important;}
body.darktheme .gtex1 {color: #c3ff72}

body.darktheme .post-section {color:#fff;background-color: #16191f}

body.darktheme .dropdown-content {color:#fff;background-color: #16191f}

body.darktheme {color:#fff;background-color: #21252c}
</style>


<style>
body.darktheme .gten{ color: #fff}
body.darktheme .post-title, body.darktheme a, body.darktheme .gten1{color: #fff}
body.darktheme .home-search input[type="submit"], body.darktheme #search input[type="submit"]{background: <?php echo ot_get_option( 'color_bg_dark' ); ?>}

body.darktheme .navigation li a:hover, body.darktheme .navigation li.active a {background: <?php echo ot_get_option( 'color_bg_dark' ); ?>}
</style>

<style>
body.darktheme #site-name {
    background-image: linear-gradient(-90deg, #4c0c0c, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
    text-align: center;
}


body.darktheme .post-control-btn.view-latest-post {
        background: linear-gradient(-90deg, #fff,#f0f0f0);
    display: inline-block;
    color: #2e5707;
    font-weight: 600;
    padding: 10px 40px;
    border-radius: 5px;
    order: 1;
}


body.darktheme .post-control-btn.view-trending-post {
        background: linear-gradient(-90deg, #ffeb3b,#c5b527);
    display: inline-block;
    color: #2e5707;
    font-weight: 600;
    padding: 10px 40px;
    border-radius: 5px;
    order: 1;
}


body.darktheme .sec-nav {
    background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>,#4c0c0c);
    padding: 0;
    text-align: center;
    margin-bottom: 15px;
}


body.darktheme .mba-link-wrapper {
    background: rgba(72, 133, 16, 0.9);
    background: linear-gradient(to right, <?php echo ot_get_option( 'color_bg_dark' ); ?> 0%, #4c0c0c 100%);
    display: block;
    padding: 5px 10px;
}




body.darktheme span.list-titlee {
    display: block;
    text-align: center;
    background: <?php echo ot_get_option( 'color_bg_dark' ); ?>;
    background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, <?php echo ot_get_option( 'color_bg_dark' ); ?>), color-stop(100%, #4c0c0c));
    background: -webkit-linear-gradient(top, <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
    background: -moz-linear-gradient(top, <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
    background: -o-linear-gradient(top, <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
    background: linear-gradient( <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
    background-image: linear-gradient(-90deg, #4c0c0c, <?php echo ot_get_option( 'color_bg_dark' ); ?> );




body.darktheme #content .post-title + .byline.small + center {
    margin-bottom: 25px;
}
body.darktheme #content>.sections-wrapper {
    overflow: none;
    position: relative;
}
body.darktheme #content>.sections-wrapper::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background: rgba(89, 169, 21, 0.2);
    /* left: -100%; */
    /* right: -300%; */
    bottom: -3px;
    z-index: -1;
    height: 50px;
    background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>,#4c0c0c);
}




body.darktheme input.posts-section-link:checked + label {
    background: #4c0c0c;
    background: linear-gradient(to right, <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
    background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
    color: #fff;
    text-shadow: 2px 1px 3px #000000;
    margin: 0 -3px;
}







/****Music Filter*****/
body.darktheme .sec-nav {
    background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>,#4c0c0c);
    padding: 0;
    text-align: center;
    margin-bottom: 15px;
}


</style>


<style>
body.darktheme #content>.sections-wrapper {
    overflow: none;
    position: relative;
}
body.darktheme #content>.sections-wrapper::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background: rgba(89, 169, 21, 0.2);
    /* left: -100%; */
    /* right: -300%; */
    bottom: -3px;
    z-index: -1;
    height: 50px;
    background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
}


body.darktheme input.posts-section-link:checked + label {
    background: #4c0c0c;
    background: linear-gradient(to right, <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
    background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>, #4c0c0c);
    color: #fff;
    text-shadow: 2px 1px 3px #000000;
    margin: 0 -3px;
}





body.darktheme input#new-posts-link.posts-section-link:checked + label {
    padding-left: 0;
}
body.darktheme input#trending-posts-link.posts-section-link:checked + label {
    padding-left: 0;
}
body.darktheme /*input#new-posts-link.posts-section-link + label::after {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background: rgba(89, 169, 21, 0.2);
    left: -100%;
    right: -300%;
    bottom: -3px;
    z-index: -1;
}*/
body.darktheme span.list-titlee {
    display: none !important;
}

body.darktheme #new-posts-link:checked ~ #new-posts-section,
#trending-posts-link:checked ~ #trending-posts-section {
  display: block;
  margin-top: -3px;
}

body.darktheme #new-posts-link ~ #new-posts-section span.list-titlee {
    display: block !important;
}
body.darktheme #new-posts-link:checked ~ #new-posts-section span.list-titlee {
    display: none !important;
}




body.darktheme input#new-songs-link.posts-section-link + label:before {
    
    background-image: url(https://i.ibb.co/hmVJLk2/latest-songs.png);
    background-size: contain;
    left: 57px;
}
body.darktheme input#new-songs-link.posts-section-link + label a  {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
}


body.darktheme .col-6 {color:#fff; background-color: #16191f}


body.darktheme p, body.darktheme .page-heading__title, body.darktheme .highlight, body.darktheme .product__title, body.darktheme .product__category, body.darktheme .product__price, body.darktheme .product__excerpt {color: #fff}

body.darktheme .div-comment {background: #16191f}

body.darktheme h1, body.darktheme h2, body.darktheme h3, body.darktheme h4, body.darktheme h5, body.darktheme h6 {
color: white;
}

body.darktheme b, body.darktheme strong, body.darktheme em, body.darktheme li {
   color: #fff;
}


body.darktheme .comment-count {color: white;}
</style>


<style>
body.darktheme .mobile-trending-song-title {background: #1a1818 !important;}
body.darktheme .mobile-trending-song-title {color: #ff8a3d !important;}
</style>



<style>
:root {
  --bg-color: ffffff75;
  --font-color: #121212;
  --em-font-color: #121212;
  --border-color: #218095;
  --gradient-style: radial-gradient(
    circle,
    #f6ff1c,
    #ffdc00,
    #ffb800,
    #ff951a
  );
  --gradient-size: 8px;
  --gradient-shadow: #ffb800;
}
@media (prefers-color-scheme: light) {
  .light {
    display: none;
  }
}
@media (prefers-color-scheme: dark) {
  .dark {
    display: none;
  }
  --bg-color: #121212;
  --font-color: #ffffff75;
  --em-font-color: #ffffff87;
  --border-color: #c9e3e9;
  --gradient-style: radial-gradient(
    circle,
    #ccd325,
    #d3d84b,
    #dadd68,
    #e0e183,
    #e6e69c
  );
  --gradient-size: 2px;
  --gradient-shadow: #fff;
}

/* swith to dark mode when dark button checked */
.dark:checked,
.dark:checked + * + * {
  --bg-color: #121212;
  --font-color: #ffffff75;
  --em-font-color: #ffffff87;
  --border-color: #c9e3e9;
  --gradient-style: radial-gradient(
    circle,
    #ccd325,
    #d3d84b,
    #dadd68,
    #e0e183,
    #e6e69c
  );
  --gradient-size: 2px;
  --gradient-shadow: #fff;
}

/* swith to light mode when light button checked */
.light:checked,
.light:checked + * {
  --bg-color: #ffffff75;
  --font-color: #121212;
  --em-font-color: #121212;
  --border-color: #218095;
  --gradient-style: radial-gradient(
    circle,
    #f6ff1c,
    #ffdc00,
    #ffb800,
    #ff951a
  );
  --gradient-size: 8px;
  --gradient-shadow: #ffb800;
}

/* apply css variable */
body {
  margin: 0;
}
* {
  background: var(--bg-color);
  color: var(--font-color);
}

input[type="checkbox"] {
  -webkit-appearance: none;
  outline: 0;
  position: absolute;
  z-index: 2;
  top: 10px;
  right: 10px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background-image: var(--gradient-style);
  box-shadow: 0 0 14px var(--gradient-size) var(--gradient-shadow);
  cursor: pointer;
}
article {
  
}
h1 {
  
}
p {
  
}

</style>

<style>
#content img.alignleft, .alignleft {display:inline; float:left; margin:5px 15px 5px 0;}
#content img.alignright, .alignright {float:right; margin:5px 0 5px 15px;}
#content img.aligncenter, .aligncenter {display:block; margin:10px auto;}
#content img.border {background:#ccc; border:4px solid #f0f0f0; color:#333; padding:1px;}
</style>

