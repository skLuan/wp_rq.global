window.addEventListener('load', (e)=> {
    var pillarButtons = document.querySelectorAll('.btn_Pillars');
    var pillarCards = document.querySelectorAll('.card_pillar');
    function hideElements(list) {
      list.forEach(element => {
        element.classList.add('hidden');
      });
    }

    pillarButtons.forEach( (pBtn, i) => {
      pBtn.addEventListener('pointerdown', (e)=> {
        pCard = pillarCards[i];
        hideElements(pillarCards);
        console.log(pCard);
        pCard.classList.toggle('hidden');
      });
    });
})

// -------------------------------------------------- Swipers ---------------
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
centeredSlides: true,
roundLengths: true,
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