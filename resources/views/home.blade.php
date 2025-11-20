@extends('layouts.app')

@section('title', 'International Rainwater Convention 2025')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        International Rainwater
                        <span class="hero-highlight">Convention 2025</span>
                    </h1>
                    <p class="hero-description">
                        Join global leaders, researchers, policymakers and practitioners in exploring innovative
                        rainwater harvesting techniques, sustainable water management and climate-resilient solutions.
                    </p>
                    <div class="hero-actions">
                        <a href="{{ url('/register') }}" class="btn btn-primary">
                            Register Now - Free Entry
                        </a>
                        <a href="{{ url('/faqs') }}" class="btn btn-secondary">
                            View Schedule & FAQs
                        </a>
                    </div>
                </div>
            </div>
            <div class="hero-graphic"></div>
        </div>
    </section>

    <!-- Event Details Section -->
    <section class="event-details">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Event Details</h2>
                <p class="section-subtitle">
                    15-17 December 2025 • Kenyatta International Convention Centre (KICC), Nairobi, Kenya
                </p>
            </div>

            <div class="details-grid">
                <div class="detail-card">
                    <div class="detail-icon">
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="detail-title">Date & Time</h3>
                    <p class="detail-text">December 15–17, 2025<br>9:00 AM – 5:00 PM EAT</p>
                </div>

                <div class="detail-card">
                    <div class="detail-icon">
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="detail-title">Venue</h3>
                    <p class="detail-text">Kenyatta International Convention Centre<br>Nairobi, Kenya</p>
                </div>

                <div class="detail-card">
                    <div class="detail-icon">
                        <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </div>
                    <h3 class="detail-title">Participants</h3>
                    <p class="detail-text">500+ Expected<br>Researchers • Policymakers • NGOs • Students</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Why Attend?</h2>
                <p class="section-subtitle">Discover the key benefits of joining this premier event</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-number">01</div>
                    <h3 class="feature-title">Networking Opportunities</h3>
                    <p class="feature-text">Connect with industry leaders, researchers, and policymakers from around the
                        globe.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-number">02</div>
                    <h3 class="feature-title">Latest Research</h3>
                    <p class="feature-text">Discover cutting-edge innovations and research in rainwater harvesting and
                        management.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-number">03</div>
                    <h3 class="feature-title">Practical Solutions</h3>
                    <p class="feature-text">Learn implementable strategies for sustainable water management in your
                        community.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Be Part of the Water Revolution</h2>
                <p class="cta-subtitle">Registration is completely free • Limited seats available</p>
                <a href="{{ url('/register') }}" class="btn btn-large">
                    Secure Your Spot Now
                </a>
            </div>
        </div>
    </section>
@endsection

<style>
    /* Variables */
    :root {
        --primary-blue: #1e40af;
        --dark-blue: #1e3a8a;
        --light-blue: #dbeafe;
        --accent-yellow: #f59e0b;
        --light-yellow: #fef3c7;
        --white: #ffffff;
        --gray-100: #f3f4f6;
        --gray-800: #1f2937;
    }

    /* Base Styles */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
        color: var(--white);
        position: relative;
        overflow: hidden;
    }

    .hero-background {
        display: grid;
        grid-template-columns: 1fr;
        min-height: 80vh;
        align-items: center;
    }

    .hero-content {
        padding: 4rem 1rem;
        position: relative;
        z-index: 10;
    }

    .hero-title {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }

    .hero-highlight {
        color: var(--accent-yellow);
        display: block;
    }

    .hero-description {
        font-size: 1.25rem;
        line-height: 1.6;
        max-width: 600px;
        margin-bottom: 2.5rem;
        opacity: 0.9;
    }

    .hero-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .hero-graphic {
        display: none;
    }

    /* Buttons */
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 1rem;
    }

    .btn-primary {
        background: var(--accent-yellow);
        color: var(--dark-blue);
    }

    .btn-primary:hover {
        background: #eab308;
        transform: translateY(-2px);
    }

    .btn-secondary {
        background: var(--primary-blue);
        color: var(--white);
        border: 2px solid var(--accent-yellow);
    }

    .btn-secondary:hover {
        background: var(--accent-yellow);
        color: var(--dark-blue);
    }

    .btn-large {
        padding: 1.25rem 3rem;
        font-size: 1.25rem;
        background: var(--accent-yellow);
        color: var(--dark-blue);
    }

    .btn-large:hover {
        background: #eab308;
        transform: translateY(-2px);
    }

    /* Section Styles */
    .event-details,
    .features {
        padding: 5rem 0;
        background: var(--white);
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--gray-800);
        margin-bottom: 1rem;
    }

    .section-subtitle {
        font-size: 1.25rem;
        color: #6b7280;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Details Grid */
    .details-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .detail-card {
        text-align: center;
        padding: 2rem;
        border-radius: 1rem;
        transition: transform 0.3s ease;
    }

    .detail-card:hover {
        transform: translateY(-5px);
    }

    .detail-icon {
        width: 4rem;
        height: 4rem;
        background: var(--dark-blue);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .detail-icon .icon {
        width: 1.5rem;
        height: 1.5rem;
        color: var(--white);
    }

    .detail-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--gray-800);
        margin-bottom: 1rem;
    }

    .detail-text {
        color: #6b7280;
        line-height: 1.6;
    }

    /* Features Section */
    .features {
        background: var(--gray-100);
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .feature-card {
        background: var(--white);
        padding: 2.5rem 2rem;
        border-radius: 1rem;
        text-align: center;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    .feature-number {
        font-size: 3rem;
        font-weight: 800;
        color: var(--light-blue);
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--gray-800);
        margin-bottom: 1rem;
    }

    .feature-text {
        color: #6b7280;
        line-height: 1.6;
    }

    /* CTA Section */
    .cta-section {
        background: var(--dark-blue);
        color: var(--white);
        padding: 5rem 0;
    }

    .cta-content {
        text-align: center;
        max-width: 600px;
        margin: 0 auto;
    }

    .cta-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .cta-subtitle {
        font-size: 1.25rem;
        opacity: 0.9;
        margin-bottom: 2.5rem;
    }

    /* Responsive Design */
    @media (min-width: 768px) {
        .hero-background {
            grid-template-columns: 2fr 1fr;
        }

        .hero-graphic {
            display: block;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
        }

        .hero-actions {
            flex-wrap: nowrap;
        }
    }

    @media (max-width: 768px) {

        .event-details,
        .features,
        .cta-section {
            padding: 3rem 0;
        }

        .section-title {
            font-size: 2rem;
        }

        .hero-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }
    }
</style>
