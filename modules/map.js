/**
 * Map
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class Map {
  constructor() {
    const map = document.querySelector('.section__mapCover');
    if (!map) return;
    map.classList.add('active');
    map.addEventListener('click', () => {
      const promise = this.transitionEnd(map, () => {
        map.classList.remove('active');
      }).then(() => {
        map.remove();
      });
    });
  }

  transitionEnd(elem, func) {
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
