/*
 * Author: Taigo Ito
 * Site: https://qwel.design
 * Twitter: @taigoito
 * Location: Fukui, Japan
 */

import Scrolling from './_scrolling.js';
import Slidebar from './_slidebar.js';
import Slider from './_slider.js';
import PhotoGallery from './_photo-gallery.js';
import renderEvilIcons from './_evil-icons.js';

// Scrolling init
const scrolling = new Scrolling();
scrolling.init();

// Slidebar init
const slidebar = new Slidebar();
slidebar.init();

// Slider init
const slider = new Slider({
  hasDraggingHandler: true,
  hasWheelHandler: true,
  hasFade: true,
  autoPlay: 3000
});
slider.init();

// Instagram API init
const photoGallery = new PhotoGallery();
photoGallery.init();

// Icons init
renderEvilIcons();
