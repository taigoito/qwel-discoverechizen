/*
 * Author: Taigo Ito
 * Site: https://qwel.design
 * Twitter: @taigoito
 * Location: Fukui, Japan
 */

import Scrolling from './_scrolling.js';
import Slidebar from './_slidebar.js';
import Slider from './_slider.js';
import renderEvilIcons from './_evil-icons.js';

const HOST = `${location.protocol}//${location.hostname}`;
const ROOT = '/sample/';

// Scrolling init
const scrolling = new Scrolling();
scrolling.init();

// Slidebar init
const slidebar = new Slidebar({
  root: `${HOST}${ROOT}`
});
slidebar.init();

// Slider init
const slider = new Slider({
  hasDraggingHandler: true,
  hasWheelHandler: true,
  hasFade: true,
  autoPlay: 3000
});
slider.init();

// Icons init
renderEvilIcons();
