console.log('desde el main');
const swiper = new Swiper('.swiperPartners', {
  loop: true,
  autoHeight: false,
  autoplay: true,
  slidesPerView: 2,
  breakpoints: {
    940: {
      slidesPerView: 3,
    }
  },
});

const swiperCom = new Swiper('.swiperCommunity', {
  loop: true,
  slidesPerView: 2,
  breakpoints: {
    940: {
      slidesPerView: 3,
    }
  },
  //spaceBetween: 8,
centeredSlides: true,
roundLengths: true,


  // If we need pagination
  // pagination: {
  //   el: '.swiperCommunity-pagination',
  // },

  // Navigation arrows
  navigation: {
    nextEl: '.swiperCommunity-button-next',
    prevEl: '.swiperCommunity-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiperCommunity-scrollbar',
  },
});

swiperCom.on('observerUpdate', ()=> {
  lazyLoadInstance.update();
});
swiperCom.on('update', ()=> {
  lazyLoadInstance.update();
});
console.log(swiperCom);