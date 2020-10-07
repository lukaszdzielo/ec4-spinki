<script src="assets/js/dist/app.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        slidesPerView: 1,
        spaceBetween: 10,
        observer: true,
        observeParents: true,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        }
    });
</script>