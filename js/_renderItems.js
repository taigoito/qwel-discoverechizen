/**
 * Render Items
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 */

export default class RenderItems {
  constructor(url) {
    this._list = document.getElementById('facilityList');
    this._template = document.getElementById('facilityTemplate');
    if(!this._list || !this._template) return

    this._init(url);
  }

  async _init(url) {
    const res = await fetch(`${url}php/api.php?method=fetch&target=facilities`);
    const facilities = await res.json();

    this._renderItems(facilities);
  }

  _renderItems(items) {
    const prefixs = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');

    items.forEach((item, i) => {
      const clone = document.importNode(this._template.content, true);

      const img = clone.querySelector('img');
      img.src = `${img.src}thumb_stay${('00' + i).slice(-2)}.jpg`;
      
      const heading = clone.querySelector('h5');
      if (i === 3 || i === 13) {
        heading.innerHTML = `${prefixs[i]}／${item.fullname}<span class="lp__span --area">[${item.area}地区]</span>`;
      } else {
        heading.innerHTML = `${prefixs[i]}／${item.fullname}<br><span class="lp__span --area">[${item.area}地区]</span>`;
      }

      const content1 = clone.querySelector('p:nth-of-type(1)');
      content1.textContent = item.message;

      const content2 = clone.querySelector('p:nth-of-type(2)');
      content2.innerHTML = `<span class="lp__span --tel">${item.tel}</span><span class="lp__span --capacity">${item.capacity} 収容</span>`;

      this._list.appendChild(clone);
    });
  }
}
