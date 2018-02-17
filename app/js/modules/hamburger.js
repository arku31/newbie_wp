export default () => {
  const menu = $('#hamburger-menu')
  const items = $('.nav__item', menu)
  const navLinks = $('.nav__link', menu)
  const body = $('body')
  let counter = 0

  const startMenuAnimation = () => {
    const item = items.eq(counter);

    item.addClass('slideInUp');
    counter++;

    if (counter < items.length) {
      setTimeout(startMenuAnimation, 100);
    }

    if (counter === items.length) counter = 0;
  }
  
  const closeMenu = () => {
    menu.removeClass('hamburger-menu_visible');
    items.removeClass('slideInUp');
    body.removeClass('locked');
  }
  
  $('.hamburger-menu-link').on('click', (e) => {
    e.preventDefault();

    menu.addClass('hamburger-menu_visible')
      .animate({ 'opacity': '1' }, 300, function () {
        startMenuAnimation();
      });

    body.addClass('locked');
  });

  $('.hamburger-menu__close').on('click', (e) => {
    e.preventDefault();
    closeMenu();
  });

  navLinks.on('click', closeMenu);

  $(window).on('keydown', (e) => {
    if (e.keyCode == 27) closeMenu();
  });
}