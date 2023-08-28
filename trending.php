<?php /* Template Name: trending.php*/ ?>

<?php get_header(); ?>


<center>

<div id="content">
<h1 class="table-title" style="margin-bottom: -1px;"><div class='cat-title'>Trending</div></h1>
<div class="section-wrapper">
</div>


<style>
.cat-title, ul.table.disclosure .category_list .cat-post-thumb {
	display: none;
}
ul.table.disclosure .category_list .cat-post-text a {
	text-align: center;
	color: #f60;
	font-size: 16px;
}
</style>


<div class="still-trending">
<img class="aligncenter size-full wp-image-467315" src="https://i.ibb.co/1nWxwBy/images-13.jpg" alt="" width="600" height="480" srcset="https://i.ibb.co/1nWxwBy/images-13.jpg 600w, https://i.ibb.co/1nWxwBy/images-13.jpg" sizes="(max-width: 600px) 100vw, 600px">
<p>Here are some posts you missed when it was Trending on our Site homepage…. We update this List everyday.</p>
<img class=" size-full wp-image-467324" src="https://i.ibb.co/vPq2563/still-trending.png" alt="" width="220" height="44">
</div>





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

<div align="left">
<div class='trending-btn-wrapper '></div><div class='dropdown-section'><span class='dropdown-text'>Sort by:</span> <div class='dropdown drop-more-hottest'><label for='drop-more-hottest' class='toggle'>Latest Post</label><input type='checkbox' id='drop-more-hottest'><div class='dropdown-content'><a href='/hottest-trending'>Hottest Posts</a></div></div></div>
</div>


<?php  if ( is_page_template( 'trending.php' ) && get_query_var( 'paged' ) >= 2 ) : ?> 
<div class="pag-current">
<span>Trending</span> - <?php echo 'Page '. ( get_query_var('paged') ? get_query_var('paged') : 1 ) . ' ' ; ?></div>
<?php endif; ?>



<ul class="disclosure table group skskks  Trending ">
<?php
//build $args for fetch records...
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => $numPosts,//display post per page
  'paged'          => $paged,
  'category_name'                      => trending
);

//Fetch and loop until records..
$my_query = new WP_Query($args);
while ($my_query->have_posts()):
    $my_query->the_post();
    $do_not_duplicate = $post->ID;?>


<li class="category_list">
<div class='cat-post-thumb' style=' background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)'>
<a class="the-post-link" href="<?php the_permalink(); ?>">
</a></div><div class='cat-post-text'> <div class="the-post-meta">

</div>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

</a></div> </li>

<?php endwhile; ?>

</ul>




<p>
<center>
<?php
 
$currentPage = get_query_var('paged');
 
 
// General arguments
 
$posts = new WP_Query(array(
    'post_type' => 'post', // Default or custom post type
    'posts_per_page' => $numPosts, // Max number of posts per page
    'category_name' => 'trending', // Your category 
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