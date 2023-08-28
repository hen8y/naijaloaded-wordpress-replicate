<?php /* Template Name: mp3 */ ?>
 
<?php get_header(); ?>


<div id="content">
<h1 class="table-title" style="margin-bottom: -1px;"><div class='cat-title'>Music</div></h1>


<?php if ( is_page_template( 'mp3.php' ) ) : ?>
<?php if ( !is_paged() ) : ?>

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
<style type="text/css">
			.mobile-trending-wrapper {
				margin-top: 10px !important;
			}
		</style>


<style>
 
.simple-thumb>a:after  {
    content: " ";
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    background: url(https://cdn0.iconfinder.com/data/icons/pack-web-app-game/512/play-button-512.png) no-repeat;
    z-index: 10 !important;
    background-size: 50px;
    background-position: center;
    opacity: 0.6;
    filter: brightness(500%);
}
</style>




<div class="mobile-trending-wrapper">
<h4 class="mobile-trending-section-title">Hottest Songs</h4>



<div class="row mobile-trending-row">
<a href="<?php echo ot_get_option( 'featured_music_1_url' ); ?>" target="_blank" rel="noopener noreferrer">
<span class="mobile-trending-song-img" style="background-image: url(<?php echo ot_get_option( 'featured_music_1_image' ); ?>);"></span>
<span class="mobile-trending-song-title"><?php echo ot_get_option( 'featured_music_1_artist' ); ?> – <?php echo ot_get_option( 'featured_music_1_title' ); ?></span>
</a>
</div>


<div class="row mobile-trending-row">
<a href="<?php echo ot_get_option( 'featured_music_2_url' ); ?>" target="_blank" rel="noopener noreferrer">
<span class="mobile-trending-song-img" style="background-image: url(<?php echo ot_get_option( 'featured_music_2_image' ); ?>);"></span>
<span class="mobile-trending-song-title"><?php echo ot_get_option( 'featured_music_2_artist' ); ?> – <?php echo ot_get_option( 'featured_music_2_title' ); ?></span>
</a>
</div>


<div class="row mobile-trending-row">
<a href="<?php echo ot_get_option( 'featured_music_3_url' ); ?>" target="_blank" rel="noopener noreferrer">
<span class="mobile-trending-song-img" style="background-image: url(<?php echo ot_get_option( 'featured_music_3_image' ); ?>);"></span>
<span class="mobile-trending-song-title"><?php echo ot_get_option( 'featured_music_3_artist' ); ?> – <?php echo ot_get_option( 'featured_music_3_title' ); ?></span>
</a>
</div>


<div class="row mobile-trending-row">
<a href="<?php echo ot_get_option( 'featured_music_4_url' ); ?>" target="_blank" rel="noopener noreferrer">
<span class="mobile-trending-song-img" style="background-image: url(<?php echo ot_get_option( 'featured_music_4_image' ); ?>);"></span>
<span class="mobile-trending-song-title"><?php echo ot_get_option( 'featured_music_4_artist' ); ?> – <?php echo ot_get_option( 'featured_music_4_title' ); ?></span>
</a>
</div>


<div class="row"><div class="col-12 text-center"><a class="more-hottest-posts-btn" href="/category/music">SEE MORE HOTTEST SONGS</a></div></div>
</div>





<div class="top-artiste-slider-wrapper">
<h3 class="top-artiste-slider-title">Top Artistes</h3>
<section class="top-artiste-slider slider">
</section>
<?php include 'top-artiste.php';?>
</div>

<div class="upload-song-wrapper text-center">
<a class="btn btn-outline upload-icon" href="/promote" target="_blank"> Upload Your Song</a>
</div>








<div class="sec-nav">
<a class="current" href="/category/music">Latest Songs</a>
<a href="/category/music">More Songs</a>
</div>
<?php endif; ?>
<?php endif; ?>




<?php  if ( is_page_template( 'mp3.php' ) && get_query_var( 'paged' ) >= 2 ) : ?> 
<font color="<?php echo ot_get_option( 'latestpost_title_color' ); ?>">
<div class="pag-current">
<span>Music</span> - <?php echo 'Page '. ( get_query_var('paged') ? get_query_var('paged') : 1 ) . ' ' ; ?></div>
</font>
<?php endif; ?>

<ul class="disclosure table group skskks disable_featured_post Music ">



<?php
//build $args for fetch records...
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => $numPosts,//display post per page
  'paged'          => $paged,
  'category_name'                      => music
);

