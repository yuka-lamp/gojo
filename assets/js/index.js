// CSSインポート
import '../sass/app.scss';

// JSインポート
import 'bootstrap';
import "slick-carousel";

$(function ($) {
  // slick
  // $(".slick-blog").slick();

  $(".slick-blog").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 2000,
    arrows: true,
    dots: true,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });
});
