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
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/bootstrap.min.css">
    <!--Bootstrap slider css-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/bootstrap-slider.min.css">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/magnific-popup.css">
    <!--Themify icon css-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/themify-icons.css">
    <!--mega menu js-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/hs.megamenu.css">
    <!--animated css-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/animate.min.css">
    <!--ytplayer css-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/jquery.mb.YTPlayer.min.css">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/owl.theme.default.min.css">
    <!--custom css-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" href="<?= base_url('/') ?>assets/apps/css/responsive.css">

    <!--favicon icon-->
    <link rel="icon" href="<?= base_url('assets/assets/apps/img/favicon.png') ?>" type="image/png" sizes="16x16">

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

        <section class="hero-it-solution hero-nine-bg ptb-120" style="background: url(<?= base_url('assets/img/configs/' . $config->hero_background_image) ?>)no-repeat center center">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading pt-60">
                            <h3>Our Application</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="integration-wrapper position-relative w-100">
                            <ul class="integration-list list-unstyled mb-0">
                                <?php foreach ($app_types as $key => $value) { ?>
                                    <li>
                                        <a href="<?= base_url('our-apps/'. $value->code) ?>">
                                            <div class="single-integration">
                                                <img src="<?= base_url('assets/img/app_types/'. $value->image) ?>" alt="integration" class="img-fluid">
                                                <h6 class="mb-0 mt-4"><?= $value->name ?></h6>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--body content wrap end-->
        <?= $this->include('frontend/components/footer') ?>
    </div>



    <!--jQuery-->
    <script src="<?= base_url('/') ?>assets/apps/js/jquery-3.4.1.min.js"></script>
    <!--Popper js-->
    <script src="<?= base_url('/') ?>assets/apps/js/popper.min.js"></script>
    <!--Bootstrap js-->
    <script src="<?= base_url('/') ?>assets/apps/js/bootstrap.min.js"></script>
    <!--Bootstrap slider js-->
    <script src="<?= base_url('/') ?>assets/apps/js/bootstrap-slider.min.js"></script>
    <!--countdown js-->
    <script src="<?= base_url('/') ?>assets/apps/js/jquery.countdown.min.js"></script>
    <!--jquery easing js-->
    <script src="<?= base_url('/') ?>assets/apps/js/jquery.easing.min.js"></script>
    <!--jquery ytplayer js-->
    <script src="<?= base_url('/') ?>assets/apps/js/jquery.mb.YTPlayer.min.js"></script>
    <!--wow js-->
    <script src="<?= base_url('/') ?>assets/apps/js/wow.min.js"></script>
    <!--owl carousel js-->
    <script src="<?= base_url('/') ?>assets/apps/js/owl.carousel.min.js"></script>
    <!--Magnific popup js-->
    <script src="<?= base_url('/') ?>assets/apps/js/jquery.magnific-popup.min.js"></script>
    <!--headroom js-->
    <script src="<?= base_url('/') ?>assets/apps/js/headroom.min.js"></script>
    <!--megamenu js-->
    <script src="<?= base_url('/') ?>assets/apps/js/hs.megamenu.js"></script>
    <!--custom js-->
    <script src="<?= base_url('/') ?>assets/apps/js/scripts.js"></script>


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