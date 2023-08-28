<!DOCTYPE html>

<title><?php if ( is_category() ) {
	echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
} elseif ( is_tag() ) {
	echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
} elseif ( is_archive() ) {
	wp_title(''); echo ' Archive | '; bloginfo( 'name' );
} elseif ( is_search() ) {
	echo 'Search Results '. the_search_query().' | '; bloginfo( 'name' );
} elseif ( is_home() || is_front_page() ) {
	bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
}  elseif ( is_404() ) {
	echo 'Error 404 Not Found | '; bloginfo( 'name' );
} elseif ( is_single() ) {
	wp_title('');
} else {
	echo wp_title( ' | ', false, right ); bloginfo( 'name' );
} ?></title>




<?php if ( is_home() ) : ?> 
<meta property="og:url"           content="<?php echo get_home_url(); ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo get_bloginfo( 'name' ); ?>" />
<meta property="og:description"   content="<?php echo get_bloginfo( 'description' ); ?>" />
<meta property="og:image"         content="<?php echo get_option( 'my_setting_field' );?>" />
<?php endif; ?>



<?php if ( is_home() || is_archive() || is_search()) : ?> 
<?php else : ?>
<meta property="og:url"           content="<?php the_permalink(); ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo get_the_title(); ?>" />
<meta property="og:description"   content="<?php echo get_the_excerpt(); ?>" />
<?php if(has_post_thumbnail()):
    $url = wp_get_attachment_url( get_post_thumbnail_id() );
?>
<meta property="og:image"         content="<?php echo $url; ?>" />
<?php else:
    $theme = wp_get_theme();
    $screenshot_url = esc_url( $theme->get_screenshot() );
?>
<meta property="og:image"         content="<?php echo $screenshot_url; ?>" />
<?php endif; ?>
<?php endif; ?>


<?php if ( is_archive() ) : ?>
<meta property="og:url"           content="<?php the_permalink(); ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php wp_title('', true, 'right'); ?>" />
<meta property="og:description"   content="<?php the_archive_description( '', '' ); ?>" />
<?php if(has_post_thumbnail()):
    $url = wp_get_attachment_url( get_post_thumbnail_id() );
?>
<meta property="og:image"         content="<?php echo $url; ?>" />
<?php else:
    $theme = wp_get_theme();
    $screenshot_url = esc_url( $theme->get_screenshot() );
?>
<meta property="og:image"         content="<?php echo $screenshot_url; ?>" />
<?php endif; ?>
<?php endif; ?>




<?php if ( is_search()) : ?> 
<meta property="og:url"           content="<?php the_permalink(); ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Search Results for <?php the_search_query(); ?>" />
<meta property="og:description"   content="The following search results have been found for '<?php the_search_query(); ?>'" />
<?php if(has_post_thumbnail()):
    $url = wp_get_attachment_url( get_post_thumbnail_id() );
?>
<meta property="og:image"         content="<?php echo $url; ?>" />
<?php else:
    $theme = wp_get_theme();
    $screenshot_url = esc_url( $theme->get_screenshot() );
?>
<meta property="og:image"         content="<?php echo $screenshot_url; ?>" />
<?php endif; ?>
<?php endif; ?>






<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jd.css" media="all" />

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Condensed:400,700|Montserrat:800,700,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&family=Arimo:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">





<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/cache/minify/12345.css" media="all" />



<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<meta name="theme-color" content="<?php echo ot_get_option( 'browser_bar_url' ); ?>" />





<style>a.cld-like-dislike-trigger {color: #6ab51d;}span.cld-count-wrap {color: #000000;}</style>

<style>
            #related_posts_thumbnails li {
                border-right: 1px solid #dddddd;
                background-color: #ffffff            }

            #related_posts_thumbnails li:hover {
                background-color: #eeeeee;
            }

            .relpost_content {
                font-size: 12px;
                color: #333333;
            }

            .relpost-block-single {
                background-color: #ffffff;
                border-right: 1px solid #dddddd;
                border-left: 1px solid #dddddd;
                margin-right: -1px;
            }

            .relpost-block-single:hover {
                background-color: #eeeeee;
            }
        </style>



<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/cache/minify/e2e60.css" media="all" />
<style type="text/css">
    @import url(<?php echo get_stylesheet_directory_uri(); ?>/css/advanced.css);

    ul.table.disclosure li:after {
        content: " ";
        display: block;
        clear: both;
    }
</style>
<script type="4f661d32a7772e9cbc4579ae-text/javascript">
    //Assign blockquote random color
    let colorArray = ['#6c2936', '#86698b'];
    let blockquoteEls = document.querySelectorAll('blockquote');
    let randColor = colorArray[Math.floor(Math.random() * colorArray.length)];
    //alert(randColor);
    //blockquoteEl.style.backgroundColor = randColor;
    [].forEach.call(blockquoteEls, function(blockquoteEl) {
        // do whatever
        blockquoteEl.style.backgroundColor = randColor;
    });
</script>



<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/cache/minify/12368.css" media="all" />



<?php get_template_part( 'header/headers' ); ?>