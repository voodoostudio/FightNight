/**
 * Created by IC on 2/20/18.
 */

/**
 * Created by IC on 2/20/18.
 */

$('.homepage_carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true,
    wrapAround: true,
    arrowShape: {
        x0: 15,
        x1: 65, y1: 50,
        x2: 70, y2: 45,
        x3: 25
    }
});



countdown();

// var count = $(('#count'));
// $({ Counter: 0 }).animate({ Counter: count.text() }, {
//     duration: 5000,
//     easing: 'linear',
//     step: function () {
//         count.text(Math.ceil(this.Counter)+ "%");
//     }
// });
//
// var s = Snap('#animated');
// var progress = s.select('#progress');
//
// progress.attr({strokeDasharray: '0, 251.2'});
// Snap.animate(0,251.2, function( value ) {
//     progress.attr({ 'stroke-dasharray':value+',251.2'});
// }, 5000);


function countdown() {
    // Set the date we're counting down to
    var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
        var count_days = $(('.days .count .value'));
        count_days.text(Math.ceil(days));
        var count_hours = $(('.hours .count .value'));
        count_hours.text(Math.ceil(hours));
        var count_minutes = $(('.minutes .count .value'));
        count_minutes.text(Math.ceil(minutes));
        var count_seconds = $(('.seconds .count .value'));
        count_seconds.text(Math.ceil(seconds));




        var s = Snap('.animated');
        var progress = s.select('.progress');

        progress.attr({strokeDasharray: '0, 251.2'});
        progress.attr({ 'stroke-dasharray':seconds*4.186666666666667+',251.2'});


    }, 1000);


}