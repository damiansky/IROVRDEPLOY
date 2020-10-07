$('.sponsors-carousel').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 3,
    centerMode: true,
    arrows: false,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 450,
          settings: {
            slidesToShow: 2,
          }
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });