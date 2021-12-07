/**
 * Init
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

import Preloader from './preloader.js';
new Preloader();

// Drawer Menu
import DrawerMenu from './drawerMenu.js';
new DrawerMenu();

// Sub Menus
import SubMenus from './subMenus.js';
new SubMenus();

// Responsive Color
import ResponsiveColor from './responsiveColor.js';
new ResponsiveColor();

// Scrolling
import Scrolling from './scrolling.js';
new Scrolling();

// Modal
import Modal from './modal.js';
new Modal();

// Fader
import Fader from './fader.js';
const fader = document.querySelectorAll('.fader');
fader.forEach((elem) => {
  new Fader(elem);
});

// Slider
import Slider from './slider.js';
const slider = document.querySelectorAll('.slider');
slider.forEach((elem) => {
  new Slider(elem);
});

// Evil Icons
import EvilIcons from './evilIcons.js';
new EvilIcons();
