<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/_header.php' ?>

<main>
    <section>
        <div class="container">
            <div class="starter-template text-center py-5 px-3">
                <h1>Bootstrap starter template</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            </div>
        </div><!-- /.container -->
    </section>

    <section class="bg-light pt-50 pb-90 overflow-hidden">
        <div class="container">
            <div class="mb-50">
                <div class="h2 m-0">SPINKI</div>
                <div class="h1 m-0">ZESPÓŁ</div>
            </div>
            <div class="row gx-xxl-50">
                <div class="col-xl-3 col-xxl-4 d-none d-xl-block mb-30">
                    <img src="assets/img/dist/zespol.jpg" alt="#" loading="lazy" class="image__custom--team">
                </div>
                <div class="col-xl-9 col-xxl-8 mb-30">
                    <div class="swiper-2 swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="card__2">

                                    <div class="card-image mb-20">
                                        <img src="assets/img/dist/karina-ciosk.jpg" alt="#" loading="lazy" class="image__custom--team">
                                    </div>

                                    <div class="card-heading mb-20">
                                        <div class="card-title">Karina Ciosk</div>
                                        <div class="card-positions">Wedding planner</div>
                                    </div>

                                    <div class="mb-20">
                                        <p>Warszawa i województwo mazowieckie, Kielce i województwo świętokrzyskie</p>
                                    </div>

                                    <div class="mt-auto">
                                        <a href="#">karina@agencjaspinki.pl</a></br>
                                        Tel. <a href="#">+48 691 236 486</a>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card__2">
                                    <div class="card-image mb-20">
                                        <img src="assets/img/dist/agata-papiez.jpg" alt="#" loading="lazy" class="image__custom--team">
                                    </div>
                                    <div class="card-heading mb-20">
                                        <div class="card-title">Agata Papież</div>
                                        <div class="card-positions">Wedding planner</div>
                                    </div>
                                    <div class="mb-20">
                                        <p>Kraków i województwo małopolskie</p>
                                    </div>

                                    <div class="mt-auto">
                                        <a href="#">agata@agencjaspinki.pl</a></br>
                                        Tel. <a href="#">+48 733 999 472</a>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card__2">

                                    <div class="card-image mb-20">
                                        <img src="assets/img/dist/weronika-mikolajczak.jpg" alt="#" loading="lazy" class="image__custom--team">
                                    </div>

                                    <div class="card-heading mb-20">
                                        <div class="card-title">Weronika Mikołajczak</div>
                                        <div class="card-positions">Wedding planner</div>
                                    </div>

                                    <div class="mb-20">
                                        <p>Poznań i województwo wielkopolskie</p>
                                    </div>

                                    <div class="mt-auto">
                                        <a href="#">weronika@agencjaspinki.pl</a></br>
                                        Tel. <a href="#">+48 691 773 760</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-50 pb-70 overflow-hidden">

        <div class="container">
            <ul class="nav nav-pills nav--pills mb-20">
                <li class="nav-item">
                    <a class="nav-link h2 active" data-toggle="pill" href="#tab-portfolio" role="tab">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link h2" data-toggle="pill" href="#tab-blog" role="tab">Blog</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="tab-portfolio" role="tabpanel">
                    <div class="swiper-1 swiper-container mb-30">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <?php include 'elements/card__1.php' ?>
                            </div>
                            <div class="swiper-slide">
                                <?php include 'elements/card__1.php' ?>
                            </div>
                            <div class="swiper-slide">
                                <?php include 'elements/card__1.php' ?>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="text-more font-weight-bold">Kliknij po więcej</a>
                    </div>
                </div>
                <div class="tab-pane" id="tab-blog" role="tabpanel">
                    <div class="swiper-1 swiper-container mb-30">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <?php include 'elements/card__1.php' ?>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="text-more font-weight-bold">Kliknij po więcej</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>

<?php include 'elements/_footer.php' ?>

<?php include 'elements/_footer-scripts.php' ?>

<?php include 'elements/_html_end.php' ?>