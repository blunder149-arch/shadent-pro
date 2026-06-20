@extends('layouts.frontend')

@section('title', 'AgroNet Solutions — Premium Shade Net & Agricultural Net Manufacturer')
@section('meta_description', 'AgroNet Solutions manufactures high-quality HDPE shade nets, agricultural nets, greenhouse nets, and construction safety nets. 20+ years of manufacturing excellence.')

@section('content')

{{-- ══ HERO SECTION (Mockup Split Grid) ════════════════════════════ --}}
<section class="hero-section-mock" aria-label="Hero">
    <video class="hero-video-loop" autoplay muted loop playsinline>
        <source src="{{ asset('assets/img/hero/video.mp4') }}" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-mock-grid">
            {{-- Left Column: Text & CTA --}}
            <div class="hero-mock-left" data-aos="fade-right">
                <span class="hero-tag">Established Since 2004</span>
                <h1 class="hero-title">Premium Shade Net & <br><span>Agricultural Net</span><br> Manufacturer</h1>
                <p class="hero-text">
                    Providing high-quality agricultural, greenhouse, industrial and protective net solutions across India.
                </p>
                <div class="hero-buttons">
                    <a href="{{ route('contact') }}" class="btn-primary">
                        <i class="fa-solid fa-magnifying-glass"></i> Get Free Quote
                    </a>
                    <a href="{{ route('products.index') }}" class="btn-outline">
                        View Products <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            {{-- Right Column: Stats Card --}}
            <div class="hero-mock-right" data-aos="fade-left" data-aos-delay="150">
                <div class="hero-stats-card glass-card">
                    <div class="hero-stat-row">
                        <div class="hero-stat-icon"><i class="fa-solid fa-medal"></i></div>
                        <div class="hero-stat-details">
                            <h3>10+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                    <div class="hero-stat-row">
                        <div class="hero-stat-icon"><i class="fa-solid fa-users"></i></div>
                        <div class="hero-stat-details">
                            <h3>500+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="hero-stat-row">
                        <div class="hero-stat-icon"><i class="fa-solid fa-truck"></i></div>
                        <div class="hero-stat-details">
                            <h3>PAN India</h3>
                            <p>Delivery</p>
                        </div>
                    </div>
                    <div class="hero-stat-row">
                        <div class="hero-stat-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div class="hero-stat-details">
                            <h3>ISO</h3>
                            <p>Quality Standards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══ TRUSTED PARTNERS LOGOBAR ═══════════════════════════════════ --}}
<section class="partners-logobar" aria-label="Trusted Partners">
    <div class="container">
        <p class="partners-title">Trusted By Farmers, Greenhouses & Industries Across India</p>
    </div>
    <div class="logo-marquee-wrapper">
        <div class="logo-marquee-track">
            <!-- Original Set (12 Unique Industry Partners) -->
            <div class="partner-logo"><span>ITC Limited</span></div>
            <div class="partner-logo"><span>TAJ Hotels</span></div>
            <div class="partner-logo"><span>adani</span><small>Agri Fresh</small></div>
            <div class="partner-logo"><span>Reliance</span><small>Foundation</small></div>
            <div class="partner-logo"><span>Mahindra</span><small>Rise</small></div>
            <div class="partner-logo"><span>Godrej</span><small>Agrovet</small></div>
            <div class="partner-logo"><span>TATA</span><small>Rallis</small></div>
            <div class="partner-logo"><span>UPL</span><small>Limited</small></div>
            <div class="partner-logo"><span>PI</span><small>Industries</small></div>
            <div class="partner-logo"><span>IFFCO</span></div>
            <div class="partner-logo"><span>Bayer</span><small>CropScience</small></div>
            <div class="partner-logo"><span>Netafim</span><small>Irrigation</small></div>
            
            <!-- Duplicated Set for Seamless Infinite Loop -->
            <div class="partner-logo"><span>ITC Limited</span></div>
            <div class="partner-logo"><span>TAJ Hotels</span></div>
            <div class="partner-logo"><span>adani</span><small>Agri Fresh</small></div>
            <div class="partner-logo"><span>Reliance</span><small>Foundation</small></div>
            <div class="partner-logo"><span>Mahindra</span><small>Rise</small></div>
            <div class="partner-logo"><span>Godrej</span><small>Agrovet</small></div>
            <div class="partner-logo"><span>TATA</span><small>Rallis</small></div>
            <div class="partner-logo"><span>UPL</span><small>Limited</small></div>
            <div class="partner-logo"><span>PI</span><small>Industries</small></div>
            <div class="partner-logo"><span>IFFCO</span></div>
            <div class="partner-logo"><span>Bayer</span><small>CropScience</small></div>
            <div class="partner-logo"><span>Netafim</span><small>Irrigation</small></div>
        </div>
    </div>
