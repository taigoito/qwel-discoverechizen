/**
 * Fader
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

 export default class Fader {

  constructor(elem) {
    // Faderの各要素
    this._elem = elem || document.querySelector('.fader');
    if (!this._elem) return;
    this._items = this._elem.children;
    if (!this._items.length || this._items.length <= 1) return;

    // 表示間隔
    this._interval = this._elem.dataset.interval || 5000;

    // 各状態管理
    this._currentIndex = 1; // 2枚目から操作
    this._itemsCount = this._items.length;

    // 2番目以降の要素を背面に移動し、フェードさせておく
    for (let i = 1; i < this._itemsCount; i++) {
      this._items[i].style.zIndex--;
      this._items[i].classList.add('--fade');
    }

    // 開始
    this.startInterval();

  }


  // 再生
  startInterval() {
    this.intervalId = setInterval(() => {
      this._fade();
    }, this._interval);

  }


  // 停止
  stopInterval() {
    clearInterval(this.intervalId);

  }

  _fade() {
    // 最前面(prev)と最背面(current)の要素をそれぞれ取得
    const prev = this._items[this._currentIndex - 1];
    const current = this._items[this._currentIndex++] || this._items[0];
    // 1番下の要素を最前面へ移動
    if (!(this._currentIndex > this._itemsCount)) current.style.zIndex++;
    this._transitionEnd(current, () => {
      // フェードイン
      current.classList.remove('--fade');
    }).then(() => {
      // トランジションが終了したら、前の要素をフェードさせておく
      prev.classList.add('--fade');
    });
    // インデックスが最大に達したとき
    if (this._currentIndex > this._itemsCount) {
      for (let i = 1; i < this._itemsCount; i++) {
        this._items[i].style.zIndex--; // // zIndexを戻す
      }
      this._currentIndex = 1; // インデックスを初期値に
    }

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
