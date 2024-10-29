$(document).ready(function () {
    AOS.init();
});

$('.carousel').carousel({
    interval: 6000
});

$('.myowlslider').owlCarousel({
    loop: true,
    autoplay: false,
    autoplayTimeout: 10000,
    nav: false,
    margin: 10,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

$('.myowlslider2').owlCarousel({
    loop: true,
    autoplay: false,
    autoplayTimeout: 10000,
    nav: false,
    margin: 10,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});
$("#contact_closebtn").on("click", function () {
    $("#float_contact").css("right", "-600px");
});
$(".contact_btn").on("click", function () {
    $("#float_contact").css("right", "0");

});


// Fetch Shop data from database
$(document).ready(function () {
    $('.myshopclass').on("click", function () {
        var itemid = $(this).data('id');
        var itemtitile = $(this).data('title');
        var itemprice = $(this).data('itemprice');
        var itemimage = $(this).data('image');
        var itemdesc = $(this).data('description');
        var itemspeci = $(this).data('specification');
        $('.item-title').html(itemtitile);
        $('#item-price').html("Price: $" + itemprice);
        $('#itemd').html(itemid);
        $('#itemimage').attr("src", itemimage);
        $('#item-desc').html(itemdesc);
        $('#item-spec').html(itemspeci);

    })
});


// fetch images on model through data attribute
$(document).ready(function () {
    $('.mygallery').on("click", function () {
        var galleryimg = $(this).data('image1');
        $('#galleryimg').attr("src", galleryimg);

    })

});

// Start Gallery Page Slider

$(document).ready(function () {
    var heroSlider = $('.hero_carosel');
    heroSlider.on('initialized.owl.carousel changed.owl.carousel', function (e) {
        if (!e.namespace) {
            return;
        }
        var carousel = e.relatedTarget;
        $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items()
            .length);
    }).owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
        autoHeight: false,
        mouseDrag: true,
        autoplayHoverPause: true,
        items: 1,
        navText: [
            "<i class='owl-direction fa-solid fa-chevron-left'></i>",
            "<i class='owl-direction fa-solid fa-chevron-right'></i>"
        ]
    });

    $(".owl-item.active .tag").addClass('animated fadeInUp delay-1');
    $(".owl-item.active h2").addClass('animated fadeInUp delay-2');
    $(".owl-item.active .carsl_cnt").addClass('animated fadeInUp delay-3');
    $(".owl-item.active .carsl_btn").addClass('animated fadeInUp delay-4');
    $(".hero_carosel").on('change.owl.carousel', function (event) {
        var item = event.item.index - 2;
        $('.tag').removeClass('animated fadeInUp delay-1');
        $('h2').removeClass('animated fadeInUp delay-2');
        $('.carsl_cnt').removeClass('animated fadeInUp delay-3');
        $('.carsl_btn').removeClass('animated fadeInUp delay-4');
        $('.owl-item').not('.cloned').eq(item).find('.tag').addClass('animated fadeInUp delay-1');
        $('.owl-item').not('.cloned').eq(item).find('h2').addClass('animated fadeInUp delay-2');
        $('.owl-item').not('.cloned').eq(item).find('.carsl_cnt').addClass('animated fadeInUp delay-3');
        $('.owl-item').not('.cloned').eq(item).find('.carsl_btn').addClass('animated fadeInUp delay-4');
    });
});
// End Gallery Page Slider






// Changeable Text
// let changeArray=['If you never go you will never know', 'Travel is an investment in yourself','Live for the moment you cannot put into word'];
// let change = document.getElementById('change_text');

// let index=0;
// setInterval(() => {
//     change.innerText=changeArray[index];
//     index++;
//     if (index==changeArray.length) {
//         index=0;
//     }
// }, 5000);