</section>

{{-- ══ ABOUT US SECTION ══════════════════════════════════════════ --}}
<section class="about-section pt-100 pb-100" aria-label="About AgroNet Solutions">
    <div class="container">
        <div class="about-grid-mock">
            {{-- Left Side: Image with overlap badge --}}
            <div class="about-image-wrapper-mock" data-aos="fade-right">
                <div class="about-image-main-mock">
                    <img src="{{ asset('assets/img/about/factory.png') }}" alt="AgroNet Solutions Weaving Facility">
                </div>
                <div class="about-badge-mock">
                    <h3>10+</h3>
                    <p>Years of<br>Excellence</p>
                </div>
            </div>

            {{-- Right Side: Content & Checklist --}}
            <div class="about-content-mock" data-aos="fade-left" data-aos-delay="100">
                <span class="section-tag-mock">ABOUT US</span>
                <h2 class="section-title-mock">India's Trusted Net<br>Manufacturing Partner</h2>
                <p class="section-desc-mock">
                    AgroNet Solutions specializes in manufacturing premium quality shade nets, greenhouse nets, bird nets, insect nets and industrial protection nets. Our products are UV stabilized, durable and designed to deliver maximum protection and performance.
                </p>

                <div class="about-checklist-mock">
                    <div class="about-check-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Premium Quality Raw Material</span>
                    </div>
                    <div class="about-check-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Advanced Manufacturing</span>
                    </div>
                    <div class="about-check-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>UV Stabilized & Long Life</span>
                    </div>
                    <div class="about-check-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Bulk Supply & Timely Delivery</span>
                    </div>
                </div>

                <a href="{{ route('about') }}" class="btn-primary-mock">
                    Know More About Us <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ══ OUR PRODUCTS SECTION ══════════════════════════════════════ --}}
<section id="categories" class="categories-section-mock pt-100 pb-100" aria-label="Our Products">
    <div class="container">
        <div class="section-header-mock text-center" data-aos="fade-up">
            <span class="section-tag-mock">OUR PRODUCTS</span>
            <h2 class="section-title-mock">Wide Range of Net Solutions</h2>
        </div>

        {{-- Product slider / grid --}}
        <div class="products-slider-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper swiper-products">
                <div class="swiper-wrapper">
                    @forelse($categories as $category)
                    <div class="swiper-slide">
                        <div class="category-card-mock">
                            <div class="category-card-thumb-mock">
                                @if($category->slug === 'agriculture-shade-net')
                                <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $category->name }}">
                                @elseif($category->slug === 'greenhouse-net')
                                <img src="{{ asset('assets/img/hero/slide-2.png') }}" alt="{{ $category->name }}">
                                @elseif($category->slug === 'bird-protection-net')
                                <img src="{{ asset('assets/img/hero/slide-3.png') }}" alt="{{ $category->name }}">
                                @else
                                <img src="{{ asset('assets/img/products/shade-net.png') }}" alt="{{ $category->name }}">
                                @endif
                                <div class="category-card-overlay-mock"></div>
                            </div>
                            <div class="category-card-body-mock">
                                <h3>{{ $category->name }}</h3>
                                <p>{{ Str::limit($category->description, 70) }}</p>
                                <a href="{{ route('category.show', $category->slug) }}" class="category-card-link-mock">
                                    View Details <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="swiper-slide">
                        <p style="text-align: center; color: var(--text-muted);">No categories available.</p>
                    </div>
                    @endforelse
                </div>
            </div>
            
            {{-- Navigation Buttons --}}
            <button class="swiper-button-prev-custom-mock prod-prev" aria-label="Previous">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="swiper-button-next-custom-mock prod-next" aria-label="Next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