//Fetch and loop until records..
$my_query = new WP_Query($args);
while ($my_query->have_posts()):
    $my_query->the_post();
    $do_not_duplicate = $post->ID;?>

<li class="category_list">
<div class='cat-post-thumb' style=' background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)'>
<a class="the-post-link" href="<?php the_permalink(); ?>">
</a></div><div class='cat-post-text'>
<a href="<?php the_permalink(); ?>"><div class="gtex"><?php the_title(); ?></div></a>
</a></div></li>


<?php endwhile; ?>


</ul></div>
</div></div>
</div> 
</div> 
</div>
<hr />
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>







<div class='archive-control-area archive-control-area-after'><div class='archive-control-area-inside'><div class="cat-music-wrapper">
<ul class="cat-music">
<li><a class="cat-music-fuji" href="/category/fuji">Fuji Music</a></li>
<li><a class="cat-music-reviews" href="/category/reviews">Music Reviews</a></li>
<li><a class="cat-music-lyrics" href="/category/lyrics">Music Lyrics</a></li>
</ul>
</div>
</div></div>

<br />
<center>
<?php
 
$currentPage = get_query_var('paged');
 
 
// General arguments
 
$posts = new WP_Query(array(
    'post_type' => 'post', // Default or custom post type
    'posts_per_page' => $numPosts, // Max number of posts per page
    'category_name' => 'music', // Your category 
    'paged' => $currentPage
));
 
 if ($posts->have_posts()) :
    while ($posts->have_posts()) :
        $posts->the_post();
        echo "<noscript>";
        the_title();
        
        echo "</noscript>";
    endwhile;
endif;

?>


<?php
// Bottom pagination (pagination arguments)
 
echo "</div>" . paginate_links(array(
    'total' => $posts->max_num_pages,
    'prev_text' => __('<'),
    'next_text' => __('>')
)) . "";
?>

</center>
<p>






<?php get_footer(); ?>

<style>
    


    ul.table.disclosure .category_list .cat-post-thumb {
        background-size: cover;
        background-position: center;
        float: left;
        margin: 0px;
        
        flex: 0 0 130px;
        
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }

    ul.table.disclosure .category_list .cat-post-thumb::after {
        content: "\f04b";
        display: block;
        font-family: "Font Awesome 5 Free";
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        background: #fff;
        color: #000;
        height: 37px;
        width: 37px;
        position: absolute;
        left: 47px;
        top: 15px;
        box-shadow: 2px 2px 5px #000;
        opacity: 0.7;
        padding: 5px 0 0 4px;
        border-radius: 50%;
        box-sizing: border-box;
    }

    ul.table.disclosure .category_list .cat-post-text {
        padding: 0 0 0 15px;
        margin: auto;
        flex-direction: column;
        justify-content: center;
        height: auto;
        flex: 5;
        resize: vertical;
    }

    ul.table.disclosure .category_list .cat-post-text a {
        background: none;
        padding: 15px 25px 15px 5px;
        font-weight: 800;
        color: #000;
        font-size: 14px;
        text-align: left;
    }

    ul.ul-list-1.table.disclosure .category_list .cat-post-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 65px;
    }

    ul.ul-list-1.table.disclosure .category_list .cat-post-text .icons {
        padding-right: 5px;
    }

    ul.ul-list-1.table.disclosure .category_list .cat-post-text a {
        padding: 0 10px 0 0;
        /* color: #333;
    font-weight: 600; */
    }

    ul.ul-list-1.table.disclosure .category_list .cat-post-thumb img {
        display: none;
    }

    ul.ul-list-1.table.disclosure .category_list .cat-post-thumb {
        height: 135px;
        width: 80px;
    }

    ul.ul-list-1.table.disclosure .category_list .comments-count {
        padding-top: 4px;
        padding-left: 73px;
        font-size: 13px;
        color: #5fb518;
    }

    ul.ul-list-1.table.disclosure .category_list .cat-post-thumb {
        margin: 0px;
    }

    .ul-list-1 {
        border-radius: 0 !important;
    }


    .ul-list-2 .pagination {
        border: 0 !important;
    }

    
</style>





<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="caf021080dbc373dc8121cfe-|49" defer=""></script>
