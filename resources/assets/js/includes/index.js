/**
 * Created by IC on 2/27/18.
 */

$('.flickity_carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    pageDots: false,
    // autoPlay: true,
    arrowShape: {
        x0: 15,
        x1: 65, y1: 50,
        x2: 70, y2: 45,
        x3: 25
    }
});
$('.slick_carousel').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: '<button type="button" class="slick-prev"><img src="/img/arrow_left.png" alt="Slide to previous"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="/img/arrow_right.png" alt="Slide to previous"></button>',
});

$('.posts_carousel').flickity({
    // options
    cellAlign: 'left',
    cellSelector: '.carousel_item',
    prevNextButtons: false,
    contain: true,
    wrapAround: true,
    pageDots: false,
    arrowShape: {
        x0: 15,
        x1: 65, y1: 50,
        x2: 70, y2: 45,
        x3: 25
    }
});