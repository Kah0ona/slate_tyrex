jQuery(document).ready(function($) {


  $('.car-detailing').bxSlider({
    mode: 'horizontal',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 1,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 4000,
    auto: true,
    speed: 500,
    infiniteLoop: true,
    hideControlOnEnd: false,
    touchEnabled: true,
    pager: true,
    controls: false,
    onSliderLoad: function() {
      // $('.header-onderkant').css('visibility', 'visible');

    }
  });
});

