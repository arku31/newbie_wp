const fancybox = require('fancybox')($)

export default () => {
  $('.review__view').fancybox({
    type: 'inline',
    maxWidth: 460,
    fitToView: true,
    padding: 0
  });

  $('.full-review__close').on('click', (e) => {
    e.preventDefault();
    $.fancybox.close();
  });
}