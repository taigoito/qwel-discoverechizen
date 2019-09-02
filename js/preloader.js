// Preloader

class Preloader {
  constructor(options = {}, spinnerOptions = {}) {
    this._preloader = document.createElement('div');
    this._preloader.id = 'preloader';
    this._preloader.classList.add('show');
    this._preloader.style.backgroundColor = options.backgroundColor || '';
    document.body.appendChild(this._preloader);
    if (options.spinner !== false) {
      this._spinner = new Spinner(spinnerOptions);
      this._spinner.spin();
      this._preloader.appendChild(this._spinner.spinner);
    }
    this._terminateTime = options.terminateTime || 3000;
    this._terminateTimmerId = setTimeout(this.load.bind(this), this._terminateTime);
    this.load = this.load.bind(this);
  }

  load() {
    clearTimeout(this._terminateTimmerId);
    let callback;
    const promise = new Promise((resolve, reject) => {
      callback = () => resolve(this._preloader);
      this._preloader.addEventListener('transitionend', callback);
    });
    this._preloader.classList.remove('show');
    promise.then(() => {
      this._preloader.removeEventListener('transitionend', callback);
      this._terminate();
    });
  }

  _terminate() {
    if (this._spiner) {
      this._spinner.stop();
      this._spinner = false;
    }
    document.body.removeChild(this._preloader);
  }
}

class Spinner {
  constructor(options = {}) {
    this.spinner = document.createElement('div');
    this.spinner.id = 'spinner';
    this._barsCount = options.barsCount || 12;
    const bars = [];
    for (let i = 0; i < this._barsCount; i++) {
      bars[i] = document.createElement('span');
      this.spinner.appendChild(bars[i]);
    }
    this._speed = options.speed || 1000;
    this._speed /= this._barsCount;
  }

  spin() {
    this.isSpin = true;
    setTimeout(() => {
      this._loop(0)
    }, this._speed);
  }

  _loop(rotateCount = 0) {
    if (this.isSpin) {
      if (this._barsCount === rotateCount) {
        rotateCount = 0
      } else {
        rotateCount++;
      }
      const deg = rotateCount * 360 / this._barsCount;
      this.spinner.style.transform = `rotate(${deg}deg)`;
      setTimeout(() => {
        this._loop(rotateCount);
      }, this._speed);
    }
  }

  stop() {
    this.isSpin = false;
  }
}
