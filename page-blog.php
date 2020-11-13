<?php include 'elements/_html_start.php' ?>

<?php include 'elements/_head.php' ?>

<?php include 'elements/_header.php' ?>

<main>

<section class="pb-40 pb-lg-100" data-aos="fade-in">
    <div class="container">
        <div class="banner--lg--minh1 row g-0 bg-primary">
            <div class="col-lg-6 position-relative">
                <div class="banner__content p-20 px-lg-70 py-lg-80 text-lg-center">
                    <div>
                        <div class="h1 m-0">BLOG</div>
                    </div>
                </div>
                <img src="assets/img/dist/mark--halfr--dark.png" alt="#" style="top:50px; left:50px;" class="banner--mark d-none d-lg-block" loading="lazy">
                <img src="assets/img/dist/mark--halfl--dark.png" alt="#" style="right:50px; bottom:50px;" class="banner--mark d-none d-lg-block" loading="lazy">
            </div>
            <div class="banner__image col-lg-6 d-none d-lg-block position-relative">
                <img src="assets/img/dist/hero--reference.jpg" alt="#" class="banner__image--photo" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row gy-20 gy-md-40">
            <div class="col-md-6 col-xl-4" data-aos="fade-in">
                <?php include 'elements/card__blog.php' ?>
            </div>
            <div class="col-md-6 col-xl-4" data-aos="fade-in">
                <?php include 'elements/card__blog.php' ?>
            </div>
            <div class="col-md-6 col-xl-4" data-aos="fade-in">
                <?php include 'elements/card__blog.php' ?>
            </div>
            <div class="col-md-6 col-xl-4" data-aos="fade-in">
                <?php include 'elements/card__blog.php' ?>
            </div>
            <div class="col-md-6 col-xl-4" data-aos="fade-in">
                <?php include 'elements/card__blog.php' ?>
            </div>
            <div class="col-md-6 col-xl-4" data-aos="fade-in">
                <?php include 'elements/card__blog.php' ?>
            </div>
        </div>
        <nav class="my-20 mt-md-40" data-aos="fade-in">
            <ul class="pagination m-0 justify-content-center">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">31</a></li>
            </ul>
        </nav>
    </div>
</section>

</main>

<?php include 'elements/_footer.php' ?>
<?php include 'elements/_footer-scripts.php' ?>

<?php include 'elements/_html_end.php' ?>