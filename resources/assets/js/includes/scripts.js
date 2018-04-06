/**
 * Created by IC on 2/20/18.
 */

setBodyBackground();
// $(window).on('resize', function(){
//     setBodyBackground();
// });

$('select').select2();

function setBodyBackground() {
    if ($(window).width() > 992) {
        $.backstretch("/img/bg_main_hd.jpg");
    }
    else if ($(window).width() < 992 && $(window).width() > 575) {
        $.backstretch("/img/bg_main.jpg");
    }
    else {
        $.backstretch("/img/bg_main_sm.jpg");
    }
}