const swiper = new Swiper('.swiper-container', {
     effect: "coverflow",
     grabCursor: true,
     centeredSlides: true,
     loop: true,
     slidesPerView: 3,
     coverflowEffect: {
       rotate: 50,
       stretch: 0,
       depth: 100,
       modifier: 1,
       slideShadows: false,
     }
});