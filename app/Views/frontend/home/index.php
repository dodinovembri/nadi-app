<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description" content="<?= $config->description ?>Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="<?= $config->author ?>ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="<?= base_url('assets/img/logo/'. $config->faveicon) ?>" type="image/png" sizes="16x16">

    <!--title-->
    <title><?= $config->title ?>Quiety - Software & IT Solutions HTML Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="<?= base_url('assets/img/logo/'. $config->faveicon) ?>" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <?= $this->include('frontend/components/header') ?>
        <!-- hero section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120" style="background: url(<?= base_url('assets/img/hero/' . $config->hero_background_image) ?>)no-repeat center center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-bold display-5"><?= $config->hero_text1; ?></h1>
                            <p class="lead"><?= $config->hero_text2; ?></p>
                            <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="<?= base_url('request-demo') ?>" class="btn btn-primary me-3"><?= $config->hero_text_button1; ?></a>
                                <a href="<?= $config->demo_url; ?>" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0 text-primary">
                                    <i class="fas fa-play text-primary border-2 border-primary"></i>
                                    <?= $config->hero_text_button2; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img position-relative mt-5 mt-lg-0">
                            <img src="<?= base_url('assets/img/hero/' . $config->hero_banner_image)  ?>" alt="hero hero-it-solution " class="img-fluid" />
                            <div class="dots">
                                <img src="<?= base_url('assets/img/hero/' . $config->hero_dot_image1) ?>" alt="dot" class="dot-1" />
                                <img src="<?= base_url('assets/img/hero/' . $config->hero_dot_image2) ?>" alt="dot" class="dot-2" />
                            </div>
                            <div class="bubble">
                                <span class="bubble-1"></span>
                                <span class="bubble-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end-->

        <!-- services start -->
        <section class="services-icon ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2><?= $config->service_text1 ?>Services We Provide</h2>
                            <p><?= $config->service_text2 ?>
                                Credibly grow premier ideas rather than bricks-and-clicks strategic
                                theme areas distributed for stand-alone web-readiness.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php foreach ($services as $key => $value) { ?>
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                                <div class="service-icon icon-center">
                                    <img src="<?= base_url('assets/img/services/' . $value->image) ?>" alt="service icon" width="65" height="65" />
                                </div>
                                <div class="service-info-wrap">
                                    <h3 class="h5"><?= $value->title ?></h3>
                                    <p><?= $value->description ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- services end -->

        <!-- price start-->
        <div class="style-guide">

            <!--pricing section start-->
            <section class="pricing-section position-relative overflow-hidden bg-dark text-white pt-80" style="background: url(<?= base_url('assets/img/pricing/'.$config->service_background_image) ?>'assets/img/page-header-bg.svg')no-repeat center center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-heading text-center z-5 position-relative">
                                <h4 class="h5 text-warning"><?= $config->pricing_text1 ?>Plans &amp; Pricing</h4>
                                <h2><?= $config->pricing_text2 ?>Check Our Valuable Price</h2>
                                <p><?= $config->pricing_text3 ?>Objectively market-driven intellectual capital rather than covalent best practices facilitate strategic information before innovation. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="pricing-content-wrap mb--100 bg-white rounded-custom shadow-lg border d-fle z-10">
                                <div class="price-feature-col pricing-feature-info left-radius bg-primary-soft p-5">
                                    <ul class="list-unstyled pricing-feature-list pricing-included-list mb-0">
                                        <?php foreach ($features as $key => $value) { ?>
                                            <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i> </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="price-feature-col pricing-action-info p-5">
                                    <ul class="nav nav-pills mb-4 pricing-tab-list" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button id="pills-daily-tab" data-bs-toggle="pill" data-bs-target="#pills-daily" type="button" role="tab" aria-controls="pills-daily" aria-selected="true"><?= $config->pricing_text_button_daily ?>Daily</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?= $config->pricing_text_button_monthly ?>Monthly</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" class=""><?= $config->pricing_text_button_yearly ?>Yearly</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade" id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">
                                            <h3 class="h5"><?= $config->pricing_text1_daily ?>Pro Daily</h3>
                                            <p><?= $config->pricing_text2_daily ?>Professionally integrate principle-centered intellectual capital whereas equity.</p>
                                            <div class="pricing-price mt-5">
                                                <h3 class="h3 fw-bold"><?= $config->pricing_text3_daily ?>Rp. 1.500 <span><?= $config->pricing_text4_daily ?>/Day</span></h3>
                                            </div>
                                            <a href="<?= base_url('request-demo') ?>" class="btn btn-primary mt-3"><?= $config->pricing_text_button_trial ?>Start 14-Days Trial</a>
                                        </div>
                                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <h3 class="h5"><?= $config->pricing_text1_monthly ?>Pro Monthly</h3>
                                            <p><?= $config->pricing_text2_monthly ?>Professionally integrate principle-centered intellectual capital whereas equity.</p>
                                            <div class="pricing-price mt-5">
                                                <h3 class="h3 fw-bold"><?= $config->pricing_text3_monthly ?>Rp. 35.000 <span><?= $config->pricing_text4_daily ?>/Month</span></h3>
                                            </div>
                                            <a href="<?= base_url('request-demo') ?>" class="btn btn-primary mt-3"><?= $config->pricing_text_button_trial ?>Start 14-Days Trial</a>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <h3 class="h5"><?= $config->pricing_text1_yearly ?>Pro Yearly</h3>
                                            <p><?= $config->pricing_text2_yearly ?>Uniquely engineer prospective alignments without clicks-and-mortar innovation.</p>
                                            <div class="pricing-price mt-5">
                                                <h3 class="h3 fw-bold"><?= $config->pricing_text3_yearly ?>Rp. 375.000 <span><?= $config->pricing_text4_yearly ?>/Year</span></h3>
                                            </div>
                                            <a href="<?= base_url('request-demo') ?>" class="btn btn-primary mt-3"><?= $config->pricing_text_button_trial ?>Start 14-Days Trial</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning left-5"></div>
                <div class="white-space-100 bg-white w-100"></div>
            </section>
            <!--pricing section end-->

        </div>
        <!-- price end-->

        <!-- subscribe start-->
        <section class="cta-subscribe bg-dark text-white ptb-80 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading" data-aos="fade-up">
                                <h4 class="h5 text-warning"><?= $config->subscribe_text1 ?>Let's Try! Get Free Support</h4>
                                <h2><?= $config->subscribe_text2 ?>Start Your 14-Day Free Trial</h2>
                                <p><?= $config->subscribe_text3 ?>We can help you to create your dream website for better business revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                                <a href="<?= base_url('contact-us') ?>" class="btn btn-primary"><?= $config->subscribe_text_button1 ?>Contact with Us</a>
                                <a href="<?= $config->demo_url ?>http://www.youtube.com/watch?v=hAP2QF--2Dg" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0"> <i class="fas fa-play"></i><?= $config->subscribe_text_watch_demo ?> Watch Demo </a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up" data-aos-delay="100">
                                <?php foreach ($subscribe_features as $key => $value) { ?>
                                    <li class="nav-item">
                                        <span><i class="far fa-check-circle text-primary me-2"></i><?= $value->description ?>Free 14-day trial</span>
                                    </li>
                                <?php } ?>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>No credit card required</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Cancel anytime</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section> <!-- subscribe end-->

        <!-- brand start -->
        <section class="brand-logo ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="section-heading text-center">
                            <h2><?= $config->brand_text1 ?>Over 500+ Companies Trusted Us</h2>
                            <p><?= $config->brand_text2 ?>Over 500+ Companies Trusted Us</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <ul class="brand-logo-grid list-unstyled">
                        <?php foreach ($brands as $key => $value) { ?>
                            <li><img src="<?= base_url('assets/img/brands/1-2.png') ?>" alt="brand logo" /></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        <!-- brand end -->

        <!--footer section start-->
        <footer class="footer-section">
            <!--footer bottom start-->
            <div class="footer-bottom  bg-gradient text-white py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0"><?= $config->copyright ?>&copy; 2021 Quiety Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <?php foreach ($social_medias as $key => $value) { ?>
                                        <li class="list-inline-item"><a href="<?= $value->link ?>"><i class="<?= $value->icon ?>fab fa-facebook-f"></i></a></li>
                                    <?php } ?>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end-->
    </div>

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