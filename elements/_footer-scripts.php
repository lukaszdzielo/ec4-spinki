<script src="assets/js/dist/app.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-1', {
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
            }
        }
    });
    
    var swiper = new Swiper('.swiper-2', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        breakpoints: {
            576: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
            1600: {
                slidesPerView: 3,
                spaceBetween: 70,
            },
        }
    });
</script>