/**
 * Created by IC on 2/20/18.
 */

$('.main-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true
});

// countdown();
//
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
//
//
// function countdown() {
//     // Set the date we're counting down to
//     var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();
//
// // Update the count down every 1 second
//     var x = setInterval(function() {
//
//         // Get todays date and time
//         var now = new Date().getTime();
//
//         // Find the distance between now an the count down date
//         var distance = countDownDate - now;
//
//         // Time calculations for days, hours, minutes and seconds
//         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
//
//         // Display the result in the element with id="demo"
//         document.getElementById("demo").innerHTML = days + "d " + hours + "h "
//             + minutes + "m " + seconds + "s ";
//
//         // If the count down is finished, write some text
//         if (distance < 0) {
//             clearInterval(x);
//             document.getElementById("demo").innerHTML = "EXPIRED";
//         }
//     }, 1000);
// }