{{-- ══ WHY CHOOSE US SECTION ══════════════════════════════════════ --}}
<section class="why-section-mock pt-100 pb-100" aria-label="Why Choose Us">
    <div class="container">
        <div class="section-header-mock text-center" data-aos="fade-up">
            <span class="section-tag-mock">WHY CHOOSE US?</span>
            <h2 class="section-title-mock">Why Choose AgroNet Solutions</h2>
            <p style="margin: 0 auto 50px; color: var(--text-muted); font-size: 15px; max-width: 600px;">We are an ISO 9001:2015 Quality Certified Company, committed to excellence.</p>
        </div>

        <div class="why-choose-layout">
            {{-- Left column: 2 cards --}}
            <div class="why-choose-col">
                <div class="why-card-detailed" data-aos="fade-right" data-aos-delay="100">
                    <h4><i class="fa-solid fa-circle-check"></i> Innovative Crop Protection</h4>
                    <p>
                        UV-stabilized green shade nets protect crops from sunlight, dust, and pests, improving plant health, boosting growth, productivity, and higher yields.
                    </p>
                </div>
                <div class="why-card-detailed" data-aos="fade-right" data-aos-delay="250">
                    <h4><i class="fa-solid fa-circle-check"></i> Quality You Can Trust</h4>
                    <p>
                        Made from premium HDPE using advanced German technology, our nets provide durability, uniform shading, superior strength, and reliable long-term protection.
                    </p>
                </div>
            </div>

            {{-- Center column: Image --}}
            <div class="why-choose-center-img" data-aos="zoom-in" data-aos-delay="150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" width="100%" height="340" style="display: block; margin: 0 auto;">
                    <!-- Definitions for gradients and patterns -->
                    <defs>
                        <!-- Grid pattern for the shade net -->
                        <pattern id="shadeNetPattern" x="0" y="0" width="12" height="12" patternUnits="userSpaceOnUse">
                            <path d="M 12 0 L 0 0 0 12" fill="none" stroke="#34C77B" stroke-width="1" stroke-opacity="0.3"/>
                            <path d="M 0 12 L 12 0" fill="none" stroke="#1F7A4D" stroke-width="0.8" stroke-opacity="0.25"/>
                        </pattern>
                        <!-- Linear gradients for structures -->
                        <linearGradient id="metalGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#E5E7E0" />
                            <stop offset="100%" stop-color="#A1A8B3" />
                        </linearGradient>
                        <linearGradient id="netGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#1F7A4D" stop-opacity="0.8" />
                            <stop offset="100%" stop-color="#1F7A4D" stop-opacity="0.3" />
                        </linearGradient>
                        <linearGradient id="groundGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#F7F8F5" />
                            <stop offset="100%" stop-color="#E5E7E0" />
                        </linearGradient>
                    </defs>

                    <!-- Ground / Base shadow -->
                    <ellipse cx="200" cy="330" rx="160" ry="20" fill="#E5E7E0" fill-opacity="0.6"/>
                    <rect x="50" y="320" width="300" height="10" rx="5" fill="url(#groundGrad)" />

                    <!-- Greenhouse Structure (Arches & Pillars) -->
                    <!-- Back pillars -->
                    <line x1="100" y1="320" x2="100" y2="180" stroke="url(#metalGrad)" stroke-width="4" />
                    <line x1="200" y1="320" x2="200" y2="140" stroke="url(#metalGrad)" stroke-width="4" />
                    <line x1="300" y1="320" x2="300" y2="180" stroke="url(#metalGrad)" stroke-width="4" />

                    <!-- Arch Paths -->
                    <path d="M 80 320 C 80 120, 320 120, 320 320" fill="none" stroke="url(#metalGrad)" stroke-width="6" />
                    <path d="M 110 320 C 110 140, 290 140, 290 320" fill="none" stroke="url(#metalGrad)" stroke-width="3" stroke-opacity="0.7" />
                    <path d="M 140 320 C 140 160, 260 160, 260 320" fill="none" stroke="url(#metalGrad)" stroke-width="3" stroke-opacity="0.7" />

                    <!-- Purlins (Horizontal connectors) -->
                    <path d="M 86 260 Q 200 180 314 260" fill="none" stroke="url(#metalGrad)" stroke-width="4" />
                    <path d="M 120 190 Q 200 150 280 190" fill="none" stroke="url(#metalGrad)" stroke-width="4" />

                    <!-- Crop Rows (Interior Plants) -->
                    <!-- Left row -->
                    <path d="M 120 320 Q 125 290 120 270 Q 115 285 110 280" fill="none" stroke="#34C77B" stroke-width="3" stroke-linecap="round" />
                    <path d="M 120 290 Q 130 275 135 280" fill="none" stroke="#1F7A4D" stroke-width="2.5" stroke-linecap="round" />
                    <path d="M 150 320 Q 155 280 150 260 Q 140 275 142 270" fill="none" stroke="#34C77B" stroke-width="3" stroke-linecap="round" />
                    <path d="M 150 285 Q 165 270 160 272" fill="none" stroke="#1F7A4D" stroke-width="2.5" stroke-linecap="round" />

                    <!-- Right row -->
                    <path d="M 280 320 Q 275 290 280 270 Q 285 285 290 280" fill="none" stroke="#34C77B" stroke-width="3" stroke-linecap="round" />
                    <path d="M 280 290 Q 270 275 265 280" fill="none" stroke="#1F7A4D" stroke-width="2.5" stroke-linecap="round" />
                    <path d="M 250 320 Q 245 280 250 260 Q 260 275 258 270" fill="none" stroke="#34C77B" stroke-width="3" stroke-linecap="round" />
                    <path d="M 250 285 Q 235 270 240 272" fill="none" stroke="#1F7A4D" stroke-width="2.5" stroke-linecap="round" />

                    <!-- Center Irrigation / Path line -->
                    <ellipse cx="200" cy="320" rx="30" ry="6" fill="#A1A8B3" />

                    <!-- Shade Net Canopy (Draped over the top arch) -->
                    <path d="M 80 320 C 80 120, 320 120, 320 320" fill="url(#netGrad)" />
                    <path d="M 80 320 C 80 120, 320 120, 320 320" fill="url(#shadeNetPattern)" />

                    <!-- Outer Net border/edge highlights -->
                    <path d="M 80 320 C 80 120, 320 120, 320 320" fill="none" stroke="#1F7A4D" stroke-width="4" stroke-linecap="round" />
                    <path d="M 83 322 C 83 125, 317 125, 317 322" fill="none" stroke="#34C77B" stroke-width="2" stroke-dasharray="6,4" />

                    <!-- Sunlight rays shining on the net -->
                    <g stroke="#F7F8F5" stroke-width="2" stroke-linecap="round" opacity="0.6">
                        <line x1="50" y1="50" x2="80" y2="90" />
                        <line x1="90" y1="30" x2="115" y2="70" />
                        <line x1="140" y1="20" x2="155" y2="55" />
                        <line x1="190" y1="15" x2="195" y2="45" />
                    </g>

                    <!-- Safe shield icon overlay representing safety/quality -->
                    <g transform="translate(300, 270) scale(0.8)">
                        <circle cx="25" cy="25" r="28" fill="#FFFFFF" stroke="#E5E7E0" stroke-width="2" />
                        <path d="M 25 12 L 37 17 L 37 27 C 37 35 32 41 25 44 C 18 41 13 35 13 27 L 13 17 Z" fill="#1F7A4D" />
                        <path d="M 25 15 L 34 19 L 34 27 C 34 33 30 38 25 41 C 20 38 16 33 16 27 L 16 19 Z" fill="#34C77B" />
                        <path d="M 21 26 L 24 29 L 30 22" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
            </div>

            {{-- Right column: 2 cards --}}
            <div class="why-choose-col">
                <div class="why-card-detailed" data-aos="fade-left" data-aos-delay="100">
                    <h4><i class="fa-solid fa-circle-check"></i> Versatile & Custom Solutions</h4>
                    <p>
                        Ideal for agriculture, horticulture, construction, and decorative purposes, our shade nets come in multiple sizes with customizable shading options.
                    </p>
                </div>
                <div class="why-card-detailed" data-aos="fade-left" data-aos-delay="250">
                    <h4><i class="fa-solid fa-circle-check"></i> Customer-Centric Approach</h4>
                    <p>
                        Focused on innovation, service, and customer satisfaction, we deliver dependable shade solutions protecting crops, projects, and investments across India.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══ GREEN ACHIEVEMENTS STATS BAR ══════════════════════════════ --}}
