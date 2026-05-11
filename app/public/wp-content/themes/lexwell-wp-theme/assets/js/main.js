(function () {
  if (typeof AOS !== 'undefined') {
    AOS.init({
      duration: 800,
      once: true
    });
  }

  if (typeof Swiper !== 'undefined') {
    var el = document.querySelector('.lw-testimonials-swiper');
    if (el) {
      // eslint-disable-next-line no-new
      new Swiper(el, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
          nextEl: '.lw-next',
          prevEl: '.lw-prev'
        }
      });
    }
  }
})();
