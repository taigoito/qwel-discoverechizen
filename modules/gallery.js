/**
 * Gallery
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 */

export default class Gallery {
  constructor(elem) {
    // Galleryの各要素
    this._elem = elem || document.querySelector('.gallery');
    if (!this._elem) return;
    this._main = this._elem.querySelector('.gallery__main');
    this._items = this._elem.querySelectorAll('.gallery__item');

    this._handleEvents();
  }

  _handleEvents() {
    this._items.forEach((item) => {
      const a = item.querySelector('a');
      a.addEventListener('click', (event) => {
        event.preventDefault();
        const target = event.currentTarget;
        const url = target.getAttribute('href');
        this.change(url);
      });
    });
  }

  change(url) {
    const prev = this._main.querySelector('img');
    const current = prev.cloneNode(true);
    current.setAttribute('src', url);
    // 次の要素を後ろに挿入
    prev.before(current);
    this._transitionEnd(prev, () => {
      // 前の要素をフェードアウト
      prev.classList.add('--fade');
    }).then(() => {
      // トランジションが終了したら削除
      prev.remove();
    });
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
