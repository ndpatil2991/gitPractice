<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Browse our exclusive property listings - Find your dream home">
    <title>Property Listings | Real Estate</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
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
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="properties.html" class="active">Properties</a></li>
                    <li><a href="agents.html">Our Agents</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Main Content -->
    <main id="main-content">
        <!-- Property Listing Section -->
        <section class="property-listing-section">
            <div class="property-listing-container">
                <div class="section-title">
                    <h2>Featured Properties</h2>
                </div>
                
                <div class="property-grid">
                    <!-- Property Card 1 -->
                    <article class="property-card" data-property-id="1">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&h=600&fit=crop" 
                                 alt="Modern luxury villa with pool" 
                                 class="property-image">
                            <div class="property-price-badge">$850,000</div>
                        </div>
                        <div class="property-content">
                            <h3 class="property-title">Modern Luxury Villa</h3>
                            <p class="property-location">Beverly Hills, CA</p>
                            <p class="property-summary">Stunning contemporary villa featuring 5 bedrooms, infinity pool, and breathtaking city views. Perfect for luxury living.</p>
                        </div>
                    </article>
                    
                    <!-- Property Card 2 -->
                    <article class="property-card" data-property-id="2">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&h=600&fit=crop" 
                                 alt="Elegant downtown penthouse" 
                                 class="property-image">
                            <div class="property-price-badge">$1,200,000</div>
                        </div>
                        <div class="property-content">
                            <h3 class="property-title">Downtown Penthouse</h3>
                            <p class="property-location">Manhattan, NY</p>
                            <p class="property-summary">Luxurious penthouse in the heart of Manhattan with panoramic skyline views, modern amenities, and premium finishes.</p>
                        </div>
                    </article>
                    
                    <!-- Property Card 3 -->
                    <article class="property-card" data-property-id="3">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&h=600&fit=crop" 
                                 alt="Charming suburban family home" 
                                 class="property-image">
                            <div class="property-price-badge">$425,000</div>
                        </div>
                        <div class="property-content">
                            <h3 class="property-title">Suburban Family Home</h3>
                            <p class="property-location">Austin, TX</p>
                            <p class="property-summary">Beautiful 4-bedroom family home with spacious backyard, modern kitchen, and excellent school district proximity.</p>
                        </div>
                    </article>
                    
                    <!-- Property Card 4 -->
                    <article class="property-card" data-property-id="4">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600607687644-c7171b42498f?w=800&h=600&fit=crop" 
                                 alt="Beachfront property with ocean view" 
                                 class="property-image">
                            <div class="property-price-badge">$2,500,000</div>
                        </div>
                        <div class="property-content">
                            <h3 class="property-title">Oceanfront Paradise</h3>
                            <p class="property-location">Malibu, CA</p>
                            <p class="property-summary">Exclusive beachfront estate with direct ocean access, private beach, and stunning sunset views from every room.</p>
                        </div>
                    </article>
                    
                    <!-- Property Card 5 -->
                    <article class="property-card" data-property-id="5">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&h=600&fit=crop" 
                                 alt="Historic downtown loft" 
                                 class="property-image">
                            <div class="property-price-badge">$675,000</div>
                        </div>
                        <div class="property-content">
                            <h3 class="property-title">Historic Downtown Loft</h3>
                            <p class="property-location">Chicago, IL</p>
                            <p class="property-summary">Converted warehouse loft with exposed brick, high ceilings, and modern industrial design in vibrant downtown location.</p>
                        </div>
                    </article>
                    
                    <!-- Property Card 6 -->
                    <article class="property-card" data-property-id="6">
                        <div class="property-image-wrapper">
                            <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=800&h=600&fit=crop" 
                                 alt="Mountain retreat cabin" 
                                 class="property-image">
                            <div class="property-price-badge">$550,000</div>
                        </div>
                        <div class="property-content">
                            <h3 class="property-title">Mountain Retreat</h3>
                            <p class="property-location">Aspen, CO</p>
                            <p class="property-summary">Cozy mountain cabin with ski-in/ski-out access, stone fireplace, and spectacular mountain views throughout.</p>
                        </div>
                    </article>
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
                        <li><a href="index.html">Properties</a></li>
                        <li><a href="agents.html">Our Agents</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
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
            
            <div class="footer-bottom">
                <p class="copyright">
                    &copy; 2024 Prime Estates. All rights reserved. | Designed for excellence in real estate.
                </p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>