<section class="achievements-bar-mock" aria-label="Achievements Stats">
    <div class="container">
        <div class="achievements-grid-mock">
            <div class="achievement-item-mock">
                <i class="fa-solid fa-award"></i>
                <div class="achievement-text-mock">
                    <h3 class="counter-number" data-target="10" data-suffix="+">0</h3>
                    <p>Years Experience</p>
                </div>
            </div>
            <div class="achievement-item-mock">
                <i class="fa-solid fa-circle-check"></i>
                <div class="achievement-text-mock">
                    <h3 class="counter-number" data-target="500" data-suffix="+">0</h3>
                    <p>Projects Completed</p>
                </div>
            </div>
            <div class="achievement-item-mock">
                <i class="fa-solid fa-users"></i>
                <div class="achievement-text-mock">
                    <h3 class="counter-number" data-target="1000" data-suffix="+">0</h3>
                    <p>Happy Customers</p>
                </div>
            </div>
            <div class="achievement-item-mock">
                <i class="fa-solid fa-layer-group"></i>
                <div class="achievement-text-mock">
                    <h3 class="counter-number" data-target="25" data-suffix="+">0</h3>
                    <p>Products Range</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ══ OUR GALLERY SECTION ════════════════════════════════════════ --}}
<section id="gallery" class="gallery-section-mock pt-100 pb-100" aria-label="Our Gallery">
    <div class="container">
        <div class="section-header-mock text-center" data-aos="fade-up">
            <span class="section-tag-mock">OUR GALLERY</span>
        </div>
        <div class="gallery-grid-mock" data-aos="fade-up" data-aos-delay="100">
            <div class="gallery-item-mock"><img src="{{ asset('assets/img/hero/slide-1.png') }}" alt="Shade Net Field View"></div>
            <div class="gallery-item-mock"><img src="{{ asset('assets/img/hero/slide-2.png') }}" alt="Polyhouse Installation"></div>
            <div class="gallery-item-mock"><img src="{{ asset('assets/img/about/factory.png') }}" alt="Manufacturing Factory Floor"></div>
            <div class="gallery-item-mock"><img src="{{ asset('assets/img/hero/slide-3.png') }}" alt="Agriculture Net Application"></div>
            <div class="gallery-item-mock"><img src="{{ asset('assets/img/products/shade-net.png') }}" alt="Green Shade Net Roll"></div>
        </div>
        <div class="text-center mt-60" data-aos="fade-up">
            <a href="{{ route('products.index') }}" class="btn-primary-mock">
                View More Photos <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
        <!-- Gallery Lightbox Modal -->
        <div id="galleryLightbox" class="lightbox-modal" aria-hidden="true" role="dialog">
            <button class="lightbox-close" aria-label="Close Lightbox">&times;</button>
            <div class="lightbox-content">
                <img id="lightboxImage" src="" alt="">
                <div id="lightboxCaption" class="lightbox-caption"></div>
            </div>
        </div>
    </div>
