$(document).ready(function () {
  // swiperをイニシャライズ
  var mySwiper = new Swiper ('.explanatory_works', {
    // オプションのパラメーターを指定
    direction: 'horizontal',
    effect: "flip",
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    })
});