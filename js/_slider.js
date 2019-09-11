// Slider

export default class Slider {
  constructor(options = {}) {
    this._slider = document.querySelector(options.slider) || document.querySelector('.slider');
    this._inner = document.querySelector(options.inner) || document.querySelector('.slider-inner');
    this._items = this._inner.children;
    this._len = this._items.length;
    this._prev = document.querySelector(options.prev) || document.querySelector('.slider-prev');
    this._next = document.querySelector(options.next) || document.querySelector('.slider-next');
    this._index = 0;
    this._rate = options.rate || 1;
    this._hasDraggingHandler = options.hasDraggingHandler || false;
    this._hasWheelHandler = options.hasWheelHandler || false;
    this._hasFade = options.hasFade || false
    this._hasCaption = options.hasCaption || false;
    this._autoPlay = options.autoPlay || 0; 
    if (this._hasCaption) {
      this._caption = document.querySelector(options.caption) || document.querySelector('.slider-caption');
      this._inner.querySelectorAll('.slider-item-caption').forEach((elem) => {
        elem.style.display = 'none';
      });
    }
    this._readyMove(-3, true);
    this._durationBase = options.duration || 500;
    this._distance = 0;
    this._dragDistance = [];
    this.isAnimated = false;
  }

  init() {
    this._setActiveItem();
    this._handleEvents();
    this._resizeEvent = document.createEvent("HTMLEvents");
    this._resizeEvent.initEvent('resize', true, true);
    window.dispatchEvent(this._resizeEvent);
    if (this._autoPlay >= 1000) {
      setInterval(() => {
        if (!this.isAnimated) this.move(1);
      }, this._autoPlay);
    }
  }

  _setActiveItem() {
    if (this._hasFade) {
      if (this._inner.querySelector('.active')) {
        this._inner.querySelector('.active').classList.remove('active');
      }
      this._items[this._index % this._len].classList.add('active');
    } else {
      this._inner.querySelectorAll('.slider-item').forEach((item) => {
        item.classList.add('active');
      });
    }
    if (this._hasCaption) {
      const caption = this._items[this._index % this._len].querySelector('.slider-item-caption').innerHTML;
      this._caption.innerHTML = caption;
    }
  }

  _handleEvents() {
    const isSupportTouch = 'ontouchend' in document && window.innerWidth < 1024;
    const myTouch = isSupportTouch ? 'touchend' : 'click';
    const myStart = isSupportTouch ? 'touchstart' : 'mousedown';
    const myMove = isSupportTouch ? 'touchmove' : 'mousemove';
    const myEnd = isSupportTouch ? 'touchend' : 'mouseup';
    this._x = 0;
    this._y = 0;
    this._isDragging = false;
    this._delta = 0;
    if (this._hasDraggingHandler) {
      this._inner.addEventListener(myStart, (event) => {
        this._x = event.clientX;
        this._y = event.clientY;
        this._isDragging = true;
        this._myStartHandler();
        if (!isSupportTouch) event.preventDefault();
      });
      this._inner.addEventListener(myMove, (event) => {
        this._x = event.clientX;
        this._y = event.clientY;
        this._myMoveHandler();
        if (!isSupportTouch) event.preventDefault();
      });
      this._inner.addEventListener(myEnd, () => {
        this._myEndHandler();
        this._isDragging = false;
      });
      this._inner.addEventListener('mouseleave', () => {
        this._myEndHandler();
        this._isDragging = false;
      });
    }
    if (this._hasWheelHandler) {
      this._inner.addEventListener('wheel', (event) => {
        this._delta = event.deltaY;
        this._myWheelHandler();
        event.preventDefault();
      });
    }
    this._prev.addEventListener(myTouch, (event) => {
      if (!this.isAnimated) this.move(-1);
      event.preventDefault();
    });
    this._next.addEventListener(myTouch, (event) => {
      if (!this.isAnimated) this.move(1);
      event.preventDefault();
    });
    window.addEventListener('resize', this._windowResizeHandler.bind(this));
  }

  _myStartHandler() {
    this._dragDistance = [this._x];
  }

  _myMoveHandler() {
    if (this._isDragging && !this.isAnimated) {
      this._dragDistance.push(this._x);
      const len = this._dragDistance.length;
      let distance = 0;
      for (let i = 0; i < len; i++) {
        if (i > 0) {
          distance = this._dragDistance[i] - this._dragDistance[i - 1];
          this._inner.style.transform = `translateX(${this._distance + distance}px)`;
        }
      }
      this._distance += distance;
    }
  }

