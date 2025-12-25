/**
 * AIWU Theme Main JavaScript
 *
 * @package AIWU_Theme
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initVideoPlayer();
        initCodeTabs();
        initFaqAccordion();
        initSmoothScroll();
        initNavbarScroll();
    });

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const toggle = document.getElementById('mobileMenuToggle');
        const menu = document.getElementById('mobileMenu');
        const menuIcon = toggle ? toggle.querySelector('.menu-icon') : null;
        const closeIcon = toggle ? toggle.querySelector('.close-icon') : null;

        if (!toggle || !menu) return;

        toggle.addEventListener('click', function() {
            const isOpen = !menu.classList.contains('hidden');

            if (isOpen) {
                menu.classList.add('hidden');
                if (menuIcon) menuIcon.classList.remove('hidden');
                if (closeIcon) closeIcon.classList.add('hidden');
            } else {
                menu.classList.remove('hidden');
                if (menuIcon) menuIcon.classList.add('hidden');
                if (closeIcon) closeIcon.classList.remove('hidden');
            }
        });

        // Close menu when clicking on a link
        const menuLinks = menu.querySelectorAll('a');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                menu.classList.add('hidden');
                if (menuIcon) menuIcon.classList.remove('hidden');
                if (closeIcon) closeIcon.classList.add('hidden');
            });
        });
    }

    /**
     * Video Player (YouTube Embed)
     */
    function initVideoPlayer() {
        const container = document.getElementById('videoContainer');
        const playButton = document.getElementById('playButton');
        const thumbnail = document.getElementById('videoThumbnail');

        if (!container || !playButton) return;

        const youtubeId = container.dataset.youtubeId;
        if (!youtubeId) return;

        playButton.addEventListener('click', function(e) {
            e.stopPropagation();
            embedVideo(container, youtubeId);
        });

        container.addEventListener('click', function() {
            embedVideo(container, youtubeId);
        });
    }

    function embedVideo(container, youtubeId) {
        const iframe = document.createElement('iframe');
        iframe.src = 'https://www.youtube.com/embed/' + youtubeId + '?autoplay=1&rel=0';
        iframe.title = 'AIWU Plugin Demo';
        iframe.className = 'video-iframe';
        iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        iframe.allowFullscreen = true;

        container.innerHTML = '';
        container.appendChild(iframe);
        container.style.cursor = 'default';
    }

    /**
     * Code Tabs (API Section)
     */
    function initCodeTabs() {
        const tabs = document.querySelectorAll('.code-tab');
        const codeExamples = document.querySelectorAll('.code-example');

        if (tabs.length === 0) return;

        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                const targetTab = this.dataset.tab;

                // Update active tab
                tabs.forEach(function(t) {
                    t.classList.remove('active');
                });
                this.classList.add('active');

                // Show corresponding code
                codeExamples.forEach(function(example) {
                    if (example.dataset.tab === targetTab) {
                        example.classList.add('active');
                    } else {
                        example.classList.remove('active');
                    }
                });
            });
        });
    }

    /**
     * FAQ Accordion
     */
    function initFaqAccordion() {
        const faqItems = document.querySelectorAll('.faq-item');

        if (faqItems.length === 0) return;

        faqItems.forEach(function(item) {
            const question = item.querySelector('.faq-question');

            if (!question) return;

            question.addEventListener('click', function() {
                const isActive = item.classList.contains('active');

                // Close all items
                faqItems.forEach(function(faq) {
                    faq.classList.remove('active');
                    const btn = faq.querySelector('.faq-question');
                    if (btn) btn.setAttribute('aria-expanded', 'false');
                });

                // Open clicked item if it wasn't active
                if (!isActive) {
                    item.classList.add('active');
                    question.setAttribute('aria-expanded', 'true');
                }
            });
        });
    }

    /**
     * Smooth Scroll for anchor links
     */
    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');

        links.forEach(function(link) {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                if (href === '#') return;

                const target = document.querySelector(href);
                if (!target) return;

                e.preventDefault();

                const navbarHeight = 100; // Account for fixed navbar
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            });
        });
    }

    /**
     * Navbar scroll effect
     */
    function initNavbarScroll() {
        const navbar = document.getElementById('navbar');
        if (!navbar) return;

        let lastScrollY = window.scrollY;
        let ticking = false;

        function updateNavbar() {
            const scrollY = window.scrollY;

            if (scrollY > 100) {
                navbar.style.transform = 'translateY(0)';
            }

            lastScrollY = scrollY;
            ticking = false;
        }

        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(updateNavbar);
                ticking = true;
            }
        });
    }

    /**
     * Intersection Observer for animations
     */
    function initScrollAnimations() {
        if (!('IntersectionObserver' in window)) return;

        const animatedElements = document.querySelectorAll('.animate-on-scroll');

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(function(el) {
            observer.observe(el);
        });
    }

})();
