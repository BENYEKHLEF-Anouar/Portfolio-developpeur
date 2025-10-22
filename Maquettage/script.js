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
    startDate: "2023-01",
    endDate: "2023-03",
  },
  {
    id: "mentora",
    title: "Mentora",
    description: "A web platform that connects teachers with students. Built using HTML, CSS, PHP, and JavaScript to manage classes, messages, and scheduling.",
    technologies: ["HTML", "CSS", "PHP", "JavaScript"],
    image: "assets/mentora.jpg", // Add your image here
    github: "https://github.com/yourusername/Mentora",
    live: "https://yourdomain.com/mentora",
    startDate: "2023-04",
    endDate: "2023-06",
  },
  {
    id: "solirestaurant",
    title: "SoliRestaurant - Restaurant Management",
    description: "A full-stack web application for restaurant management, featuring a responsive front-end for customer orders and a back-end for menu and order administration.",
    technologies: ["PHP", "MySQL", "HTML", "CSS", "JavaScript", "GitHub"],
    image: "https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=1974&auto=format&fit=crop",
    github: "https://github.com/yourusername/SoliRestaurant",
    live: null,
    startDate: "2023-07",
    endDate: "2023-09",
  },
  {
    id: "farhaevents",
    title: "FarhaEvents - Event Registration System",
    description: "A web-based system for event registration, allowing users to sign up and download tickets. Includes an admin panel for managing events and reservations.",
    technologies: ["PHP", "MySQL", "HTML", "CSS", "JavaScript", "GitHub"],
    image: "https://images.unsplash.com/photo-1511578314322-379afb476865?q=80&w=2070&auto=format&fit=crop",
    github: "https://github.com/yourusername/FarhaEvents",
    live: null,
    startDate: "2023-10",
    endDate: "2023-12",
  },
  {
    id: "ecommerce",
    title: "E-commerce Platform",
    description: "A full-featured e-commerce platform with product listings, shopping cart functionality, and secure payment processing.",
    technologies: ["PHP", "MySQL", "HTML", "CSS", "JavaScript", "GitHub"],
    image: "https://images.unsplash.com/photo-1483985988355-cdf945701608?q=80&w=2070&auto=format&fit=crop",
    github: "https://github.com/yourusername/EcommercePlatform",
    live: null,
    startDate: "2024-01",
    endDate: "2024-03",
  },
  {
    id: "taskmanagement",
    title: "Task Management App",
    description: "A web application designed for efficient task management, allowing users to create, assign, and track tasks with ease.",
    technologies: ["PHP", "MySQL", "HTML", "CSS", "JavaScript", "GitHub"],
    image: "https://images.unsplash.com/photo-1504711432028-ee67912760c2?q=80&w=2070&auto=format&fit=crop",
    github: "https://github.com/yourusername/TaskManagementApp",
    live: null,
    startDate: "2024-04",
    endDate: "2024-06",
  },
  {
    id: "blogplatform",
    title: "Blog Platform",
    description: "A dynamic blog platform enabling users to create, publish, and manage their articles with a user-friendly interface.",
    technologies: ["PHP", "MySQL", "HTML", "CSS", "JavaScript", "GitHub"],
    image: "https://images.unsplash.com/photo-1499750310107-5fcd61f20284?q=80&w=2070&auto=format&fit=crop",
    github: "https://github.com/yourusername/BlogPlatform",
    live: null,
    startDate: "2024-07",
    endDate: "2024-09",
  },
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
      <p class="text-gray-400 text-sm mt-4">
        <span class="font-semibold">Duration:</span> ${project.startDate} - ${project.endDate}
      </p>
      <div class="links">
        ${project.github ? `<a href="${project.github}" target="_blank">View on GitHub</a>` : ""}
        ${project.live ? `<a href="${project.live}" target="_blank">Live Demo</a>` : ""}
      </div>
    `;
  } else {
    projectDetailsContainer.innerHTML = `<p>Project not found.</p>`;
  }
}
