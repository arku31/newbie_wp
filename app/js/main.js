//libs
import inputmask from 'inputmask';
import 'inputmask/dist/inputmask/dependencyLibs/inputmask.dependencyLib.jquery.js'
import 'inputmask/dist/inputmask/inputmask.numeric.extensions.js'
import 'inputmask/dist/inputmask/jquery.inputmask.js'


//modules
import slider from './modules/slider';
import accordeon from './modules/accordeon';
import horizontalAcco from './modules/horizontal-acco';
import yandexMap from './modules/yandex-map';
import fancybox from './modules/fancybox';
import hamburger from './modules/hamburger';
import form from './modules/form';
import ingredients from './modules/ingredients';

// one page scroll
import './modules/one-page-scroll';

$(document).ready(() => {
  slider();
  accordeon();
  horizontalAcco();
  fancybox();
  hamburger();
  form();
  ingredients();
  
  $('.phone-mask').inputmask('+7 (999) 999 99 99');

  yandexMap();
});