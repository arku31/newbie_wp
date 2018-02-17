import owlCarousel from 'owl.carousel'

export default () => {
  const burgerCarousel = $('.burgers-slider').owlCarousel({
    items: 1,
    nav: true,
    navContainer: $('.burger-slider__controls'),
    navText: ['', ''],
    loop: true
  });

  $('.burger-slider__btn_next').on('click', (e) => {
    e.preventDefault();
    burgerCarousel.trigger('next.owl.carousel');
  });

  $('.burger-slider__btn_prev').on('click', (e) => {
    e.preventDefault();
    burgerCarousel.trigger('prev.owl.carousel');
  });
}
