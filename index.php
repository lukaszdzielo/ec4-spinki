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

    <section class="py-5">
        <!-- Slider main container -->
        <div class="swiper-container px-20">
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
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>

        <div class="container text-center pt-5">
            <a href="#" class="btn btn-primary">Show more</a>
        </div>
    </section>

    <section class="bg-light py-50 overflow-hidden">

        <div class="container">
            <div class="swiper-container overflow-unset mb-30">
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
                <a href="#" class="text-more">Kliknij po więcej</a>
            </div>
        </div>

    </section>
</main>

<?php include 'elements/_footer.php' ?>

<?php include 'elements/_footer-scripts.php' ?>

<?php include 'elements/_html_end.php' ?>