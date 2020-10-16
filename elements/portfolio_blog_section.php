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