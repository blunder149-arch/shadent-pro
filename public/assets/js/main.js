/* AgroNet Solutions — Main JavaScript */

document.addEventListener('DOMContentLoaded', function () {

    /* ── Preloader ────────────────────────────────── */
    const preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener('load', function () {
            setTimeout(function () {
                preloader.classList.add('fade-out');
                setTimeout(function () { preloader.style.display = 'none'; }, 500);
            }, 400);
        });
    }

    /* ── Sticky Header ────────────────────────────── */
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 60);
        });
    }

    /* ── Back to Top ──────────────────────────────── */
    const backBtn = document.getElementById('back-to-top');
    if (backBtn) {
        window.addEventListener('scroll', function () {
            backBtn.classList.toggle('visible', window.scrollY > 400);
        });
        backBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ── Mobile Menu ──────────────────────────────── */
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileClose = document.querySelector('.mobile-menu-close');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function () {
            mobileMenu.classList.add('open');
            document.body.style.overflow = 'hidden';
        });
    }
    if (mobileClose && mobileMenu) {
        mobileClose.addEventListener('click', function () {
            mobileMenu.classList.remove('open');
            document.body.style.overflow = '';
        });
    }

    const mobileLinks = document.querySelectorAll('.mobile-nav a');
    mobileLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            if (mobileMenu) {
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            }
        });
    });

    /* ── Hero Swiper ──────────────────────────────── */
    if (document.querySelector('.swiper-hero')) {
        new Swiper('.swiper-hero', {
            loop: true,
            speed: 900,
            autoplay: { delay: 5500, disableOnInteraction: false },
            effect: 'fade',
            fadeEffect: { crossFade: true },
            pagination: { el: '.swiper-pagination', clickable: true },
        });
    }

    /* ── Products Swiper ──────────────────────────── */
    if (document.querySelector('.swiper-products')) {
        new Swiper('.swiper-products', {
            loop: false,
            speed: 700,
            slidesPerView: 1,
            spaceBetween: 24,
            navigation: {
                nextEl: '.prod-next',
                prevEl: '.prod-prev',
            },
            pagination: { el: '.swiper-products-pagination', clickable: true },
            breakpoints: {
                600:  { slidesPerView: 2 },
                900:  { slidesPerView: 3 },
            },
        });
    }

    /* ── Testimonials Swiper ──────────────────────── */
    if (document.querySelector('.swiper-testimonials')) {
        new Swiper('.swiper-testimonials', {
            loop: true,
            speed: 800,
            autoplay: { delay: 6000, disableOnInteraction: false },
            slidesPerView: 1,
            spaceBetween: 24,
            pagination: { el: '.swiper-testimonials-pagination', clickable: true },
            breakpoints: {
                768: { slidesPerView: 2 },
            },
        });
    }

    /* ── Testimonials Custom Swiper ───────────────── */
    if (document.querySelector('.swiper-testimonials-custom')) {
        new Swiper('.swiper-testimonials-custom', {
            loop: true,
            speed: 800,
            autoplay: { delay: 5000, disableOnInteraction: false },
            slidesPerView: 1,
            spaceBetween: 24,
            navigation: {
                nextEl: '.test-next',
                prevEl: '.test-prev',
            },
            pagination: { el: '.testimonials-pagination', clickable: true },
        });
    }

    /* ── AOS (scroll animations) ──────────────────── */
    function initAOS() {
        const elements = document.querySelectorAll('[data-aos]');
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const delay = entry.target.getAttribute('data-aos-delay') || 0;
                    setTimeout(function () {
                        entry.target.classList.add('aos-animate');
                    }, parseInt(delay));
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        elements.forEach(function (el) { observer.observe(el); });
    }
    initAOS();

    /* ── Counter Animation ────────────────────────── */
    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-target'));
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = 1800;
        const step = target / (duration / 16);
        let current = 0;
        const timer = setInterval(function () {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.textContent = Math.floor(current) + suffix;
        }, 16);
    }

    const counters = document.querySelectorAll('.counter-number');
    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(function (c) { counterObserver.observe(c); });
    }

    /* ── Product Category Filter ──────────────────── */
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterBtns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');
        });
    });

    /* ── Active Nav Link & Scrollspy ──────────────── */
    const navLinks = document.querySelectorAll('.main-nav a, .mobile-nav a');
    const categoriesSection = document.getElementById('categories');
    const gallerySection = document.getElementById('gallery');
    const currentPath = window.location.pathname;

    function updateActiveNavLink() {
        // If we are on an inner page, highlight based on path matching
        if (!categoriesSection && !gallerySection) {
            navLinks.forEach(function (link) {
                const href = link.getAttribute('href');
                if (href === currentPath || (currentPath.startsWith(href) && href !== '/')) {
                    link.classList.add('active');
                }
            });
            return;
        }

        // Homepage Scrollspy
        const scrollPos = window.scrollY + 140; // Offset for header

        let activeSection = 'hero';

        if (gallerySection && scrollPos >= gallerySection.offsetTop) {
            activeSection = 'gallery';
        } else if (categoriesSection && scrollPos >= categoriesSection.offsetTop) {
            activeSection = 'categories';
        }

        navLinks.forEach(function (link) {
            const href = link.getAttribute('href') || '';
            link.classList.remove('active');

            if (activeSection === 'hero') {
                if (link.textContent.trim().toLowerCase() === 'home') {
                    link.classList.add('active');
                }
            } else if (activeSection === 'categories') {
                if (href.includes('#categories')) {
                    link.classList.add('active');
                }
            } else if (activeSection === 'gallery') {
                if (href.includes('#gallery')) {
                    link.classList.add('active');
                }
            }
        });
    }

    // Initialize Scrollspy listeners
    if (categoriesSection || gallerySection) {
        window.addEventListener('scroll', updateActiveNavLink);
        window.addEventListener('load', updateActiveNavLink);
        window.addEventListener('hashchange', updateActiveNavLink);
    } else {
        updateActiveNavLink();
    }

    /* ── Smooth image lazy load ───────────────────── */
    document.querySelectorAll('img[data-src]').forEach(function (img) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.src = entry.target.getAttribute('data-src');
                    entry.target.removeAttribute('data-src');
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(img);
    });

    /* ── Gallery Lightbox ─────────────────────────── */
    const galleryItems = document.querySelectorAll('.gallery-item-mock');
    const lightbox = document.getElementById('galleryLightbox');
    const lightboxImg = document.getElementById('lightboxImage');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const lightboxClose = document.querySelector('.lightbox-close');

    if (galleryItems.length > 0 && lightbox && lightboxImg) {
        galleryItems.forEach(function (item) {
            item.addEventListener('click', function () {
                const img = item.querySelector('img');
                if (img) {
                    lightboxImg.src = img.src;
                    lightboxImg.alt = img.alt || '';
                    if (lightboxCaption) {
                        lightboxCaption.textContent = img.alt || '';
                    }
                    lightbox.classList.add('open');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        if (lightboxClose) {
            lightboxClose.addEventListener('click', function () {
                lightbox.classList.remove('open');
                document.body.style.overflow = '';
            });
        }

        // Close on background click
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                lightbox.classList.remove('open');
                document.body.style.overflow = '';
            }
        });

        // Close on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && lightbox.classList.contains('open')) {
                lightbox.classList.remove('open');
                document.body.style.overflow = '';
            }
        });
    }
});
