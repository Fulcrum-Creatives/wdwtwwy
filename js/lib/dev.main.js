var $ = jQuery.noConflict();
var test;
/**
 * Skip Navigation Link
 *
 * Allows screen readers to skip the navigation
 *
 * source: http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
 */
( function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
        is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
        is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

    if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
        var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
        window[ eventMethod ]( 'hashchange', function() {
            var element = document.getElementById( location.hash.substring( 1 ) );

            if ( element ) {
                if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
                    element.tabIndex = -1;

                element.focus();
            }
        }, false );
    }
})();
(function ( $ ) {
    "use strict";
    $(function () {
        $('.view__choose').on('click', function() { 
            $(this).closest('.view__toggle').find('.view__choose').removeClass('active');
            $(this).addClass('active');
            $(this).blur(function(){
                $(this).addClass('active');
            })
            if($('.view__picture').hasClass('active')) {
                $('.view__full').css({'display': 'block'}).animate({ opacity: 1 }, 50);
            } else {
                $('.view__full').css({'display': 'none'}).animate({ opacity: 0 }, 50);
            }
            if($('.view__list').hasClass('active')) {
                $('.view__mobile').css({'display': 'block'}).animate({ opacity: 1 }, 50);
            } else {
                $('.view__mobile').css({'display': 'none'}).animate({ opacity: 0 }, 50);
            }
        });

    });
}(jQuery));