</section>

{{-- ══ TESTIMONIALS SECTION ═══════════════════════════════════════ --}}
<section class="testimonials-section-mock pt-100 pb-100" aria-label="Client Feedback">
    <div class="container">
        <div class="section-header-mock text-center" data-aos="fade-up" style="margin-bottom: 50px;">
            <span class="section-tag-mock">WHAT OUR CLIENTS SAY</span>
            <h2 class="section-title-mock">Customer Testimonials</h2>
        </div>

        <div class="testimonials-slider-wrapper-mock" data-aos="zoom-in" data-aos-delay="100">
            <div class="swiper swiper-testimonials-custom">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card-centered">
                            <div class="testimonial-stars-mock">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <blockquote class="testimonial-quote-mock">
                                "AgroNet provides the best quality shade nets. The material is durable and delivery is always on time. Highly recommended"
                            </blockquote>
                            <div class="testimonial-user-mock">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=100&h=100" alt="Ramesh Patel">
                                <div class="user-info-mock">
                                    <h4>Ramesh Patel</h4>
                                    <p>Farmer, Daman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card-centered">
                            <div class="testimonial-stars-mock">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <blockquote class="testimonial-quote-mock">
                                "Outstanding customer support and advanced German manufacturing quality. The greenhouse nets have significantly improved our crop yield."
                            </blockquote>
                            <div class="testimonial-user-mock">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=100&h=100" alt="Suresh Mehta">
                                <div class="user-info-mock">
                                    <h4>Suresh Mehta</h4>
                                    <p>Greenhouse Owner, Gandhinagar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card-centered">
                            <div class="testimonial-stars-mock">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <blockquote class="testimonial-quote-mock">
                                "Their construction safety nets are exceptionally strong and meet all safety standards. Timely delivery and highly competitive pricing."
                            </blockquote>
                            <div class="testimonial-user-mock">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=100&h=100" alt="Vikram Singh">
                                <div class="user-info-mock">
                                    <h4>Vikram Singh</h4>
                                    <p>Infrastructure Developer, Ahmedabad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Slider Navigation Arrows --}}
            <button class="slider-arrow-mock prev test-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="slider-arrow-mock next test-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>

            {{-- Pagination --}}
            <div class="swiper-pagination testimonials-pagination"></div>
        </div>
    </div>
</section>

{{-- ══ PRE-FOOTER CTA SECTION ═════════════════════════════════════ --}}
<section class="prefooter-cta-mock" aria-label="CTA">
    <div class="container">
        <div class="cta-inner-mock">
            <div class="cta-text-mock">
                <h2>Need Premium Agricultural Net Solutions?</h2>
                <p>Get a free consultation from our experts today.</p>
            </div>
            <a href="{{ route('contact') }}" class="btn-cta-mock">
                Get Free Quote <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
    </div>
</section>

@endsection
