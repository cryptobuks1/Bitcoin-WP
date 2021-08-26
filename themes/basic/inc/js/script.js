jQuery( function( $ ) {
    if ($('.main-slider').length>0) {
        $('.main-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
        });
    }

    $('.tab-panel__item').click(function(){
       $('.tab-panel__item.active').removeClass('active');
       $(this).addClass('active');
       if ($(this).hasClass('review-tab'))
       {
           $('.single-project__reviews').show();
           $('.single-project__content').hide();
       }
       else
       {
           $('.single-project__reviews').hide();
           $('.single-project__content').show();
       }
    });

});

