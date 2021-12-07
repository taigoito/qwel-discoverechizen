/**
 * Modal
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 */

export default class Modal {
  constructor(options = {}) {
    // Modalの各要素
    this._elem = options.elem || document.querySelector('.modal');
    if (!this._elem) return;

    this._container = document.querySelector('.modal__container');
    this._inner = document.querySelector('.modal__inner');
    this._content = document.querySelector('.modal__content');
    this._overlay = document.querySelector('.modal__overlay');
    this._close = document.querySelector('.modal__close');
    this._prev = document.querySelector('.modal__prev');
    this._next = document.querySelector('.modal__next');
    this._toggler = document.querySelectorAll('[data-toggle="modal"');
    this._slider = document.querySelectorAll('[data-slide]');
    this._isShown = false;

    // 要素を非表示
    if (!this._container.classList.contains('--collapse')) {
      this._container.classList.add('--collapse');
    }
    if (!this._inner.classList.contains('--hide')) {
      this._inner.classList.add('--hide');
    }
    if (!this._overlay.classList.contains('--hide')) {
      this._overlay.classList.add('--hide');
    }
    if (!this._overlay.classList.contains('--collapse')) {
      this._overlay.classList.add('--collapse');
    }
    if (!this._close.classList.contains('--collapse')) {
      this._close.classList.add('--collapse');
    }
    if (!this._prev.classList.contains('--collapse')) {
      this._prev.classList.add('--collapse');
    }
    if (!this._next.classList.contains('--collapse')) {
      this._next.classList.add('--collapse');
    }

    // モーダルアイテム数
    const sections = document.querySelectorAll('[data-index]');
    this.maxIndex = sections.length - 1;

    this._handleEvents();
  }

  _handleEvents() {
    this._toggler.forEach((elem) => {
      elem.addEventListener('click', (event) => {
        event.preventDefault();
        // ウィンドウ幅が 768px未満 なら表示しない
        const windowWidth = window.innerWidth;
        if (windowWidth < 768) return;
        // トグル
        if (this._isShown) {
          this.hide();
        } else {
          const target = event.currentTarget;
          const index = target.dataset.target;
          this.show(index);
        }
      });
    });

    this._slider.forEach((elem) => {
      elem.addEventListener('click', (event) => {
        event.preventDefault();
        const target = event.currentTarget;
        const size = target.dataset.slide;
        const index = this.index + (size - 0);
        if (index < 0 || index > this.maxIndex) {
          this.hide();
        } else {
          this.move(index);
        }
      });
    });

    window.addEventListener('resize', () => {
      const windowWidth = window.innerWidth;
      if (this._isShown && windowWidth < 768) {
        this.hide();
      }
    });
  }

  show(index) {
    this.index = index - 0;
    const section = this._content.querySelector(`[data-index="${this.index}"`);
    const clone = section.cloneNode(true);
    this._inner.appendChild(clone);
    this._transitionEnd(this._container, () => {
      this._container.classList.remove('--collapse');
      this._overlay.classList.remove('--collapse');
    }).then(() => {
      this._inner.classList.remove('--hide');
      this._overlay.classList.remove('--hide');
      this._close.classList.remove('--collapse');
      this._prev.classList.remove('--collapse');
      this._next.classList.remove('--collapse');
    });
    this._isShown = true;
  }

  hide() {
    this._transitionEnd(this._inner, () => {
      this._inner.classList.add('--hide');
      this._overlay.classList.add('--hide');
      this._close.classList.add('--collapse');
      this._prev.classList.add('--collapse');
      this._next.classList.add('--collapse');
    }).then(() => {
      this._container.classList.add('--collapse');
      this._overlay.classList.add('--collapse');
      this._inner.innerHTML = '';
    });
    this._isShown = false;
  }

  move(index) {
    this.index = index - 0;
    const section = this._content.querySelector(`[data-index="${this.index}"`);
    const clone = section.cloneNode(true);
    this._transitionEnd(this._inner, () => {
      this._inner.classList.add('--hide');
    }).then(() => {
      this._inner.innerHTML = '';
      this._inner.appendChild(clone);
      this._inner.classList.remove('--hide');
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
