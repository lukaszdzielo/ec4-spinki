<script src="assets/js/dist/app.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        slidesPerView: 1.1,
        spaceBetween: 20,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 5,
            },
        }
    });
</script>