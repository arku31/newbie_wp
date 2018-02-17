export default () => {
  $('.team-acco__trigger').on('click', (e) => {
    e.preventDefault()

    const $this = $(e.target)
    const item = $this.closest('.team-acco__item')
    const container = $this.closest('.team-acco')
    const items = container.find('.team-acco__item')
    const content = item.find('.team-acco__content')
    const otherContent = container.find('.team-acco__content')

    if (!item.hasClass('active')) {

      items.removeClass('active')
      item.addClass('active')
      otherContent.slideUp()
      content.slideDown()

    } else {

      item.removeClass('active')
      content.slideUp()

    }
  });
}