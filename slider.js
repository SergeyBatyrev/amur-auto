var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    zoom: {
        maxRatio:2,
        minRatio:1,
        toggle:true,
    },
    initialSlide: 1,
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
    coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});