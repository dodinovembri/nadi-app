<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--meta-->
    <meta name="author" content="<?= $config->author ?>">
    <meta name="description" content="<?= $config->description ?>">

    <!--title-->
    <title><?= $config->title ?></title>

    <!--favicon icon-->
    <link rel="icon" href="<?= base_url('assets/img/logo/' . $config->faveicon) ?>" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/bootstrap.min.css') ?>">
    <!--Bootstrap slider css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/bootstrap-slider.min.css') ?>">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/magnific-popup.css') ?>">
    <!--Themify icon css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/themify-icons.css') ?>">
    <!--mega menu js-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/hs.megamenu.css') ?>">
    <!--animated css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/animate.min.css') ?>">
    <!--ytplayer css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/jquery.mb.YTPlayer.min.css') ?>">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/owl.theme.default.min.css') ?>">
    <!--custom css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/style.css') ?>">
    <!--responsive css-->
    <link rel="stylesheet" href="<?= base_url('assets/apps/css/responsive.css') ?>">

    <!--build:css-->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

</head>

<body>
    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="<?= base_url('assets/img/logo/' . $config->faveicon) ?>" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>

    <div class="main-wrapper">
        <?= $this->include('frontend/components/header') ?>


        <!--body content wrap start-->
        <div class="main main-for-demo">


            <!--all demos section start-->
            <section id="demos" class="al-demos ptb-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-8">
                            <div class="section-heading text-center">
                                <h2>Get Started with Pre-made Demos</h2>

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php foreach ($apps as $key => $value) { ?>
                            <div class="col-md-6 col-lg-4">
                                <a href="<?= $value->url ?>" class="mt-5 d-block" target="_blank">
                                    <span class="image-bg">
                                        <span class="image-shop-scroll" style="background-image: url(<?= base_url('assets/apps/img/long-preview/' . $value->image) ?>)"></span>
                                    </span>
                                    <h5 class="mb-0 mt-3 text-center"><?= $value->name ?></h5>
                                </a>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </section>
            <!--all demos section end-->



        </div>
        <!--body content wrap end-->
    </div>



    <!--jQuery-->
    <script src="assets/apps/js/jquery-3.4.1.min.js"></script>
    <!--Popper js-->
    <script src="assets/apps/js/popper.min.js"></script>
    <!--Bootstrap js-->
    <script src="assets/apps/js/bootstrap.min.js"></script>
    <!--Bootstrap slider js-->
    <script src="assets/apps/js/bootstrap-slider.min.js"></script>
    <!--countdown js-->
    <script src="assets/apps/js/jquery.countdown.min.js"></script>
    <!--jquery easing js-->
    <script src="assets/apps/js/jquery.easing.min.js"></script>
    <!--jquery ytplayer js-->
    <script src="assets/apps/js/jquery.mb.YTPlayer.min.js"></script>
    <!--wow js-->
    <script src="assets/apps/js/wow.min.js"></script>
    <!--owl carousel js-->
    <script src="assets/apps/js/owl.carousel.min.js"></script>
    <!--Magnific popup js-->
    <script src="assets/apps/js/jquery.magnific-popup.min.js"></script>
    <!--headroom js-->
    <script src="assets/apps/js/headroom.min.js"></script>
    <!--megamenu js-->
    <script src="assets/apps/js/hs.megamenu.js"></script>
    <!--custom js-->
    <script src="assets/apps/js/scripts.js"></script>


    <!--build:js-->
    <script src="<?= base_url('assets/js/vendors/jquery-3.6.0.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendors/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendors/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendors/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendors/parallax.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendors/aos.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendors/massonry.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <!--endbuild-->

</body>

</html>