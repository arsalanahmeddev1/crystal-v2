// mobile menu
let navs = document.querySelector('.primary-nav');
let menuIcon = document.querySelectorAll('.menu-toggle');
menuIcon.forEach(function (e) {
  e.addEventListener('click', function () {
    navs.classList.toggle('active');
  });
});

document.addEventListener("DOMContentLoaded", function () {
  Fancybox.bind("[data-fancybox='gallery']", {
    Thumbs: {
      autoStart: true,
    },
  });
});

// slick slider
$('.explore-card-slider').slick({
  dots: false,
  infinite: false,
  arrows: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '.slick-arrow-left',
  nextArrow: '.slick-arrow-right',

  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});


$('.blog-slider').slick({
  dots: false,
  infinite: false,
  arrows: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '.blog-slick-arrow-left',
  nextArrow: '.blog-slick-arrow-right',
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});
$('.videos-slider').slick({
  dots: false,
  infinite: false,
  arrows: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow: '.video-slick-arrow-left',
  nextArrow: '.video-slick-arrow-right',
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});
