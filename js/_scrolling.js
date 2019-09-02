// Scrolling

export default class Scrolling {
  constructor(options = {}) {
    this._offset = options.offset || 48;
    this._duration = options.duration || 1000;
    this._callback = options.callback;
  }

  init() {
    this._handleEvents();
  }

  _handleEvents() {
    const myTouch = 'ontouchend' in document && window.innerWidth < 1024 ? 'touchend' : 'click';
    document.addEventListener(myTouch, (event) => {
      const href = event.srcElement.getAttribute('href');
      const regexp = /#[\w-]+/gi;
      if (href && regexp.test(href)) {
        event.preventDefault();
        this.scroll(href);
      }
    });
  }

  scroll(target) {
    this._elem = document.querySelector(target);
    this._start = window.scrollY || window.pageYOffset;
    this._stop = this._elem.getBoundingClientRect().top + this._start;
    this._distance = this._stop - this._start - this._offset;
    this._timeStart = false;
    window.requestAnimationFrame(this._loop.bind(this));
  }

  _loop(timeCurrent) {
    if (!this._timeStart) {
      this._timeStart = timeCurrent;
    }
    const timeElapsed = timeCurrent - this._timeStart;

    const next = this._easing(timeElapsed, this._start, this._distance, this._duration);
    window.scrollTo(0, next);

    timeElapsed < this._duration
      ? window.requestAnimationFrame(this._loop.bind(this))
      : this._done();
  }

  _done() {
    window.scrollTo(0, this._start + this._distance);
    if (typeof this._callback === 'function') {
      this._callback();
    }
    this.timeStart = false;
  }

  _easing(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }
}
