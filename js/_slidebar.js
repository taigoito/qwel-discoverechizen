// Slidebar

export default class Slidebar {
  constructor(options = {}) {
    this._root = options.root || `${location.protocol}//${location.hostname}`;
    this._bar = document.querySelector('.slidebar');
    this._menu = document.querySelector('.slidemenu');
    this._close = document.querySelector('.slidebar__close');
    this._overlay = document.querySelector('.slidebar__overlay');
    this._toggle = document.querySelectorAll('[data-toggle="slidebar"]');
    this._nav = options.nav || document.querySelector('nav');
    this._template = options.template || document.querySelector('#slidebar-template');
  }

  init() {
    this._menu.classList.add('collapse');
    this._close.classList.add('collapse');
    this._overlay.classList.add('collapse');
    this._rewriteLinks();
    this._renderTemplate();
    this._handleEvents();
  }

  _rewriteLinks() {
    const links = this._nav.querySelectorAll('a:not([data-toggle="slidebar"])');
    links.forEach((link) => {
      const href = link.getAttribute('href');
      const regexp = /#[\w-]+/gi;
      if (href && regexp.test(href)) {
        const result = `${this._root}#${href.split('#').pop()}`;
        link.setAttribute('href', result); 
        }
    });
  }

  _renderTemplate() {
    const items = this._nav.querySelectorAll('a:not([data-toggle="slidebar"])');
    items.forEach((item) => {
      const li = document.importNode(this._template.content, true);
      const a = li.querySelector('a');
      a.setAttribute('href', item.getAttribute('href'));
      a.innerHTML = item.innerHTML;
      this._menu.appendChild(li);
    });
  }

  _handleEvents() {
    const myTouch = 'ontouchend' in document && window.innerWidth < 1024 ? 'touchend' : 'click';
    this._toggle.forEach((elem) => {
      elem.addEventListener(myTouch, (event) => {
        event.preventDefault();
        if (this.isShown) this.hideBar();
        else this.showBar();
      });
    });
    window.addEventListener('scroll', this._windowScrollHandler.bind(this));
  }

  showBar() {
    this._transitionEnd(this._bar, () => {
      this._bar.classList.add('show');
      this._menu.classList.remove('collapse');
      this._close.classList.remove('collapse');
      this._overlay.classList.remove('collapse');
    }).then(() => {
      this._menu.classList.add('show');
    });
    this.isShown = true;
  }

  hideBar() {
    this._transitionEnd(this._bar, () => {
      this._bar.classList.remove('show');
      this._menu.classList.remove('show');
      this._close.classList.add('collapse');
    }).then(() => {
      this._menu.classList.add('collapse');
      this._overlay.classList.add('collapse');
    });
    this.isShown = false;
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

  _windowScrollHandler() {
    if (this.isShown) this.hideBar();
  }
}
