/**
 * Embedded
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class Embed {
  constructor() {
    const embed = document.querySelector('.embed__cover');
    if (!embed) return;
    embed.classList.add('active');
    embed.addEventListener('click', () => {
      const promise = this.transitionEnd(embed, () => {
        embed.classList.remove('active');
      }).then(() => {
        embed.remove();
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
