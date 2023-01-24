/**
 * Drawer Menu
 * Author: Taigo Ito (https://qwel.design/)
 * Location: Fukui, Japan
 * @package Qwel-Two
 */

class DrawerMenu {
  
  constructor(options = {}) {
    // 設定
    this.darkMode = options.darkMode || false;

    // クローンする対象
    this._siteBrand = options.siteBrand || 
      document.querySelector('.gNav__siteBrand');
    this._primaryMenu = options.primaryMenu || 
      document.querySelector('.gNav__primaryMenu');
    this._socialMenu = options.socialMenu || 
      document.querySelector('.gNav__socialMenu');

    // 各要素生成
    // .drawer
    this._drawer = document.createElement('button');
    this._drawer.classList.add('drawer');
    if (this.darkMode) this._drawer.classList.add('--dark');

    // .drawer__navicon
    this._navicon = document.createElement('span');
    this._navicon.classList.add('drawer__navicon', 'responsiveColor');
    this._navicon.dataset.icon = 'ei-navicon';
    this._navicon.dataset.size = 'm';
    this._drawer.appendChild(this._navicon);

    // .drawer__close
    this._close = document.createElement('span');
    this._close.classList.add('drawer__close');
    this._close.dataset.icon = 'ei-close';
    this._close.dataset.size = 'm';
    this._drawer.appendChild(this._close);

    // .drawerMenu
    this._drawerMenu = document.createElement('div');
    this._drawerMenu.classList.add('drawerMenu');
    if (this.darkMode) this._drawerMenu.classList.add('--dark');

    // .drawerMenu__inner
    this._menu = document.createElement('div');
    this._menu.classList.add('drawerMenu__inner');
    this._drawerMenu.appendChild(this._menu);
    this._importMenu();

    // .drawerMenuOverlay
    this._overlay = document.createElement('div');
    this._overlay.classList.add('drawerMenuOverlay', '--collapse');

    // main要素に挿入
    const wrapper = document.querySelector('main');
    wrapper.appendChild(this._drawer);
    wrapper.appendChild(this._drawerMenu);
    wrapper.appendChild(this._overlay);

    // 状態
    this.isShown = false;

    // イベント登録
    this._handleEvents();

  }


  toggle() {
    // 状態から判別して、表示/非表示を切り替え
    if (this.isShown) this.hide();
    else this.show();

  }


  show() {
    // 表示
    if (!this.isShown) {
      this._transitionEnd(this._drawerMenu, () => {
        this._drawerMenu.classList.add('--show');
        this._drawer.classList.add('--active');
        this._menu.classList.remove('--collapse');
        this._overlay.classList.remove('--collapse');
      }).then(() => {
        this._menu.classList.add('--show');
      });
    }
    this.isShown = true;

  }

  hide() {
    // 非表示
    if (this.isShown) {
      this._transitionEnd(this._drawerMenu, () => {
        this._drawerMenu.classList.remove('--show');
        this._drawer.classList.remove('--active');
        this._menu.classList.remove('--show');
      }).then(() => {
        this._menu.classList.add('--collapse');
        this._overlay.classList.add('--collapse');
      });
    }
    this.isShown = false;

  }


  _importMenu() {
    // メニューアイテムをインポート
    if (this._siteBrand) {
      this._importSiteBrand(); // .drawerMenu__siteBrand
    }
    if (this._primaryMenu) {
      this._importPrimaryMenu(); // .drawerMenu__primaryMenu
    }
    if (this._socialMenu) {
      this._importSocialMenu(); // .drawerMenu__socialMenu
    }
  }


  _importSiteBrand() {
    // ブランドロゴ・タイトルをインポート
    const siteBrand = document.createElement('div');
    siteBrand.classList.add('drawerMenu__item', '--siteBrand');
    siteBrand.appendChild(this._siteBrand.cloneNode(true));
    this._menu.appendChild(siteBrand);

  }


  _importPrimaryMenu() {
    // プライマリメニューをインポート
    const primaryMenu = document.createElement('ul');
    primaryMenu.classList.add('drawerMenu__primaryMenu');
    
    // li要素を順次インポート
    const menuItems = this._primaryMenu.querySelectorAll('li');
    menuItems.forEach((menuItem) => {
      const primaryMenuItem = document.createElement('li');
      primaryMenuItem.classList.add('drawerMenu__item');
      primaryMenuItem.innerHTML = menuItem.innerHTML;
      primaryMenu.appendChild(primaryMenuItem);
    });
    this._menu.appendChild(primaryMenu);

  }


  _importSocialMenu() {
    // ソーシャルメニューをインポート
    const socialMenu = document.createElement('ul');
    socialMenu.classList.add('drawerMenu__socialMenu');
    
    // li要素を順次インポート
    const menuItems = this._socialMenu.querySelectorAll('li');
    menuItems.forEach((menuItem) => {
      const socialMenuItem = document.createElement('li');
      socialMenuItem.classList.add('drawerMenu__item', '--social');
      socialMenuItem.innerHTML = menuItem.innerHTML;
      socialMenu.appendChild(socialMenuItem);
    });
    this._menu.appendChild(socialMenu);

  }


  _handleEvents() {
    const myTouch = 'ontouchend' in document && window.innerWidth < 1024 ? 'touchend' : 'click';

    // ドロワーのイベント登録
    this._drawer.addEventListener(myTouch, (event) => {
      event.preventDefault();
      this.toggle();
    });

    // オーバーレイのイベント登録
    this._overlay.addEventListener(myTouch, () => {
      this.hide();
    });

    // スクロール時のイベント登録
    window.addEventListener('scroll', () => {
      this._windowScrollHandler();
    });

  }


  _windowScrollHandler() {
    // スクロール時にメニューを非表示
    if (this.isShown) this.hide();

  }


  _transitionEnd(elem, func) {
    // CSS遷移の完了を監視
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
