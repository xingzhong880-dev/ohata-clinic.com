/* ----------------------------------------
smooth scroll
---------------------------------------- */
const jsSmoothScroll = document.querySelectorAll('a[href^="#"]');
 
for (let i = 0; i < jsSmoothScroll.length; i++){
  jsSmoothScroll[i].addEventListener('click', (e) => {
    e.preventDefault();
    let href = jsSmoothScroll[i].getAttribute('href');
    let target = document.getElementById(href.replace('#', ''));
    const rect = target.getBoundingClientRect().top;
    const offset = window.pageYOffset -0;
    const position = rect + offset;
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
    const dropdownItem = document.querySelector('.header__nav-item--dropdown');
    const dropdownLabel = document.querySelector('.dropdown-link-sp');
 
    if (!hamburger || !nav) return;
 
    function closeDropdown() {
        if (dropdownItem) dropdownItem.classList.remove('is-open');
        if (dropdownCheckbox) dropdownCheckbox.checked = false;
    }
 
    function toggleMenu() {
        const isOpen = hamburger.classList.toggle('is-open');
        nav.classList.toggle('is-open', isOpen);
        if (overlay) overlay.classList.toggle('is-open', isOpen);
        body.classList.toggle('is-menu-open', isOpen);
        hamburger.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
        if (!isOpen) {
            closeDropdown();
        }
    }
 
    if (dropdownItem && dropdownLabel) {
        dropdownLabel.addEventListener('click', function (e) {
            e.preventDefault();
            const isOpen = dropdownItem.classList.toggle('is-open');
            if (dropdownCheckbox) dropdownCheckbox.checked = isOpen;
        });
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
追従ボタン
---------------------------------------- */
(function () {
    const toTopBtn = document.querySelector('.floating-btn-totop');
    if (!toTopBtn) return;
 
    toTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth',
        });
    });
})();
 
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

/* ----------------------------------------
FAQ (block-faq.php用)
---------------------------------------- */
document.querySelectorAll('.faq-question').forEach(function(question) {
    question.addEventListener('click', function() {
        const item = this.closest('.faq-item');
        const icon = this.querySelector('.faq-icon');

        item.classList.toggle('active');

        if (item.classList.contains('active')) {
            icon.textContent = 'ー';
        } else {
            icon.textContent = '＋';
        }
    });
});

/* ----------------------------------------
トグル
---------------------------------------- */
document.querySelectorAll('.toggle-title').forEach(function(question) {
    question.addEventListener('click', function() {
        const item = this.closest('.toggle-item');
        const icon = this.querySelector('.toggle-icon');

        item.classList.toggle('active');

        if (item.classList.contains('active')) {
            icon.textContent = 'ー';
        } else {
            icon.textContent = '＋';
        }
    });
});

/* ----------------------------------------
監修者トグル
---------------------------------------- */
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.supervisor-toggle-title').forEach(function(question) {
        question.addEventListener('click', function() {
            const item = this.closest('.supervisor-toggle-item');
            const icon = this.querySelector('.supervisor-toggle-icon');

            item.classList.toggle('active');

            if (item.classList.contains('active')) {
                icon.textContent = 'ー';
            } else {
                icon.textContent = '＋';
            }
        });
    });
});