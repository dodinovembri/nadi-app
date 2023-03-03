<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/components/styles') ?>
    <title><?= $config->title ?></title>
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/favicon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <?= $this->include('frontend/components/header') ?>

        <!--register section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120" style="background: url(<?= base_url('assets/img/configs/' . $config->hero_background_image) ?>)no-repeat center center">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-7 col-md-6 order-0 order-lg-1">
                        <div class="hero-img position-relative mt-5 mt-lg-0">
                            <img src="<?= base_url('assets/img/configs/registration.png') ?>" alt="hero hero-it-solution " class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6 order-0 order-lg-1">
                        <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-1">
                            <h3 class="fw-medium h4">Create your account</h3>

                            <form action="#" class="mt-4 register-form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Name" aria-label="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Password" aria-label="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Confirm Password" aria-label="confirm-password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label small" for="flexCheckChecked">
                                                I agree to the
                                                <a href="#"> Terms & Conditions and Privacy Policy</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-4 d-block w-100">Continue
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->

        <?= $this->include('frontend/components/footer') ?>
    </div>
    <!-- scripts -->
    <?= $this->include('frontend/components/scripts') ?>
</body>

</html>