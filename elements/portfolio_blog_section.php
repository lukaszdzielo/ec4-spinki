<section class="pt-md-50 pb-md-60 overflow-hidden">
    <div class="container">
        <div class="d-none d-md-block">
            <div class="nav nav__pills--1 mb-20" role="tablist">
                <a class="nav-link active" data-toggle="pill" href="#tab-portfolio" role="tab">Portfolio</a>
                <a class="nav-link" data-toggle="pill" href="#tab-blog" role="tab">Blog</a>
            </div>
        </div>
        <div class="tab__custom--1 tab-content">
            <div class="tab-pane fade mb-30 mb-md-0 show active" id="tab-portfolio" role="tabpanel">
                <div class="nav__pills--1 mb-20 d-md-none">
                    <div class="nav-link active">Portfolio</div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-10 mb-md-30">
                        <?php include 'elements/card__portfolio.php' ?>
                    </div>
                    <div class="col-md-4 mb-10 mb-md-30">
                        <?php include 'elements/card__portfolio.php' ?>
                    </div>
                    <div class="col-md-4 mb-10 mb-md-30">
                        <?php include 'elements/card__portfolio.php' ?>
                    </div>
                </div>
                <div class="">
                    <a href="#" class="text-more font-weight-bold">Kliknij po więcej</a>
                </div>
            </div>
            <div class="tab-pane fade mb-30 mb-md-0" id="tab-blog" role="tabpanel">
                <div class="nav__pills--1 mb-20 d-md-none">
                    <div class="nav-link active">Blog</div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-10 mb-md-30">
                        <?php include 'elements/card__blog.php' ?>
                    </div>
                    <div class="col-md-4 mb-10 mb-md-30">
                        <?php include 'elements/card__blog.php' ?>
                    </div>
                </div>
                <div class="">
                    <a href="#" class="text-more font-weight-bold">Kliknij po więcej</a>
                </div>
            </div>
        </div>
    </div>
</section>