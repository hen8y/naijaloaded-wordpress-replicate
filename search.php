<?php
get_header();
global $wp_query;
?>

      <h3 style='font-weight:bold;color:green'> <?php echo $wp_query->found_posts; ?>
        <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h3>

        <?php if ( have_posts() ) { ?>

            <ul class='disclosure table group skskks  Naija News '>

            <?php while ( have_posts() ) { the_post(); ?>

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







<li class="category_list">

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

</li>



            <?php } ?>

            </ul>

           <center><?php wpbeginner_numeric_posts_nav(); ?></center>

        <?php } ?>

    
<?php get_footer(); ?>