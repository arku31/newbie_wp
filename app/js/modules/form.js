export default () => {
  $('#order-form').on('submit', (e) => {

    
    const form = $(e.target)
    const formData = form.serialize()

    $.post('../mail.php', formData, data => {
      const popup = data.status ? '#success' : '#error';

      $.fancybox.open([
        { href: popup }
      ], {
          type: 'inline',
          maxWidth: 250,
          fitToView: false,
          padding: 0,
          afterClose() {
            form.trigger('reset');
          }
        });
    });
  });

  $('.status-popup__close').on('click', (e) => {
    e.preventDefault();
    $.fancybox.close();
  });
}