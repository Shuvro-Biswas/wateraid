@extends('layouts.app')

@section('title', 'International Rainwater Convention 2025')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <span>🌍 Global Event • Free Registration</span>
                </div>
                <h1 class="hero-title">
                    International Rainwater
                    <span class="hero-accent">Convention 2025</span>
                </h1>
                <p class="hero-description">
                    Join global leaders, researchers, policymakers and practitioners in exploring innovative
                    rainwater harvesting techniques, sustainable water management and climate-resilient solutions.
                </p>
                <div class="hero-stats">
                    <div class="stat">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Participants</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">3</div>
                        <div class="stat-label">Days</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">40+</div>
                        <div class="stat-label">Sessions</div>
                    </div>
                </div>
                <div class="hero-actions">
                    <a href="{{ url('/register') }}" class="btn btn-primary">
                        <span>Register Now - Free Entry</span>
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ url('/faqs') }}" class="btn btn-secondary">
                        <span>View Schedule & FAQs</span>
                    </a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="water-mission-card">
                    <div class=" flex mission-header">
                        <div class="mission-icon">💧</div>
                        <h2 class="mission-title">Transforming Lives Through Water</h2>
                    </div>
                    <p class="mission-statement">
                        Effective water, sanitation and hygiene transform lives. Accessing climate resilient and inclusive
                        water,
                        sanitation and hygiene can drive great change.
                    </p>
                    {{-- <p class="mission-subtext">
                        Check how we are enabling this access to vulnerable communities.
                    </p> --}}

                    <div class="mission-features">
                        <div class="feature-item">
                            <div class="feature-icon">📋</div>
                            <div class="feature-content">
                                <a href="https://www.wateraid.org/bd/sites/g/files/jkxoof236/files/2023-11/WaterAid-%20Bangladesh_Country%20Programme%20Strategy%202023-2028.pdf"
                                    class="feature-link">
                                    <h4>Country Programme Strategy (CPS) 2023-28</h4>
                                </a>
                                <p>Comprehensive framework for sustainable water management</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">🔗</div>
                            <div class="feature-content">
                                <h4>Join Our Network</h4>
                                <p>Support us on LinkedIn & stay connected</p>
                            </div>
                        </div>
                    </div>

                    <div class="mission-actions">
                        <button class="mission-btn primary">
                            Learn More About CPS
                        </button>
                        <button class="mission-btn secondary">
                            Follow on LinkedIn
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Highlights -->
    <section class="highlights">
        <div class="container">
            <div class="highlight-cards">
                <div class="highlight-card">
                    <div class="highlight-icon">🗓️</div>
                    <div class="highlight-content">
                        <h3>December 15-17, 2025</h3>
                        <p>3 days of intensive learning</p>
                    </div>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">📍</div>
                    <div class="highlight-content">
                        <h3>Banani, Dhaka</h3>
                        <p>Wateraid International Convention Centre</p>
                    </div>
                </div>
                <div class="highlight-card">
                    <div class="highlight-icon">🎯</div>
                    <div class="highlight-content">
                        <h3>Free Registration</h3>
                        <p>Limited seats available</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Details -->
    <section class="event-details">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Event Details</h2>
                <p class="section-subtitle">
                    15-17 December 2025 • Wateraid International Convention Centre (WICC), Banani, Dhaka
                </p>
            </div>

            <div class="details-grid">
                <div class="detail-card">
                    <div class="detail-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="detail-title">Date & Time</h3>
                    <p class="detail-text">December 15–17, 2025<br>9:00 AM – 5:00 PM EAT</p>
                </div>

                <div class="detail-card">
                    <div class="detail-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="detail-title">Venue</h3>
                    <p class="detail-text">Wateraid International Convention Centre<br>Banani, Dhaka</p>
                </div>

                <div class="detail-card">
                    <div class="detail-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Why Attend This Convention?</h2>
                <p class="section-subtitle">Discover the key benefits of joining this premier water management event</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-number">01</div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Global Networking</h3>
                        <p class="benefit-text">Connect with industry leaders, researchers, and policymakers from around
                            the
                            globe. Build valuable professional relationships.</p>
                    </div>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">02</div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Latest Research</h3>
                        <p class="benefit-text">Discover cutting-edge innovations and research in rainwater harvesting and
                            sustainable water management practices.</p>
                    </div>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">03</div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Practical Solutions</h3>
                        <p class="benefit-text">Learn implementable strategies for sustainable water management that you
                            can apply in your community or organization.</p>
                    </div>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">04</div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Expert Insights</h3>
                        <p class="benefit-text">Gain insights from world-renowned experts in water conservation, climate
                            resilience, and environmental sustainability.</p>
                    </div>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">05</div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Hands-on Workshops</h3>
                        <p class="benefit-text">Participate in interactive workshops and gain practical skills in rainwater
                            harvesting system design and implementation.</p>
                    </div>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">06</div>
                    <div class="benefit-content">
                        <h3 class="benefit-title">Career Development</h3>
                        <p class="benefit-text">Enhance your professional profile and explore career opportunities in the
                            growing field of water sustainability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Join the Water Revolution?</h2>
                <p class="cta-subtitle">Be part of the solution. Register now for this transformative event.</p>
                <div class="cta-features">
                    <div class="cta-feature">✅ Free Registration</div>
                    <div class="cta-feature">✅ Limited Seats</div>
                    <div class="cta-feature">✅ Global Networking</div>
                    <div class="cta-feature">✅ Expert Sessions</div>
                </div>
                <a href="{{ url('/register') }}" class="btn btn-large">
                    <span>Secure Your Spot Now</span>
                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                <p class="cta-note">Registration closes December 10, 2025</p>
            </div>
        </div>
    </section>
