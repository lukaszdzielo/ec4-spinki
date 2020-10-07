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

    <section class="bg-light py-50">
        test
    </section>
    <section class="py-50 overflow-hidden">

        <div class="container">
            <ul class="nav nav-pills nav--pills mb-30">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#tab-portfolio" role="tab">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#tab-blog" role="tab">Blog</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="tab-portfolio" role="tabpanel">
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
                        <a href="#" class="text-more font-weight-bold">Kliknij po więcej</a>
                    </div>
                </div>
                <div class="tab-pane" id="tab-blog" role="tabpanel">
                    <div class="swiper-container overflow-unset mb-30">
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