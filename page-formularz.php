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
                        <div class="h1 m-0">FORMULARZ</div>
                    </div>
                </div>
                <img src="assets/img/dist/mark--halfr--light.png" alt="#" style="top:50px; left:50px;" class="banner--mark d-none d-lg-block" loading="lazy">
                <img src="assets/img/dist/mark--halfl--light.png" alt="#" style="right:50px; bottom:50px;" class="banner--mark d-none d-lg-block" loading="lazy">
            </div>
            <div class="banner__image col-lg-6 d-none d-lg-block position-relative">
                <img src="assets/img/dist/hero--formularz.jpg" alt="#" class="banner__image--photo" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="pb-30 pb-md-100" data-aos="fade-in">
    <div class="container">
        <div class="mb-30 mb-md-50 text-center">
            <div class="h2 m-0 text-uppercase">Zachęcamy Cię do wypełnienia formularza:</div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto" style="width: 800px;">
                <form>
                    <div class="row gx-15 gy-15 gy-md-30 justify-content-center">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" placeholder=" ">
                                <label for="floatingInputGrid" class="form-label m-0 form-label m-0 fw-bold">Imiona pary młodej</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid" placeholder=" ">
                                <label for="floatingInputGrid" class="form-label m-0 fw-bold">E-mail</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="floatingInputGrid" placeholder=" ">
                                <label for="floatingInputGrid" class="form-label m-0 fw-bold">Nr telefonu</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingInputGrid" placeholder=" ">
                                <label for="floatingInputGrid" class="form-label m-0 fw-bold">Planowana data ślubu</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGrid" placeholder=" ">
                                <label for="floatingInputGrid" class="form-label m-0 fw-bold">Miejsce ślubu i wesela</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="floatingInputGrid" placeholder=" ">
                                <label for="floatingInputGrid" class="form-label m-0 fw-bold">Liczba osób</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelectGrid">
                                    <option value="X">X</option>
                                    <option value="Y">Y</option>
                                    <option value="Z">Z</option>
                                </select>
                                <label for="floatingSelectGrid" class="form-label m-0 fw-bold">Planowany budżet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form--checkbox">
                                <label class="form-check-label" for="form--checkbox">Wyrażam zgodę na przetwarzanie moich danych...</label>
                            </div>
                        </div>
                        <div class="col-auto" style="width: 500px;">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark btn-lg btn-block">WYŚLIJ FORMULARZ</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<?php include 'elements/_footer.php' ?>
<?php include 'elements/_footer-scripts.php' ?>

<?php include 'elements/_html_end.php' ?>