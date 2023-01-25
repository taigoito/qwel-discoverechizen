/**
 * Responsive Color
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 */

class ResponsiveColor {

  constructor(elems) {
    // 要素を取得
    this._elems = elems || document.querySelectorAll('.responsiveColor');
    if (!this._elems.length) return;

    // 要素を再取得 (Evil Iconsの仕様対策)
    setTimeout(() => {
      this._elems = document.querySelectorAll('.responsiveColor');
      if (!this._elems.length) return;
    }, 1000);
    
    // セクションの配列を作成し、以後リサイズを監視
    this._sections = this._getSections();
    if (!this._sections.length) return;
    window.addEventListener('resize', () => this._sections = this._getSections());

    // 初期状態をセットし、以後スクロールを監視
    this._change();
    window.addEventListener('scroll', () => this._change());

  }


  // セクションの背景を検出し .--change を付与
  _change() {
    const section = this._getSection();
    let colorYiq = true;
    // 予め要素自身かその子要素に、背景色を設定しておく必要あり
    colorYiq = this._detectColorYiq(section);

    this._elems.forEach((elem) => {
      if (colorYiq) {
        elem.classList.add('--change');
      } else {
        elem.classList.remove('--change');
      }

    });

  }

  // 要素の背景色を検出し、濃いか薄いか判定
  _detectColorYiq(elem) {
    let color =  window.getComputedStyle(elem).backgroundColor;
    if (color === 'rgba(0, 0, 0, 0)') {
      const inner = elem.children[0];
      color = window.getComputedStyle(inner).backgroundColor;
    }
    const colors = color.match(/\d+/g);
    const r = parseInt(colors[0], 16);
    const g = parseInt(colors[1], 16);
    const b = parseInt(colors[2], 16);

    return ((((r * 299) + (g * 587) + (b * 114) ) / 1000) < 300) ? true : false;

  }

  // header, main, footerの子要素から、背景を取得するセクションの配列を作成
  _getSections() {
    const sections = [];
    const main = document.querySelector('main');

    const header = document.querySelector('header');
    // headerが透過で固定されている場合は除く
    const headerStyle = window.getComputedStyle(header);
    const headerPosition = headerStyle.getPropertyValue('position');
    if (headerPosition !== 'fixed') {
      sections.push(header);
    }

    for (const section of main.children) {
      if (section.tagName === 'SECTION' || section.tagName === 'ARTICLE'
        || section.tagName === 'HEADER' || section.tagName === 'FOOTER') {
        sections.push(section);
      }
    }

    const footer = document.querySelector('footer');
    sections.push(footer);

    return sections;

  }

  // セクションの配列から、現在のセクションを取得
  _getSection() {
    let current = this._sections[0];
    let clientRect = current.getBoundingClientRect();
    let min = clientRect.top - 36; // 要素の高さの半分を引く

    this._sections.forEach((section) => {
      clientRect = section.getBoundingClientRect();
      const clientRectTop = clientRect.top - 36;

      if (clientRectTop <= 0 && min <= clientRectTop) {
        current = section;
        min = clientRectTop;
      }

    });

    return current;

  }

}
