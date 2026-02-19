// ===================================
// CONTACT FORM VALIDATION & HANDLING
// ===================================

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', handleFormSubmit);
        
        // Real-time validation
        const requiredFields = ['firstName', 'lastName', 'email', 'subject', 'message'];
        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field) {
                field.addEventListener('blur', () => validateField(fieldId));
                field.addEventListener('input', () => clearError(fieldId));
            }
        });
    }
});

function handleFormSubmit(e) {
    e.preventDefault();
    
    // Clear all previous errors
    clearAllErrors();
    
    // Validate all fields
    let isValid = true;
    
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const email = document.getElementById('email').value.trim();
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value.trim();
    
    // First Name validation
    if (firstName === '') {
        showError('firstName', 'First name is required');
        isValid = false;
    } else if (firstName.length < 2) {
        showError('firstName', 'First name must be at least 2 characters');
        isValid = false;
    }
    
    // Last Name validation
    if (lastName === '') {
        showError('lastName', 'Last name is required');
        isValid = false;
    } else if (lastName.length < 2) {
        showError('lastName', 'Last name must be at least 2 characters');
        isValid = false;
    }
    
    // Email validation
    if (email === '') {
        showError('email', 'Email is required');
        isValid = false;
    } else if (!isValidEmail(email)) {
        showError('email', 'Please enter a valid email address');
        isValid = false;
    }
    
    // Subject validation
    if (subject === '') {
        showError('subject', 'Please select a subject');
        isValid = false;
    }
    
    // Message validation
    if (message === '') {
        showError('message', 'Message is required');
        isValid = false;
    } else if (message.length < 10) {
        showError('message', 'Message must be at least 10 characters');
        isValid = false;
    }
    
    // If form is valid, show success message
    if (isValid) {
        showSuccessMessage();
        
        // Log form data (in real app, this would be sent to server)
        console.log('Form submitted successfully!');
        console.log({
            firstName,
            lastName,
            email,
            phone: document.getElementById('phone').value,
            subject,
            message,
            newsletter: document.getElementById('newsletter').checked
        });
        
        // Reset form after 2 seconds
        setTimeout(() => {
            contactForm.reset();
            hideSuccessMessage();
        }, 3000);
    } else {
        // Scroll to first error
        const firstError = document.querySelector('.error-message:not(:empty)');
        if (firstError) {
            firstError.parentElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }
}

function validateField(fieldId) {
    const field = document.getElementById(fieldId);
    const value = field.value.trim();
    
    clearError(fieldId);
    
    switch(fieldId) {
        case 'firstName':
        case 'lastName':
            if (value === '') {
                showError(fieldId, `${fieldId === 'firstName' ? 'First' : 'Last'} name is required`);
            } else if (value.length < 2) {
                showError(fieldId, `${fieldId === 'firstName' ? 'First' : 'Last'} name must be at least 2 characters`);
            }
            break;
            
        case 'email':
            if (value === '') {
                showError(fieldId, 'Email is required');
            } else if (!isValidEmail(value)) {
                showError(fieldId, 'Please enter a valid email address');
            }
            break;
            
        case 'subject':
            if (value === '') {
                showError(fieldId, 'Please select a subject');
            }
            break;
            
        case 'message':
            if (value === '') {
                showError(fieldId, 'Message is required');
            } else if (value.length < 10) {
                showError(fieldId, 'Message must be at least 10 characters');
            }
            break;
    }
}

function showError(fieldId, message) {
    const errorElement = document.getElementById(fieldId + 'Error');
    const inputElement = document.getElementById(fieldId);
    
    if (errorElement) {
        errorElement.textContent = message;
        errorElement.style.display = 'block';
    }
    
    if (inputElement) {
        inputElement.style.borderColor = '#e74c3c';
    }
}

function clearError(fieldId) {
    const errorElement = document.getElementById(fieldId + 'Error');
    const inputElement = document.getElementById(fieldId);
    
    if (errorElement) {
        errorElement.textContent = '';
        errorElement.style.display = 'none';
    }
    
    if (inputElement) {
        inputElement.style.borderColor = '#e0e0e0';
    }
}

function clearAllErrors() {
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(error => {
        error.textContent = '';
        error.style.display = 'none';
    });
    
    const inputs = document.querySelectorAll('.contact-form input, .contact-form select, .contact-form textarea');
    inputs.forEach(input => {
        input.style.borderColor = '#e0e0e0';
    });
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showSuccessMessage() {
    const successMessage = document.getElementById('formSuccessMessage');
    if (successMessage) {
        successMessage.style.display = 'block';
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
}

function hideSuccessMessage() {
    const successMessage = document.getElementById('formSuccessMessage');
    if (successMessage) {
        successMessage.style.display = 'none';
    }
}

// Phone number formatting (optional enhancement)
const phoneInput = document.getElementById('phone');
if (phoneInput) {
    phoneInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 0) {
            if (value.length <= 3) {
                value = `(${value}`;
            } else if (value.length <= 6) {
                value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
            } else {
                value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
            }
        }
        e.target.value = value;
    });
}
