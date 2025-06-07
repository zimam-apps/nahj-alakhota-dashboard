document.addEventListener("DOMContentLoaded", function () {
  if (window.location.hash) {
    const targetSection = document.querySelector(window.location.hash);
    if (targetSection) {
      // Small timeout to ensure DOM is fully loaded
      setTimeout(() => {
        smoothScrollTo(targetSection);
        const activeLink = document.querySelector(
          `a[href='${window.location.hash}']`
        );
        updateActiveNavLink(activeLink);

        // Update URL without page reload
        history.pushState(null, null, " ");
      }, 100);
    }
  }

  // 1. Select all navigation links
  const navLinks = document.querySelectorAll(".header-nav a");

  // // 2. Add click event listeners to each link
  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      if (this.href.split("#")[0] === window.location.href.split("#")[0]) {
        const targetId = this.getAttribute("href");
        const targetSection = document.querySelector(targetId);
        if (targetSection) {
          smoothScrollTo(targetSection);
          updateActiveNavLink(this);
          // Update URL without page reload
          history.pushState(null, null, " ");
        }
      }
    });
  });

  // 5. Optional: Highlight active section while scrolling
  window.addEventListener("scroll", throttle(highlightActiveSection, 100));

  // Initialize active section on page load
  highlightActiveSection();
});

// Smooth scroll function
function smoothScrollTo(targetElement) {
  const targetPosition =
    targetElement.getBoundingClientRect().top + window.pageYOffset;
  const startPosition = window.pageYOffset;
  const headerHeight = document
    .querySelector("header")
    .getBoundingClientRect().height;
  const distance = targetPosition - startPosition - headerHeight;
  const duration = 800;
  let startTime = null;

  function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    const timeElapsed = currentTime - startTime;
    const run = ease(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  // Easing function for smooth effect
  function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}

// Update active nav link
function updateActiveNavLink(clickedLink) {
  document.querySelectorAll(".header-nav a").forEach((link) => {
    link.classList.remove("text-primary", "font-bold");
  });

  clickedLink.classList.add("text-primary", "font-bold");
}

// Highlight active section while scrolling
function highlightActiveSection() {
  const sections = document.querySelectorAll("section");
  const scrollPosition = window.scrollY + 100;

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;

    if (
      scrollPosition >= sectionTop &&
      scrollPosition < sectionTop + sectionHeight
    ) {
      const id = section.getAttribute("id");
      const correspondingLink = document.querySelector(
        `.nav-link[href="#${id}"]`
      );

      if (correspondingLink) {
        updateActiveNavLink(correspondingLink);
      }
    }
  });
}

// Throttle function for scroll performance
function throttle(func, limit) {
  let lastFunc;
  let lastRan;
  return function () {
    const context = this;
    const args = arguments;
    if (!lastRan) {
      func.apply(context, args);
      lastRan = Date.now();
    } else {
      clearTimeout(lastFunc);
      lastFunc = setTimeout(function () {
        if (Date.now() - lastRan >= limit) {
          func.apply(context, args);
          lastRan = Date.now();
        }
      }, limit - (Date.now() - lastRan));
    }
  };
}
