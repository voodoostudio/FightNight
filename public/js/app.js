/**
 * Created by IC on 2/20/18.
 */

function countdown() {
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

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            // alert("Countdown has EXPIRED");
        } else {
            // Insert days, hours, minutes and second in the corresponding circles and activate animation
            var circle;
            var id;
            var coef;
            var progress;
            var counter;
            $('.countdown_item').each(function (index, val) {
                id = $(this).attr('id');

                // insert values in the text of each circle
                counter = $((`#${id} .count .value`));
                counter.text(Math.ceil(eval(id)));

                // activate animation of circle
                circle = Snap(`#animated_${id}`);
                if(id === 'seconds' || id === 'minutes') {
                    coef = 4.186666666666667;
                } else if (id === 'hours') {
                    coef = 10.466666666666667;
                } else {
                    coef = 0.688219178082192;
                }
                progress = circle.select(`#progress_${id}`);
                progress.attr({strokeDasharray: '0, 251.2'});
                progress.attr({ 'stroke-dasharray':eval(id)*coef+',251.2'});
            })
        }

    }, 1000);
}


function showSelectedFileName() {
    $( '.input_file' ).each( function()
    {
        var $input	 = $( this ),
            $label	 = $input.next( 'label' ),
            labelVal = $label.html();

        $input.on( 'change', function( e )
        {
            var fileName = '';

            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
                fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
                $label.find( 'span' ).html( fileName );
            else
                $label.html( labelVal );
        });
        $input.on( 'focus', function(){ $input.addClass( 'has-focus' ); });
        $input.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
    });
}
/**
 * Created by IC on 2/20/18.
 */


