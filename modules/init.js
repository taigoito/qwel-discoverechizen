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

// Panel
import Panels from './panels.js';
new Panels();

//
// Discover Echizen Original
//
import FormatHeadline from './formatHeadline.js';
new FormatHeadline();

import Island from './island.js';
const islands = document.querySelectorAll('.contentMap__island');
islands.forEach((elem, i) => {
  new Island(elem);
});

import Wave from './wave.js';
const sections = document.querySelectorAll('.wave');
sections.forEach((elem, i) => {
  new Wave(elem);
});

import Gallery from './gallery.js';
const gallery = document.querySelectorAll('.gallery');
gallery.forEach((elem) => {
  new Gallery(elem);
});

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
