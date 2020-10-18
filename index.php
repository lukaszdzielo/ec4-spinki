<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/_header.php' ?>

<main class="overflow-hidden">

<section>
    <div class="container">
        <div class="row gx-0 align-items-center mb-40">
            <div class="col banner--custom__text">
                <img src="assets/img/dist/banner--text.png" alt="#" loading="lazy">
            </div>
            <div class="col-9 position-relative">
                <img src="assets/img/dist/banner.jpg" alt="#" loading="lazy">
                <div class="banner--start d-none d-lg-inline-block">Zaczynajmy</div>
                <img src="assets/img/dist/banner--mark.png" alt="#" class="banner--mark" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="pt-50 pb-20">
    <div class="container">
        <div class="text__custom--4 font-weight-bolder mb-10">SPINKI WEDDING PLANNERS - ORGANIZACJA WESEL I ŚLUBÓW OD 14 LAT </div>
        <div class="text__custom--3 mb-70">
            <span class="text-nowrap">{ KRAKÓW }</span>
            <span class="text-nowrap">{ KIELCE }</span>
            <span class="text-nowrap">{ WARSZAWA }</span>
            <span class="text-nowrap">{ POZNAŃ }</span>
        </div>
        <div class="row gx-50">
            <div class="col-lg-6 mb-30">
                <p>Wspaniale Cię u nas gościć. <strong>Przed Tobą organizacja wesela, która jest ważną częścią historii Twojej rodziny. Pozwól, żebyśmy i my weszli do tej historii.</strong> </br></br>Spinki to nowoczesne wedding plannerki z misją tworzenia przyjęć na miarę XXI wieku. Jesteśmy jedną z pierwszych agencji ślubnych w Polsce. <strong>Organizujemy wesela i śluby od ponad 14 lat w Krakowie, Kielcach, Warszawie, Poznaniu i wielu innych miastach.</strong> </br></br><strong>Ponad 500 zorganizowanych wesel</strong> czyni z nas ekspertów w tej branży. To <strong>mnóstwo doświadczenia, którego teraz tak bardzo potrzebujesz.</strong></p>
                <div class="mt-40 mb-30">
                    <a href="#" class="text-more font-weight-bold">Kliknij po więcej</a>
                </div>
            </div><!-- /.col -->
            <div class="col-md mb-30 text-center">
                <img src="assets/img/dist/spinkiweedingplanner.png" alt="#" loading="lazy">
            </div><!-- /.col -->
        </div>
    </div><!-- /.container -->
</section>

<?php include 'elements/planner_section.php' ?>
<?php include 'elements/coopstages_section.php' ?>
<?php include 'elements/cooprules_section.php' ?>
<?php include 'elements/testimonials_section.php' ?>
<?php include 'elements/team_section.php' ?>
<?php include 'elements/portfolio_blog_section.php' ?>

</main>

<?php include 'elements/_footer.php' ?>
<?php include 'elements/_footer-scripts.php' ?>
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
        slidesPerView: 1.1,
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

<?php include 'elements/_html_end.php' ?>