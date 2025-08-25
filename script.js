document.querySelectorAll('.circle').forEach(circleDiv => {
  const percent = circleDiv.getAttribute('data-percentage');
  const baseSize = 110; // original circle size (CSS)
  const canvasSize = baseSize + 16; // extra pixels for outer glow ring
  const darkLineWidth = 12;
  const pinkLineWidth = 14;
  const darkRadius = (baseSize / 2) - (darkLineWidth / 2);
  const pinkRadius = (canvasSize / 2) - (pinkLineWidth / 2);

  const canvas = document.createElement('canvas');
  canvas.width = canvasSize;
  canvas.height = canvasSize;
  canvas.style.borderRadius = '50%';
  canvas.style.position = 'absolute';
  canvas.style.top = '-8px';  // center canvas relative to circle div
  canvas.style.left = '-8px';
  const ctx = canvas.getContext('2d');

  ctx.clearRect(0, 0, canvasSize, canvasSize);

  // Dark solid inner circle using smaller radius
  ctx.beginPath();
  ctx.arc(canvasSize / 2, canvasSize / 2, darkRadius, 0, 2 * Math.PI);
  ctx.strokeStyle = '#1a1919';
  ctx.lineWidth = darkLineWidth;
  ctx.lineCap = 'round';
  ctx.stroke();

  // Pink arc outside the dark circle
  ctx.beginPath();
  ctx.arc(canvasSize / 2, canvasSize / 2, pinkRadius, -Math.PI / 2, (2 * Math.PI) * (percent / 100) - Math.PI / 2, false);
  ctx.strokeStyle = '#ff4081';
  ctx.lineWidth = pinkLineWidth;
  ctx.lineCap = 'round';
  ctx.shadowColor = '#ff80ab';
  ctx.shadowBlur = 15;
  ctx.stroke();

  circleDiv.appendChild(canvas);

  // Add percentage text (centered automatically by CSS span)
  if (!circleDiv.querySelector('span')) {
    const percentSpan = document.createElement('span');
    percentSpan.innerText = percent + '%';
    circleDiv.appendChild(percentSpan);
  }
});
// Lightbox Functionality
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightbox-img");
const closeBtn = document.querySelector(".lightbox .close");

document.querySelectorAll(".project-card img").forEach(img => {
  img.addEventListener("click", () => {
    lightbox.style.display = "flex";
    lightboxImg.src = img.src;
  });
});

closeBtn.addEventListener("click", () => {
  lightbox.style.display = "none";
});

lightbox.addEventListener("click", (e) => {
  if (e.target !== lightboxImg) {
    lightbox.style.display = "none";
  }
});
const navbar = document.querySelector('.navbar');
const navLinks = document.querySelector('.nav-links');

// Check screen size first
document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector('.navbar');
  const navLinks = document.querySelector('.nav-links');
  let menuToggle;

  function setupMenu() {
    if (window.innerWidth <= 810 && !menuToggle) {
      // create hamburger
      menuToggle = document.createElement('div');
      menuToggle.classList.add('menu-toggle');
      menuToggle.innerHTML = "&#9776;";
      navbar.appendChild(menuToggle);

      menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
      });
    } else if (window.innerWidth > 810 && menuToggle) {
      // remove hamburger if resizing to desktop
      menuToggle.remove();
      menuToggle = null;
      navLinks.classList.remove('active');
    }
  }

  setupMenu();
  window.addEventListener("resize", setupMenu);
});

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contactForm');

  form.addEventListener('submit', async (e) => {
    e.preventDefault(); // Prevent normal form submission

    // Collect form data
    const formData = new FormData(form);

    try {
      // Send data asynchronously using fetch
      const response = await fetch('contact.php', {
        method: 'POST',
        body: formData,
      });

      const text = await response.text();

      if (text.trim() === 'success') {
        showPopup('Message sent successfully! Thank you for contacting me.', 'success');
        form.reset(); // Clear form fields
      } else {
        showPopup('Oops, something went wrong. Please try again later.', 'error');
      }
    } catch (error) {
      showPopup('Network error. Please check your connection and try again.', 'error');
    }
  });

  // Popup function
  function showPopup(message, type = 'success') {
    // Create popup div
    const popup = document.createElement('div');
    popup.className = `popup-message ${type}`;
    popup.innerText = message;

    // Style the popup
    document.body.appendChild(popup);

    // Fade in
    requestAnimationFrame(() => {
      popup.style.opacity = 1;
    });

    // Remove popup after 4 seconds with fade out
    setTimeout(() => {
      popup.style.opacity = 0;
      popup.addEventListener('transitionend', () => {
        popup.remove();
      });
    }, 6000);
  }
});
