// Menu toggle area
const menuBar = document.getElementById("nav-toggle");
const closeBtn = document.getElementById("nav-close");
const navMenu = document.getElementById("nav-menu");

if (menuBar) {
  menuBar.addEventListener("click", () => {
    navMenu.classList.add("active");
  });
}
if (closeBtn) {
  closeBtn.addEventListener("click", () => {
    navMenu.classList.remove("active");
  });
}

// Remove Menu click in nav-link
const navLink = document.querySelectorAll(".nav__link");

const linkAction = () => {
  const navMenu = document.getElementById("nav-menu");
  navMenu.classList.remove("active");
};
navLink.forEach((n) => n.addEventListener("click", linkAction));

// Add blur header
const blurHeader = () => {
  const header = document.getElementById("header");
  this.scrollY >= 50
    ? header.classList.add("blue-header")
    : header.classList.remove("blue-header");
};
window.addEventListener("scroll", blurHeader);

// Swiper JS
let swiperfavorite = new Swiper(".favorite__swiper", {
  loop: true,
  slidesPerView: "auto",
  centeredSlides: "auto",
  grabCursor: true,

  breakpoints: {
    768: {
      slidesPerView: 3,
    },
  },
});

// Show Scroll Up
const scrollUpfunc = () => {
  const scrollUp = document.getElementById("scroll-up");
  this.scrollY >= 250
    ? scrollUp.classList.add("show-scroll")
    : scrollUp.classList.remove("show-scroll");
};
window.addEventListener("scroll", scrollUpfunc);

// Scroll section active link
const sections = document.querySelectorAll("section[id]");

const scrollActive = () => {
  const scrollDown = window.scrollY;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight,
      sectionTop = current.offsetTop - 58,
      sectionId = current.getAttribute("id"),
      sectionClass = document.querySelector(
        ".nav__menu a[href*=" + sectionId + "]" // nav__menu -> a
      );

    if (scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight) {
      sectionClass.classList.add("active-link");
    } else {
      sectionClass.classList.remove("active-link");
    }
  });
};
window.addEventListener("scroll", scrollActive);
