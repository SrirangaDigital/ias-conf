$(document).ready(function() {

    var isWider = $( '.wider' );
    isWider.next( '.container' ).addClass( 'push-down' );

    if(isWider.length) {
        $( window ).scroll(function() {

            var tp = $( 'body' ).scrollTop();

            if(tp > 50) {

                $( '.navbar' ).removeClass( 'wider') ;
            }
            else if(tp < 50) {
        
                $( '.navbar' ).addClass( 'wider') ;
            }
        }); 
    }
    
    var hloc = window.location.href;
    if(hloc.match('#')){
        var jumpLoc = $( '#' + hloc.split("#")[1] ).offset().top - 110;

        $("html, body").animate({scrollTop: jumpLoc}, 1000);
    }

    $( '.navbar-nav li a').on('click', function(event){

        // event.preventDefault();

        var jumpLoc = $( '#' + $( this ).attr( "href" ).split('#')[1] ).offset().top - 110;

        $("html, body").animate({scrollTop: jumpLoc}, 1000);
    });   

    $( '.sec-div li a').on('click', function(event){

        // event.preventDefault();

        var jumpLoc = $( '#' + $( this ).attr( "href" ).split('#')[1] ).offset().top - 110;

        $("html, body").animate({scrollTop: jumpLoc}, 1000);
    });

    $('.schedule-text').hide();

    var hloc = window.location.href;
    
    var tab = 'day1';
    if(hloc.match('#')){ tab = hloc.split("#")[1]; }

    $('#' + tab).show();
    $('a[href="#' + tab + '"').parent().addClass('active');

    $('.schedule .nav li a').on('click', function(event){

        event.preventDefault();
        tab = $(this).attr('href');
        $('.schedule-text').hide();
        $(tab).show();
        $('.schedule .nav li').removeClass('active');
        $(this).parent().addClass('active');
    });

});


