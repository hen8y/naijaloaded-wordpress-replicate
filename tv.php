<?php /* Template Name: tv */ ?>
 
<?php get_header(); ?>






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
			.table-title {
				display: none;
			}

			ul.table.disclosure .category_list .cat-post-thumb:after {
				content: " ";
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				position: absolute;
				background: url(https://www.naijaloaded.com.ng/wp-content/uploads/y-icon.png) no-repeat;
				z-index: 10 !important;
				background-size: 45px;
				background-position: center;
				opacity: 0.9;
			}

			ul.table.disclosure li {
				background: #000;
				border: none;
				border-bottom: 1px solid #3e3c3c;
				margin-bottom: 0px !important;
				align-items: center;
			}

			ul.table.disclosure .category_list .cat-post-text a {
				color: #fff;
			}
		</style>

<div class="featured_video_section">
<div class="col-md-12">
<h2>Featured Video</h2>
</div>
<div class="col-md-12">
<?php query_posts('category_name=video&showposts=1'); while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink(); ?>" target="_blank" class="featured_video_item">
<span class="featured-image"><img src="<?php echo catch_that_image(); ?>"></span>
<h3><span> <?php the_title(); ?>
</span></h3>
</a>
<?php endwhile; ?>		<?php wp_reset_query(); ?>
</div>
</div>
<strong><a class="subscribe-button subscribe-button-youtube" href="https://m.youtube.com/channel/UCKAwh5tauMSgcqag?sub_confirmation=1" target="_blank" rel="noopener">Subscribe To Our Youtube Channel <img src="https://i.ibb.co/fMb4WFh/youtube-icon.png" /></a></strong>
<br>


<ul class="disclosure table group skskks"><div class='archive-control-area archive-control-area-before'><div class='archive-control-area-inside'>
<?php if ( is_page_template( 'tv.php' ) ) : ?>
<?php if ( !is_paged() ) : ?>

<h3><span style="background-color: #000000;color: #ffffff"> SOME OF OUR LATEST MOVIES  </span></h3>






<?php query_posts(array('orderby' => 'rand', 'category_name' => 'video', 'showposts' => 6)); if (have_posts()) : while (have_posts()) : the_post(); ?>
<h4><strong><span style="color: #ff6600"><span style="color: #000000">➺</span> 
<a style="color: #ff6600" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></strong></h4>
<?php endwhile; ?> <?php endif;?> <?php wp_reset_query(); ?>


<p>&nbsp;</p>
<h3><span style="background-color: #000000;color: #ffffff"> WATCH OUR NEWEST COMEDY VIDEOS 👇  </span></h3>

<?php endif; ?>
<?php endif; ?>

</div></div>
<?php  if ( is_page_template( 'tv.php' ) && get_query_var( 'paged' ) >= 2 ) : ?> 
<font color="black"><div class="pag-current">
<span>TV</span> - <?php echo 'Page '. ( get_query_var('paged') ? get_query_var('paged') : 1 ) . ' ' ; ?></div></font>
<?php endif; ?>


<?php
//build $args for fetch records...
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => $numPosts,//display post per page
  'paged'          => $paged,
  'category_name'                      => video
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
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

</a></div></li>
<?php endwhile; ?>


</ul>


<?php
 
$currentPage = get_query_var('paged');
 
 
// General arguments
 
$posts = new WP_Query(array(
    'post_type' => 'post', // Default or custom post type
    'posts_per_page' => $numPosts, // Max number of posts per page
    'category_name' => 'video', // Your category 
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
<center>
<?php
// Bottom pagination (pagination arguments)
 
echo "</div>" . paginate_links(array(
    'total' => $posts->max_num_pages,
    'prev_text' => __('<'),
    'next_text' => __('>')
)) . "";
?>
</center>
</div>
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
<p>



<?php get_footer(); ?>