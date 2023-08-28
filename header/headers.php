<style>
    @font-face {
   font-family: Fibra;
   font-weight: 100;
   src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Los-Andes-Fibra-One-Thin.otf');
}
@font-face {
   font-family: Fibra;
   font-weight: 200;
   src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Los-Andes-Fibra-One-Light.otf');
}
@font-face {
   font-family: Fibra;
   font-weight: 400;
   src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Los-Andes-Fibra-One-Regular.otf');
}
@font-face {
   font-family: Fibra;
   font-weight: 600;
   src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Los-Andes-Fibra-One-UltraBold.otf');
}
@font-face {
   font-family: Fibra;
   font-weight: 800;
   src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Los-Andes-Fibra-One-Heavy.otf');
} */


    
    .alert {
        padding: 5px;
        margin-bottom: 0px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-info {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
        margin-bottom: 15px;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
        margin-bottom: 15px;
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
        margin-bottom: 15px;
    }

     #site-name {
        background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>, <?php echo ot_get_option( 'color_bg_light' ); ?>);
        /* background-image: url(https://i.ibb.co/FmG1pYL/header.png);
        background-repeat: repeat-x;
        background-size: contain;
        background-color: #585858; */
        text-align: center;
        position: relative;
    }

    #site-name a.header-main-link {
        padding: 14px 20px !important;
        text-align: left;
    }

    #site-name a.header-main-link:focus {
        outline: 0;
    }

    #site-name a.header-main-link img {
        width: auto;
        height: 40px;
    }

    #site-name .header-gift-icon {
        position: absolute;
        padding: 0;
        top: 20px;
        right: 20px;
    }

    #site-name .header-gift-icon img {
        width: 35px;
    }

    .d-none {
        display: none !important;
    }

    #commentform {
        margin-top: 30px;
    }

        #commentform input[type="submit"] {
        background-color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        box-shadow: inset -1px -1px 3px rgba(47, 47, 47, 0.7);
        border-radius: 5px !important;
        border: none;
        padding: 7px 15px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        -webkit-appearance: none;
    }

    #commentform .title-divider {
        position: relative;
        /*background: none;*/
    }

    #commentform .title-divider span {
        font-family: Arimo, sans-serif;
        text-transform: uppercase;
        font-weight: 800;
        font-size: 19px;
        margin-bottom: 10px;
        /* font-weight: 600; */
        /* background: #808080; */
        color: #333;
        padding: 5px 5px;

        background: linear-gradient(90deg, #cd122d, #154284);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        color: #fff;
        position: relative;
        z-index: 10;
    }

    #commentform .title-divider::after {
        content: "";
        display: block;
        position: absolute;
        width: 230px;
        height: 100%;
        top: 0;
        background: #fff;
        z-index: 1;
    }

    a {
        text-decoration: none;
    }

    body {
        background: #e5e5e5;
        font-family: Arimo, sans-serif !important;
        font-family: sans-serif;
        font-size: 14px;
        line-height: 1.8;
        /*font-family: Rosario;*/
        /*font-family: 'Telkom123-Regular';*/
    }

    p {
        /*line-height: 30px;*/
        margin: 0 0 15px;
        font-family: Arimo, sans-serif;
        font-size: 15px;
    }

    strong {
        font-weight: 600;
    }

    p a,
    p a strong,
    p span a,
    p a strong span {
        text-decoration: none;
        /*color: rgb(51, 51, 51) !important;*/
        /*border-bottom: 2px solid rgb(115, 153, 11) !important;*/
    }

    .style3 {
        font-family: 'Montserrat', sans-serif !important;
        font-size: 14px !important;

    }

    img {


        height: auto;

        max-width: 99%;

    }

    .alignleft,
    .alignright {
        max-width: 100%;
    }

    .wp-post-image {

        float: left;

        margin: 0 11px 0 0;

        padding: 2px 0 5px !important;

    }

    .mejs-container {
        margin-bottom: 10px !important;
    }

    .wp-video {
        margin-bottom: 10px;
    }

    .mobile-menu .mobile-menu-main {
        list-style: none;
        margin: 0;
        /* background: #fff; */
        /* border-bottom: 1px solid #a7a6a6; */
        margin-bottom: 10px;
        -webkit-box-shadow: 0px 4px 5px -3px #a7a6a6;
        -moz-box-shadow: 0px 4px 5px -3px #ccc;
        box-shadow: 0px 4px 5px -3px #a7a6a6;
        text-align: center;
    }

    .mobile-menu .mobile-menu-main li:first-child a {
        border-left: 0;
    }

    .mobile-menu .mobile-menu-main li {
        display: inline-block;
        margin: 0;
    }

    .mobile-menu .mobile-menu-main li a {
        font-family: Arimo, sans-serif;
        /* background: #fff; */
        margin: 0;
        border: none;
        /* border-left: 1px solid #ccc; */
        font-size: 17px;
        font-size: 14px;
        border-radius: 0;
        padding: 10px 6px 5px 6px;
        text-transform: capitalize;
        font-weight: 600;
        display: inline-block;
    }

    .mobile-menu .mobile-menu-main li a.nltv-nav-link {
        font-size: 15px;
    }

    .mobile-menu .mobile-menu-main li a i {
        display: block;
        padding-bottom: 5px;
        font-size: 20px;
        position: relative;
    }

    .mobile-menu .mobile-menu-main li a i.icons-nltv {
        font-size: 1px;
        padding-bottom: 1px;
    }

    .mobile-menu .mobile-menu-main li a i.icon-music-tone-alt::after {
        content: "";
        display: block;
        top: -6px;
        right: -3px;
        width: 13px;
        height: 13px;
        position: absolute;
        background: #f00;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/2019/09/blinking-red-dot.gif) no-repeat;
        background-size: contain;
        border-radius: 50%;
    }

    .mobile-menu .dropdown-content {
        right: 0;
        left: auto;
    }

    .mobile-menu a {
        /* text-shadow: 1px -1px 0px #CCCCCC; */

        font-weight: 600;
        font-size: 12px;
        display: inline-block;
        margin-bottom: 10px;
        margin-right: 5px;
        padding: 5px 1px;
        margin: 0;
        text-transform: uppercase;
    }

    .archive-control-area.archive-control-area-before a {
        padding: 0 !important;
        background: none !important;
    }

    .archive-control-area.archive-control-area-after .cat-music li {
        background: none;
        display: inline-block;
        border: none;
    }

    .archive-control-area.archive-control-area-after .cat-music li a {
        background: none;
        padding: 15px 5px;
    }

    .d-none {
        display: none;
    }

    .dropdown {
        /*float: left;*/
        /*overflow: hidden;*/
        display: inline-block;
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        left: 0;
    }

    .dropdown a {
        float: none;
        color: black;
        padding: 10px 12px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        display: block;
        text-align: left;
        /* display: none; */
        text-transform: uppercase;

    }

    /* .dropdown>.toggle:before {
        font-family: 'simple-line-icons';
        content: "\e604";
        position: absolute;
        right: 4px;
        font-size: 7px;
        top: 7px;
        font-weight: 900;
    } */

    .dropdown>.toggle:before {
        position: absolute;
        right: 4px;
        font-size: 7px;
        top: 8px;
        content: "";
        font-weight: 900;
        border-top: 5px solid;
        border-right: 5px solid transparent;
        border-bottom: 0;
        border-left: 5px solid transparent;
    }

    .dropdown>.toggle {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 12px;
        position: relative;
        background: <?php echo ot_get_option( 'random_button_bg_color' ); ?>;
        background: none;
        border: 2px solid <?php echo ot_get_option( 'random_button_bg_color' ); ?>;
        padding: 3px 14px 3px 10px;
        color: <?php echo ot_get_option( 'random_button_bg_color' ); ?>;
        text-shadow: none;
    }

    .dropdown-content .toggle:hover {
        background-color: #ddd;
    }

    .dropdown-section {
        margin: 25px 20px 25px 10px;
    }

    .dropdown-text {
        font-size: 16px;
        font-weight: 600;
    }

    .dropdown.drop-more-hottest {}

    .dropdown.drop-more-hottest>.toggle {
        color: #000;
        border: 1px solid #000;
        padding: 7px 33px 7px 13px;
        border-radius: 4px;
        font-size: 14px;
    }

    .dropdown.drop-more-hottest>.toggle:before {
        top: 9px;
        right: 8px;
    }


    /*.dropdown:hover .dropdown-content {
  display: block;
}*/
    #drop-more {
        display: none;
    }

    #drop-more:checked+.dropdown-content {
        display: block;
    }

    #drop-more-hottest {
        display: none;
    }

    #drop-more-hottest:checked+.dropdown-content {
        display: block;
        top: 30px;
        border-radius: 3px;
        min-width: 100%;
        right: 0;
    }

    .menu-divider {
        padding: 0 1px;
        color: #b9b9b9;
    }


    .header-ad-m {
        margin-bottom: 15px;
    }

    .header-ad-m img {
        -webkit-box-shadow: 0 0 8px #000 !important;
        -moz-box-shadow: 0 0 8px #000 !important;
        box-shadow: 0 0 8px #000 !important;
    }


    .tag-post-title {
        background-color: #000000;
        color: #ffffff;
        display: inline-block;
        margin: 0 8px 3px 8px;
        padding: 5px 10px;
    }

    .home-search input.home-search-text-wrapper {
        width: 100%;
    }

    .home-search input.home-search-text,
    #search #s {
        width: 70%;
        border: 2px solid rgba(0, 0, 0, .2);
        background: #ffffff;
        line-height: 30px;
        box-sizing: border-box;
        border-radius: 8px;
        padding: 0 35px 0px 10px !important;
        font-size: 15px;
        font-family: Arimo, sans-serif;
        -webkit-appearance: none;

    }

   .home-search input[type="submit"],
    #search input[type="submit"] {
        background: <?php echo ot_get_option( 'color_bg_light' ); ?> url(https://api.iconify.design/simple-line-icons:magnifier.svg?color=%23fff) no-repeat center center;
        background: #cccccc;
        background-size: 20px;
        border-radius: 0 8px 8px 0px !important;
        background-position: 12px 3px;
        box-sizing: border-box;
        border: 0;
        color: #fff;
        /* color: <?php echo ot_get_option( 'color_bg_light' ); ?>; */
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

    #footer center div p a strong {
        color: #c7c7c7 !important;
    }

    .post-featured-image {
        position: relative;
    }

    .post-featured-image p {
        padding: 0;
    }

    .post-featured-image img {
        width: 100%;
    }

    .post-featured-caption {
        font-family: 'Roboto';
        position: absolute;
        z-index: 10;
        left: 0;
        right: 0;
        bottom: 0;
        text-align: left;
        padding: 15px;
        background: rgba(0, 0, 0, 0.8);
        text-shadow: none;
        font-weight: 800;
        color: #fff;
        font-size: 16px;
    }

    .sections-wrapper {
        text-align: center;
    }

    input.posts-section-link {
        display: none;
    }

    .post-section {
        /* display: none; */
        padding-top: 48px;
    }
    #trending-posts-section {
        padding-top: 0;
    }
    .post-section#new-posts-section {
        display: block;

    }

    input.posts-section-link+label {
        border: 1px solid #6acb1a;
        background: none;
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        padding: 5px 10px;
        display: inline-block;
        border-radius: 5px 5px;
        margin: 10px 0 15px 0;
        /* min-width: 130px; */
        width: 33.33333%;
        box-sizing: border-box;
        font-weight: 600;
        text-transform: uppercase;
    }

    input.posts-section-link+label a {
        color: #fff;
    }

    input#new-posts-link.posts-section-link+label {
        border-radius: 5px 0 0 5px;
        border-right: 0;
        position: relative;
        padding-left: 0;
        z-index: 10;
    }

    input.posts-section-link+label:before {
        content: "";
        display: block;
        position: absolute;
        top: 7px;
        left: 55px;
        width: 30px;
        height: 17px;
        /* background: url(https://www.naijaloaded.com.ng/wp-content/uploads/new-post.png);
    background-size: 20px; */
        background-repeat: no-repeat;
    }

    input#new-posts-link.posts-section-link+label:before {
        /* content: "";
    display: block;
    position: absolute;
    top: 11px;
    left: 0;
    width: 30px;
    height: 30px; */
        background-image: url(https://www.naijaloaded.com.ng/wp-content/uploads/new-post-icons.png);
        background-size: contain;
        /* background-repeat: no-repeat; */
        height: 20px;
        top: 4px;
    }

    input#new-songs-link.posts-section-link+label:before {

        background-image: url(https://www.naijaloaded.com.ng/wp-content/uploads/latest-songs.png);
        background-size: contain;
        left: 57px;
    }

    input#new-songs-link.posts-section-link+label a {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
    }

    input#trending-posts-link.posts-section-link+label:before {
        background-image: url(https://www.naijaloaded.com.ng/wp-content/uploads/trending-post.png);
        background-size: contain;
        /* display: none; */
    }

    input#new-posts-link.posts-section-link+label .new-label {
        /* background: url(https://www.naijaloaded.com.ng/wp-content/uploads/new.png) no-repeat; */
        background-size: contain;
        background: #f00;
        z-index: -1;
        color: #ffffff;
        height: 35px;
        width: 35px;
        height: auto;
        width: auto;
        position: absolute;
        right: -38px;
        top: 2px;
        font-size: 14px;
        text-transform: lowercase;
        display: block;
        line-height: 17px;
        line-height: 13px;
        /* background: #fff; */
        font-weight: 400;
        padding: 3px;
        border-radius: 0;
    }

    input#trending-posts-link.posts-section-link+label {
        border-radius: 0 5px 5px 0;
        border-left: 0;
        /* margin-left: -20px; */
        /* margin-right: 40px; */
        /* padding-left: 25px; */
    }

    /* input#trending-posts-link.posts-section-link + label:before {
    content: "";
    display: block;
    position: absolute;
    top: 11px;
    left: 0;
    width: 30px;
    height: 30px;
    background: url(https://www.naijaloaded.com.ng/wp-content/uploads/2019/04/5456789098765435678.gif);
    background-size: 20px;
    background-repeat: no-repeat;
} */

    .post-list-single a {
        display: block;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc !important;
    }

    .post-list-single a img {
        float: left;
        width: 38%;
        display: block;
    }

    .post-list-single a span {
        float: left;
        padding: 0px 10px;
        width: 62%;
        display: block;
        box-sizing: border-box;
        font-weight: 600;
        color: #000;
        font-size: 17px;
        line-height: 1.4;
    }

    .post-list-single a::after {
        content: "";
        display: table;
        clear: both;
    }


    /**Song Widgets */
    .njl-music-widget {
        display: block;
        background: none repeat scroll 0 0 #050505;
        border: 1px solid #ccc;
        padding: 15px;
        position: relative;
        margin: 0 auto;
        margin-bottom: 20px;
    }

    .njl-music-widget::before {
        content: "";
        display: block;
        height: 14px;
        width: 100px;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/naijaloaded-logo-1.png) no-repeat;
        background-size: contain;
        background-position: right;
        position: absolute;
        right: 10px;
        top: 8px;
    }

    .njl-music-widget .artwork {
        display: block;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        float: left;
        top: 10px;
        line-height: 0;
        margin-right: 5px;
        margin-bottom: 15px;
        width: 100px;
        height: 100px;
    }

    .njl-music-widget .artwork img {
        display: none;
    }

    .njl-music-widget .details {
        display: block;
        line-height: 20px;
        overflow: hidden;
        margin-bottom: 10px;
        color: #fff;
        padding-top: 17px;
        padding-left: 10px;
    }

    .njl-music-widget .details .song {
        font-family: "Helvetica Neue", helvetica, arial, sans-serif;
        display: block;
        font-weight: 800;
        font-size: 17px;
        margin-bottom: 5px;
    }

    .njl-music-widget .details .artist {
        font-size: 14px;
        font-weight: normal;
    }

    .njl-music-widget .player-wrapper {
        display: block;
    }

    .njl-music-widget .player-wrapper br {
        display: none;
    }

    .njl-music-widget .mejs-container {
        margin: 0 !important;
    }

    .download-btn-wrapper {
        display: block;
        text-align: center;
    }


    @media (min-width: 992px) {
        .njl-music-widget .artwork {
            margin-bottom: 0;
            height: 130px;
            width: 25%;
        }

        .njl-music-widget .details {
            padding-top: 15px;
        }

        .njl-music-widget .mejs-container {
            width: 72% !important;
            float: right;
            margin-top: -52px !important;
        }

        .njl-music-widget::after {
            content: "";
            display: block;
            clear: both;
        }
    }


    /******Trending Posts *****/
    #post-selector-popup-wrapper {
        position: fixed;
        z-index: 100;
        top: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
    }

    .post-selector-popup {
        background: #468010;
        padding: 20px 15px;
        text-align: center;
        position: absolute;
        top: 30%;
        left: 0;
        right: 0;
        height: 50%;
        /* transform: translate(0px, -50%); */
        margin: 10px;
        box-sizing: content-box;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .post-selector-popup .popup-cancel {
        position: absolute;
        top: -13px;
        font-size: 26px;
        line-height: 37px;
        right: -9px;
        width: 40px;
        height: 40px;
        background: #F44336;
        color: #ffffff;
        border: 1px solid #ffffff;
        border-radius: 30px;
        font-weight: 600;
        font-family: Montserrat;
    }

    .post-selector-popup h2 {
        color: #fff;
        text-align: center;
        font-size: 19px;
        margin-bottom: 18px;
        order: 0;
    }

    .post-control-btn {
        color: #fde93a;
        text-transform: uppercase;
        font-weight: 600;
        margin: 0;
    }

    .post-control-btn.view-trending-post {
        background: linear-gradient(-90deg, #ffeb3b, #c5b527);
        display: inline-block;
        color: #2e5707;
        font-weight: 600;
        padding: 10px 40px;
        border-radius: 5px;
        order: 1;
    }

    .post-control-btn.view-latest-post {
        background: linear-gradient(-90deg, #fff, #f0f0f0);
        display: inline-block;
        color: #2e5707;
        font-weight: 600;
        padding: 10px 40px;
        border-radius: 5px;
        order: 1;
    }

    .post-control-btn {
        display: inline-block;
        padding: 10px;
        margin: 10px 0;
        order: 2;
    }

    .tp-wrapper {
        padding: 0 20px;
        max-width: 350px;
    }

    .tp-text {
        margin-bottom: 15px;
        background: #000;
        font-size: 1rem;
        color: #fff;
        padding: 10px;
        font-weight: 600;
        display: inline-block;
    }

    #content .post-title+.byline.small+center {
        margin-bottom: 25px;
    }

    #content>.sections-wrapper {
        overflow: none;
        position: relative;
        background: #fff;
    }

    #content>.sections-wrapper::before {
        /* content: ""; */
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
        z-index: 1;
        height: 50px;
        background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_light' ); ?>, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
    }

    #content h3 {
        font-size: 18px;
    }

    .page-tag-button-wrapper {
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        margin-top: 25px;
        margin-bottom: 30px;
        padding-top: 10px;
        padding-bottom: 5px;
    }

    .page-tag-button-wrapper .page-tag-text {
        font-size: 20px;
        font-weight: 600;
        padding-right: 10px;
        display: block;
        margin-bottom: 5px;
    }

    h3.read-also-header {
        color: red !important;
        font-size: 20px;
        margin-top: 10px;
    }

    h3.read-also-header a {
        color: black;
    }

    a.page-tag-button {
         display: inline-block;
        background: #fff;
        color: #2da2d2;
        border: 2px solid #2da2d2;
        font-size: 16px;
        margin-right: 10px;
        border-radius: 0px;
        padding: 8px 15px;
        margin-bottom: 15px;
        line-height: 1;

        margin-bottom: 10px;
    }

    a.page-tag-button::before {
        /* content: "#"; */
    }

    a.page-tag-button:hover {
        color: #2da2d2;
        border: 2px solid #2da2d2;
        background: rgb(45 162 210 / 7%);
    }

    input.posts-section-link:checked+label {
        background: <?php echo ot_get_option( 'color_bg_dark' ); ?>;
        background: linear-gradient(to right, <?php echo ot_get_option( 'color_bg_light' ); ?>, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
        background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_light' ); ?>, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
        color: #fff;
        text-shadow: 2px 1px 3px #000000;
        margin: 0 -3px;
    }

    input.posts-section-link+label {
        background: none;
        color: #fff;
        text-shadow: none;
        font-size: 15px;
        border: none;
        border-radius: 0;
        padding: 0px 0px;
        height: 50px;
        line-height: 70px;
        margin-bottom: -2px;
        font-weight: 900;
        margin: 0;
        position: relative;
        display: block;
        float: left;
        z-index: 10;
    }

    input.posts-section-link:checked+label {
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        text-shadow: none;
        background: none;
        margin: 0 -3px;
        border-radius: 0 !important;
    }

    input.posts-section-link:checked+label:after {
        content: "";
        position: absolute;
        right: 0;
        left: 0;
        bottom: 0;
        height: 5px;
        background: #FFEB3B;
    }

    input#new-posts-link.posts-section-link:checked+label {
        padding-left: 0;
    }

    input#trending-posts-link.posts-section-link:checked+label {
        padding-left: 0;
        z-index: 10;
    }

    /*input#new-posts-link.posts-section-link + label::after {
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
    span.list-titlee {
        /* display: none !important; */
    }

    #new-posts-link:checked~#new-posts-section,
    #trending-posts-link:checked~#trending-posts-section {
        display: block;
        margin-top: -3px;
    }

    #new-posts-link~#new-posts-section span.list-titlee {
        display: block !important;
    }

    #new-posts-link:checked~#new-posts-section span.list-titlee {
        display: none !important;
    }

    .whatsapp-join-btn a {
        display: inline-block;
        height: 30px;
        margin-top: 15px;
        margin-bottom: 20px;
        font-size: 16px;
        position: relative;
    }

    .whatsapp-join-btn a::before {
        content: "";
        position: absolute;
        left: 0;
        height: 45px;
        width: 45px;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/whatsapp_icon.png);
        background-repeat: no-repeat;
        background-size: contain;
        z-index: 10;
    }

    .whatsapp-join-btn a span {
        position: relative;
        z-index: 5;
        color: #fff;
        background: #00a82d;
        padding: 4px 15px;
        padding-left: 50px;
        padding-bottom: 5px;
        display: inline-block;
        margin-top: 11px;
        margin-left: 5px;
        line-height: 1;
        border-radius: 20px;
    }

    .pinned-sticky-post_link {
        display: flex;
        background: #fff;
        align-items: center;
        margin: 0 8px;
        margin-top: 10px;
    }

    .pinned-sticky-post_link img {
        display: block;
        flex: 0 0 25%;
        max-width: 25%;
    }

    .pinned-sticky-post_link span {
        display: block;
        flex: 0 0 75%;
        max-width: 75%;
        font-weight: 800;
        font-family: sans-serif;
        color: #000;
        font-size: 13px;
        text-align: left;
        padding: 0 20px 0 15px;
        box-sizing: border-box;
    }

    ul.table.disclosure {
        margin: 10px 3px 3px 3px;
        padding: 0;
        border: none;
        background: transparent;
    }

    ul.table.disclosure {}

    ul.table.disclosure.ul-list-1 {
        margin-top: 10px;
    }
    ul.table.disclosure li,
    ul.table li.disclosure {
        background: #fff;
        display: flex;
        align-items: center;
        clear: both;
        margin: 0px 5px 5px 5px !important;
        position: relative;
        padding: 0 !important;
        padding-bottom: 5px !important;

    }
    ul.table.sticky-post-wrapper li:last-child {
        border-bottom: 1px solid rgb(204, 204, 204) !important;
    }
    ul.table.sticky-post-wrapper li.category_list .the-post-link::before {
        content: "";
        display: block;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/pin-image-small.png);
        background-size: contain;
        height: 20px;
        width: 20px;
        position: absolute;
        z-index: 10;
        left: 5px;
        top: 5px;
    }
    li.trending-section-item::after {
        display: none !important;
    }
    li.trending-section-item a {
        display: flex !important;
        padding: 5px 0 !important;
        background: none !important;
        align-items: center;
    }
    li.trending-section-item a span {
        flex: 0 0 100px;
    }
    li.trending-section-item a h3 {
        color: #000;
        font-size: 14px !important;
        text-align: left;
        padding-left: 10px;
    }

    /*ul.table.disclosure.ul-list-1 {
    
    overflow-y: scroll;
    height: 400px;
    scroll-behavior: smooth;

}

ul.table.disclosure.ul-list-1::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
}

ul.table.disclosure.ul-list-1::-webkit-scrollbar
{
    width: 12px;
    background-color: #F5F5F5;
}

ul.table.disclosure.ul-list-1::-webkit-scrollbar-thumb
{
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #555;
}*/

    /******The post meta sectgion******
ul.table.disclosure .category_list .cat-post-text .the-post-meta {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
}
ul.table.disclosure .category_list .cat-post-text .the-post-meta .post-categories {
    margin: 0;
}
ul.table.disclosure .category_list .cat-post-text .the-post-meta .post-categories li {
    background: none !important;
    display: none;
}
ul.table.disclosure .category_list .cat-post-text .the-post-meta .post-categories li:first-child {
    display: block;
    border: 0;
    margin: 0 !important;
    padding: 0 !important;
}
ul.table.disclosure .category_list .cat-post-text .the-post-meta .post-categories li a {
    background: #e8e8e8;
    color: #7b7b7b;
    padding: 5px !important;
    line-height: 1;
    font-weight: 400;
    font-size: 11px;
    text-transform: uppercase;
}
ul.table.disclosure .category_list .cat-post-text .the-post-meta .the-post-meta_time {
    position: absolute;
    bottom: 15px;
    width: 300px;
    font-size: 11px;
}
*****/

    ul.table.disclosure:not(.disable_featured_post) li:first-child {
        display: block;
    }

    ul.table.disclosure:not(.disable_featured_post) li:first-child .cat-post-thumb {
        width: 100%;
        height: 200px;
    }

    ul.table.disclosure:not(.disable_featured_post) li:first-child .cat-post-text {
        position: absolute;
        bottom: 0;
        padding: 0 15px 5px 15px;
    }

    ul.table.disclosure:not(.disable_featured_post) li:first-child .cat-post-text a {
        color: #fff;
        text-shadow: 1px 1px 3px rgb(0 0 0);
        background: rgb(0 0 0 / 45%);
        padding: 6px 0px;
        line-height: 2.2;
        display: inline;
    }

    .archive-control-area-inside {
        padding: 0px 11px 0 11px;
    }

    .archive-control-area-inside p {
        color: #000;
    }

    ul#trendingContainer.table.disclosure li:nth-child(1),
    ul#trendingContainer.table.disclosure li:nth-child(2),
    ul#trendingContainer.table.disclosure li:nth-child(3),
    ul#trendingContainer.table.disclosure li:nth-child(4),
    ul#trendingContainer.table.disclosure li:nth-child(5),
    ul#trendingContainer.table.disclosure li:nth-child(6),
    ul#trendingContainer.table.disclosure li:nth-child(7),
    ul#trendingContainer.table.disclosure li:nth-child(8),
    ul#trendingContainer.table.disclosure li:nth-child(9),
    ul#trendingContainer.table.disclosure li:nth-child(10),
    ul#trendingContainer.table.disclosure li:nth-child(11),
    ul#trendingContainer.table.disclosure li:nth-child(12),
    ul#trendingContainer.table.disclosure li:nth-child(13),
    ul#trendingContainer.table.disclosure li:nth-child(14),
    ul#trendingContainer.table.disclosure li:nth-child(15),
    ul#trendingContainer.table.disclosure li:nth-child(16),
    ul#trendingContainer.table.disclosure li:nth-child(17),
    ul#trendingContainer.table.disclosure li:nth-child(18),
    ul#trendingContainer.table.disclosure li:nth-child(19),
    ul#trendingContainer.table.disclosure li:nth-child(20) {
        display: flex !important;
    }
    

    #content {
        position: relative;
        border: none;
    }

    #more-trending-button span.more-trending-button-content {
        margin-top: auto;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 10px;
    }

    #more-trending-button span.more-trending-button-content span {
        background: #000;
        color: #fff;
        padding: 5px 15px;
        margin-bottom: 5px;
        display: inline-block;
    }

    ul.table.disclosure .sticky-link a {
        padding: 12px 25px 12px 35px;
        line-height: 1.7 !important;
    }

    ul.table.disclosure a {
        /*background: none !important;*/
        /*font-size: 14px;*/
        /*font-family: Rosario;*/
    }

    .section-wrapper {
        padding: 10px;
    }

    .section-wrapper p:last-child {
        margin-bottom: 0;
    }

    .archive_description {
        margin: 10px 10px 0 10px;
    }

    .archive-control-area-inside h4 a {
        display: inline !important;
    }

      .read-also-bar {
        background: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        border-left: 3px solid #000;
        padding: 3px 10px 3px 10px;
        color: #fff;
        font-weight: 600;
    }

    .read-also-bar a {
        color: #fff;
        text-decoration: underline !important;
    }

    .more-trending {
        text-align: center;
        color: #ffffff;
        font-weight: 600;
        display: flex;
        background: #000;
        padding: 10px;
        text-align: center;
        display: block;
        text-transform: uppercase;
    }

    .hottest-songs-btn {
        text-align: center;
        color: #ffffff;
        font-weight: 600;
        display: flex;
        background: #f00;
        background-image: linear-gradient(-90deg, #a6ec47, #fe0c0c);
        padding: 10px 10px 10px 10px;
        margin-bottom: 15px;
        text-align: center;
        display: block;
        text-transform: uppercase;
        line-height: 25px;
        line-height: 1;
        position: relative;
    }

    .hottest-songs-btn:hover {
        color: #f0f0f0;
    }

    .hottest-songs-btn img {
        height: 25px;
        display: inline-block;
        padding-right: 10px;
        position: absolute;
        line-height: 5px;
        left: 14%;
        top: 5px;
    }


    /****Music Filter*****/
      .sec-nav {
        background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_light' ); ?>, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
        padding: 0;
        text-align: center;
        margin-bottom: 15px;
    }

    .sec-nav a {
        font-family: Arimo, sans-serif;
        font-weight: 800;
        text-transform: uppercase;
        font-size: 1.0rem;
        color: #fff;
        color: #ff8a3d;
        margin: 0 20px;
        height: 46px;
        line-height: 46px;
        display: inline-block;
        width: 49.5%;
        position: relative;
        margin: 0;
    }

    .sec-nav a::before {
        content: "";
        display: block;
        top: 6px;
        right: 10px;
        width: 13px;
        height: 13px;
        position: absolute;
        background: #f00;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/2019/09/blinking-red-dot.gif) no-repeat;
        background-size: contain;
        border-radius: 50%;
    }

    .sec-nav a.current {
        color: #c3ff72;
        position: relative;
    }

    .sec-nav a.current::before {
        display: none;
    }

    .sec-nav a:first-child {
        margin-left: 0;
    }

    .sec-nav a.current:after {
        content: "";
        position: absolute;
        right: 0;
        left: 0;
        bottom: 0;
        height: 5px;
        background: #FFEB3B;
    }

    .sec-nav span {
        font-family: Montserrat;
        font-weight: 800;
        text-transform: uppercase;
        font-size: 1.0rem;
        color: #c3ff72;
        margin: 0 20px;
        height: 46px;
        line-height: 46px;
        display: inline-block;
        width: 100%;
        position: relative;
        margin: 0;
    }

    .sec-nav span.current:after {
        content: "";
        position: absolute;
        right: 0;
        left: 0;
        bottom: 0;
        height: 5px;
        background: #FFEB3B;
    }

    .sec-nav.hottest-nav {
        margin-top: -10px;
        margin-left: -15px;
        margin-right: -15px;
        margin-bottom: 15px;
    }

    .music-filter {
        padding: 0 10px 10px;
    }

    .music-filter h2 {
        display: inline-block;
        font-family: 'Telkom123-Regular', sans-serif;
        font-weight: 800;
        font-size: 14px;
        padding-right: 15px;
        text-transform: uppercase;
    }

    .music-filter select,
    .music-filter select option {
        display: inline-block;
        width: 220px;
        font-size: 14px;
        font-weight: 600;
    }

    .category-page-title {
        background: #000;
        color: #fff;
        display: inline-block;
        padding: 0px 20px;
        margin-left: 5px;
        margin-bottom: 0;
    }

    .sport-category-title.category-page-title {
        margin: 20px 0 10px -7px;
    }

    .trending-page-btn {
        font-weight: 600;
        font-size: 16px;
        color: #000;
        padding: 5px 10px;
        display: inline-block;
        margin: 20px 5px;
    }

    .trending-page-btn::before {
        display: none;
        content: "➺";
        padding-right: 6px;
        color: #000;
        font-size: 16px;
    }

    .trending-page-btn span {
        background: #f00;
        color: #fff;
        display: inline-block;
        line-height: 1;
        padding: 5px;
    }

    ul.table.disclosure a.more-trending-page {
        text-align: center;
        color: #ffffff;
        font-weight: 600;
        display: flex;
        background: #f00;
        padding: 10px;
        text-align: center;
        display: block;
        text-transform: uppercase;
    }

    #more-trending-button {
        text-align: center;
        color: #ffffff;
        font-weight: 600;
        display: flex;
        background: #000;
        padding: 12px 50px;
        line-height: 1;
        border-radius: 5px;
        text-align: center;
        display: inline-block;
        text-transform: uppercase;
    }

    #more-trending-button.arrow-down::after {
        content: "\e606";
        display: inline-block;
        font-family: 'simple-line-icons';
        padding-left: 10px;
    }

    #more-trending-button.arrow-up::after {
        content: "\e607";
        display: inline-block;
        font-family: 'simple-line-icons';
        padding-left: 10px;
    }

    .click_latest_post {
        text-align: center;
        margin-bottom: 0px;
        margin: 2px 3px -2px 3px;
        background: #fff;
    }

    .click_latest_post a {
        font-size: 15px;
        display: inline-block;
        color: #ff0000;
        padding: 4px 0px 8px 0px;
        margin-bottom: 0px;
        font-weight: 700;
        text-transform: capitalize;
        font-family: 'Montserrat', sans-serif;
        line-height: 23px;
    }

    .click_latest_post a span {
        line-height: 18px;
        display: inline-block;
        float: left;
    }

    .click_latest_post a img {
        width: 20px;
        display: inline-block;
        margin-left: 5px;
    }

    .trending-paginate {
        margin: -2px 3px 0 3px;
        background: #fff;
        padding: 0px 10px 10px 10px;
        border: none;
        border-top: 0;
        text-align: center;
    }

    .widget-area .widget#text-30,
    .widget-area .widget#text-29 {
        background: none;
    }

    /* 
    .mobile-media-of-the-week {
        background: #f0f9f0;
        margin-bottom: 20px;
    }

 .mobile-media-of-the-week {
        background: <?php echo ot_get_option( 'color_bg_media_of_week' ); ?>;
        margin-bottom: 20px;
    }

    .mobile-media-of-the-week .media-row {
        display: flex;
    }

    .mobile-media-of-the-week .media-image {
        flex: 0 0 100px;
        width: 100px;
        overflow: hidden;
    }

    .mobile-media-of-the-week .media-image img {
        height: 100px;
        width: auto;
        max-width: inherit;
    }

    .mobile-media-of-the-week .media-content {
        flex: 5;
        padding: 0 10px 0 20px;
        margin-top: 15px;
    }

  .mobile-media-of-the-week .media-content h2 {
        color: <?php echo ot_get_option( 'color_bg_dark' ); ?>;
        font-size: 1em;
        margin-bottom: 20px;
        margin-top: 0;
    }

  .mobile-media-of-the-week .media-content a {
        background: <?php echo ot_get_option( 'color_bg_dark' ); ?>;
        color: #fff;
        display: inline-block;
        padding: 0 5px;
        border-radius: 5px;
    } */


    .mobile-media-of-the-week {
        background: #cfcdcd;
        padding: 20px;
    }
    .mobile-media-of-the-week.video-of-the-week {
        background: #fff;
        padding: 0;
    }
    .mobile-media-of-the-week .title {
        display: inline-block;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 1;
        padding: 8px 10px;
        padding-left: 28px;
        background: #000;
        color: #fff;
        position: relative;
        margin-bottom: 15px;
    }
    .mobile-media-of-the-week .title::before {
        content: "";
        display: inline-block;
        height: 15px;
        width: 15px;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/trending-post.png);
        background-size: cover;
        position: absolute;
        left: 8px;
        top: 6px;
    }
    /* .mobile-media-of-the-week .title img {
        width: 200px;
        display: block;
        margin-bottom: 5px;
    } */
    .mobile-media-of-the-week .album-art {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        text-align: center;
        margin-bottom: 0px;
        position: relative;
    }

    .mobile-media-of-the-week .album-art::after {
        /* content: ""; */
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgb(0 0 0 / 0.7);
    }

    .mobile-media-of-the-week .album-art>* {
        position: relative;
        z-index: 10;
    }

    .mobile-media-of-the-week .album-art img.album-art-img {
        border: 2px solid #fff;
        flex: 0 0 30%;
        width: 30%;
        display: block;
        box-sizing: border-box;
    }

    .mobile-media-of-the-week .album-art-title {
        display: flex;
        flex-direction: column;
        line-height: 1;
        margin-top: 0px;
        flex: 0 0 70%;
        box-sizing: border-box;
        align-items: flex-start;
        padding-left: 15px;
    }

    .mobile-media-of-the-week .album-art-artiste {
        font-size: 15px;
        color: #333;
        padding: 0px 0px 10px 0px;
    }

    .mobile-media-of-the-week .album-art-track {
        font-size: 15px;
        color: #333;
        font-weight: 600;
        padding: 0px 0px 10px 0px;
        margin-top: 0px;
    }
    .mobile-media-of-the-week .album-art-title::after {
        content: "Listen Now";
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        background: #000;
        z-index: 10;
        padding: 8px 10px;
        border-radius: 0px;
        margin-left: 0px;
    }


    .mobile-media-of-the-week.video-of-the-week .mobile-media-of-the-week-inner {
        background: #464646;
        padding-bottom: 15px;
    }

    .mobile-media-of-the-week.video-of-the-week .mobile-media-of-the-week-link {
        text-align: center;
        display: block;
    }

    .mobile-media-of-the-week.video-of-the-week .mobile-media-of-the-week-link span {
        text-shadow: 1px 1px 3px rgb(0 0 0);
        background: rgb(0 0 0 / 45%);
        font-size: 17px;
        color: #fff;
        font-weight: 600;
        padding: 5px 10px 6px 10px;
        margin-top: 5px;
    }


    .trending-title {
        display: inline-block;
        background: #000;
        color: #fff;
        padding: 3px 10px;
        font-size: 1.0em;
        font-weight: 600;
        border-radius: 0px;
        margin-bottom: 3px;
        text-shadow: 2px 1px 3px #000000;
    }

    .mobile-trending-wrapper.hot-mixtape {
        padding: 0;
        border: 0;
    }

    .mobile-trending-wrapper.hot-mixtape .trending-title {
        display: inline-block;
    }

    .mobile-trending-wrapper.hot-mixtape .trending-single a span {
        padding: 10px 10px 7px 10px;
        color: #1b1b1b;
        font-weight: 900;

    }

    .mobile-trending-wrapper.hot-mixtape .trending-single a:hover {
        text-decoration: none;
        border-bottom: 0;
    }


    


    /** Floating ad **/
    .mba-link-wrapper {
        background: rgba(72, 133, 16, 0.9);
        background: <?php echo ot_get_option( 'sticky_adsfooter_bg_color' ); ?>;
        display: block;
        padding: 5px 10px;
    }

    .mba-row {
        display: flex;
        /*align-items: center;*/
        /*background: url(https://www.naijaloaded.com.ng/wp-content/uploads/mod-gif.gif) no-repeat;*/
        background-size: 36px;
        background-position: 280px center;
    }

    .mba-thumbnail {
        width: 20%;
        text-align: left;
    }

    .mba-thumbnail img {
        height: 70px;
        border: 1px solid #fff;
    }

    .mba-info {
        width: 90%;
        text-align: left;
        padding-left: 10px;
    }

    .mba-title {
        display: inline-block;
        background: #1a3800;
        color: #fff;
        font-weight: 400;
        padding: 4px 5px;
        line-height: 1;
        text-transform: uppercase;
        font-size: 10px;
        border-radius: 4px;
        margin-bottom: 7px;

        /*position: absolute;
    top: -17px;*/
    }

    .mba-track {
        font-family: 'Arimo', sans-serif;
        line-height: 1.2;
        color: #3d690e;
        font-weight: 700;
        display: block;
        box-sizing: border-box;
        font-size: 16px;
        padding-top: 0px;
    }

    .mba-track .mba-artiste {
        display: block;
        font-weight: 400;
        font-size: 18px;

        font-size: 21px;
    }

    .mba-button {
        display: none;
        width: 20%;
        height: 40px;
        background: url(https://cdn0.iconfinder.com/data/icons/pack-web-app-game/512/play-button-512.png) no-repeat;
        background-size: contain;
        background-position: center;
    }


    .holder {
        text-align: center;
    }

    .holder a {
        display: none;
    }

    .holder a.jp-next {
        display: inline-block;
        background: #000;
        color: #fff;
        padding: 5px 10px;
        text-transform: uppercase;
        font-weight: 600;
        cursor: pointer;
    }

    .pag-label {
        font-family: roboto;
        padding-right: 11px;
        font-weight: 800;
        font-size: 13px;
        display: block;
        padding-top: 10px;
    }

    .text-center {
        text-align: center;
    }

    .ad-post-divider {
        padding: 10px;
        padding-top: 5px;
    }

    .ad-post-divider a {
        padding: 0 !important;
    }

    a.more-hottest-posts-btn {
        background: red;
        padding: 5px 15px;
        display: inline-block;
        color: #fff;
        position: relative;
        text-transform: uppercase;
        font-family: 'Arimo', sans-serif;
        font-weight: 600;
        margin-top: 10px;
        font-size: 0.8rem;
    }

    a.more-hottest-posts-btn:before,
    a.more-hottest-posts-btn:after {
        content: "";
        display: block;
        width: 40px;
        background: #000;
        height: 1px;
        position: absolute;
        top: 16px;
    }

    a.more-hottest-posts-btn:before {
        left: -50px;
    }

    a.more-hottest-posts-btn:after {
        right: -50px;
    }


    .page-numbers {
        margin-top: 10px;
        background-color: #fff !important;
        border: 1px solid #dadada !important;
        color: #7a7a7a !important;
        padding: 2px 15px;
        display: inline-block
    }

    .page-numbers.current {
        color: #fff !important;
        background-color: #6ab51d !important;
        border-color: #6ab51d !important;
    }

    .seeMore {
        text-align: left;
        background: #f1f3f4;
        font-weight: 800;
        padding: 18px 10px;
        margin-bottom: 20px;
        border-left: 3px solid #7ec343;
    }

    .seeMore a {
        color: #7ec343;
        text-transform: uppercase;
    }

    .pagination .current,
    .pagination .current:focus,
    .pagination .current:hover,
    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        color: #fff !important;
        background-color: #6ab51d !important;
        border-color: #6ab51d !important;
    }

    .related-post-title-wrapper {}

    .related-post br,
    .related-post-title br {
        display: none;
    }

    .related-post-title {
        display: inline-block;
        background: #ffffff;
        color: #2e2e2e;
        padding: 3px 10px 3px 10px;
        margin-bottom: 10px;
        /* font-family: 'Roboto Condensed'; */
        font-size: 17px;
        font-weight: bold;
        /* display: inline; */
        /* text-shadow: 2px 1px 1px #333; */
        /* margin: -11px 0 0 0; */
        text-transform: uppercase;
    }

    .related-post-title>div {
        border: none;
        border-bottom: 0;
        padding: 6px 20px 8px 20px;
        display: inline-block;
    }

    .related-post {
        display: block;
        border: 1px solid #000000 !important;
        background: rgba(0, 0, 0, 0.82);
        border-radius: 0;
    }

    .related-post-row {
        display: block;
    }

    .related-post-row a {
        /* font-family: 'Roboto Condensed'; */
        /* border-bottom: 1px dotted #ccc; */
        background: none !important;
        color: #fff !important;
        font-size: 16px !important;
        font-weight: 600 !important;
        display: block !important;
        padding: 0px 0px !important;
        letter-spacing: 0 !important;
    }

    .related-post-row a:hover {
        text-decoration: none;
        border-bottom: none;
    }

    .related-post-item {
        padding: 10px 10px 0px 10px;
        /* background: url(https://www.naijaloaded.com.ng/wp-content/uploads/disclosure.png) no-repeat; */
        background-position: 10px center;
        position: relative;
    }

    .related-post-item:after {
        content: "\f105";
        font: normal normal normal 14px/1 FontAwesome;
        font-size: 19px;
        display: inline-block;
        position: absolute;
        left: 7px;
        top: 2px;
        color: #5d9e19;
        display: none;
    }

    .related-post-2 {
        border-bottom: 1px dotted #ccc;
        position: relative;
    }

    .related-post-2 .related-post-2-heading {
        line-height: 3;
        background: #222;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        border-bottom: 0;
        padding: 6px 10px 8px 10px;
        display: inline-block;
        width: 28%;
        float: left;
        box-sizing: border-box;
        height: 100%;
        position: absolute;
    }

    .related-post-2 .related-post-2-title {
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        font-size: 15px;
        font-weight: 600;
        display: inline-block;
        padding: 5px 10px;
        width: 72%;
        float: right;
        box-sizing: border-box;
    }

    .related-post-2:after {
        content: ' ';
        display: block;
        clear: both;
    }

    .scroll-latest-post {
        text-align: center;
        border-bottom: 1px solid #d9d9d9;
        padding-bottom: 0px;
        margin-bottom: 0;
        padding: 20px 0;
    }

    .cat-music {
        list-style: none;
        text-align: center;
        margin: -15px 0 10px 0;
        padding: 0;
    }

    .cat-music li {
        display: inline-block;

    }

    .cat-music li a {
        position: relative;
        display: block;
        padding: 5px 10px;
        margin: 0 -4px 0 0;
        font-weight: 700;
        /* border: 1px solid #6ab61c; */
        border-top: 0;
        border-right: 0;
        font-size: 13px;
        font-family: 'Montserrat', sans-serif;
        text-transform: uppercase;
    }

    .cat-music li a:before {
        content: "";
        margin: 0 auto;
        /* position: absolute; */
        background-position: center !important;
        background-size: contain !important;
        width: 40px;
        height: 72px;
        left: 0px;
        top: 0px;
        display: block;
    }

    /*.cat-music li:last-child {
    padding-right: 4px !important;
    border-right: 1px solid #6ab61c;
}*/
    .cat-music li a.cat-music-reviews:before {
        background: url(http://naijaloaded.com.ng/wp-content/uploads/song-review-icon-c-3.png) no-repeat;
        width: 55px;
        height: 72px;
    }

    .cat-music li a.cat-music-lyrics:before {
        background: url(http://naijaloaded.com.ng/wp-content/uploads/song-lyrics-icon-c-2.png) no-repeat;
    }

    .cat-music li a.cat-music-fuji:before {
        background: url(http://naijaloaded.com.ng/wp-content/uploads/fuji-icon-c-2.png) no-repeat;
    }

    .cat-music li a.cat-sports-predict:before {
        background: url(http://naijaloaded.com.ng/wp-content/uploads/money-bag-400290_960_720.png) no-repeat;
    }



    /*=====
Featured Mixtape======*/
    .featured-mixtape {
        margin-top: 20px;
        margin-bottom: 20px;
        background: #f0f9f0;
        padding: 15px;
    }

    .featured-mixtape .divider_header {
        text-align: left;
    }

    .featured-mixtape .divider_header h2 {
        margin: 0 0 5px 0;
        line-height: 1;
        display: block;
        font-size: inherit;
    }

    .featured-mixtape .divider_header h2 span {
        display: inline-block;
        background: #000;
        margin: 0;
    }

    .mobile-trending-row {
        margin: 0 -3px;
        flex-wrap: wrap;
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

    .col-4 {
        width: 33.333%;
        float: left;
    }

    .col-6 {
        width: 50%;
        float: left;
    }

    .col-12 {
        width: 100%;
    }

    .mobile-trending-wrapper {
        padding: 10px 10px;
        margin: 5px 10px;
        background: none;
        border: 1px solid #ccc;
    }

    .mobile-trending-wrapper h4 {
        margin-bottom: 0;
    }

    .mobile-trending-section-title {
        background: #000;
        color: #fff;
        text-align: left;
        padding: 4px 10px;
        text-transform: uppercase;
        margin-top: 5px;
        display: inline-block;
    }

    .mobile-trending-wrapper .row:last-child {
        background: none;
        margin-right: 0px;
        margin-left: 0px;
        margin-top: 0px;
        position: relative;
    }

    .mobile-trending-row>a {
        display: flex;
        align-items: stretch;
        background: #000;
        border: 1px solid #000;
        border-left: 0;
        margin-bottom: 1px;
    }

    .mobile-trending-row>a .mobile-trending-song-img {
        background: #000;
        margin: 5px 6px;
        flex: 0 0 90px;
        height: 80px;
        width: 85px;
        border-radius: 20px;
        border: 1px solid #fff;
        background-size: cover;
    }

    .mobile-trending-row>a .mobile-trending-song-title {
        flex: 1;
        font-size: 17px;
        line-height: 1.5;
        font-weight: 600;
        color: #000;
        padding: 0 10px;
        background: #fff;
        display: flex;
        align-items: center;
    }

    .trending-title {
        display: inline-block;
        background: #000;
        color: #fff;
        padding: 3px 10px;
        font-size: 1.0em;
        font-weight: 600;
        border-radius: 0px;
        margin-bottom: 3px;
        text-shadow: 2px 1px 3px #000000;
    }

    .mobile-trending-wrapper .trending-title {
        display: inline-block;
        background: #000;
        color: #fff;
        padding: 3px 10px;
        font-size: 1.0em;
        font-weight: 600;
        border-radius: 0px;
        margin-bottom: 6px;
        text-shadow: 2px 1px 3px #000000;
    }

    .mobile-trending-wrapper .trending-single {
        padding: 3px;
        box-sizing: border-box;
    }

    .mobile-trending-wrapper .trending-single a {
        font-size: 13px;
        margin-bottom: 8px;
        display: block;
        background: #fff;
        border-bottom: 1px solid #e0e0e0;
        padding: 5px;
        padding-bottom: 10px;
        position: relative;
        box-shadow: 0px 0px 10px 0px #a7a6a6;
    }

    .mobile-trending-wrapper .trending-single:last-child a {
        border-bottom: 0;
    }

    .mobile-trending-wrapper .trending-single a span strong {
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        display: block;
    }

    .mobile-trending-wrapper .trending-single a::before {
        content: "PLAY";
        display: block;
        height: 20px;
        line-height: 20px;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/play-btn-1.png);
        background-repeat: no-repeat;
        background-position: 42px center;
        background-size: 10px;
        position: absolute;
        right: 13px;
        top: 27px;
        border: 1px solid #000000;
        font-size: 11px;
        color: #000;
        padding: 0 17px 0 10px;
        border-radius: 5px;
        font-weight: 600;
    }

    .mobile-trending-wrapper .trending-single a::after {
        content: "";
        display: block;
        clear: both;
    }

    .mobile-trending-wrapper .trending-single a img {
        border: 1px solid #000;
        width: 55px;
        float: left;
        max-width: 30%;
    }

    .mobile-trending-wrapper .trending-single a span {
        display: block;
        color: #000000;
        float: left;
        font-weight: 600;
        width: 68%;
        padding-left: 10px;
        padding-top: 6px;
        box-sizing: border-box;
    }

    .mobile-trending-wrapper.hot-mixtape {
        margin: 0;
        padding: 0;
        border: none;
    }

    .mobile-trending-wrapper.hot-mixtape .trending-single a span {
        color: #000000;
        font-weight: 600;
    }

    .mixtape-trending-wrapper .trending-single {
        padding: 5px 5px;
        box-sizing: border-box;
    }

    .mixtape-trending-wrapper .trending-single img {
        display: block;
    }

    .mixtape-trending-wrapper .trending-single span {
        background: #F0F0F0;
        display: block;
        padding: 7px 10px;
        font-size: 12px;
        font-weight: 600;
        min-height: 77px;
        color: rgb(115, 153, 11);
    }

    /*====
Featured Video Section=====*/
    .featured_video_section {
        margin: 0 8px;
        margin-bottom: 0px;
        background: #F44336;
        border: 1px solid #ff0003;
        padding: 5px;
    }

    .featured_video_section .featured_title {
        margin-bottom: -23px;
        z-index: 10;
    }

    .featured_video_section .col-md-6 {
        padding: 0;
        width: 50%;
        float: left;
        margin: 0;
        box-sizing: border-box;
    }

    .featured_video_section .col-md-12 {
        padding: 0;
    }

    .featured_video_section .col-md-12:after {
        content: " ";
        display: block;
        clear: both;
    }

    .featured_video_section .col-md-12:nth-child(1) {
        margin-bottom: -23px;
        z-index: 10;
    }

    .featured_video_section::after {
        content: "";
        display: block;
        clear: both;
    }

    .featured_video_section .col-md-6:nth-child(3) {
        padding-right: 2.5px;
    }

    .featured_video_section .col-md-6:nth-child(4) {
        padding-left: 2.5px;
    }

    .featured_video_section h2 {
        background: #F44336;
        color: #fff;
        display: inline-block;
        padding: 0px 20px 5px 20px;
        font-size: 18px;
        text-transform: uppercase;
        line-height: 1;
        margin: 0;
    }

    .featured_video_section a {
        display: block;
        position: relative;
        background: #000;
        overflow: hidden;
    }

    .featured_video_section a .featured-image {
        display: block;
        height: 220px;
        overflow: hidden;
        position: relative;
    }

    .featured_video_section a .featured-image img {
        max-width: none !important;
        height: 220px;
    }

    .featured_video_section a.featured_video_item .featured-image {
        height: 250px;
    }

    .featured_video_section a .featured-image::after {
        content: " ";
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/y-icon.png) no-repeat;
        z-index: 23 !important;
        background-size: 34px;
        background-position: center 70px;
        opacity: 0.7;
    }

    .featured_video_section a.featured_video_item .featured-image::after {
        background-size: 50px;
        background-position: center;
    }

    .featured_video_section a.featured_video_item .featured-image img {
        max-width: 100% !important;
        height: auto;
    }

    .featured_video_section a h3 {
        position: absolute;
        bottom: 0;
        background: #000;
        background: linear-gradient(#0000, #000);
        margin: 0;
        color: #fff;
        font-size: 16px;
        line-height: 1.1;
        padding: 10px 10px;
        height: 88px;
        overflow: hidden;
    }

    .featured_video_section a.featured_video_item {
        margin-bottom: 0px;
    }

    .featured_video_section a.featured_video_item h3 {
        position: absolute;
        /* position: relative; */
        background: linear-gradient(#0000, #000);
        bottom: 0;
        color: #fff;
        z-index: 1;
        padding: 15px;
        /* padding-top: 40px; */
        margin: 0;
        text-shadow: 2px 2px 2px #000000;
        font-size: 20px;
        line-height: 1.1;
        height: auto;
    }

    .featured_video_section a.featured_video_item h3 span {
        z-index: 3;
        position: relative;
    }




    .featured-video {
        margin: 10px;
    }

    .featured-video iframe {
        width: 100%;
    }

    .featured-video .trending-title {
        display: inline-block;
        background: #000;
        color: #fff;
        padding: 3px 10px;
        font-size: 1.0em;
        font-weight: 600;
        border-radius: 0px;
        margin-bottom: 3px;
        text-shadow: 2px 1px 3px #000000;
    }

    .featured-video h2 {
        margin-bottom: 15px;
        margin-top: 15px;
        font-size: 15px;
        text-align: center;
    }

    ul.table.disclosure a.btn-ghost,
    a.btn-ghost {
        background: <?php echo ot_get_option( 'color_bg_light' ); ?> !important;
        position: relative;
        border: 1px solid <?php echo ot_get_option( 'color_bg_light' ); ?> !important;
        color: #fff !important;
        font-size: 15px !important;
        font-weight: 600 !important;
        border-radius: 4px !important;
        display: inline-block !important;
        padding: 5px 45px 5px 10px !important;
        letter-spacing: 0 !important;
    }

    ul.table.disclosure a.btn-ghost::after,
    a.btn-ghost::after {
        content: "";
        display: inline-block;
        position: absolute;
        right: 5px;
        top: 0px;
        height: 35px;
        width: 35px;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/download_arrow.gif) no-repeat !important;
        background-size: 35px !important;
    }

    a.btn-black-g {
        color: #fff;
        border: 1px solid #333 !important;
        background: #666 url(https://www.naijaloaded.com.ng/wp-content/themes/carrington-mobile-1.2/img/header-gloss.png) repeat-x center !important;
        font-size: 15px;
        font-weight: 600;
        border-radius: 4px !important;
        display: inline-block !important;
        padding: 5px 10px !important;
        letter-spacing: 0;
    }

    a.btn-ghost:hover {
        background: <?php echo ot_get_option( 'color_bg_light' ); ?> !important;
        border: 1px solid <?php echo ot_get_option( 'color_bg_light' ); ?> !important;
        color: #fff !important;
    }

    .btn-outline {
        display: inline-block;
        padding: 5px 20px;
        padding-right: 15px;
        position: relative;
        border: 2px solid <?php echo ot_get_option( 'color_bg_light' ); ?>;
        margin-bottom: 20px;
        border-radius: 5px;
        font-weight: 600;
        text-transform: capitalize;
    }

    .btn-outline:hover {
        background: rgba(105, 181, 29, 0.3);
    }

    .btn {
        padding-right: 15px;
        position: relative;
    }

    .btn.upload-icon {
        padding-left: 30px;
    }

    .btn.upload-icon::after {
        content: "";
        display: inline-block;
        position: absolute;
        left: 6px;
        top: 9px;
        height: 35px;
        width: 35px;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/upload-32.png) no-repeat !important;
        background-size: 17px !important;
    }

    .cld-like-dislike-wrap {
        display: block;
        margin-bottom: 0;
    }

    /* .comment .fa-thumbs-up {
    background: url(https://www.naijaloaded.com.ng/wp-content/uploads/thumbs-up-hand-symbol.svg);
    background-size: 15px;
    width: 15px;
    height: 15px;
    display: block;
}
.comment .fa-thumbs-down {
    background: url(https://www.naijaloaded.com.ng/wp-content/uploads/thumbs-down-silhouette.svg);
    background-size: 15px;
    width: 15px;
    height: 15px;
    display: block;
} */
    a.cld-like-dislike-trigger {
        color: #909090;
    }

    a.cld-like-dislike-trigger:hover {
        color: #414141;
    }

    .cld-common-wrap {
        width: 30px;
        display: inline-block;
        margin-bottom: 10px;
    }

    .cld-common-wrap .cld-count-wrap {
        margin-left: 5px;
        display: inline-block;
    }

    .cld-common-wrap>a {
        display: inline-block;
        /* display: none; */
    }

    .rve-embed-responsive {
        margin-bottom: 12px;
    }

    a.drop-comment {
        background: #000 !important;
        border: 1px solid #000 !important;
        color: #fff !important;
        font-size: 15px !important;
        font-weight: 600 !important;
        border-radius: 5px !important;
        display: inline-block !important;
        padding: 5px 20px !important;
        letter-spacing: 0 !important;
    }

    .post-tag-wrapper {
        display: block;
        color: #fff;
        font-size: 1rem;
        border: 1px solid #ccc;
        border-right: 0;
        border-left: 0;
        line-height: 1;
        padding: 30px 0px 15px 0px;
        margin: 30px 0;
    }

    .post-tag-wrapper h3 {
        display: inline-block;
        font-size: 17px;
        font-weight: 600;
        background: #000;
        color: #fff;
        padding: 4px 10px 8px 10px;
        margin-bottom: 10px;
    }

    .post-tag-wrapper h3::after {
        content: "";
        width: 16px;
        height: 16px;
        margin-top: 3px;
        margin-left: 7px;
        display: inline-block;
        background: url(https://s.w.org/images/core/emoji/12.0.0-1/svg/1f447.svg) no-repeat;
    }

    .post-tag-wrapper a {
        font-size: 1.0rem;
        font-weight: 600;
        color: #222;
        width: 90%;
        margin-left: 5px;
        display: inline-block;
        padding: 10px 10px 10px 0px;
        background: #fff;
        text-transform: capitalize;
    }

    .post-tag-wrapper a:first-child {
        margin-left: 0;
        margin-top: 5px;
    }

    .post-content .post-tag-wrapper a:hover {
        border-bottom: none;
    }

    .post-tag-wrapper a:first-child::after {
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/2018/06/white-down-pointing-backhand-index_1f447-1.png);
        content: "";
        position: absolute;
        height: 20px;
        width: 20px;
        background-size: cover;
        top: -20px;
        right: -38px;
    }

    .long-btn {
        display: block;
        background: #9CCF31;
        color: #fff;
        padding: 8px 20px;
        font-size: 1.4em;
        border-radius: 4px 4px 0 0;
        text-shadow: 2px 1px 3px #444444;
        margin: 0 10px 0px 10px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .subscribe-button-youtube {
        background-color: #e52d27;
        display: block;
        color: #fff !important;
        letter-spacing: 1px;
        text-align: center;
        text-transform: uppercase;
        line-height: 40px;
        height: 40px;
        font-size: 13px;
        margin-top: 5px;
        text-decoration: none;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }

    .post-you-may-like {
        margin-bottom: 50px;
    }

    .post-you-may-like h3 {
        display: inline-block;
        background: <?php echo ot_get_option( 'random_button_bg_color' ); ?>;
        color: #ffffff;
        font-family: "Arimo", sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        margin: 20px 0 0 0;
        padding: 5px 10px;
    }

    .post-you-may-like a {
        font-family: Arimo, sans-serif;
        font-weight: 600;
        display: block;
        display: flex;
        align-items: center;
        color: #000;
        padding: 10px 0;
        border-bottom: 1px solid #ddd;
        font-size: 16px;
        position: relative;
        padding-left: 30px;
    }


    .post-you-may-like a:hover {
        border: none;
        background: none;
        color: #000;
    }

    .post-you-may-like br {
        display: none;
    }

    .post-you-may-like p {
        padding: 0 10px;
    }

    .post-you-may-like .image-you-may-like {
        display: block;
        width: 15%;
        float: left;
    }

    .post-you-may-like .image-you-may-like img {
        width: 50px;
        display: block;
    }

    .post-you-may-like .title-you-may-like {
        display: block;
        margin: 0;
        padding: 0px 0px 0px 10px;
        width: 80%;
        float: left;
        font-weight: 700;
        color: #000;
        font-size: 14px;
        line-height: 1.5;
        box-sizing: border-box;
    }

    .post-you-may-like .artiste-you-may-like {
        color: #000;
        display: block;
        font-size: 16px;
        font-weight: 900;
    }

    .post-you-may-like a::after {
        content: "";
        display: block;
        clear: both;
    }

    .post-you-may-like a::before {
        position: absolute;
        font-family: "Montserrat";
        z-index: 10;
        top: 22px;
        left: 0px;
        font-size: 14px;
        font-weight: 800;
        color: #ff0018;
        color: #9c9c9c;
        /* display: none; */
    }

    .post-you-may-like a:nth-child(2)::before {
        content: "1.";
    }

    .post-you-may-like a:nth-child(3)::before {
        content: "2.";
    }

    .post-you-may-like a:nth-child(4)::before {
        content: "3.";
    }

    .post-you-may-like a:nth-child(5)::before {
        content: "4.";
    }

    .post-you-may-like a:nth-child(6)::before {
        content: "5.";
    }

    .post-you-may-like a:nth-child(7)::before {
        content: "6.";
    }

    .post-you-may-like a:nth-child(8)::before {
        content: "7.";
    }

    .post-you-may-like a:nth-child(9)::before {
        content: "8.";
    }

    .post-you-may-like a:nth-child(10)::before {
        content: "9.";
    }

    .post-you-may-like a:nth-child(11)::before {
        content: "10.";
    }

    .post-you-may-like a:nth-child(12)::before {
        content: "11.";
    }

    .post-you-may-like a:nth-child(13)::before {
        content: "12.";
    }

    .post-you-may-like a:nth-child(14)::before {
        content: "13.";
    }

    .post-you-may-like a:nth-child(15)::before {
        content: "14.";
    }

    .post-you-may-like a:nth-child(16)::before {
        content: "15.";
    }

    .post-you-may-like a:nth-child(17)::before {
        content: "16.";
    }

    .post-you-may-like a:nth-child(18)::before {
        content: "17.";
    }

    .post-you-may-like a:nth-child(19)::before {
        content: "18.";
    }

    .post-you-may-like a:nth-child(20)::before {
        content: "19.";
    }

    .post-you-may-like a:nth-child(21)::before {
        content: "20.";
    }

    .post-you-may-like a:last-child {
        border-bottom: none;
        color: #fe6a08;
        font-size: 18px;
        font-weight: 800;
    }

    .post-you-may-like a:last-child>* {
        display: none;
    }

    .post-you-may-like a:last-child::before {
        content: "Click here to see more hot songs" !important;
        color: #fe6a08;
        font-size: 18px;
        left: 0px;
        top: 10px;
        text-transform: capitalize;
        display: none;
    }

    .subscribe-button-youtube img {
        height: 14px;
    }

    .sticky-symbol {
        float: left;
        margin: 10px 5px 0px 0;
    }

    .sticky-symbol img {
        width: 30px;
    }

    .wp-post-image {
        width: 55px;
    }

    .the-post-link {
        background: none !important;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
    }

    .the-post-link:after {
        display: none;
    }


    /*NL Recommended Hit Song*/
    .recommended-hit-songs-header h3 {
        font-family: "Roboto Condensed";
        margin: 0;
        padding: 5px 5px;
        background: #000;
        color: #fff;
        font-size: 25px;
        text-transform: uppercase;
    }

    .recommended-hit-songs-body {
        padding: 0px 0 10px 0;
    }

    .recommended-hit-songs-body p {
        margin: 0;
    }

    .recommended-hit-single {
        display: flex;
        padding: 10px 0;
        border-bottom: 1px dashed #ccc;
        text-decoration: none;


        /*background: url(https://www.naijaloaded.com.ng/wp-content/uploads/2018/12/8478747938743.png) no-repeat;
    background-position: center bottom;*/
    }

    .recommended-hit-single:hover {
        border-bottom: 1px dashed #ccc !important;
    }

    .recommended-hit-single img {
        width: 70px;
        height: 70px;
        box-shadow: 3px 3px 7px 0px rgba(107, 107, 107, 0.48);
    }

    .recommended-hit-single span {
        flex: 1;
        margin: auto;
        margin-left: 20px;
        /*font-family: Montserrat;*/
        color: #f60;
        font-weight: 700;
        font-size: 16px;

    }

    .recommended-see-more {
        font-family: 'Roboto Condensed';
    }

    .recommended-see-more a {
        color: #f60;
    }


    ul.table.disclosure .category_list .cat-post-thumb {
        background-size: cover;
        background-position: center;
        float: left;
        margin: 0px;
        width: 95px;
        flex: 0 0 100px;
        height: 70px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
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
        padding: 8px 10px 7px 5px;
        min-height: 90px;
        box-sizing: border-box;
        font-weight: 800;
        color: #000;
        font-size: 14px;
        text-align: left;
        display: flex;
        align-items: center;
        display: flex;
        align-items: center;
    }

    ul.ul-list-1.table.disclosure .category_list .cat-post-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* height: 65px; */
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
        /* height: 135px;
        width: 80px; */
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

    /*------------- 
----------------Pagination ----------*/
    p.pagination {
        display: none;
    }

    .pagination {
        border-radius: 0px !important;
        background: none;
        border: none !important;
        margin: 10px 0;
        margin-bottom: 0px;
    }

    .pagination .next a,
    .pagination .prev a {
        font-size: 13px;
    }


    .navigation ul {
        margin: 0;
        text-align: center;
        display: flex;
        justify-content: center;
    }

    .navigation li {
        display: inline;
    }

    .navigation li a,
    .navigation li a:hover,
    .navigation li.active a,
    .navigation li.disabled {
        margin: 0 3px;
        color: #525252;
        text-decoration: none;
        background-color: #cccccc;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        padding: 7px 15px;
        display: inline-block;
        line-height: 1;
    }



    .navigation li a:hover,
    .navigation li.active a {
        background-color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        border-color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        color: #fff;
        font-size: 15px;
        padding: 7px 15px;
    }

    .navigation li.pag-prev,
    .navigation li.pag-next {
        box-sizing: border-box;
        display: flex;
        align-items: center;
    }

    .navigation li.pag-prev a,
    .navigation li.pag-next a {
        height: 20px;
        border: none;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        box-sizing: border-box;
        background-color: transparent;
    }

    .navigation li.pag-prev a {
        background-image: url(https://www.naijaloaded.com.ng/wp-content/uploads/prev-btn-.png);
    }

    .navigation li.pag-next a {
        background-image: url(https://www.naijaloaded.com.ng/wp-content/uploads/next-btn-.png);

    }

    .pag-current {
        text-align: left;
        font-weight: bolder;
        font-size: 18px;
        padding: 5px 0;
        padding-left: 10px;
        background: #fff;
        border: 1px solid rgb(204, 204, 204);
        border-right: 0;
        border-left: 0;
        margin: 5px 8px;
    }

    .pag-current span {
        /*color: #40710f;*/
    }

    .table-title {
        margin-top: 35px;
        font-size: 22px;
    }

    .cat-title {
        display: inline-block;
        color: <?php echo ot_get_option( 'random_button_bg_color' ); ?>;
        text-transform: uppercase;
        padding: 0px 0px 0px 0px;
        font-size: 25px;
        line-height: 1;
        text-shadow: none;
    }

    .group {
        border-radius: 0;
        margin: 3px 3px 0px 3px;
    }

    .sticky-border {
        border: 2px solid #ff0000;
    }

    .cat-wrapper {
        list-style: none;
    }

    .cat-wrapper .post-categories {
        list-style: none;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .cat-wrapper .post-categories li {
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .cat-wrapper a {
        background-color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        color: #fff;
        padding: 3px 6px 3px 6px !important;
        font-size: 10px;
        text-transform: uppercase;
    }


    /***Social Share button */
    .resp-sharing-button__link {
        display: inline-flex;
        align-items: center;
        background: #a6eb45;
        color: #fff !important;
        padding: 3px 12px 3px 12px;
        border-radius: 7px;
        margin-bottom: 10px;
    }

    .resp-sharing-button__link:hover {
        border: none !important;
    }

    .resp-sharing-button__link svg {
        width: 20px;
        margin-right: 5px;
    }

    .resp-sharing-button__link svg path {
        fill: #FFF;
    }

    .resp-sharing-button__link.resp-sharing-button--facebook {
        background: #3b5998;
    }

    .resp-sharing-button__link.resp-sharing-button--twitter {
        background: #55aded;
    }

    .resp-sharing-button__link.resp-sharing-button--whatsapp {
        background: #23d366;
    }


    span.list-titlee {
    display: block;
    text-align: center;
    background: <?php echo ot_get_option( 'color_bg_light' ); ?>;
    background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, <?php echo ot_get_option( 'color_bg_light' ); ?>), color-stop(100%, <?php echo ot_get_option( 'color_bg_dark' ); ?>));
    background: -webkit-linear-gradient(top, <?php echo ot_get_option( 'color_bg_light' ); ?>, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
    background: -moz-linear-gradient(top, <?php echo ot_get_option( 'color_bg_light' ); ?>, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
    background: -o-linear-gradient(top, <?php echo ot_get_option( 'color_bg_light' ); ?>, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
    background: linear-gradient( <?php echo ot_get_option( 'color_bg_light' ); ?>, <?php echo ot_get_option( 'color_bg_dark' ); ?>);
    background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>, <?php echo ot_get_option( 'color_bg_light' ); ?> );
    color: #fff;
    padding: 5px 20px;
    font-size: 16px;
    border-radius: 4px 4px 0 0;
    text-shadow: 2px 1px 3px #000000;
    margin: 0 3px 0px 3px;
    text-transform: uppercase;
    font-weight: 600;
}

    .section_header_2 {
        padding-top: 10px;
        position: relative;
        text-align: center;
    }
    .section_header_2::after {
        content: "";
        display: block;
        width: 100%;
        height: 1px;
        background: #e0e0e0;
        position: absolute;
        top: 30px;
        z-index: 1;
    }

    .section_header_2 .section_header_2__text {
        display: inline-block;
        background: #ff0000;
        padding: 3px 20px;
        text-transform: uppercase;
        font-size: 15px;
        color: #fff;
        transform: skewX(-15deg);
        z-index: 10;
        position: relative;
    }

    .featured-video.divider_header {
        margin: 0 0 10px 0;
    }

    .featured-video.divider_header h2 {
        margin: 0;
    }

    .featured-video.divider_header span.list-titlee {
        background: #ff6600;
        box-shadow: inset 0 0 0 2px #ff6600, inset 0 0 0 3px rgba(255, 255, 255, 0.5);
        border-radius: 0;
        margin: 0;
    }

    .post-page-featured-image {
        position: relative;
        max-height: 280px;
        overflow-x: visible;
        overflow-y: hidden;
        margin: -15px -15px 15px -15px;
    }

    .post-page-featured-image .watermark {
        background: url(<?php echo ot_get_option( 'post_watermark_url' ); ?>);
        background-size: contain;
        background-repeat: no-repeat;
        position: absolute;
        top: 15px;
        left: 5px;
        right: 0;
        height: 24px;
        box-sizing: border-box;
        display: block;
    }

    .post-page-featured-image::after {
        content: "";
        display: block;
        position: absolute;
        height: 40px;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgb(0, 0, 0));
    }

    .post-page-featured-image.post-page-featured-image__music {
        max-height: inherit;
    }

    .post-page-featured-image.post-page-featured-image__music .watermark,
    .post-page-featured-image.post-page-featured-image__music::after {
        display: none;
    }

    .post-page-featured-image img {
        display: block;
        float: none;
        padding: 0 !important;
        max-width: inherit;
        width: 100%;

    }

    .post-page-featured-image .cat-wrapper {
        z-index: 1;
        position: absolute;
        bottom: 0;
        background: #a6ee46;
        color: #000;
        font-family: Montserrat;
        line-height: 1;
        padding: 7px 7px;
    }

    .post-title {
        color: #000000;
        font-family: Arimo, sans-serif;
        line-height: 1.5;
        font-weight: 800;
        font-size: 22px;
        margin-left: -5px;
        margin-right: -5px;
        margin-bottom: 10px;
        /*background: linear-gradient(90deg,#cd122d,#154284);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: #fff;*/
    }

    .byline.small {
        font-size: 12px;
    }

    .comment-count {
        display: block;
        float: right;
        position: relative;
        font-size: 15px;
        font-weight: 600;
        line-height: 1;
        margin-top: 6px;
        margin-right: 10px;
    }

    .comment-count::after {
        font-family: "Font Awesome 5 Free";
        display: block;
        content: "\f075";
        font-weight: 800;
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        font-size: 17px;
        line-height: 1;
        position: absolute;
        top: -1px;
        left: -22px;
    }

    .cat-music-wrapper .cat-music {
        display: flex;
        justify-content: center;
    }

    ul.table.disclosure .cat-music-wrapper .cat-music li {
        background: none;
        border: none;
        padding: 0 7px !important;
    }

    a.comment-reply-link {
        background: #ccc;
        border-radius: 5px;
        color: #fff;
        padding: 2px 8px;
        font-weight: 600;
        box-sizing: border-box;
        margin-top: 5px;
    }

    .wp-caption {
        width: 738px;
        border: none;
        background: none;
        margin: 0;
    }

    .wp-caption img {
        display: block;
        margin: 0;
        max-width: 100%;
    }

    .wp-caption p.wp-caption-text {
        color: #fff;
        background: #000;
        text-align: left;
        padding: 9px 10px;
        font-weight: 600;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 13px;
    }

    .commentlist .li-comment {
        /*background: #f1f1f1 url(https://www.naijaloaded.com.ng/wp-content/themes/carrington-mobile-1.2/img/comment.png) no-repeat;*/
        background: #f7f7f7;
        border-radius: 5px 5px 5px 5px;
        border: 1px solid #d8d8d8;
        background-position: 10px 15px;
        font-size: 13px;
        list-style: none;
        margin: 10px 0 10px 0;
        padding: 3px 10px 10px 10px;
        position: relative;
    }

    .commentlist .li-comment:nth-child(odd) {
        background: #fff;
    }

    /* .commentlist .li-comment:before {
    content: "";
    display: block;
    width: 30px;
    height: 30px;
    background: url(https://www.naijaloaded.com.ng/wp-content/uploads/2018/05/none.png-150x150.jpg) no-repeat;
    background-size: 30px;
    border-radius: 50%;
    position: absolute;
    left: 9px;
} */
    .commentlist .children .li-comment {
        background: transparent;
        background-position: 10px 15px;
        border: 1px solid #e9e9e9;
        padding-right: 0;
        padding: 3px 10px 10px 10px;
    }

    .commentlist .children .li-comment:before {
        /*display: none;*/
    }

    .commentlist .li-comment:nth-child(odd) .children .li-comment {
        background: #fff;

    }

    /*
.commentlist > .li-comment:before {
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 12px 13px 0;
    border-color: transparent #f1f1f1 transparent transparent;
    display: block;
    position: absolute;
    top: 0px;
    left: -11px;
    z-index: 2;
}

.commentlist > .li-comment:after {
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 12px 13px 0;
    border-color: transparent #e9e9e9 transparent transparent;
    display: block;
    position: absolute;
    top: -1px;
    left: -13px;
}.commentlist > .li-comment:nth-child(odd):before {
    border-color: transparent #fff transparent transparent;
}
.commentlist > .li-comment:nth-child(odd):after {
    border-color: transparent #e9e9e9 transparent transparent;
}
.commentlist> .li-comment> .div-comment> .comment> .comment-author::before {
    content: "";
        display: block;
        height: 30px;
        width: 30px;
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/2018/05/none.png-150x150.jpg) no-repeat;
        background-size: contain;
        border-radius: 50px;
        position: absolute;
    left: -42px;
    top: -1px;
}

.commentlist {
        padding-left: 30px;
}
*/

    .commentlist {
        margin: 0;
    }

    .commentlist .children {
        margin-left: 20px;
    }

    .li-comment {
        position: relative;
    }

    .li-comment::before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 39px;
        background: rgba(131, 164, 43, 0.2);
    }

    .comment-author {
        display: inline-block;
        margin-top: 8px;
        margin-bottom: 0px;
        margin-left: 30px;
        font-weight: 600;
        line-height: 1.3;
        text-transform: capitalize;
        z-index: 10;
        position: relative;
    }

    .comment-author::after {
        content: "";
        display: block;
        height: 30px;
        width: 30px;
        background: url(https://secure.gravatar.com/avatar/ad51650…);
        background: url(https://www.naijaloaded.com.ng/wp-content/uploads/gravatar.jpg);
        background-repeat: no-repeat;
        background-size: 30px;
        border-radius: 30px;
        position: absolute;
        top: -8px;
        left: -35px;
    }

    .commentlist li .comment-info {
        color: #999;
        margin: 0 0 10px 0;
        z-index: 10;
        position: relative;
        display: inline-block;
    }

    .commentlist li .comment-info a {
        color: rgb(115, 153, 11) !important;
        font-size: 11px;
    }

    .commentlist li .comment-info a,
    .style4 a,
    .style4 a strong,
    div[align='center'] a,
    center div p a,
    center div p a strong,
    p.byline.small b a {
        border-bottom: none !important;
    }

    .commentlist li .comment-info+p {
        margin-top: 5px;
        margin-bottom: 7px;
    }

    .comment-notice {
        padding: 5px 10px;
        font-size: 14px;
        margin-bottom: 10px;
        background-color: #FFFFCC;
        font-size: 12px;
    }

    .comment-notice span {
        text-decoration: underline;
        color: #ff0000;
        font-size: 14px;
    }

    #commentform label small {
        font-size: 14px;
        font-weight: 600;
    }

    #respond textarea,
    #respond input[type=text] {
        -webkit-appearance: none;
        -moz-appearance: none;
        box-shadow: inset 1px 1px 5px rgba(47, 47, 47, 0.5);
        border-radius: 6px;
        padding: 15px;
        border: 1px solid #c1c1c1;
        /*border: 1px solid #000;*/
        font-weight: 400;
        font-size: 16px;
        font-family: Fibra;
        font-family: Arimo, sans-serif;
        box-sizing: border-box;
    }

    #respond input[type=text] {
        height: 23px;
        width: 95%;
    }

    #respond input[name=author] {
        width: 50%;
    }

    #respond textarea {
        width: 98%;
    }

    #respond textarea:focus,
    #respond textarea:active,
    #respond input[type=text]:focus,
    #respond input[type=text]:active {
        /* font-family: Operator Mono A, Operator Mono B, Source Code Pro, Menlo, Consolas, Monaco, monospace; */
        /* box-shadow: 0px 0px 8px rgba(106, 180, 28, 0.71) !important; */
        box-shadow: none !important;
        border: 2px solid #ff6200;
        outline: none;
        -webkit-appearance: none;
    }

    #respond textarea.comment-error:focus {
        box-shadow: 0px 0px 8px rgb(244, 67, 54);
    }

    #respond textarea.comment-okay:focus {
        box-shadow: 0px 0px 8px rgba(106, 180, 28, 0.71);
    }

    #commentform input[type="submit"][disabled] {
        background-color: #eceeef !important;
        cursor: not-allowed;
        color: #c7cacd !important;
        border: 1px solid #dee2e4;
    }

    .bellow-comment-ad {
        margin: 30px 0;
    }

    .comment-error-message {
        color: #F44336;
        margin-top: -15px;
    }

    .sticky-border img {
        float: right;
    }

    .pagination span.prev {
        float: right;
        text-align: right;
    }

    ul.table.disclosure li.pagination {
        padding: 13px 5px 10px 5px !important;
        margin: -2px !IMPORTANT;
        background: #e5e5e5;
    }

    ul.table.disclosure .pagination .prev a,
    ul.table.disclosure .pagination .next a {
        font-size: 15px;
        font-weight: 600;
        padding: 15px 0;
        text-align: center;
        height: auto;
        line-height: 0.8;
        display: block;
        width: 120px;
        box-sizing: border-box;
        margin: 0;
        background: #73990b;
        color: #fff;
    }

    ul.table.disclosure .pagination .prev a {
        margin-left: auto;
        border-radius: 50px 50px 50px 10px;
    }

    ul.table.disclosure .pagination .next a {
        border-radius: 50px 50px 10px 50px;
    }

    blockquote {
        font-style: normal;
      background: #e5e5e5 !important;
      border: none;
      border-radius: 10px;
      padding: 15px 35px 15px 15px !important;
      position: relative;
      margin-bottom: 15px;
    }

    blockquote>* {
      position: relative;
      z-index: 100;
    }

    blockquote p {
      color: #333;
      font-weight: 700;
      font-size: 14px;
      z-index: 2;
      position: relative;
    }
    blockquote p:last-child {
        margin-bottom: 0;
    }

    .blockquote:after,
    .blockquote:before,
    blockquote:after,
    blockquote:before {
      color: #000;
      font-size: 40px;
    }

    .blockquote:after,
    blockquote:after {
        font-family: "Noto Serif", serif;
        font-family: Arial;
        content: "\201c";
        content: "\201d";
        font-size: 110px;
        font-family: "Font Awesome 5 Free";
        content: "\f10e";
        font-size: 35px;
        font-weight: 900;
        color: #ffffff;
        z-index: 1;
        position: absolute;
        top: 8px;
        right: 10px;
        line-height: 1;
    }

    .blockquote:before {
      display: none;
      top: 0px;
      left: -6px;
      background: #e2e2e2;
      height: 25px;
      line-height: 33px;
    }

    blockquote::before {
      display: none;
      content: "\201f";
      font-family: Arial, Helvetica, sans-serif;
      color: #010167;
      left: 2px;
      right: auto;
      width: 4px;
      top: 1px;
      bottom: auto;
      position: absolute;
    }

    /* blockquote {
        background: none;
        color: rgb(255 255 255 / 90%);
        border: none;
        margin: 0;
        margin-bottom: 10px;
        padding: 20px 20px;
        text-align: left;
        display: block;
    }

    blockquote p {
        font-size: 16px;
        font-weight: 500;
        line-height: 1.4;
    }

    blockquote p:last-child {
        margin-bottom: 0;
    } */

    .btn-md {
        text-transform: uppercase;
        border-radius: 5px;
        padding: 6px 14px;
        font-size: 11px;
        font-weight: 600;
    }

    .btn-orange {
        background: #ff6200;
        color: #fff;

    }

    /* ****Related Posts**** */
    .relpost-block-container {
        /* display: flex; */
         flex-wrap: wrap;
        justify-content: center;
    }
    .read-also-header span {
        display: inline-block;
        padding: 0px 10px;
        margin-top: 10px;
        background: #ff0000;
        color: #fff !important;
        font-size: 19px;
    }

    .relpost-thumb-wrapper {
        padding-bottom: 32px;
    }

    .relpost-thumb-container h3 {
        text-transform: uppercase;
        font-size: 20px !important;
        font-weight: 600;
        border-bottom: 1px solid #e6e6e6;
        margin: 0;
        margin-bottom: 0px;
        padding-bottom: 2px;
    }

    .relpost-block-single {
       width: 100%;
       padding: 0px 0px 0px 0;
       margin: 0 6px 30px 0;
       border-bottom: 1px solid #e7e7e7 !important;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    .relpost-block-container .relpost-block-single:hover {
        background: #fff;
    }

    .relpost-block-single:nth-child(3) {
        width: 100%;
        flex: 0 0 100%;
    }

    .relpost-block-single:hover {
        background: #000;
    }

    a.relpost-block-single:nth-child(even) {
        margin-right: 0;
    }

    .relpost-block-single>div {
        display: flex;
        flex-direction: row;
        width: 100% !important;
        height: auto !important;
        align-items: center;
    }

    .relpost-block-single-image {
        width: 100px !important;
        height: 80px !important;
        background-position: center !important;
        float: left !important;
        margin-right: 5px;
        flex: 0 0 80px;
    }

