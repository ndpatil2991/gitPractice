<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Prime Estates - Get in touch with our team">
    <title>Contact Us | Prime Estates</title>
    
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
                    <li><a href="properties.html">Properties</a></li>
                    <li><a href="agents.html">Our Agents</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html" class="active">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Main Content -->
    <main id="main-content">
        <!-- Contact Hero Section -->
        <section class="contact-hero-section">
            <div class="contact-hero-container">
                <h1>Get In Touch</h1>
                <p class="hero-subtitle">We're here to help you with all your real estate needs</p>
            </div>
        </section>

        <!-- Contact Content -->
        <section class="contact-content-section">
            <div class="contact-content-container">
                
                <!-- Contact Info Cards -->
                <div class="contact-info-cards">
                    <div class="contact-info-card">
                        <div class="info-icon">📍</div>
                        <h3>Visit Our Office</h3>
                        <p>123 Real Estate Avenue<br>Suite 100<br>Beverly Hills, CA 90210</p>
                        <p class="info-hours"><strong>Hours:</strong> Mon-Fri: 9AM-6PM<br>Sat: 10AM-4PM, Sun: Closed</p>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="info-icon">📞</div>
                        <h3>Call Us</h3>
                        <p><strong>Main Office:</strong><br>(555) 123-4567</p>
                        <p><strong>Sales Department:</strong><br>(555) 123-4568</p>
                        <p><strong>Rentals:</strong><br>(555) 123-4569</p>
                    </div>
                    
                    <div class="contact-info-card">
                        <div class="info-icon">✉️</div>
                        <h3>Email Us</h3>
                        <p><strong>General Inquiries:</strong><br>info@primeestates.com</p>
                        <p><strong>Sales:</strong><br>sales@primeestates.com</p>
                        <p><strong>Support:</strong><br>support@primeestates.com</p>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="contact-form-section">
                    <div class="form-intro">
                        <h2>Send Us a Message</h2>
                        <p>Have a question or ready to start your real estate journey? Fill out the form below and our team will get back to you within 24 hours.</p>
                    </div>

                    <form id="contactForm" class="contact-form" novalidate>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name <span class="required">*</span></label>
                                <input type="text" id="firstName" name="firstName" required placeholder="John">
                                <span class="error-message" id="firstNameError"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="lastName">Last Name <span class="required">*</span></label>
                                <input type="text" id="lastName" name="lastName" required placeholder="Doe">
                                <span class="error-message" id="lastNameError"></span>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address <span class="required">*</span></label>
                                <input type="email" id="email" name="email" required placeholder="john.doe@example.com">
                                <span class="error-message" id="emailError"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="(555) 123-4567">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject <span class="required">*</span></label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="buying">I'm interested in buying</option>
                                <option value="selling">I want to sell my property</option>
                                <option value="renting">I'm looking for rentals</option>
                                <option value="valuation">Property valuation inquiry</option>
                                <option value="general">General inquiry</option>
                                <option value="other">Other</option>
                            </select>
                            <span class="error-message" id="subjectError"></span>
                        </div>

                        <div class="form-group">
                            <label for="message">Message <span class="required">*</span></label>
                            <textarea id="message" name="message" rows="6" required placeholder="Tell us about your real estate needs..."></textarea>
                            <span class="error-message" id="messageError"></span>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <span>Subscribe to our newsletter for property updates and market insights</span>
                            </label>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-submit">Send Message</button>
                            <button type="reset" class="btn-reset">Clear Form</button>
                        </div>

                        <div id="formSuccessMessage" class="success-message" style="display: none;">
                            <strong>✓ Thank you!</strong> Your message has been sent successfully. We'll get back to you within 24 hours.
                        </div>
                    </form>
                </div>

                <!-- Map Section -->
                <div class="map-section">
                    <h2>Find Us on the Map</h2>
                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.4977164394705!2d-118.40260708478779!3d34.07362648060647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bc04d6d147ab%3A0x4a12b4a6b44f8e8!2sBeverly%20Hills%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1234567890123!5m2!1sen!2s" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Prime Estates Office Location">
                        </iframe>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="faq-section">
                    <h2>Frequently Asked Questions</h2>
                    <div class="faq-grid">
                        <div class="faq-item">
                            <h4>What areas do you serve?</h4>
                            <p>We serve all of Los Angeles County and surrounding areas, with specialized expertise in Beverly Hills, Santa Monica, Malibu, and Pasadena.</p>
                        </div>
                        <div class="faq-item">
                            <h4>How do I schedule a property viewing?</h4>
                            <p>You can schedule viewings by contacting us through this form, calling our office, or directly reaching out to the listing agent on any property page.</p>
                        </div>
                        <div class="faq-item">
                            <h4>Do you offer virtual tours?</h4>
                            <p>Yes! We offer virtual tours and video walkthroughs for most of our listings. Contact us to arrange a virtual viewing.</p>
                        </div>
                        <div class="faq-item">
                            <h4>What are your commission rates?</h4>
                            <p>Our commission rates are competitive and vary based on property value and services required. Contact us for a detailed consultation.</p>
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
                        <li><a href="index.html">Properties</a></li>
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
            
            <div class="footer-bottom">
                <p class="copyright">
                    &copy; 2024 Prime Estates. All rights reserved. | Designed for excellence in real estate.
                </p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/contact-form.js"></script>
</body>
</html>
