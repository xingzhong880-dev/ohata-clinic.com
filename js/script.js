/* ----------------------------------------
smooth scroll
---------------------------------------- */
// #で始まるリンクを取得
const jsSmoothScroll = document.querySelectorAll('a[href^="#"]');

// forで回してaddEventListenerする
for (let i = 0; i < jsSmoothScroll.length; i++){
  jsSmoothScroll[i].addEventListener('click', (e) => {
    e.preventDefault();
    // href属性の取得
    let href = jsSmoothScroll[i].getAttribute('href');
    let target = document.getElementById(href.replace('#', ''));
    const rect = target.getBoundingClientRect().top;
    const offset = window.pageYOffset -0;
    // 移動先のポジション取得
    const position = rect + offset;
    // window.scrollToでスクロール
    window.scrollTo({
      top: position,
      behavior: 'smooth',
    });
  });
}

/* ----------------------------------------
header
---------------------------------------- */
(function () {
    const header = document.querySelector('header');
    if (!header) return;

    function updateHeaderState() {
        if (window.scrollY > 0) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    }

    updateHeaderState();

    window.addEventListener('scroll', updateHeaderState, { passive: true });
})();

/* ----------------------------------------
ハンバーガーアイコン
---------------------------------------- */
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const nav = document.querySelector('.header__nav');
    const overlay = document.querySelector('.nav-overlay');
    const body = document.body;
    const dropdownCheckbox = document.getElementById('dropdown-toggle');

    if (!hamburger || !nav) return;

    function toggleMenu() {
        const isOpen = hamburger.classList.toggle('is-open');
        nav.classList.toggle('is-open', isOpen);
        if (overlay) overlay.classList.toggle('is-open', isOpen);
        body.classList.toggle('is-menu-open', isOpen);
        hamburger.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
        if (!isOpen && dropdownCheckbox) {
            dropdownCheckbox.checked = false;
        }
    }

    hamburger.addEventListener('click', toggleMenu);

    if (overlay) {
        overlay.addEventListener('click', toggleMenu);
    }

    nav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            if (hamburger.classList.contains('is-open')) {
                toggleMenu();
            }
        });
    });
});

/* ----------------------------------------
FAQ
---------------------------------------- */
document.querySelectorAll('.FAQ-question').forEach(function(question) {
    question.addEventListener('click', function() {
        const item = this.parentElement;
        const icon = this.querySelector('.FAQ-icon');
        
        item.classList.toggle('active');
        
        if (item.classList.contains('active')) {
            icon.textContent = 'ー';
        } else {
            icon.textContent = '＋';
        }
    });
});