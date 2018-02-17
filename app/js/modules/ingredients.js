var ingredients = $('.ingredients');

export default () => {
  $('.ingredients__close').on('click touchstart', (e) => {
    e.preventDefault();
    ingredients.removeClass('ingredients_active')
  });

  ingredients.on({
    mouseenter() {
      $(this).addClass('ingredients_active');
    },
    mouseleave() {
      $(this).removeClass('ingredients_active');
    }
  })
}