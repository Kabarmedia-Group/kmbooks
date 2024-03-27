// On Navbar Scroll
const onScroll = document.getElementById("nav");
window.addEventListener("scroll", () => {
  if (window.scrollY < 6) {
    onScroll.classList.remove("scrolled");
  } else {
    onScroll.classList.add("scrolled");
  }
});

// Hamburger Button
Nav = document.querySelector(".mobile-navlink");
Hamburger = document.querySelector(".hamburger-menu");

function myFunction() {
  Hamburger.classList.toggle("active");
  Nav.classList.toggle("active");
}

// Swiper
const swiper = new Swiper(".swiper", {
  slidesPerView: 1,
  spaceBetween: 16,
  loop: true,
  navigation: {
    nextEl: "#quotes-next",
    prevEl: "#quotes-prev",
  },
  pagination: {
    el: "#quotes-dot",
    dynamicBullets: true,
    clickable: true,
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});


