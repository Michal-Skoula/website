const menuCloseCheck = document.getElementById("btn-menu-hero");
const menuCloseBtn = document.querySelectorAll(".js-close-menu");
menuCloseBtn.forEach((element) => {
  element.addEventListener("click", () => {
    menuCloseCheck.checked = false;
  });
});
// Initialize SwiperJS
var swiper = new Swiper(".testimonialSwiper", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    600: {
      slidesPerView: 1,
    },
    800: {
      slidesPerView: 2,
      spaceBetween: 24,
    },
    1000: {
      slidesPerView: 2, //TODO: change back to 3 when i have more testimonials
      spaceBetween: 24,
    },
  },
});
