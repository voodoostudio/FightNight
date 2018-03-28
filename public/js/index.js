/**
 * Created by IC on 2/27/18.
 */

$('.homepage_carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    pageDots: false,
    autoPlay: true,
    arrowShape: {
        x0: 15,
        x1: 65, y1: 50,
        x2: 70, y2: 45,
        x3: 25
    }
});

$('.posts_carousel').flickity({
    // options
    cellAlign: 'left',
    cellSelector: '.carousel_item',
    prevNextButtons: false,
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