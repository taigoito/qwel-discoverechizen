/**
 * Wave
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Discover Echiven
 */

export default class Wave {
  constructor(elem) {
    // Waveを背景に描く要素
    this._elem = elem || document.querySelector('.wave');
    if (!this._elem) return;

    // 各オプション (data属性から取得)
    this._hue = this._elem.dataset.hue || '200';
    this._saturation = this._elem.dataset.saturation || '100%';
    this._lightness = this._elem.dataset.lightness || '50%';
    this._fill = this._elem.dataset.background || '#ffffff';
    this._static = this._elem.dataset.static || false;

    // キャンバス作成
    const canvas = document.createElement('canvas');
    canvas.classList.add('canvas');
    this._elem.appendChild(canvas);
    
    // 最初にサイズを測り、以後リサイズを監視
    this._windowResizeHandler();
    window.addEventListener('resize', () => {
      this._windowResizeHandler();
    });
    // 読み込みタイミングを誤ったとき対策
    window.setTimeout(() => {
      this._windowResizeHandler();
    }, 1000);
  
    // 描画開始
    const seconds = 0;
    const t = 0;
    this._draw(seconds, t);
  }

  _draw(seconds, t) {
    this.canvas = this._elem.querySelector('.canvas');
    const width = this.canvas.width;
    const height = this.canvas.height;
    const ctx = this.canvas.getContext('2d');
    ctx.fillStyle = this._fill;
    ctx.fillRect(0, 0, width, height);
    this._drawWave(width, height, ctx, `hsla(${this._hue}, ${this._saturation}, ${this._lightness}, .25)`, t, 3.0, 0);
    this._drawWave(width, height, ctx, `hsla(${this._hue}, ${this._saturation}, ${this._lightness}, .5)`, t, 1.5, 0);
    this._drawWave(width, height, ctx, `hsla(${this._hue}, ${this._saturation}, ${this._lightness}, .75)`, t, 1.0, 0);
    
    if (!this._static) {
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

  _windowResizeHandler() {
    const canvas = this._elem.querySelector('.canvas');
    canvas.width = this._elem.clientWidth;
    canvas.height = this._elem.clientHeight;
    if (this._static) this._draw(0, 0);
  }
}
