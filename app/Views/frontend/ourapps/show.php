<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/components/styles') ?>
    <title><?= $config->title ?></title>

    <!-- Additional css -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/bootstrap-slider.min.css') ?>">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/themify-icons.css') ?>">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/hs.megamenu.css') ?>">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/jquery.mb.YTPlayer.min.css') ?>">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php //base_url('assets/frontend/apps/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/apps/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/apps/css/responsive.css') ?>">

</head>

<body>
    <!--preloader start-->
    <?= $this->include('frontend/components/preloader') ?>

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
                                        <span class="image-shop-scroll" style="background-image: url(<?= base_url('assets/images/long-preview/' . $value->image) ?>)"></span>
                                    </span>
                                    <h5 class="mb-0 mt-3 text-center"><?= $value->name ?></h5>
                                </a>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </section>

        </div>
        <!--body content wrap end-->
    </div>



    <!-- Additional scripts -->
    <script src="<?= base_url('assets/frontend/apps/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/bootstrap-slider.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/jquery.countdown.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/jquery.mb.YTPlayer.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/headroom.min.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/hs.megamenu.js') ?>"></script>
    <script src="<?= base_url('assets/frontend/apps/js/scripts.js') ?>"></script>

    <?= $this->include('frontend/components/scripts') ?>

</body>

</html>