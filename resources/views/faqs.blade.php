@extends('layouts.app')

@section('title', ' - FAQs')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Find answers to common questions about the International Rainwater Convention 2025
                </p>
            </div>

            <!-- Search Bar -->
            <div class="mb-8">
                <div class="relative max-w-md mx-auto">
                    <input type="text" id="faqSearch" placeholder="Search FAQs..."
                        class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- FAQ Categories -->
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button class="category-btn active" data-category="all">All Questions</button>
                <button class="category-btn" data-category="registration">Registration</button>
                <button class="category-btn" data-category="event">Event Details</button>
                <button class="category-btn" data-category="logistics">Logistics</button>
                <button class="category-btn" data-category="technical">Technical</button>
            </div>

            <!-- FAQ Accordion -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Registration Category -->
                <div class="faq-category" data-category="registration">
                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">How much does registration cost?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">Registration is completely free for all participants. We believe in
                                making knowledge about rainwater harvesting accessible to everyone.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">What's included with registration?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">Your free registration includes:</p>
                            <ul class="list-disc list-inside mt-2 space-y-1 text-gray-700">
                                <li>Access to all conference sessions and workshops</li>
                                <li>Conference materials and digital resources</li>
                                <li>Networking opportunities with experts</li>
                                <li>Lunch and refreshments during event days</li>
                                <li>Certificate of participation</li>
                            </ul>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">Can I register on-site?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">Yes, on-site registration will be available, but we strongly recommend
                                pre-registering online to secure your spot and help us with planning.</p>
                        </div>
                    </div>
                </div>

                <!-- Event Details Category -->
                <div class="faq-category" data-category="event">
                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">When and where is the convention?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">The International Rainwater Convention 2025 will take place from
                                <strong>December 15–17, 2025</strong> at the <strong>Kenyatta International Convention
                                    Centre (KICC)</strong> in Nairobi, Kenya.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">What is the daily schedule?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <div class="space-y-2 text-gray-700">
                                <p><strong>Daily Schedule:</strong></p>
                                <p>🕘 8:00 AM - Registration & Networking</p>
                                <p>🕤 9:00 AM - Opening Keynote</p>
                                <p>🕙 10:30 AM - Technical Sessions</p>
                                <p>🕛 12:30 PM - Lunch Break</p>
                                <p>🕐 1:30 PM - Workshops & Panels</p>
                                <p>🕓 4:00 PM - Networking Sessions</p>
                                <p>🕔 5:00 PM - Day Concludes</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">Will sessions be recorded?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">Yes, all keynote sessions and selected technical presentations will be
                                professionally recorded and made available to registered participants within one week after
                                the event concludes.</p>
                        </div>
                    </div>
                </div>

                <!-- Logistics Category -->
                <div class="faq-category" data-category="logistics">
                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">Is there a dress code?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">Business casual is recommended. The convention brings together
                                professionals from various sectors, so we suggest attire that is comfortable yet
                                professional.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">What about accommodation?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">We have partnered with several hotels near KICC offering special rates
                                for convention attendees. Visit our accommodation page for recommended options and booking
                                details.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">Is the venue accessible?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">Yes, KICC is fully accessible with ramps, elevators, and accessible
                                restrooms. If you have specific accessibility requirements, please contact us during
                                registration.</p>
                        </div>
                    </div>
                </div>

                <!-- Technical Category -->
                <div class="faq-category" data-category="technical">
                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">Will there be Wi-Fi?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">Complimentary high-speed Wi-Fi will be available throughout the
                                convention venue for all registered participants.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            <span class="faq-text">Can I present my research?</span>
                            <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="faq-answer">
                            <p class="text-gray-700">We welcome research presentations! The call for papers is now open.
                                Submit your abstract through our website by September 30, 2025.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Support -->
            <div class="text-center mt-12 p-8 bg-blue-50 rounded-2xl">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Still have questions?</h3>
                <p class="text-gray-600 mb-6">Our support team is here to help you</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:support@rainwaterconvention.org"
                        class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Email Support
                    </a>
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center px-6 py-3 border border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* FAQ Styles */
        .category-btn {
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s ease;
            background: #f3f4f6;
            color: #6b7280;
            border: none;
            cursor: pointer;
        }

        .category-btn.active,
        .category-btn:hover {
            background: #2563eb;
            color: white;
        }

        .faq-category {
            border-bottom: 1px solid #e5e7eb;
        }

        .faq-category:last-child {
            border-bottom: none;
        }

        .faq-item {
            border-bottom: 1px solid #f3f4f6;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .faq-question {
            width: 100%;
            text-align: left;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: between;
            transition: background-color 0.2s ease;
            border: none;
            background: white;
            cursor: pointer;
        }

        .faq-question:hover {
            background: #f9fafb;
        }

        .faq-text {
            font-size: 1.125rem;
            font-weight: 600;
            color: #111827;
            flex: 1;
            text-align: left;
        }

        .faq-icon {
            width: 1.25rem;
            height: 1.25rem;
            color: #6b7280;
            transition: transform 0.2s ease;
            flex-shrink: 0;
        }

        .faq-answer {
            padding: 0 1.5rem 1rem 1.5rem;
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        .faq-item.active .faq-question {
            background: #f8fafc;
        }

        /* Search highlight */
        .highlight {
            background-color: #fef3c7;
            padding: 2px 4px;
            border-radius: 2px;
        }

        /* Responsive adjustments */
        @media (max-width: 640px) {
            .faq-question {
                padding: 0.75rem 1rem;
            }

            .faq-text {
                font-size: 1rem;
            }

            .faq-answer {
                padding: 0 1rem 0.75rem 1rem;
            }

            .category-btn {
                padding: 0.375rem 0.75rem;
                font-size: 0.75rem;
            }
        }
    </style>

    <script>
        // FAQ Accordion Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            const searchInput = document.getElementById('faqSearch');
            const categoryButtons = document.querySelectorAll('.category-btn');

            // Toggle FAQ items
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                question.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');

                    // Close all items
                    faqItems.forEach(i => i.classList.remove('active'));

                    // Open clicked item if it wasn't active
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });

            // Category filtering
            categoryButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const category = button.dataset.category;

                    // Update active button
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    // Show/hide categories
                    document.querySelectorAll('.faq-category').forEach(cat => {
                        if (category === 'all' || cat.dataset.category === category) {
                            cat.style.display = 'block';
                        } else {
                            cat.style.display = 'none';
                        }
                    });
                });
            });

            // Search functionality
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();

                document.querySelectorAll('.faq-item').forEach(item => {
                    const question = item.querySelector('.faq-text').textContent.toLowerCase();
                    const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

                    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                        item.style.display = 'block';

                        // Highlight matching text
                        if (searchTerm) {
                            highlightText(item, searchTerm);
                        } else {
                            removeHighlights();
                        }
                    } else {
                        item.style.display = 'none';
                    }
                });
            });

            function highlightText(element, searchTerm) {
                removeHighlights();

                const walker = document.createTreeWalker(
                    element,
                    NodeFilter.SHOW_TEXT,
                    null,
                    false
                );

                let node;
                while (node = walker.nextNode()) {
                    const text = node.nodeValue;
                    const regex = new RegExp(`(${searchTerm})`, 'gi');
                    const newText = text.replace(regex, '<span class="highlight">$1</span>');

                    if (newText !== text) {
                        const span = document.createElement('span');
                        span.innerHTML = newText;
                        node.parentNode.replaceChild(span, node);
                    }
                }
            }

            function removeHighlights() {
                document.querySelectorAll('.highlight').forEach(highlight => {
                    const parent = highlight.parentNode;
                    parent.replaceChild(document.createTextNode(highlight.textContent), highlight);
                    parent.normalize();
                });
            }
        });
    </script>
@endsection