@endsection
<style>
    /* ===== HERO VISUAL STYLES ===== */
    .hero-visual {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin-top: 2rem;
    }

    .water-mission-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 1.5rem;
        padding: 2rem;
        color: #1f2937;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.2);
        max-width: 400px;
        width: 100%;
        margin: 0 auto;
    }

    .mission-header {
        text-align: center;
        margin-bottom: 1.1rem;
    }

    .mission-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .mission-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e3a8a;
        line-height: 1.3;
    }

    .mission-statement {
        font-size: 1rem;
        line-height: 1.6;
        color: #374151;
        margin-bottom: 1rem;
        text-align: center;
    }

    .mission-subtext {
        font-size: 0.9rem;
        color: #4b5563;
        text-align: center;
        margin-bottom: 2rem;
        font-style: italic;
    }

    .mission-features {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
        background: #eff6ff;
        border-radius: 0.75rem;
        border-left: 4px solid #3b82f6;
    }

    .feature-icon {
        font-size: 1.5rem;
        flex-shrink: 0;
        margin-top: 0.25rem;
    }

    .feature-content h4 {
        font-size: 1rem;
        font-weight: 600;
        color: #111827;
        margin-bottom: 0.25rem;
    }

    .feature-content p {
        font-size: 0.875rem;
        color: #4b5563;
        line-height: 1.5;
    }

    .mission-actions {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .mission-btn {
        padding: 0.875rem 1.5rem;
        border-radius: 0.75rem;
        font-weight: 600;
        font-size: 0.9rem;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    .mission-btn.primary {
        background: #2563eb;
        color: #ffffff;
    }

    .mission-btn.primary:hover {
        background: #3b82f6;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    .mission-btn.secondary {
        background: transparent;
        color: #2563eb;
        border: 2px solid #2563eb;
    }

    .mission-btn.secondary:hover {
        background: #2563eb;
        color: #ffffff;
        transform: translateY(-1px);
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (min-width: 768px) {
        .hero-visual {
            margin-top: 0;
            justify-content: flex-end;
        }

        .water-mission-card {
            margin: 0;
            padding: 2.5rem;
        }

        .mission-actions {
            flex-direction: row;
        }

        .mission-btn {
            flex: 1;
        }
    }

    @media (max-width: 768px) {
        .water-mission-card {
            margin: 2rem 0;
            padding: 2rem;
        }
    }

    @media (max-width: 480px) {
        .water-mission-card {
            padding: 1.5rem;
        }

        .feature-item {
            flex-direction: column;
            text-align: center;
        }

        .mission-actions {
            flex-direction: column;
        }

        .mission-title {
            font-size: 1.25rem;
        }

        .mission-statement {
            font-size: 0.9rem;
        }
    }
</style>
<style>
    /* ===== VARIABLES ===== */
    :root {
        --primary-blue: #1e40af;
        --dark-blue: #1e3a8a;
        --blue-600: #2563eb;
        --blue-500: #3b82f6;
        --blue-100: #dbeafe;
        --blue-50: #eff6ff;
        --accent-yellow: #f59e0b;
        --yellow-400: #fbbf24;
        --yellow-500: #f59e0b;
        --white: #ffffff;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-600: #4b5563;
        --gray-700: #374151;
        --gray-800: #1f2937;
        --gray-900: #111827;
        --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    /* ===== BASE STYLES ===== */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    /* ===== HERO SECTION ===== */
    .hero {
        background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
        color: var(--white);
        position: relative;
        overflow: hidden;
    }

    .hero-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr;
        min-height: 85vh;
        align-items: center;
        padding: 0 1rem;
    }

    .hero-content {
        padding: 4rem 0;
        position: relative;
        z-index: 10;
    }

    .hero-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 2rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .hero-title {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }

    .hero-accent {
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

    .hero-stats {
        display: flex;
        gap: 2rem;
        margin-bottom: 2.5rem;
    }

    .stat {
        text-align: center;
    }

    .stat-number {
        font-size: 1.875rem;
        font-weight: 700;
        color: var(--accent-yellow);
    }

    .stat-label {
        font-size: 0.875rem;
        opacity: 0.8;
    }

    .hero-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .visual-element {
        width: 100%;
        height: 400px;
        background: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 100%);
        border-radius: 1rem;
    }

    /* ===== BUTTONS ===== */
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
        gap: 0.5rem;
    }

    .btn-primary {
        background: var(--accent-yellow);
        color: var(--dark-blue);
        box-shadow: var(--shadow);
    }

    .btn-primary:hover {
        background: var(--yellow-400);
        transform: translateY(-2px);
        box-shadow: var(--shadow-lg);
    }

    .btn-secondary {
        background: transparent;
        color: var(--white);
        border: 2px solid var(--accent-yellow);
    }

    .btn-secondary:hover {
        background: var(--accent-yellow);
        color: var(--dark-blue);
    }

    .btn-large {
        padding: 1.25rem 3rem;
        font-size: 1.125rem;
        background: var(--accent-yellow);
        color: var(--dark-blue);
        box-shadow: var(--shadow-lg);
    }

    .btn-large:hover {
        background: var(--yellow-400);
        transform: translateY(-2px);
        box-shadow: var(--shadow-xl);
    }

    .btn-icon {
        width: 1.25rem;
        height: 1.25rem;
    }

    /* ===== HIGHLIGHTS ===== */
    .highlights {
        background: var(--white);
        padding: 2rem 0;
        border-bottom: 1px solid var(--gray-200);
    }

    .highlight-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
    }

    .highlight-card {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1.5rem;
        background: var(--gray-50);
        border-radius: 0.75rem;
        transition: all 0.3s ease;
    }

    .highlight-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .highlight-icon {
        font-size: 2rem;
    }

    .highlight-content h3 {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--gray-900);
        margin-bottom: 0.25rem;
    }

    .highlight-content p {
        color: var(--gray-600);
        font-size: 0.875rem;
    }

    /* ===== SECTIONS ===== */
    .event-details,
    .benefits {
        padding: 5rem 0;
        background: var(--white);
    }

    .benefits {
        background: var(--gray-50);
    }

    .section-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--gray-900);
        margin-bottom: 1rem;
    }

    .section-subtitle {
        font-size: 1.25rem;
        color: var(--gray-600);
        max-width: 600px;
        margin: 0 auto;
    }

    /* ===== DETAILS GRID ===== */
    .details-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
    }

    .detail-card {
        text-align: center;
        padding: 2.5rem 2rem;
        background: var(--white);
        border-radius: 1rem;
        transition: all 0.3s ease;
        box-shadow: var(--shadow);
        border: 1px solid var(--gray-200);
    }

    .detail-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }

    .detail-icon {
        width: 5rem;
        height: 5rem;
        background: var(--blue-600);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
    }

    .detail-icon svg {
        width: 2rem;
        height: 2rem;
        color: var(--white);
    }

    .detail-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--gray-900);
        margin-bottom: 1rem;
    }

    .detail-text {
        color: var(--gray-600);
        line-height: 1.6;
    }

    /* ===== BENEFITS GRID ===== */
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
    }

    .benefit-card {
        display: flex;
        gap: 1.5rem;
        padding: 2rem;
        background: var(--white);
        border-radius: 1rem;
        transition: all 0.3s ease;
        box-shadow: var(--shadow);
        border: 1px solid var(--gray-200);
    }

    .benefit-card:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-lg);
    }

    .benefit-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--blue-100);
        line-height: 1;
        flex-shrink: 0;
    }

    .benefit-content {
        flex: 1;
    }

    .benefit-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--gray-900);
        margin-bottom: 0.75rem;
    }

    .benefit-text {
        color: var(--gray-600);
        line-height: 1.6;
    }

    /* ===== CTA SECTION ===== */
    .cta {
        background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
        color: var(--white);
        padding: 5rem 0;
        text-align: center;
    }

    .cta-content {
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
        margin-bottom: 2rem;
    }

    .cta-features {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 2.5rem;
    }

    .cta-feature {
        background: rgba(255, 255, 255, 0.1);
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-size: 0.875rem;
        font-weight: 500;
        backdrop-filter: blur(10px);
    }

    .cta-note {
        margin-top: 1.5rem;
        font-size: 0.875rem;
        opacity: 0.8;
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (min-width: 768px) {
        .hero-container {
            grid-template-columns: 1.2fr 0.8fr;
            gap: 3rem;
        }

        .hero-visual {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-actions {
            flex-wrap: nowrap;
        }

        .highlight-cards {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 768px) {

        .event-details,
        .benefits,
        .cta {
            padding: 3rem 0;
        }

        .section-title {
            font-size: 2rem;
        }

        .hero-stats {
            justify-content: center;
        }

        .hero-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }

        .benefit-card {
            flex-direction: column;
            text-align: center;
        }

        .cta-features {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
