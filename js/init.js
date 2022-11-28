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
import FormatTitle from "./_formatTitle.js";
new FormatTitle();