/*     .relpost-block-single:nth-child(3) .relpost-block-single-image {
        height: 170px !important;
    } */

    .relpost-block-single-text {
        font-family: Roboto, sans-serif !important;
        padding: 0px 0px 0px 10px;
        color: #000 !important;
        font-size: 14px !important;
        line-height: 1.5;
        font-weight: 600;
        text-align: left;
        /* flex: 0 0 80%; */
        margin: 0;
    }

    .comment-title {
        display: flex;
        place-content: space-between;
        background: #3f6916;
        background-image: linear-gradient(-90deg, <?php echo ot_get_option( 'color_bg_dark' ); ?>, <?php echo ot_get_option( 'color_bg_light' ); ?>);
        padding: 10px;
        border-radius: 5px;
        margin-bottom: -1px;
    }

    .comment-title span {
        background: none;
        font-size: 16px;
        color: #424242;
        color: #fff;
        font-family: Arimo, sans-serif;
        padding: 0;
        position: relative;
        font-weight: 600;
        padding-left: 33px;
        text-transform: uppercase;
    }

    .comment-title span::after {
        font-family: "Font Awesome 5 Free";
        display: block;
        height: 20px;
        width: 20px;
        font-size: 22px;
        content: "\f086";
        font-weight: 400;
        position: absolute;
        left: 0;
        top: -4px;
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        color: #fff;
    }

    .commentlist .comment-info cite {
        font-weight: bold;
        color: #757575;
        font-style: italic;
    }


    .top-artiste-single {
        margin-bottom: 5px;
        display: flex;
        align-items: flex-end;
    }

    .top-artiste-single:hover {
        text-decoration: none !important;
        border: none !important;
    }

    .top-artiste-single img {
        width: 80px;
        height: auto;
    }

    .top-artiste-single span {
        display: inline-block;
        background: #000;
        color: #fff;
        font-size: 24px;
        font-weight: 600;
        padding: 0 15px;
        margin-left: 5px;
    }


    /********Slick Slider**********/
    .slick-prev:before,
    .slick-next:before {
        color: black;
    }

    .slick-prev {
        left: -10px;
    }

    .slick-next {
        right: -10px;
    }


    .slick-slide {
        transition: all ease-in-out .3s;
        /* opacity: .2; */
    }

    .slick-active {
        /* opacity: .5; */
    }

    .slick-current {
        opacity: 1;
    }

    .top-artiste-slider-wrapper {
        /*background: #ffffff;
    border: 1px solid #9bd12f;*/
        padding: 10px;
        margin: 30px 0px;
    }

    .top-artiste-slider-title {
        margin: 0 20px 12px 20px;
        font-size: 25px;
        /* color: #ffffff; */
        text-transform: uppercase;
    }

    .top-artiste-slider {
        display: flex;
        padding: 0 10px;
    }

    .top-artiste-slider img {
        width: 100%;
    }

    .top-artiste-slider-link {
        margin: 0px 5px;
        text-decoration: none;
        display: block;
        background: #f0f0f0;
        background: #fff;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .2), 0 1px 3px 0 rgba(0, 0, 0, .1);
        margin-bottom: 5px;
        border-radius: 3px;
        overflow: hidden;
        max-width: 150px;
        height: 111px;
        position: relative;
    }

    .top-artiste-slider-link:focus {
        outline: none;
    }

    .top-artiste-slider-link span {
        font-size: 14px;
        font-weight: 600;
        color: #333;
        display: block;
        text-align: left;
        padding: 5px 10px;
        position: absolute;
        left: 0;
        bottom: 0;
        background: #fff;
        width: 100%;
    }

    .top-artiste-slider-see-more {
        height: 116px;
        width: 117px;
        margin: 0 0px 0 5px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: none;
        flex-direction: column;
    }

    .top-artiste-slider-see-more:focus {
        outline: none;
    }

    .top-artiste-slider-see-more::before {
        content: "\f061";
        background-size: 23px;
        background-position: center;
        font-family: "Font Awesome 5 Free";
        font-size: 20px;
        color: #7b7b7b;
        font-weight: 900;
        border: 1px solid #ccc;
        width: 50px;
        height: 50px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    .top-artiste-slider-see-more:hover::before {
        background: #753509b0;
    }

    .top-artiste-slider-see-more span {
        color: #797979;
        font-weight: 400;
        text-align: center;
        z-index: 10;
        position: relative;
        line-height: 1.5;
        font-size: 14px;
        margin-top: 10px;
    }

    .top-artiste-slider-wrapper .slick-prev.slick-disabled:before,
    .top-artiste-slider-wrapper .slick-next.slick-disabled:before {
        opacity: 0;
    }

    .download-song-bar {
        background: #f0f0f0;
        display: block;
        text-align: center;
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        font-weight: 600;
        text-transform: capitalize;
        margin-top: 33px;
        margin-bottom: -15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .download-song-bar img {
        height: 16px;
        padding-right: 5px;
    }

    .custom-title span {
        background-color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        color: #ffffff;
        line-height: 1.3;
        display: inline-block;
        font-weight: 700;
        font-size: 20px;
        padding: 1px 10px 1px;
        font-family: montserrat;
    }

    .divider>span {
        height: 1px;
        background: #989898;
        display: block;
        margin-bottom: 30px
    }

    .divider2>span {
        height: 3px;
        background: #989898;
        display: block;
        margin-bottom: 30px
    }

    /**==========
        Most Read Posts==========***/

    .most-read-section {
        background: #f0f9f0;
        padding: 10px 5px 0px 5px;
        border: 1px solid #e0e0e0;
        margin: 0 -16px;
    }

    .most-read-section ul.slick-dots {
        margin-bottom: 0;
    }

    .most-read-section .slick-prev,
    .most-read-section .slick-next {
        visibility: hidden;
    }

    .most-read-section .row {
        margin: 0;
    }

    .most-read-section .col-md-4 {
        padding: 0 5px;
    }

    .most-read-section .single-post {
        background: #fff;
        height: 220px;
        margin-bottom: 0px;
    }

    .most-read-section .single-post a:hover {
        text-decoration: none;
    }

    .most-read-section .section_header h2 {
        font-family: "Roboto Condensed";
        background: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        color: #fff;
        padding: 5px 20px 4px 20px;
        font-size: 18px;
        font-weight: bold;
        display: block;
        text-transform: uppercase;
        text-align: center;
        margin: 0 5px 10px 5px;
    }

    .most-read-section .single-post-image {
        display: block;
        height: 120px;
        overflow: hidden;
    }

    .most-read-section .single-post-title {
        font-family: Montserrat;
        font-weight: 800;
        padding: 10px 5px;
        display: block;
        font-size: 12px;
        line-height: 1.7;
        color: #333;
    }




    /*****Media PLayer**/

    .audio-player-title {
        font-weight: 700;
        color: #7bc242 !important;
        text-align: center;
        margin: 20px 0 10px 0;
    }

    .audio-player-title small {
        font-weight: 400;
        color: #222;
    }

    .audio-player {
        background: #1E2125;
        /*border: 1px solid #dfdfdf;*/
        border-radius: 0px;
        width: 100%;
        text-align: center;
        display: flex;
        flex-flow: row;
        margin: 0;
        margin-bottom: 20px;
    }

    .audio-player .album-image {
        min-height: 62px;
        width: 62px;
        background-size: cover;
    }

    .audio-player .player-controls {
        align-items: center;
        justify-content: center;
        margin-top: 0.8rem;
        flex: 3;
    }

    .audio-player .player-controls progress {
        width: 90%;
    }

    .audio-player .player-controls progress[value] {
        -webkit-appearance: none;
        appearance: none;
        background-color: #6ab51d;
        color: #000;
        height: 5px;
        border-radius: 50% !important;
    }

    .audio-player .player-controls progress[value]::-webkit-progress-bar {
        background-color: #6ab51d;
        border-radius: 2px;
        border: 1px solid #6ab51d;
        color: #000;
    }

    .audio-player .player-controls progress::-webkit-progress-value {
        background-color: #000;
    }

    .audio-player .player-controls p {
        font-size: 1.0rem;
        color: #3bbb33;
        font-weight: 700;
        font-family: Montserrat;
        margin-bottom: 0;
    }

    .audio-player .player-controls p span {
        font-weight: 400;
        display: block;
    }

    .audio-player .player-controls small {
        color: #6f6f6f;
    }

    .audio-player #play-btn {
        background-image: url(https://www.naijaloaded.com.ng/wp-content/uploads/play-button.png);
        cursor: pointer;
        background-size: cover;
        width: 30px;
        height: 30px;
        margin: 1rem 0 1rem 0.5rem;
    }

    .audio-player #play-btn.pause {
        background-image: url("https://www.naijaloaded.com.ng/wp-content/uploads/pause-button.png");
    }

    .still-trending {
        text-align: center;
        margin: 10px 3px -10px 3px;
        background: #fff;
        padding: 10px 10px 10px 10px;
    }

    .still-trending .wp-image-467315 {
        margin-bottom: 10px;
    }

    .still-trending .wp-image-467324 {
        width: 150px;
        margin-top: 10px;
    }


    .inner-trending-song .trending-title h3 {
        background-color: #000;
        color: #fff;
        font-family: "Montserrat", sans-serif;
        font-weight: 700;
        font-size: 18px;
        text-transform: uppercase;
        padding: 0px 10px;
        margin: 0;
    }

    .inner-trending-song .trending-inner-wrapper .trending-item {
        margin: 15px 0;
        padding: 0 0 15px 0;
        border-bottom: 2px dashed #ccc;
    }

    .inner-trending-song .trending-inner-wrapper .trending-item a {
        margin-left: 15px;
        color: #f60;
        font-family: "Montserrat", sans-serif;
        font-weight: 700;
        font-size: 14px;
        text-decoration: none;
        position: relative;
    }

    .inner-trending-song .trending-inner-wrapper .trending-item a:hover {
        border-bottom: 1px solid #f60;
    }

    .inner-trending-song .trending-inner-wrapper .trending-item a:after {
        content: "»";
        position: absolute;
        left: -15px;
        color: #000;

    }

    .comment-form-cookies-consent {
        display: none !important;
    }

    .comment-form-cookies-consent label {
        display: inline-block !important;
    }


    ul.table.disclosure.footer-top-links a {
        background: none !important;
        font-weight: 600;
    }

    #footer {
        background: #000 !important;
    }

    .footer-search {
        /* border-radius: 10px; */
        padding: 40px 25px;
        background: #fff;
    }

    .footer-menu-wrapper {
        display: flex;
        padding: 0 10px;
    }

    .footer-menu-wrapper .footer-col {
        flex: 1;
    }

    .footer-menu-wrapper .footer-col h3 {
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
    }

    .footer-menu-wrapper .footer-col.footer-2 {
        padding-left: 30px;
    }

    .footer-menu-wrapper .footer-col ul {
        list-style: none;
        margin: 0;
    }

    .footer-menu-wrapper .footer-col ul li a {
        color: #FFF;
        font-size: 15px;
        font-weight: 600;
    }

    .footer-icons-wrapper {
        border-top: 1px solid #585858;
        margin-top: 10px;
        padding-top: 15px;
        text-align: center;
    }

    .footer-icons-wrapper a {
        background: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        padding: 5px;
        height: 24px;
        width: 24px;
        margin: 0 5px;
        font-size: 20px;
        border-radius: 50%;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    /*//Floating ad*/

    .fixedbar {
        bottom: 0px;
        color: #fff;
        left: 0;
        padding: 0px 0;
        position: fixed;
        font-size: 16px;
        width: 100%;
        z-index: 99999;
        float: left;
        vertical-align: middle;
        margin: 0px 0 0;
        opacity: 0.95;
        font-weight: bold;
    }

    .boxfloat {
        /* background: rgba(0, 0, 0, .3); */
        text-align: center;
        width: 100%;
        margin: 0 auto;
        position: relative;
    }

    #tips,
    #tips li {
        margin: 0;
        padding: 0;
        list-style: none
    }

    #tips {
        width: 100%;
        font-size: 20px;
        line-height: 120%;
    }

    #tips li {
        padding: 0px 0;
        display: none;
    }

    #tips li a {
        color: #fff;
    }

    #tips li a:hover {
        text-decoration: none;
    }

    #tips li a img {
        max-width: 100%;
    }

    #tip-close {
        height: 25px;
        width: 25px;
        line-height: 20px;
        color: #fff !important;
        border-radius: 20px;
        position: absolute;
        right: 5px;
        top: 5px;
        display: block;
        cursor: pointer;
    }

    #randomSideAd {
        list-style: none;
        margin: 0;
    }

    #randomSideAd li {
        padding: 0px 0;
        display: none;
    }

    /*Text footer ad*/
    #tips li a.text-ad {
        display: flex;
        background: rgb(0, 0, 0);
        width: 320px;
        height: 90px;
        margin: auto;
    }

    #tips li a.text-ad .text-ad-image {
        flex: 0 0 90px;
    }

    #tips li a.text-ad .text-ad-text {
        color: #fff;
        font-size: 1rem;
        padding-left: 10px;
        padding-right: 10px;
        font-family: 'Montserrat';
        font-weight: 400;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: left;
    }

    #tips li a.text-ad .text-ad-text .text-ad-title {
        display: block;
        font-weight: 600;
        font-size: 1.2rem;
        text-align: left;
    }


    /*Subscription Style*/
    .subscribe-form {
        display: flex;
        width: 100%;
        position: relative;
    }

    .subscribe-form input {
        width: 100%;
        padding: 8px 40px 8px 15px;
        border: 1px solid #ccc;
        background: transparent;
        color: #000;
        font-size: 14px;
        opacity: 0.8;
        border-radius: 5px 50px 50px 5px;
    }

    .subscribe-form input:focus {
        outline: none;
        box-shadow: inset 1px 1px 3px rgba(47, 47, 47, 0.3);
        box-shadow: inset 1px 1px 3px rgba(47, 47, 47, 0.3);
        -moz-box-shadow: inset 1px 1px 3px rgba(47, 47, 47, 0.3);
        -webkit-box-shadow: inset 1px 1px 3px rgba(47, 47, 47, 0.3);
    }

    .subscribe-form button {
        width: 40px;
        background: none;
        padding: 0;
        border: 0;
        position: absolute;
        right: 0px;
        top: 50%;
        transform: translateY(-50%);
        height: 42px;
    }

    .subscribe-col {
        max-width: 490px;
    }

    .subscribe-wrap {
        background: rgba(255, 255, 255, 0.04);
        padding: 12px 20px 17px;
        box-shadow: 0px 1px 20px 0px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .subscribe-wrap .content {
        font-size: 12px;
        padding: 5px;
    }

    .subscribe-wrap h3 {
        font-size: 22px;
        margin-bottom: 10px;
        margin-top: 5px;
    }

    .subscribe-wrap h2 {
        font-size: 14px;
        font-weight: 400;
        margin-top: 0;
    }

    .subscribe-wrap h3 strong {
        color: #f00;
    }

    .subscribe-form button svg {
        height: 41px;
        width: auto;
    }
</style>


<style>
.page-numbers.current {
  color: #fff !important;
    background-color: <?php echo ot_get_option( 'color_bg_light' ); ?> !important;
    border-color: <?php echo ot_get_option( 'color_bg_light' ); ?> !important;
}
 
    .seeMore {
        text-align: left;
        background: #f1f3f4;
        font-weight: 800;
        padding: 18px 10px;
        margin-bottom: 20px;
        border-left: 3px solid <?php echo ot_get_option( 'color_bg_light' ); ?>;
    }

    .seeMore a {
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        text-transform: uppercase;
    }

    .pagination .current,
    .pagination .current:focus,
    .pagination .current:hover,
    .pagination>.active>a,
    .pagination>.active>a:focus,
    .pagination>.active>a:hover,
    .pagination>.active>span,
    .pagination>.active>span:focus,
    .pagination>.active>span:hover {
        color: #fff !important;
        background-color: <?php echo ot_get_option( 'color_bg_light' ); ?> !important;
        border-color: <?php echo ot_get_option( 'color_bg_light' ); ?> !important;
    }

    .subscribe-form button svg {
        height: 41px;
        width: auto;
    }

.hr {
  border: 0;
  border-top: 1px solid <?php echo ot_get_option( 'color_bg_light' ); ?>;
  border-bottom: 1px solid #fff;
}

a{color:<?php echo ot_get_option( 'text_color' ); ?>}

</style>




<style>   
.gtexdef {color: <?php echo ot_get_option( 'text_color' ); ?>}


</style>



<script>
function toggle_light_mode() {
    var app = document.getElementsByTagName("BODY")[0];
    if (localStorage.lightMode == "dark") {
	localStorage.lightMode = "light";
	app.setAttribute("data-light-mode", "light");
    } else {
	localStorage.lightMode = "dark";
	app.setAttribute("data-light-mode", "dark");
    }		
}
</script>






<script>
    var app = document.getElementsByTagName("BODY")[0];
    if (localStorage.lightMode == "dark") {
        app.setAttribute("data-light-mode", "dark");
    }
</script>


<style>
.button-ped {
padding: 1em;
    font-size: 1em;
    background: #fff;
    color: #000;
    border: none;
    cursor: pointer;
    transition: .3s;
   opacity:.7;
}

.button-ped:hover {
    opacity:.5;
}

body[data-light-mode="dark"] .button-ped {
    background-color: #000;
    color: #fff;
    
}
</style>


<style>

.post-section#new-posts-section {
        display: block;

    }    
