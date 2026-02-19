<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find your dream property with Prime Estates - Leading real estate agency">
    <title>Prime Estates - Your Dream Property Awaits</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <!-- Skip to content link for accessibility -->
    <a href="#main-content" class="skip-to-content">Skip to main content</a>
    
    <!-- Global Header -->
    <header class="site-header">
        <div class="header-container">
            <div class="site-branding">
                <h1 class="site-title"><a href="index.html">Prime Estates</a></h1>
            </div>
            <nav class="primary-navigation" role="navigation" aria-label="Main navigation">
                <ul>
                    <li><a href="index.html" class="active">HOME</a></li>
                    <li><a href="properties.html">Properties</a></li>
                    <li><a href="agents.html">Our Agents</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Main Content -->
    <main id="main-content">
        
        <!-- Hero Section with Interactive Background -->
        <section class="hero-section">
            <div class="hero-background">
                <div class="hero-overlay"></div>
                <div class="animated-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
            </div>
            
            <div class="hero-content">
                <div class="hero-text fade-in-up">
                    <h1 class="hero-title">Find Your Dream Property</h1>
                    <p class="hero-subtitle">Discover exceptional homes with Prime Estates - Your trusted partner in real estate excellence</p>
                    <div class="hero-buttons">
                        <a href="properties.html" class="btn btn-primary">
                            <span>Browse Properties</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#contact-form" class="btn btn-secondary">Get in Touch</a>
                    </div>
                </div>
                
                <!-- Quick Search Widget -->
                <div class="quick-search-widget fade-in-up">
                    <h3>Quick Property Search</h3>
                    <form class="quick-search-form" id="quickSearchForm">
                        <div class="search-field">
                            <label for="searchLocation">Location</label>
                            <input type="text" id="searchLocation" placeholder="City, State or ZIP">
                        </div>
                        <div class="search-field">
                            <label for="searchType">Property Type</label>
                            <select id="searchType">
                                <option value="">All Types</option>
                                <option value="house">House</option>
                                <option value="apartment">Apartment</option>
                                <option value="condo">Condo</option>
                                <option value="villa">Villa</option>
                            </select>
                        </div>
                        <div class="search-field">
                            <label for="searchPrice">Max Price</label>
                            <select id="searchPrice">
                                <option value="">Any Price</option>
                                <option value="500k">$500,000</option>
                                <option value="1m">$1,000,000</option>
                                <option value="2m">$2,000,000+</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-search">Search</button>
                    </form>
                </div>
            </div>
            
            <div class="hero-scroll-indicator">
                <span>Scroll to explore</span>
                <div class="scroll-arrow">↓</div>
            </div>
        </section>
        
        <!-- Stats Section -->
        <section class="stats-section">
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-number counter" data-target="1250">0</div>
                    <div class="stat-label">Properties Sold</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number counter" data-target="850">0</div>
                    <div class="stat-label">Happy Clients</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number counter" data-target="20">0</div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number counter" data-target="45">0</div>
                    <div class="stat-label">Expert Agents</div>
                </div>
            </div>
        </section>
        
        <!-- Featured Properties Section -->
        <section class="featured-section">
            <div class="featured-container">
                <div class="section-header">
                    <h2>Featured Properties</h2>
                    <p>Handpicked selection of our finest properties</p>
                </div>
                
                <div class="property-showcase">
                    <!-- Property Card 1 -->
                    <article class="property-card-home">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&h=600&fit=crop" 
                                 alt="Modern luxury villa" 
                                 loading="lazy">
                            <div class="property-badge">Featured</div>
                            <div class="property-overlay">
                                <a href="property-detail.html" class="view-details-btn">View Details</a>
                            </div>
                        </div>
                        <div class="property-info">
                            <div class="property-price">$850,000</div>
                            <h3>Modern Luxury Villa</h3>
                            <p class="property-location">📍 Beverly Hills, CA</p>
                            <div class="property-features">
                                <span>🛏️ 5 Beds</span>
                                <span>🛁 4 Baths</span>
                                <span>📏 4,500 sqft</span>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Property Card 2 -->
                    <article class="property-card-home">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&h=600&fit=crop" 
                                 alt="Downtown penthouse" 
                                 loading="lazy">
                            <div class="property-badge new">New</div>
                            <div class="property-overlay">
                                <a href="property-detail.html" class="view-details-btn">View Details</a>
                            </div>
                        </div>
                        <div class="property-info">
                            <div class="property-price">$1,200,000</div>
                            <h3>Downtown Penthouse</h3>
                            <p class="property-location">📍 Manhattan, NY</p>
                            <div class="property-features">
                                <span>🛏️ 3 Beds</span>
                                <span>🛁 3 Baths</span>
                                <span>📏 3,200 sqft</span>
                            </div>
                        </div>
                    </article>
                    
                    <!-- Property Card 3 -->
                    <article class="property-card-home">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&h=600&fit=crop" 
                                 alt="Suburban family home" 
                                 loading="lazy">
                            <div class="property-overlay">
                                <a href="property-detail.html" class="view-details-btn">View Details</a>
                            </div>
                        </div>
                        <div class="property-info">
                            <div class="property-price">$425,000</div>
                            <h3>Suburban Family Home</h3>
                            <p class="property-location">📍 Austin, TX</p>
                            <div class="property-features">
                                <span>🛏️ 4 Beds</span>
                                <span>🛁 3 Baths</span>
                                <span>📏 2,800 sqft</span>
                            </div>
                        </div>
                    </article>
                </div>
                
                <div class="view-all-section">
                    <a href="properties.html" class="btn btn-outline">View All Properties</a>
                </div>
            </div>
        </section>
        
        <!-- Why Choose Us Section -->
        <section class="why-choose-section">
            <div class="why-choose-container">
                <div class="section-header">
                    <h2>Why Choose Prime Estates</h2>
                    <p>Your success is our mission</p>
                </div>
                
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">🏆</div>
                        <h3>Expert Agents</h3>
                        <p>Experienced professionals dedicated to finding your perfect property</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔍</div>
                        <h3>Curated Listings</h3>
                        <p>Premium properties handpicked to match your exact requirements</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💼</div>
                        <h3>Full Service</h3>
                        <p>Complete support from search to closing and beyond</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">⭐</div>
                        <h3>Trusted Name</h3>
                        <p>20+ years of excellence and satisfied clients</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Contact Form Section -->
        <section class="contact-section" id="contact-form">
            <div class="contact-container">
                <div class="contact-header">
                    <h2>Get In Touch</h2>
                    <p>Ready to find your dream property? Let's start the conversation</p>
                </div>
                
                <div class="contact-wrapper">
                    <!-- Contact Form -->
                    <div class="contact-form-area">
                        <form id="contactForm" class="contact-form" novalidate>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">First Name <span class="required">*</span></label>
                                    <input type="text" id="firstName" name="firstName" required>
                                    <span class="error-msg"></span>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name <span class="required">*</span></label>
                                    <input type="text" id="lastName" name="lastName" required>
                                    <span class="error-msg"></span>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input type="email" id="email" name="email" required>
                                    <span class="error-msg"></span>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" id="phone" name="phone">
                                    <span class="error-msg"></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="interest">I'm Interested In <span class="required">*</span></label>
                                <select id="interest" name="interest" required>
                                    <option value="">Select an option</option>
                                    <option value="buying">Buying a Property</option>
                                    <option value="selling">Selling a Property</option>
                                    <option value="renting">Renting a Property</option>
                                    <option value="consultation">General Consultation</option>
                                </select>
                                <span class="error-msg"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message <span class="required">*</span></label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                                <span class="error-msg"></span>
                            </div>
                            
                            <div class="form-checkbox">
                                <label>
                                    <input type="checkbox" id="newsletter" name="newsletter">
                                    <span>Subscribe to newsletter for exclusive listings</span>
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-submit">
                                <span>Send Message</span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M18 2L9 11M18 2L12 18L9 11M18 2L2 8L9 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            
                            <div id="formMessage" class="form-message"></div>
                        </form>
                    </div>
                    
                    <!-- Contact Info -->
                    <div class="contact-info-area">
                        <div class="contact-info-card">
                            <h3>Contact Information</h3>
                            
                            <div class="info-item">
                                <div class="info-icon">📍</div>
                                <div class="info-content">
                                    <h4>Visit Us</h4>
                                    <p>123 Real Estate Ave<br>Suite 100, CA 90210</p>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">📞</div>
                                <div class="info-content">
                                    <h4>Call Us</h4>
                                    <p>(555) 123-4567<br>Mon-Fri: 9AM - 6PM</p>
                                </div>
                            </div>
                            
                            <div class="info-item">
                                <div class="info-icon">✉️</div>
                                <div class="info-content">
                                    <h4>Email Us</h4>
                                    <p>info@primeestates.com<br>support@primeestates.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    
    <!-- Global Footer -->
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-columns">
                <!-- About Column -->
                <div class="footer-column">
                    <h4>About Prime Estates</h4>
                    <p class="footer-about">
                        We are a leading real estate agency dedicated to helping you find your dream property. 
                        With years of experience and a team of expert agents, we make buying and selling easy.
                    </p>
                </div>
                
                <!-- Quick Links Column -->
                <div class="footer-column">
                    <h4>Quick Links</h4>
                    <ul class="footer-nav-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="properties.html">Properties</a></li>
                        <li><a href="agents.html">Our Agents</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services Column -->
                <div class="footer-column">
                    <h4>Our Services</h4>
                    <ul class="footer-nav-links">
                        <li><a href="#buying">Property Buying</a></li>
                        <li><a href="#selling">Property Selling</a></li>
                        <li><a href="#renting">Property Rentals</a></li>
                        <li><a href="#consulting">Consulting</a></li>
                    </ul>
                </div>
                
                <!-- Contact Column -->
                <div class="footer-column">
                    <h4>Contact Us</h4>
                    <div class="footer-contact-info">
                        <div class="footer-contact-item">
                            <span>📍</span>
                            <span>123 Real Estate Ave,<br>Suite 100, CA 90210</span>
                        </div>
                        <div class="footer-contact-item">
                            <span>📞</span>
                            <span>(555) 123-4567</span>
                        </div>
                        <div class="footer-contact-item">
                            <span>✉️</span>
                            <span>info@primeestates.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center gap-6 mt-10">
    <a href="#" aria-label="Facebook"
       class="w-11 h-11 flex items-center justify-center rounded-full 
              bg-white text-blue-600 border border-gray-300
              hover:bg-blue-600 hover:text-white
              transition-all duration-300">
        <i class="fab fa-facebook-f text-lg"></i>
    </a>

    <a href="#" aria-label="Instagram"
       class="w-11 h-11 flex items-center justify-center rounded-full 
              bg-white text-pink-500 border border-gray-300
              hover:bg-pink-500 hover:text-white
              transition-all duration-300">
        <i class="fab fa-instagram text-lg"></i>
    </a>

    <a href="#" aria-label="Twitter"
       class="w-11 h-11 flex items-center justify-center rounded-full 
              bg-white text-black border border-gray-300
              hover:bg-black hover:text-white
              transition-all duration-300">
        <i class="fab fa-x-twitter text-lg"></i>
    </a>

    <a href="#" aria-label="LinkedIn"
       class="w-11 h-11 flex items-center justify-center rounded-full 
              bg-white text-blue-700 border border-gray-300
              hover:bg-blue-700 hover:text-white
              transition-all duration-300">
        <i class="fab fa-linkedin-in text-lg"></i>
    </a>
</div>



            <div class="footer-bottom">
                <p class="copyright">
                    &copy; 2024 Prime Estates. All rights reserved. | Designed by Pallavi
                </p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="js/home.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
