const swiper = new Swiper('.swiperPartners', {
  loop: true,
slidesPerView: 3,
  // If we need pagination
  pagination: {
    el: '.swiperPartners-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiperPartners-button-next',
    prevEl: '.swiperPartners-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiperPartners-scrollbar',
  },
});
