<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'AgroNet Solutions — Leading manufacturer of HDPE shade nets, agricultural nets, greenhouse nets, and construction safety nets in India.')">
    <title>@yield('title', 'AgroNet Solutions') | Green Shade Net Manufacturer</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v=2">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    @yield('extra_css')
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-container">
            <div class="preloader-ring"></div>
            <div class="preloader-logo" aria-hidden="true">
                <i class="fa-solid fa-leaf"></i>
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <button id="back-to-top" aria-label="Back to top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Mobile Menu -->
    <div class="mobile-menu" role="dialog" aria-modal="true">
        <button class="mobile-menu-close" aria-label="Close menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <nav class="mobile-nav">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                <li><a href="{{ route('home') }}#categories">Industries</a></li>
                <li><a href="{{ route('home') }}#gallery">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Topbar -->
    <div class="topbar topbar--navy">
        <div class="container">
            <div class="topbar-inner">
                <div class="topbar-left">
                    <a href="https://maps.google.com" target="_blank">
                        <i class="fa-solid fa-location-dot"></i>
                        GIDC Industrial Estate, Kachigam, Daman - 396210
                    </a>
                    <a href="mailto:info@agronetsolutions.in">
                        <i class="fa-solid fa-envelope"></i>
                        info@agronetsolutions.in
                    </a>
                </div>
                <div class="topbar-right">
                    <a href="tel:+917923456789">
                        <i class="fa-solid fa-phone"></i>
                        +91 79 2345 6789
                    </a>
                    <div class="topbar-social">
                        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="site-header" role="banner">
        <div class="container">
            <div class="header-inner">
                <a href="{{ route('home') }}" class="site-logo">
                    <div class="logo-wrapper">
                        <i class="fa-solid fa-leaf logo-icon"></i>
                        <div class="logo-text-group">
                            <span class="logo-brand">AgroNet</span>
                            <span class="logo-sub">SOLUTIONS</span>
                        </div>
                    </div>
                </a>

                <nav class="main-nav" role="navigation" aria-label="Main navigation">
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                        <li class="has-dropdown">
                             <a href="{{ route('products.index') }}" class="{{ request()->routeIs('products.*') ? 'active' : '' }}">Products</a>
                            <ul class="dropdown-menu">
                                @foreach(\App\Models\Category::where('is_active', true)->orderBy('sort_order')->get() as $cat)
                                <li><a href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('home') }}#categories">Industries</a></li>
                        <li><a href="{{ route('home') }}#gallery">Gallery</a></li>
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>
                </nav>

                <div class="header-cta">
                    <a href="{{ route('contact') }}" class="btn-primary btn-quote-pulse">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Get Free Quote
                    </a>
                    <button class="hamburger" aria-label="Open menu">
                        <span></span><span></span><span></span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer" role="contentinfo">
        <div class="footer-accent-bar"></div>
        <div class="footer-top">
            <div class="container">
                <div class="footer-grid">
                    <div>
                        <div class="footer-logo-wrapper">
                            <i class="fa-solid fa-leaf footer-logo-icon"></i>
                            <div class="footer-logo-text-group">
                                <span class="footer-logo-brand">AgroNet</span>
                                <span class="footer-logo-sub">SOLUTIONS</span>
                            </div>
                        </div>
                        <p class="footer-about">
                            Leading manufacturer of premium quality shade nets, agricultural nets, greenhouse nets and industrial protection nets. Sourced from 100% virgin HDPE.
                        </p>
                        <div class="footer-social">
                            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div>
                        <h4 class="footer-widget-title">Quick Links</h4>
                        <div class="footer-links">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('about') }}">About Us</a>
                            <a href="{{ route('products.index') }}">Products</a>
                            <a href="{{ route('home') }}#categories">Industries</a>
                            <a href="{{ route('home') }}#gallery">Gallery</a>
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </div>
                    </div>
                    <div>
                        <h4 class="footer-widget-title">Our Products</h4>
                        <div class="footer-links">
                            @foreach(\App\Models\Category::where('is_active', true)->orderBy('sort_order')->take(5)->get() as $cat)
                            <a href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a>
                            @endforeach
                            <a href="{{ route('products.index') }}">All Products</a>
                        </div>
                    </div>
                    <div>
                        <h4 class="footer-widget-title">Contact Us</h4>
                        <div class="footer-contact-list">
                            <div class="footer-contact-item">
                                <i class="fa-solid fa-location-dot"></i>
                                <p>GIDC Industrial Estate,<br>Kachigam, Daman - 396210</p>
                            </div>
                            <div class="footer-contact-item">
                                <i class="fa-solid fa-envelope"></i>
                                <a href="mailto:info@agronetsolutions.in">info@agronetsolutions.in</a>
                            </div>
                            <div class="footer-contact-item">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+917923456789">+91 79 2345 6789</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-inner">
                    <p>© {{ date('Y') }} AgroNet Solutions. All rights reserved.</p>
                    <p><a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('extra_js')
</body>
</html>
