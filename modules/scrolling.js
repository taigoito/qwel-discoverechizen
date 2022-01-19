/**
 * Scrolling
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel
 */

export default class Scrolling {
  constructor(elem) {
    // 各オプション (body要素のdata属性から取得)
    this._elem = elem || document.body;
    this._offset = this._elem.dataset.scrollingOffset || 72; // header標準
    this._duration = this._elem.dataset.scrollingDuration || 1000;
    this._handleEvents();
  }

  scroll(id) {
    this._elem = document.getElementById(id);
    this._start = window.scrollY || window.pageYOffset;
    this._stop = this._elem.getBoundingClientRect().top + this._start;
    this._distance = this._stop - this._start - this._offset;
    this._timeStart = false;
    window.requestAnimationFrame(this._loop.bind(this));
  }

  _handleEvents() {
    const links = document.querySelectorAll('a[href]');
    links.forEach((link) => { 
      link.addEventListener('click', (event) => {
        const href = event.currentTarget.getAttribute('href');
        const regexp = /#[\w\%-]+/gi;
        if (href && regexp.test(href)) {
          const hash = href.split('#').pop();
          if (document.getElementById(hash) != null) {
            event.preventDefault();
            this.scroll(hash);
          }
        }
      });
    });
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
    this.timeStart = false;
  }

  _easing(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }
}
