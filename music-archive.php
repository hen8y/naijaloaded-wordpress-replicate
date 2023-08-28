<?php
/*
Template Name: Hottest Music Posts
*/
get_header(); ?>




<div id="content" class="group">
<div class="sec-nav hottest-nav">
<span class="current" href="/category/music">Hottest Music Posts</span>
</div>


<ul class='disclosure table group ul-list-2'>
<?php 
$popularpost  = new WP_Query( array( 
    'category_name'=> music, 
    'posts_per_page' => $numPosts, 
    'meta_key' => 'post_views_count', 
    'orderby' => 'meta_value_num', 
    'order' => 'DESC'  
) );

if ($popularpost->have_posts()) {
    while ($popularpost->have_posts()) {
        $popularpost->the_post(); ?>

<li class="category_list">
<div class='cat-post-thumb' style=' background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)'>
<a class="the-post-link" href="<?php the_permalink(); ?>">
</a></div><div class='cat-post-text'>
<a class="gtex" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</a></div> </li>

<?php 
    } 
    wp_reset_postdata();
} 
?>


</ul>
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



<?php

get_footer();

?>