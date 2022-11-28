/**
 * Format Title
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Discover Echiven
 */

export default class FormatTitle {

  constructor(elems) {
    // フォーマットする要素
    this._elems = elems || document.querySelectorAll('[data-comfort]');
    if (!this._elems) return;

    // 順次フォーマット
    this._elems.forEach((elem) => this._format(elem));

  }

  
  _format(elem) {
    const strlen = elem.textContent.length;
    const comfort = elem.dataset.comfort;
    const spacing = Math.floor(16 / strlen * comfort);
    elem.style.letterSpacing = `${spacing / 16}em`;

  }

}
