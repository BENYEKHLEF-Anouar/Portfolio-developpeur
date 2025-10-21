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

// Active Navigation Link Styling
// document.addEventListener('DOMContentLoaded', () => {
//     const currentPath = window.location.pathname.split('/').pop();
//     const navLinks = document.querySelectorAll('.nav-link');

//     navLinks.forEach(link => {
//         const linkPath = link.getAttribute('href');
//         if (linkPath === currentPath) {
//             link.classList.add('active');
//         } else {
//             link.classList.remove('active');
//         }
//     });
// });


// =========================================
// DYNAMIC ACTIVE NAVIGATION LINK STYLING
// =========================================
document.addEventListener('DOMContentLoaded', () => {
    // 1. Get the current page filename (e.g., "about.html")
    let currentPage = window.location.pathname.split('/').pop();

    // 2. Handle the root case (e.g., if you are just at "/" it should count as "index.html")
    if (currentPage === '' || currentPage === '/') {
        currentPage = 'index.html';
    }

    // 3. Select all navigation links
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        // First, remove any 'active' class that might be hardcoded in HTML
        link.classList.remove('active');

        // Get the link target (e.g., "projects.html")
        const linkHref = link.getAttribute('href');

        // If the link matches the current page, add the active class
        if (linkHref === currentPage) {
            link.classList.add('active');
        }
    });
});


// -----------------------------
// PROJECT DATA
// -----------------------------
const projects = [
  {
    id: "parkfeecalculator",
    title: "ParkFeeCalculator",
    description: "An Android app built with Kotlin and Jetpack Compose to calculate parking fees with a modern UI and efficient logic.",
    technologies: ["Kotlin", "Jetpack Compose"],
    image: "assets/parkfeecalculator.jpg", // Add your image here
    github: "https://github.com/yourusername/ParkFeeCalculator",
    live: null,
  },
  {
    id: "mentora",
    title: "Mentora",
    description: "A web platform that connects teachers with students. Built using HTML, CSS, PHP, and JavaScript to manage classes, messages, and scheduling.",
    technologies: ["HTML", "CSS", "PHP", "JavaScript"],
    image: "assets/mentora.jpg", // Add your image here
    github: "https://github.com/yourusername/Mentora",
    live: "https://yourdomain.com/mentora",
  },
  // Existing projects here...
];

// -----------------------------
// GENERATE PROJECT LIST
// -----------------------------
const projectListContainer = document.querySelector(".projects-container");

if (projectListContainer) {
  projectListContainer.innerHTML = projects.map(project => `
    <div class="project-card" data-id="${project.id}">
      <img src="${project.image}" alt="${project.title}">
      <h3>${project.title}</h3>
      <p>${project.description}</p>
      <div class="tags">
        ${project.technologies.map(tech => `<span>${tech}</span>`).join("")}
      </div>
    </div>
  `).join("");

  // Click event for details page
  document.querySelectorAll(".project-card").forEach(card => {
    card.addEventListener("click", () => {
      const id = card.getAttribute("data-id");
      localStorage.setItem("selectedProjectId", id);
      window.location.href = "project-details.html";
    });
  });
}

// -----------------------------
// PROJECT DETAILS PAGE
// -----------------------------
const projectDetailsContainer = document.querySelector(".project-details");

if (projectDetailsContainer) {
  const selectedId = localStorage.getItem("selectedProjectId");
  const project = projects.find(p => p.id === selectedId);

  if (project) {
    projectDetailsContainer.innerHTML = `
      <h1>${project.title}</h1>
      <img src="${project.image}" alt="${project.title}">
      <p>${project.description}</p>
      <h3>Technologies Used:</h3>
      <ul>${project.technologies.map(t => `<li>${t}</li>`).join("")}</ul>
      <div class="links">
        ${project.github ? `<a href="${project.github}" target="_blank">View on GitHub</a>` : ""}
        ${project.live ? `<a href="${project.live}" target="_blank">Live Demo</a>` : ""}
      </div>
    `;
  } else {
    projectDetailsContainer.innerHTML = `<p>Project not found.</p>`;
  }
}
