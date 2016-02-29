/*---------------------------------------------------------
 * jQuery noConflict
---------------------------------------------------------*/
var $ = jQuery.noConflict();
/*---------------------------------------------------------
 * Skip navigation
---------------------------------------------------------*/
(function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
        is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
        is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

    if ( ( is_webkit || is_opera || is_ie ) && document.getElementById && window.addEventListener ) {
        window.addEventListener( 'hashchange', function() {
            var id = location.hash.substring( 1 ),
                element;

            if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
                return;
            }

            element = document.getElementById( id );

            if ( element ) {
                if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
                    element.tabIndex = -1;
                }

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
        $('.view__full').css({'display': 'block'}).animate({ opacity: 1 }, 500);
      } else {
        $('.view__full').css({'display': 'none'}).animate({ opacity: 0 }, 500);
      }
      if($('.view__list').hasClass('active')) {
        $('.view__mobile').css({'display': 'block'}).animate({ opacity: 1 }, 500);
      } else {
        $('.view__mobile').css({'display': 'none'}).animate({ opacity: 0 }, 500);
      }
    });
    function clear() {
      if($(window).width() >= 768) {
        $('.view__mobile').css({'display': 'none'}).animate({ opacity: 0 }, 500);
        $('.view__full').css({'display': 'block'}).animate({ opacity: 1 }, 500);
      };
    };
    $(window).resize(function() {
      clear();
    });
  });
}(jQuery));