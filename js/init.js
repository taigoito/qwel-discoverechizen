/*
 * Author: Taigo Ito
 * Site: https://qwel.design
 * Twitter: @taigoito
 * Location: Fukui, Japan
 */

import Scrolling from './_scrolling.js';
import Slidebar from './_slidebar.js';
import Slider from './_slider.js';
import Wave from './_wave.js';
import renderEvilIcons from './_evil-icons.js';

const HOST = `${location.protocol}//${location.hostname}`;
const ROOT = '/discoverechizen/';

// Scrolling init
const scrolling = new Scrolling({
  offset: -12
});
scrolling.init();

// Slidebar init
const slidebar = new Slidebar({
  root: `${HOST}${ROOT}`,
  nav: document.querySelector('.footer-nav')
});
slidebar.init();

// Menu icon
const logo = document.querySelector('.brand-home img');
const logoSrc = logo.src;
const toggler = document.querySelector('.nav-toggler img');
const togglerSrc = toggler.src;

const detectSection = (arr) => {
  let targetElem = document.getElementById(document.body.id === 'index' ? 'hero' : 'site-header');
  let min = targetElem.getBoundingClientRect().top;
  arr.forEach(ID => {
    const elem = document.getElementById(ID);
    const clientRect = elem.getBoundingClientRect();
    if (clientRect.top <= 0 && min <= clientRect.top) {
      targetElem = elem;
      min = clientRect.top;
    }
  });
  return targetElem;
}

const detectColor = (elem) => {
  if ((document.body.id === 'umitan' || document.body.id === 'archive-umitan') && elem.id === 'main') {
    return false;
  }
  const color =  window.getComputedStyle(elem, '').backgroundColor;
  const colors = color.match(/\d+/g);
  const r = parseInt(colors[0], 16);
  const g = parseInt(colors[1], 16);
  const b = parseInt(colors[2], 16);
  return ((((r * 299) + (g * 587) + (b * 114) ) / 1000) < 300) ? true : false ;
}

const changeIcons = () => {
  let targetElem;
  if (document.body.id === 'index') {
    const arr = ['news', 'umitan', 'info', 'plan', 'blog', 'location', 'contact'];
    targetElem = detectSection(arr);
  } else {
    const arr = ['main'];
    targetElem = detectSection(arr);
  }
  if (detectColor(targetElem)) {
    logo.src = logoSrc.replace('_blue.svg', '.svg');
    toggler.src = togglerSrc.replace('_blue.svg', '.svg');
  } else {
    logo.src = logoSrc.replace('.svg', '_blue.svg');
    toggler.src = togglerSrc.replace('.svg', '_blue.svg');
  }
}

changeIcons();
window.addEventListener('scroll', changeIcons);

if (document.body.id === 'index') {
  // Main visual
  const image = new Image();
  image.src = `${ROOT}wp/wp-content/themes/discoverechizen/assets/landscape/main00.jpg`;
  image.onload = () => {
    for (let i = 0; i < 6; i++) {
      const logo = document.querySelector('.hero__content');
      logo.classList.add('fade');
      const cover = document.querySelector(`.hero__image--num_${i + 1}`);
      cover.classList.add('fade');
    }
  };

  // Slider init
  const slider = new Slider({
    hasDraggingHandler: true,
    hasWheelHandler: true,
    hasFade: true,
    hasCaption: true,
    autoPlay: 3000
  });
  slider.init();

  // Wave init
  const targets = document.querySelectorAll('.wave');
  targets.forEach((target, i) => {
    if (i === 0) {
      const wave = new Wave({
        target: target
      });
      wave.init();
    } else {
      const wave = new Wave({
        target: target,
        saturation: '66%',
        lightness: '83%',
        static: true
      });
      wave.init();
    }
  });

  // Map
  const _transitionEnd = (elem, func) => {
    let callback;
    const promise = new Promise((resolve, reject) => {
      callback = () => resolve(elem);
      elem.addEventListener('transitionend', callback);
    });
    func();
    promise.then((elem) => {
      elem.removeEventListener('transitionend', callback);
    });
    return promise;
  }

  const map = document.querySelector('.map__cover');
  map.classList.add('active');
  map.addEventListener('click', () => {
    const promise = _transitionEnd(map, () => {
      map.classList.remove('active');
    }).then(() => {
      map.remove();
    });
  });
}

if (document.body.id === 'archive-umitan' || document.body.id === 'umitan') {
  // Wave init
  const wave = new Wave({
    target: document.querySelector('.wave'),
    lightness: '100%',
    background: 'hsl(195, 100%, 42%)'
  });
  wave.init();
}

// Icons init
renderEvilIcons();
