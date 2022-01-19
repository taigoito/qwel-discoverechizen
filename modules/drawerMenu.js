/**
 * Drawer Menu
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class DrawerMenu {
  constructor() {
    // DrawerMenuの各要素
    this._elem = document.getElementById('drawerMenu');
    if (!this._elem) return;
    this._toggler = document.getElementById('drawer'); // [data-drwer]に、toggle, show, hide のいずれかのメソッドを指定
    this._inner = this._elem.querySelector('.drawerMenu__inner');
    this._overlay = document.getElementById('drawerMenuOverlay');
    this._template = document.getElementById('drawerMenuItemTemplate');

    // クローンする対象
    this._brand = document.querySelector('.siteBrand');
    this._primary = document.querySelector('.gNav__primaryMenu');
    this._social = document.querySelector('.gNav__socialMenu');
  
    // 各セットアップ
    this._inner.classList.add('--collapse');
    this._overlay.classList.add('--collapse');
    this._renderTemplate();
    this._handleEvents();
  }

  toggle() {
    if (this.isShown) this.hide();
    else this.show();
  }

  show() {
    if (!this.isShown) {
      this._transitionEnd(this._elem, () => {
        this._elem.classList.add('--show');
        this._toggler.classList.add('--active');
        this._inner.classList.remove('--collapse');
        this._overlay.classList.remove('--collapse');
      }).then(() => {
        this._inner.classList.add('--show');
      });
    }
    this.isShown = true;
  }

  hide() {
    if (this.isShown) {
      this._transitionEnd(this._elem, () => {
        this._elem.classList.remove('--show');
        this._toggler.classList.remove('--active');
        this._inner.classList.remove('--show');
      }).then(() => {
        this._inner.classList.add('--collapse');
        this._overlay.classList.add('--collapse');
      });
    }
    this.isShown = false;
  }

  _renderTemplate() {
    // ロゴのクローン
    const brand = this._brand.querySelector('a');
    const node = document.importNode(this._template.content, true);
    const li = node.querySelector('li');
    li.classList.add('--brand');
    const a = node.querySelector('a');
    a.setAttribute('href', brand.getAttribute('href'));
    a.innerHTML = brand.innerHTML;
    this._inner.appendChild(node);
    // プライマリメニュー
    if (this._primary) {
      const primaryItems = this._primary.querySelectorAll('a');
      primaryItems.forEach((item) => {
        const li = document.importNode(this._template.content, true);
        const a = li.querySelector('a');
        a.setAttribute('href', item.getAttribute('href'));
        a.innerHTML = item.innerHTML;
        this._inner.appendChild(li);
      });
    }
    // ソーシャルメニュー
    if (this._social) {
      const socialItems = this._social.querySelectorAll('a');
      socialItems.forEach((item) => {
        const node = document.importNode(this._template.content, true);
        const li = node.querySelector('li');
        li.classList.add('--social');
        const a = node.querySelector('a');
        a.setAttribute('href', item.getAttribute('href'));
        a.innerHTML = item.innerHTML;
        this._inner.appendChild(node);
      });
    }
  }

  _handleEvents() {
    this._toggler.addEventListener('click', (event) => {
      event.preventDefault();
      this[event.currentTarget.dataset.drawer]();
    });

    this._overlay.addEventListener('click', () => {
      this.hide();
    });

    window.addEventListener('scroll', () => {
      this._windowScrollHandler();
    });
  }

  _windowScrollHandler() {
    if (this.isShown) this.hide();
  }

  _transitionEnd(elem, func) {
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
}
