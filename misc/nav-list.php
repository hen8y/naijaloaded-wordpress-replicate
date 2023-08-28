<noscript><span>&laquo;</span>
<span class="next"><?php previous_posts_link('Previous'); ?></span>
<span>|</span>
<span class="prev"><?php next_posts_link('Next'); ?></span>
<span>&raquo;</span>

</noscript>


<center><?php wpbeginner_numeric_posts_nav(); ?></center>


<style>
.navigation li a:hover,
.navigation li.active a {
    background-color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
}
</style>