  _myEndHandler() {
    if (this._isDragging) this.flick();
  }

  _myWheelHandler() {
    const sliderTop = this._slider.getBoundingClientRect().top;
    const sliderHeight = this._slider.getBoundingClientRect().height;
    const h1 = sliderTop + sliderHeight / 2;
    const h2 = window.innerHeight / 2;
    const delta = this._delta;
    if ((h1 < h2 + 240 && delta < 0) || (h1 > h2 - 240 && delta > 0)) {
      if (delta < 0 && !this.isAnimated) this.move(-1);
      if (delta > 0 && !this.isAnimated) this.move(1);
    }
  }

  _windowResizeHandler() {
    this._inner.style.width = `${this._getInnerWidth()}px`;
    this._inner.style.transform = `translateX(${this._getAdjustedDistance(this._index)}px)`;
    this._distance = this._getAdjustedDistance(this._index);
  }

  flick() {
    const distance = this._dragDistance[0] - this._dragDistance[this._dragDistance.length - 1];
    if (Math.abs(distance) > 5) {
      let size = 0;
      if (distance < 0) {
        const w1 = this._items[(this._len + this._index - 3) % this._len].clientWidth;
        const w2 = this._items[(this._len + this._index - 2) % this._len].clientWidth;
        if (w1 / 3 < Math.abs(distance)) size--;
        if ((w1 * 2 + w2) / 3 < Math.abs(distance)) size--;
      } else {
        const w1 = this._items[(this._len + this._index - 4) % this._len].clientWidth;
        const w2 = this._items[(this._len + this._index - 5) % this._len].clientWidth;
        if (w1 / 3 < Math.abs(distance)) size++;
        if ((w1 * 2 + w2) / 3 < Math.abs(distance)) size++;
      }
      this.move(size, this._durationBase / 2);
    }
  }

  move(size, duration = this._durationBase) {
    this._readyMove(size);
    this._index += size;
    if (this._index < 0) this._index += this._len;
    if (this._index >= this.len) this._index -= this._len;
    // Animate
    this.isAnimated = true;
    this._start = this._distance;
    if (size < 0) {
      for (let i = 0; i > size; i--) {
        this._start -= this._items[(this._len + this._index - i - 3) % this._len].clientWidth;
      }
    } else {
      for (let i = 0; i < size; i++) {
        this._start += this._items[(this._len + this._index - i - 4) % this._len].clientWidth;
      }
    }
    this._stop = this._getAdjustedDistance(this._index);
    this._flickDistance = this._stop - this._start;
    this._duration = duration;
    this._timeStart = false;
    this._loop(performance.now());
  }

  _readyMove(size, init = false) {
    if (size < 0) {
      for (let i = 0; i > size; i--) {
        let j = (this._len + this._index + i - 4) % this._len;
        if (init) j += 3;
        const order = window.getComputedStyle(this._items[j]).order;
        this._items[j].style.order = parseInt(order) - 1;
      }
    } else {
      for (let i = 0; i < size; i++) {
        let j = (this._len + this._index + i - 3) % this._len;
        if (init) j += 3;
        const order = window.getComputedStyle(this._items[j]).order;
        this._items[j].style.order = parseInt(order) + 1;
      }
    }
  }

  _loop(timeCurrent) {
    if (!this._timeStart) {
      this._timeStart = timeCurrent;
    }
    const timeElapsed = timeCurrent - this._timeStart;

    const next = this._easing(timeElapsed, this._start, this._flickDistance, this._duration);
    this._inner.style.transform = `translateX(${next}px)`;

    timeElapsed < this._duration
      ? window.requestAnimationFrame(this._loop.bind(this))
      : this._done();
  }

  _done() {
    this._inner.style.transform = `translateX(${this._start + this._flickDistance}px)`;
    window.dispatchEvent(this._resizeEvent);
    this.timeStart = false;
    this.isAnimated = false;
    this._setActiveItem();
  }

  _easing(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }

  _getInnerWidth() {
    return this._slider.clientHeight * this._len * this._rate;
  }

  _getAdjustedDistance(index) {
    let result = window.innerWidth / 2; // outerWidth
    result -= this._items[index % this._len].clientWidth / 2;
    for (let i = 0; i > -3; i--) {
      let j = (this._len + index + i - 1) % this._len;
      result -= this._items[j].clientWidth;
    }
    return result;
  }
}
