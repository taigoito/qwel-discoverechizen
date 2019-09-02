// Photo gallery

export default class PhotoGallery {
  constructor(options = {}) {
    this._url = options.url || './php/instagram-api.php';
    this._len = options.len || 12;
    this._container = document.querySelector('.photo-gallery');
    this._template = document.getElementById('photo-gallery-template');
  }

  async _fetchJSON(url) {
    const resp = await fetch(url, { method: "POST" });
    return resp.json();
  }

  async init() {
    const data = await this._fetchJSON(this._url);
    this._renderTemplate(data.data);
  }

  _renderTemplate(data) {
    const len = Math.min(data.length, this._len);
    for (let i = 0; i < len; i++) {
      const dt = data[i];
      const li = document.importNode(this._template.content, true);
      const a = li.querySelector('a');
      const href = dt.link;
      a.setAttribute('href', href);
      const img = li.querySelector('img');
      const src = dt.images.low_resolution.url;
      img.setAttribute('src', src);
      this._container.appendChild(li);
    }
  }
}
