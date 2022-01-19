/**
 * Format Island
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Discover Echiven
 */

export default class Island {
  constructor(elem) {
    // 島となる要素
    this._elem = elem || document.querySelector('.contentMap__island');
    if (!this._elem) return;
    // 吹き出しコンテンツ
    this._items = this._elem.querySelectorAll('.contentMap__content');

    // 状態
    this._isShown = false;
    this._isAnimated = false;

    // タッチデバイスの判定
    const touchSupported = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0;

    // コンテンツ幅を判定し、イベントを監視
    if (touchSupported && this._elem.clientWidth < 1024) {
      this._handleScrollEvent();
    } else {
      this._handleMouseEvent();
    }
  }

  _showContent() {
    this._isShown = true;
    const len = this._items.length;
    const promise = [];
    const callback = [];
    for (let i = 0; i < len; i++) {
      promise[i] = new Promise((resolve, reject) => {
        callback[i] = () => resolve(this._items[i]);
        this._items[i].addEventListener('transitionend', callback[i]);
      });
    }
    this._items[0].classList.add('--active');
    for (let i = 1; i < len; i++) {
      promise[i - 1].then((elem) => {
        elem.removeEventListener('transitionend', callback[i - 1]);
        this._items[i].classList.add('--active');
      });
    }
  }

  _hideContent() {
    this._isShown = false;
    this._isAnimated = true;
    window.setTimeout(() => {
      const len = this._items.length;
      const promise = [];
      const callback = [];
      for (let i = 0; i < len; i++) {
        promise[i] = new Promise((resolve, reject) => {
          callback[i] = () => resolve(this._items[i]);
          this._items[i].addEventListener('transitionend', callback[i]);
        });
      }
      this._items[0].classList.remove('--active');
      for (let i = 1; i < len; i++) {
        promise[i - 1].then((elem) => {
          elem.removeEventListener('transitionend', callback[i - 1]);
          this._items[i].classList.remove('--active');
        });
      }
      this._isAnimated = false;
    }, 1000);
  }

  _handleScrollEvent() {
    const windowHeight = window.innerHeight;
    window.addEventListener('scroll', () => { 
      const clientRect = this._elem.getBoundingClientRect();
      const clientRectTop = clientRect.top;
      const clientRectBottom = clientRect.bottom;
      if (windowHeight / 2 < clientRectBottom && clientRectTop < windowHeight / 2) {
        if (!this._isShown && !this._isAnimated) this._showContent();
      } else if (0 < clientRectBottom && clientRectBottom <= windowHeight / 2 ||
        windowHeight / 2 < clientRectTop && clientRectTop <= windowHeight) {
        if (this._isShown && !this._isAnimated) this._hideContent();
      }
    });
  }

  _handleMouseEvent() {
    this._elem.addEventListener('mouseenter', () => {
      if (!this._isShown && !this._isAnimated) this._showContent();
    });

    this._elem.addEventListener('mouseleave', () => {
      if (this._isShown && !this._isAnimated) this._hideContent();
    });
  }
}
