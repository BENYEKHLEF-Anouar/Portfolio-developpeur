// Mobile Menu Toggle Functionality
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMobileMenuButton = document.getElementById('close-mobile-menu-button');
    const mobileContactLink = document.getElementById('mobile-contact-link');
    const mobileSkillsLink = document.getElementById('mobile-skills-link');

    function toggleMobileMenu() {
        if (mobileMenu) {
            mobileMenu.classList.toggle('hidden');
        }
    }

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', toggleMobileMenu);
    }
    if (closeMobileMenuButton) {
        closeMobileMenuButton.addEventListener('click', toggleMobileMenu);
    }
    if (mobileContactLink) {
        mobileContactLink.addEventListener('click', toggleMobileMenu);
    }
    if (mobileSkillsLink) {
        mobileSkillsLink.addEventListener('click', toggleMobileMenu);
    }

    // Contact Form Submission (only on index.html)
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const formMessage = document.getElementById('form-message');
            const submitButton = contactForm.querySelector('button[type="submit"]');

            if (formMessage && submitButton) {
                formMessage.classList.remove('hidden', 'text-green-400', 'text-red-400');
                formMessage.classList.add('text-gray-400');
                formMessage.textContent = 'Sending message...';
                submitButton.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    const success = Math.random() > 0.2; // 80% chance of success

                    if (success) {
                        formMessage.classList.remove('text-gray-400');
                        formMessage.classList.add('text-green-400');
                        formMessage.textContent = 'Thank you! Your message has been sent successfully.';
                        contactForm.reset();
                    } else {
                        formMessage.classList.remove('text-gray-400');
                        formMessage.classList.add('text-red-400');
                        formMessage.textContent = 'Oops! Something went wrong. Please try again later.';
                    }

                    submitButton.disabled = false;
                    setTimeout(() => {
                        formMessage.classList.add('hidden');
                    }, 5000);
                }, 2000); // Simulate 2-second network request
            }
        });
    }
});