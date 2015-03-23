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