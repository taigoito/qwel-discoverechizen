/**
 * Init
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Discover Echizen
 */

// Fader
import Fader from './_fader.js';
const fader = document.querySelectorAll('.fader');
fader.forEach((elem) => {
  new Fader(elem);
});

// Format Title
import FormatTitle from './_formatTitle.js';
new FormatTitle();

// Island
import Island from './_island.js';
const islands = document.querySelectorAll('.discoverMap__island');
islands.forEach((elem, i) => {
  new Island(elem);
});

// Wave
import Wave from './_wave.js';
const sections = document.querySelectorAll('.wave');
sections.forEach((elem, i) => {
  new Wave(elem);
});

// Embedded
import Embed from './_embed.js';
new Embed();

// Gallery
import Gallery from './_gallery.js';
const gallery = document.querySelectorAll('.gallery');
gallery.forEach((elem) => {
  new Gallery(elem);
});

// Modal
import Modal from './_modal.js';
new Modal();

// School Excursion
// Accordion
import Accordion from './_accordion.js';
new Accordion();
