var sswiper = new Swiper('.swiper-container', {
    slidesPerView: ((document.documentElement.clientWidth) * 0.8 / 350).toFixed(),
    spaceBetween: 35
        // loop: true
});
sswiper.init()

function goNextSlide() {
    console.log(((document.documentElement.clientWidth) * 0.8 / 350).toFixed())
    sswiper.slideNext();
    // sswiper.slideToLoop();

}