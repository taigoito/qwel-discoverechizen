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

// Scrolling init
const scrolling = new Scrolling();
scrolling.init();

// Slidebar init
const slidebar = new Slidebar();
slidebar.init();

if (document.body.id === 'index') {
  // Slider init
  const slider = new Slider({
    hasCaption: true
  });
  slider.init();
}

if (document.body.id === 'works') {
  // Works
  const elem = document.querySelector('.work-images');
  const content = document.querySelector('.work-description');
  const images = content.querySelectorAll('img');
  images.forEach((image) => {
    image.classList.add('mb-2');
    elem.appendChild(image);
  });
}

// Preloader load
window.onload = preloader.load;

// Icons init
renderEvilIcons();
