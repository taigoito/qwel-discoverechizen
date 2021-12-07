/**
 * Sub Menus
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class SubMenus {
  constructor(elem) {
    this._elem = elem || document.querySelector('.sidebar');
    if (!this._elem) return;
    this._menus = this._elem.querySelectorAll('.sub-menu');
    if (!this._menus.length) return;
    this._menus.forEach((elem) => {
      this._init(elem);
    });
  }

  _init(elem) {
    // サブメニューを閉じておく
    elem.classList.add('--collapse');

    // openerを作成
    const opener = document.createElement('button');
    const icon = document.createElement('span');
    icon.dataset.icon = 'ei-chevron-down';
    opener.appendChild(icon);
    elem.before(opener);

    // イベント登録
    opener.addEventListener('click', () => {
      this._toggle(elem, opener);
    });
  }

  _toggle(elem, opener) {
    elem.classList.toggle('--collapse');
    opener.classList.toggle('--active');
  }
}
