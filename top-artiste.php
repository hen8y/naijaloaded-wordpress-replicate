<style>
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
    border: 1px solid <?php echo ot_get_option( 'color_bg_light' ); ?>;*/
        padding: 10px;
        margin: 30px 0px;
    }

    .top-artiste-slider-title {
        margin: 0 20px 12px 20px;
        font-size: 25px;
        /* color: <?php echo ot_get_option( 'color_bg_dark' ); ?>; */
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
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
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
        background: <?php echo ot_get_option( 'color_bg_dark' ); ?>;
    }

    .top-artiste-slider-see-more span {
        color: <?php echo ot_get_option( 'color_bg_light' ); ?>;
        font-weight: 400;
        font-weight: bold;
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
</style>

<script type="caf021080dbc373dc8121cfe-text/javascript">
const topArtistes = [{
        name: "Wizkid",
        image: 'https://www.naijaloaded.com.ng/wp-content/uploads/2019/08/Wizkid-2.jpg',
        link: "/tag/wizkid"
    },
    {
        name: "Davido",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2019/05/Davido-e1550343194487.jpg",
        link: "/tag/davido"
    },
    {
        name: "Burna Boy",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2018/12/burnaboy-Naijaloaded.jpg",
        link: "/tag/burna-boy"
    },
    {
        name: "Fireboy",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2019/12/Fireboy-048839.jpg",
        link: "/tag/fireboy"
    },
    {
        name: "Naira Marley",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2019/09/Naira-Marley-Use.jpg",
        link: "/tag/naira-marley"
    },
    {
        name: "Peruzzi",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Peruzzi.jpg",
        link: "/tag/peruzzi"
    },
    {
        name: "Joeboy",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2019/12/Joeboy-8433.jpg",
        link: "/tag/joeboy"
    },
    {
        name: "Zlatan",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Zlatan.jpg",
        link: "/tag/zlatan"
    },
    {
        name: "Olamide",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Olamide.jpg",
        link: "/tag/olamide"
    },
    {
        name: "Rema",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Rema.jpg",
        link: "/tag/rema"
    },
    {
        name: "Tiwa Savage",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Tiwa-Savage-1.jpg",
        link: "/tag/tiwa-savage"
    },
    {
        name: "Yemi Alade",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Yemi-Alade.jpg",
        link: "/tag/yemi-alade"
    },
    {
        name: "Simi",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Simi-1.jpg",
        link: "/tag/simi"
    },
    {
        name: "Zinoleesky",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Zinoleesky.jpg",
        link: "/tag/zinoleesky"
    },
    {
        name: "Mohbad",
        image: "https://www.naijaloaded.com.ng/wp-content/uploads/2020/01/Mohbad.jpg",
        link: "/tag/mohbad"
    }
];

function getRandom(count) {
    const tmp = topArtistes.slice(topArtistes);
    const ret = [];

    for (let i = 0; i < count; i++) {
        var index = Math.floor(Math.random() * tmp.length);
        var removed = tmp.splice(index, 1);
        // Since we are only removing one element
        ret.push(removed[0]);
    }
    return ret;
}

const getTop4 = getRandom(4);

const artistes = document.querySelector('.top-artiste-slider');
artistes.innerHTML = ''
getTop4.forEach(artiste => {
    
    artistes.innerHTML += `<div>
                <a href="${artiste.link}" target="_blank" class="top-artiste-slider-link" rel="noopener noreferrer">
                    <img src="${artiste.image}" alt="">
                    <span>${artiste.name}</span> </a>
            </div>`;
});

artistes.innerHTML += `<div>
        <a class="top-artiste-slider-see-more" href="/top-artistes">
            <span>See More Artistes</span>
        </a>
    </div>`;
  	
  	//Slick SLider for TOp artiste
  	jQuery(document).ready(function($) {
    $('.top-artiste-slider').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3
	});
	
    });	
</script>
<script type="caf021080dbc373dc8121cfe-text/javascript">
// (function($) {
// this.randomtip = function(){
//     var length = $("#tips li").length;
//     var ran = Math.floor(Math.random()*length) + 1;
//     $("#tips li:nth-child(" + ran + ")").show();
// };


// this.randomSideAd = function(){
//     var length = $("#randomSideAd li").length;
//     var ran = Math.floor(Math.random()*length) + 1;
//     $("#randomSideAd li:nth-child(" + ran + ")").show();
// };
 
// $(document).ready(function(){   
//     randomtip();

//     $("body").on("click", "#tip-close", function(e) {
//       e.preventDefault();
//       $('#tips').remove();
//     });


//     randomSideAd();
//     $("body").on("click", "#randomSideAd-close", function(e) {
//       e.preventDefault();
//       $('#randomSideAd').remove();
//     });




// });
// })( jQuery );
</script>
<script type="1c012376eb4558dd58f204f1-text/javascript">
  	jQuery(document).ready(function($) {
    $('.top-artiste-slider').slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3
	});
	
    });	
  </script>