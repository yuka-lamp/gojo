// CSSインポート
import '../sass/app.scss';

// JSインポート
import 'bootstrap';
import "slick-carousel";
import "jquery-drawer";

// require('./drawer');

$(function() {
  // slick
  $(".slick-blog").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: true,
    speed: 2000,
    arrows: true,
    dots: true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    }, ],
  });

  // $(".top__mv__bg").slick({
  //   // slidesToShow: 1,
  //   slidesToScroll: 1,
  //   autoplay: true,
  //   autoplaySpeed: 3000,
  //   speed: 2000,
  // });

  $('.top__mv__bg').on('init', function() {
    $('.slick-slide[data-slick-index="0"]').addClass('moving');
  }).slick({
    arrows: false,
    dots: false,
    infinite: true,
    fade: true,
    speed: 3000,
    autoplay: true,
    pauseOnHover: false,
    centerMode: true
  }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    var slide_num = $('.slick-slide').length;
    $('.slick-slide[data-slick-index="' + (currentSlide - 1) + '"]').removeClass('moving');
    $('.slick-slide[data-slick-index="' + nextSlide + '"]').addClass('moving');
    if (currentSlide == 0) {
      $('.slick-slide[data-slick-index="' + (slide_num - 1) + '"]').removeClass('moving');
    }
  });
});