</style>





<?php wp_head(); ?>
</head>









<script type="text/javascript">
	<!--
<?php

is_page() ? $page = 'true' : $page = 'false';
echo '	CFMOBI_IS_PAGE = '.$page.';';
echo "	CFMOBI_PAGES_TAB = '".str_replace("'", "\'", __('Pages', 'carrington-mobile'))."';";
echo "	CFMOBI_POSTS_TAB = '".str_replace("'", "\'", __('Recent Posts', 'carrington-mobile'))."';";

global $cfmobi_touch_browsers;
if (!isset($cfmobi_touch_browsers) || !is_array($cfmobi_touch_browsers)) {
	$cfmobi_touch_browsers = array(
		'iPhone',
		'iPod',
		'Android',
		'BlackBerry9530',
		'LG-TU915 Obigo', // LG touch browser
		'LGE VX',
		'webOS', // Palm Pre, etc.
	);
}
if (count($cfmobi_touch_browsers)) {
	$touch = array();
	foreach ($cfmobi_touch_browsers as $browser) {
		$touch[] = str_replace('"', '\"', trim($browser));
	}

?>
	var CFMOBI_TOUCH = ["<?php echo implode('","', $touch); ?>"];
	for (var i = 0; i < CFMOBI_TOUCH.length; i++) {
		if (navigator.userAgent.indexOf(CFMOBI_TOUCH[i]) != -1) {
			document.write('<?php echo str_replace('/', '\/', '<link rel="stylesheet" href="'.trailingslashit(get_bloginfo('template_url')).'css/touch.css" type="text/css" media="screen" charset="utf-8" />'); ?>');
			break;
		}
	}
<?php

}

?> 
	document.write('<?php

ob_start();
wp_print_scripts();
$wp_scripts = ob_get_contents();
ob_end_clean();

echo trim(str_replace(
	array("'", "\n", '/'), 
	array("\'", '', '\/'),
	$wp_scripts
));

?>');
	//--></script>