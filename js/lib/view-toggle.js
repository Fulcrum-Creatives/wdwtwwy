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