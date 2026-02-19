/**
 * Homepage Interactive Features
 * Author: Pallavi
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===================================
    // ANIMATED COUNTER FOR STATS
    // ===================================
    
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                element.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        };
        
        updateCounter();
    }
    
    // Intersection Observer for Stats
    const statObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('.counter');
                counters.forEach(counter => {
                    if (counter.textContent === '0') {
                        animateCounter(counter);
                    }
                });
                statObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        statObserver.observe(statsSection);
    }
    
    // ===================================
    // QUICK SEARCH FORM HANDLING
    // ===================================
    
    const quickSearchForm = document.getElementById('quickSearchForm');
    if (quickSearchForm) {
        quickSearchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const location = document.getElementById('searchLocation').value;
            const type = document.getElementById('searchType').value;
            const price = document.getElementById('searchPrice').value;
            
            // Build query parameters
            const params = new URLSearchParams();
            if (location) params.append('location', location);
            if (type) params.append('type', type);
            if (price) params.append('price', price);
            
            // Redirect to properties page with search parameters
            window.location.href = `properties.html?${params.toString()}`;
        });
    }
    
    // ===================================
    // CONTACT FORM VALIDATION & SUBMISSION
    // ===================================
    
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        // Validation rules
        const validators = {
            firstName: (value) => {
                if (!value.trim()) return 'First name is required';
                if (value.trim().length < 2) return 'First name must be at least 2 characters';
                return '';
            },
            lastName: (value) => {
                if (!value.trim()) return 'Last name is required';
                if (value.trim().length < 2) return 'Last name must be at least 2 characters';
                return '';
            },
            email: (value) => {
                if (!value.trim()) return 'Email is required';
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) return 'Please enter a valid email address';
                return '';
            },
            phone: (value) => {
                if (value.trim() && !/^[\d\s\-\(\)]+$/.test(value)) {
                    return 'Please enter a valid phone number';
                }
                return '';
            },
            interest: (value) => {
                if (!value) return 'Please select your interest';
                return '';
            },
            message: (value) => {
                if (!value.trim()) return 'Message is required';
                if (value.trim().length < 10) return 'Message must be at least 10 characters';
                return '';
            }
        };
        
        // Show error
        function showError(input, message) {
            const formGroup = input.closest('.form-group');
            const errorMsg = formGroup.querySelector('.error-msg');
            formGroup.classList.add('has-error');
            if (errorMsg) errorMsg.textContent = message;
        }
        
        // Clear error
        function clearError(input) {
            const formGroup = input.closest('.form-group');
            const errorMsg = formGroup.querySelector('.error-msg');
            formGroup.classList.remove('has-error');
            if (errorMsg) errorMsg.textContent = '';
        }
        
        // Validate field
        function validateField(input) {
            const fieldName = input.name;
            const value = input.value;
            
            if (validators[fieldName]) {
                const errorMessage = validators[fieldName](value);
                if (errorMessage) {
                    showError(input, errorMessage);
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }
            return true;
        }
        
        // Add real-time validation
        const formInputs = contactForm.querySelectorAll('input, textarea, select');
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() !== '' || this.hasAttribute('required')) {
                    validateField(this);
                }
            });
            
            input.addEventListener('input', function() {
                if (this.closest('.form-group').classList.contains('has-error')) {
                    clearError(this);
                }
            });
        });
        
        // Form submission
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate all required fields
            let isValid = true;
            const requiredFields = contactForm.querySelectorAll('[required]');
            
            requiredFields.forEach(input => {
                if (!validateField(input)) {
                    isValid = false;
                }
            });
            
            // Validate optional phone if filled
            const phoneInput = document.getElementById('phone');
            if (phoneInput && phoneInput.value.trim()) {
                if (!validateField(phoneInput)) {
                    isValid = false;
                }
            }
            
            if (isValid) {
                const formData = new FormData(contactForm);
                const data = Object.fromEntries(formData);
                
                const submitButton = contactForm.querySelector('button[type="submit"]');
                const originalText = submitButton.querySelector('span').textContent;
                submitButton.querySelector('span').textContent = 'Sending...';
                submitButton.disabled = true;
                
                // Simulate form submission
                setTimeout(() => {
                    showFormMessage('success', 'Thank you! Your message has been sent successfully. We\'ll get back to you soon.');
                    contactForm.reset();
                    submitButton.querySelector('span').textContent = originalText;
                    submitButton.disabled = false;
                    console.log('Form submitted:', data);
                }, 1500);
            } else {
                const firstError = contactForm.querySelector('.has-error');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                showFormMessage('error', 'Please fix the errors in the form before submitting.');
            }
        });
        
        function showFormMessage(type, message) {
            const messageElement = document.getElementById('formMessage');
            if (messageElement) {
                messageElement.textContent = message;
                messageElement.className = 'form-message ' + type + ' show';
                
                setTimeout(() => {
                    messageElement.classList.remove('show');
                }, 5000);
            }
        }
    }
    
    // ===================================
    // SMOOTH SCROLL FOR ANCHOR LINKS
    // ===================================
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // ===================================
    // SCROLL ANIMATIONS
    // ===================================
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    const animatedElements = document.querySelectorAll('.property-card-home, .feature-card, .stat-card');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
    
    // ===================================
    // CONSOLE LOG
    // ===================================
    
    console.log('Homepage loaded successfully!');
    console.log('Interactive features active:');
    console.log('- Animated counters');
    console.log('- Quick search form');
    console.log('- Contact form validation');
    console.log('- Smooth scroll');
    console.log('- Scroll animations');
});
