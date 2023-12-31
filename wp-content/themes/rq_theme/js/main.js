window.addEventListener('load', (e)=> {
    var pillarButtons = document.querySelectorAll('.btn_Pillars');
    var pillarCards = document.querySelectorAll('.card_pillar');
    function hideElements(list) {
      list.forEach(element => {
        element.classList.add('hidden');
      });
    }
    function validateChilds(array, target){
      var validation = array.some((card) => {
        return card.contains(target);
      });

      return validation
    }

    pillarButtons.forEach( (pBtn, i) => {
      pBtn.addEventListener('click', (e)=> {
        pCard = pillarCards[i];
        hideElements(pillarCards);
        //console.log(pCard);
        pCard.classList.toggle('hidden');
      });
    });

    document.addEventListener('click', (e) => {
      const target = e.target;
       const buttonsArray = Array.from(pillarButtons);
       const cardsArray = Array.from(pillarCards);
       console.log(validateChilds(buttonsArray, target));

      if(!validateChilds(buttonsArray, target) && !validateChilds(cardsArray, target)) {
        console.log('something');
        hideElements(pillarCards);
        return
      }
      // if(!validateChilds(cardsArray, target)) {
      //   console.log('something');
      //   //hideElements(pillarCards);
      // return
      // }
    })
    lazyLoadInstance.update();
});

// -------------------------------------------------- Swipers ---------------
const swiper = new Swiper('.swiperPartners', {
  loop: true,
  autoHeight: false,
  autoplay: true,
  slidesPerView: 1,
  //centeredSlides: true,
  breakpoints: {
    940: {
      slidesPerView: 3,
      slidesPerGroup:3,
      autoplay: false,
    }
  },
});
// ------------------------------------------------------- COMMUNITY
const swiperCom = new Swiper('.swiperCommunity', {
  slidesPerView: 2,
    loopAddBlankSlides: true,
  breakpoints: {
    940: {
      slidesPerView: 4,
    }
  },
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

swiperCom.on('afterInit', ()=> {
  lazyLoadInstance.update();
});
swiperCom.on('observerUpdate', ()=> {
  lazyLoadInstance.update();
});
swiperCom.on('update', ()=> {
  lazyLoadInstance.update();
});