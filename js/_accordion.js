/**
 * Accordion
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 */

 export default class Accordion {
  constructor(options = {}) {
    const elems = options.elems || document.querySelectorAll('.panel');
    if (elems.length === 0) return;

    elems.forEach((elem) => {
      // 閉じておく
      elem.classList.add('--collapse');
    });

    const togglers = document.querySelectorAll('[data-toggle="panel"]');

    togglers.forEach((toggler) => {
      // イベント登録
      toggler.addEventListener('click', (event) => {
        event.preventDefault();
        const toggler = event.currentTarget;
        toggler.classList.toggle('--active');
        const target = document.getElementById(toggler.dataset.target);
        target.classList.toggle('--collapse');
      });
    });
  }
}
