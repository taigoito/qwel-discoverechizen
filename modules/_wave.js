// Wave

export default class Wave {
  constructor(options = {}) {
    this.target = options.target || document.querySelector('.wave');
    this.hue = options.hue || '195';
    this.saturation = options.saturation || '100%';
    this.lightness = options.lightness || '42%';
    this.fill = options.background || '#ffffff';
    this.static = options.static || false;
    const canvas = document.createElement('canvas');
    canvas.classList.add('canvas');
    this.target.appendChild(canvas);
  }

  init() {
    this._handleEvents();
    this._resizeEvent = document.createEvent("HTMLEvents");
    this._resizeEvent.initEvent('resize', true, true);
    const seconds = 0;
    const t = 0;
    this._draw(seconds, t);
    window.setInterval(() => {
      window.dispatchEvent(this._resizeEvent);
    }, 1000);
  }

  _draw(seconds, t) {
    this.canvas = this.target.querySelector('.canvas');
    const width = this.canvas.width;
    const height = this.canvas.height;
    const ctx = this.canvas.getContext('2d');
    ctx.fillStyle = this.fill;
    ctx.fillRect(0, 0, width, height);
    this._drawWave(width, height, ctx, `hsla(${this.hue}, ${this.saturation}, ${this.lightness}, .25)`, t, 3.0, 0);
    this._drawWave(width, height, ctx, `hsla(${this.hue}, ${this.saturation}, ${this.lightness}, .5)`, t, 1.5, 0);
    this._drawWave(width, height, ctx, `hsla(${this.hue}, ${this.saturation}, ${this.lightness}, .75)`, t, 1.0, 0);
    
    if (!this.static) {
      seconds += .009;
      t = seconds * Math.PI;
      requestAnimationFrame(() => this._draw(seconds, t));
    }
  }

  _drawWave(width, height, ctx, color, t, zoom, delay) {
    ctx.fillStyle = color;
    ctx.beginPath();
    this._drawSine(width, height, ctx, t / 0.5, zoom, delay);
    ctx.fill();
  }

  _drawSine(width, height, ctx, t, zoom, delay) {
    const unit = 50;
    let x = t;
    let y = Math.sin(x) / zoom;
    const xAxis = 50;
    const yAxis = 0;
    ctx.moveTo(yAxis, unit * y + xAxis);
    for (let i = yAxis; i <= width + 10; i += 10) {
      x = t + (-yAxis + i) / unit / zoom;
      y = Math.sin(x - delay) / 3;
      ctx.lineTo(i, unit * y + xAxis);
    }
    ctx.lineTo(width, height);
    for (let i = yAxis; i <= width + 10; i += 10) {
      x = t + (-yAxis + i) / unit / zoom;
      y = Math.sin(x - delay) / 3;
      ctx.lineTo(width - i, height - unit * y - xAxis);
    }
    ctx.lineTo(0, height);
    ctx.closePath();
  }

  _handleEvents() {
    window.addEventListener('resize', () => {
      const canvas = this.target.querySelector('.canvas');
      canvas.width = this.target.clientWidth;
      canvas.height = this.target.clientHeight;
      if (this.static) this._draw(0, 0);
    });
  }
}
