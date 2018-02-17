export default () => {

  const calculateWidth = () => {
    const wWidth = $(window).width()
    const titles = $('.menu-acco__trigger')
    const titleWidth = titles.width()
    const reqWidth = wWidth - (titleWidth * titles.length)

    return (reqWidth > 550) ? 550 : reqWidth
  }

  const openItem = item => {
    const container = $('.menu-acco')
    const items = $('.menu-acco__item', container)
    const accoText = $('.menu-acco__text', container)
    const activeItem = items.filter('.active')
    const activeContent = activeItem.find('.menu-acco__content')
    const content = item.find('.menu-acco__content')
    const reqWidth = calculateWidth()

    items.removeClass('active');
    item.addClass('active');

    accoText.hide();
    activeContent.animate({ 'width': '0px' });

    content.animate({
      'width': reqWidth + 'px'
    }, () => { accoText.fadeIn() })
  }

  const closeItem = item => {
    item.removeClass('active');

    item.closest('.menu-acco').find('.menu-acco__text')
      .stop(true, true).fadeOut(() => {
        item.find('.menu-acco__content').animate({ 'width': '0px' });
      });
  }

  $('.menu-acco__trigger').on('click', (e) => {
    e.preventDefault();

    const $this = $(e.target)
    const item = $this.closest('.menu-acco__item')

    item.hasClass('active')
      ? closeItem(item)
      : openItem(item)


  });

  // клик вне аккордеона
  $(document).on('click', (e) => {
    const $this = $(e.target);

    if (!$this.closest('.menu-acco').length) {
      closeItem($('.menu-acco__item'))
    }
  });
}