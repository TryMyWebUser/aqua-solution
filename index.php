<?php include "libs/load.php"; include "temp/header.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .col-center {
        margin: 0 auto;
        float: none !important;
    }
    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }
    .carousel-item {
        color: #999;
        font-size: 14px;
        text-align: center;
        overflow: hidden;
        /* min-height: 290px; */
    }
    .carousel .item .img-box {
        width: 135px;
        height: 135px;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 50%;
    }
    .carousel .img-box img {
        width: 100%;
        height: 100%;
        display: block;
        border-radius: 50%;
    }
    .carousel .overview {
        font-style: italic;
    }
    .carousel .overview b {
        text-transform: uppercase;
        color: #db584e;
    }
    .carousel .carousel-control {
        width: 40px;
        height: 40px;
        margin-top: -20px;
        top: 50%;
        background: none;
    }
    .carousel-control i {
        font-size: 68px;
        line-height: 42px;
        position: absolute;
        display: inline-block;
        color: rgba(0, 0, 0, 0.8);
        text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
    }
    .carousel .carousel-indicators {
        bottom: -40px;
    }
    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 1px 3px;
        border-radius: 50%;
    }
    .carousel-indicators li {
        background: #999;
        border-color: transparent;
        box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
    }
    .carousel-indicators li.active {
        background: #555;
        box-shadow: inset 0 2px 1px rgba(0, 0, 0, 0.2);
    }
</style>

        <!-- main-area -->
        <main>
            <!-- slider-area -->
            <section id="home" class="slider-area fix p-relative">
                <div class="slider-active">
                    <div class="single-slider slider-bg slider-bg5 d-flex align-items-center" style="background-image: url(assets/img/slider/slider_img01.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider-content s-slider-content text-left">
                                        <span data-animation="fadeInUp" data-delay=".2s">Welcome to</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">
                                            Harmony <span>Home</span>
                                        </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                        Harmony Home was established in 2011 by Shelva Kummar RK. with a vision to provide high-quality home solutions.
                                        </p>
                                        <div class="slider-btn mt-40">
                                            <a href="tel:+919626414446" class="btn ss-btn" data-animation="fadeInRight" data-delay=".5s">For Enquiry</a>
                                            <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg slider-bg5 d-flex align-items-center" style="background-image: url(assets/img/slider/slider_img02.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider-content s-slider-content text-left">
                                        <span data-animation="fadeInUp" data-delay=".2s">Welcome to</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">
                                            Harmony <span>Home</span>
                                        </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                        Harmony Home was established in 2011 by Shelva Kummar RK. with a vision to provide high-quality home solutions.
                                        </p>
                                        <div class="slider-btn mt-40">
                                            <a href="tel:+919626414446" class="btn ss-btn" data-animation="fadeInRight" data-delay=".5s">For Enquiry</a>
                                            <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg slider-bg5 d-flex align-items-center" style="background-image: url(assets/img/slider/slider_img03.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider-content s-slider-content text-left">
                                        <span data-animation="fadeInUp" data-delay=".2s">Welcome to</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">
                                            Harmony <span>Home</span>
                                        </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                        Harmony Home was established in 2011 by Shelva Kummar RK. with a vision to provide high-quality home solutions.
                                        </p>
                                        <div class="slider-btn mt-40">
                                            <a href="tel:+919626414446" class="btn ss-btn" data-animation="fadeInRight" data-delay=".5s">For Enquiry</a>
                                            <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg slider-bg5 d-flex align-items-center" style="background-image: url(assets/img/slider/slider_img04.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="slider-content s-slider-content text-left">
                                        <span data-animation="fadeInUp" data-delay=".2s">Welcome to</span>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">
                                            Harmony <span>Home</span>
                                        </h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">
                                        Harmony Home was established in 2011 by Shelva Kummar RK. with a vision to provide high-quality home solutions.
                                        </p>
                                        <div class="slider-btn mt-40">
                                            <a href="tel:+919626414446" class="btn ss-btn" data-animation="fadeInRight" data-delay=".5s">For Enquiry</a>
                                            <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->
            <!-- about-area -->
            <section id="about" class="about-area about-p pt-100 pb-95 p-relative" style="background-image: url(assets/img/bg/about_aliment_bg.png); background-size: contain; background-repeat: no-repeat; background-position: center center;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="about-content s-about-content pl-30">
                                <div class="about-title second-atitle">
                                    <span>
                                        About Us <small class="circle-right"><img src="assets/img/bg/circle_right.png" alt="img" /></small>
                                    </span>
                                    <h2>Harmony Home</h2>
                                </div>
                                <p>Harmony Home was established in 2011 by Shelva Kummar RK. with a vision to provide high-quality home solutions. Over the years, we have built a reputation for offering top-notch products and reliable services that ensure customer satisfaction. Our expertise lies in delivering advanced home appliances that enhance your lifestyle and keep your home safe and clean.</p>
                                <div class="slider-btn mt-30">
                                    <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More</a>
                                    <div class="btn-after" data-animation="fadeInRight" data-delay=".8s"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="s-about-img p-relative">
                                <img src="assets/img/features/about_img02.png" alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- counter-area -->
            <div class="counter-area" style="background-image: url(assets/img/count/count-bg.jpg); background-repeat: no-repeat; background-position: bottom;">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-counter-img text-center fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <img src="assets/img/count/count-main.png" alt="img" class="img" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <img src="assets/img/count/icon.png" alt="img" />
                                <div class="counter p-relative"><span class="count">1000</span><small>+</small></div>
                                <p>Happy Clients</p>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <img src="assets/img/count/icon2.png" alt="img" />
                                <div class="counter p-relative"><span class="count">2011</span><small>+</small></div>
                                <p>Since</p>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-counter text-center wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <img src="assets/img/count/icon3.png" alt="img" />
                                <div class="counter p-relative"><span class="count">14</span><small>+</small></div>
                                <p>Experience</p>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->
            <!-- services-area -->
            <section
                id="services"
                class="services-area services-bg services-two pt-95 pb-70"
                style="background-image: url(assets/img/bg/services_aliment_bg.png); background-size: contain; background-repeat: no-repeat; background-position: center center;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="section-title text-center pl-40 pr-40 mb-80 wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <span>
                                    <small class="circle-left"><img src="assets/img/bg/circle_Left.png" alt="img" /></small> our services <small class="circle-right"><img src="assets/img/bg/circle_right.png" alt="img" /></small>
                                </span>
                                <h2>We Offer Best Product Service To You.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="s-single-services active wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="services-icon">
                                    <img src="assets/img/services/1.png" alt="img" class="d-active-icon" />
                                    <img src="assets/img/services/1-hover.png" alt="img" class="active-icon" />
                                </div>
                                <div class="second-services-content">
                                    <h5><a href="services.php">Water Purifier</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="s-single-services wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="services-icon">
                                    <img src="assets/img/services/2.png" alt="img" class="d-active-icon" />
                                    <img src="assets/img/services/2-hover.png" alt="img" class="active-icon" />
                                </div>
                                <div class="second-services-content">
                                    <h5><a href="services.php">Vacuum Cleaner</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="s-single-services wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="services-icon">
                                    <img src="assets/img/services/3.png" alt="img" class="d-active-icon" />
                                    <img src="assets/img/services/3-hover.png" alt="img" class="active-icon" />
                                </div>
                                <div class="second-services-content">
                                    <h5><a href="services.php">Water Softener</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="s-single-services wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <div class="services-icon">
                                    <img src="assets/img/services/4.png" alt="img" class="d-active-icon" />
                                    <img src="assets/img/services/4-hover.png" alt="img" class="active-icon" />
                                </div>
                                <div class="second-services-content">
                                    <h5><a href="services.php">All Brand Services</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
            <!-- project-area-->
            <section id="project" class="project pt-95 fix" style="background-image: url(assets/img/bg/portfolio_bg.png); background-size: contain; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-10">
                            <div class="section-title text-left pl-40 pr-40 mb-80">
                                <span>
                                    Products <small class="circle-right"><img src="assets/img/bg/circle_right.png" alt="img" /></small>
                                </span>
                                <h2>Our Latest Products</h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10"></div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row portfolio-active">
                        <?php
                            $conn = Database::getConnect();
                            $product = Operations::getCateChecker($conn);
                            if (!empty($product)) {
                                foreach ($product as $pro) {
                        ?>
                        <div class="col-xl-4">
                            <div class="single-project mb-30 wow fadeInUp animated" style="box-shadow: 0 0 6px;" data-animation="fadeInDown animated" data-delay=".2s">
                                <a href="single-product.php?data=<?= $pro['category']; ?>">
                                    <div class="project-thumb">
                                        <img src="assets/<?= $pro['img']; ?>" alt="img" class="img" />
                                    </div>
                                    <div class="project-info">
                                        <h4 class="m-0"><?= $pro['category']; ?></h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php } } else { echo "Product Not Found"; } ?>
                    </div>
                </div>
            </section>
            <!-- project-area-end -->

            <!-- testimonial-area -->
            <style>
                .gap-3 {
                    gap: 0.5rem;
                    color: #ffc107;
                }
            </style>
            <section
                id="testimonios"
                class="testimonial-area testimonial-p pt-50 pb-100 fix"
                style="background-image: url(assets/img/bg/testimonial_bg.png); background-size: contain; background-repeat: no-repeat; background-position: center center;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="section-title center-align mb-40 wow fadeInDown animated text-center" data-animation="fadeInDown animated" data-delay=".2s">
                                <span>
                                    <small class="circle-left"><img src="assets/img/bg/circle_Left.png" alt="img" /></small> Testimonial <small class="circle-right"><img src="assets/img/bg/circle_right.png" alt="img" /></small>
                                </span>
                                <h2>What Our Client’s Say’s</h2>
                            </div>
                            <div class="testimonial-active2">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Carousel -->
                                    <div class="carousel-inner">
                                        <?php
                                            $reviews = Operations::getReviews($conn);
                                            if (!empty($reviews)) {
                                                foreach ($reviews as $index => $r) {
                                        ?>
                                        <div class="item carousel-item <?= $index == 0 ? 'active' : ''; ?>">
                                            <p class="overview"><b><?= $r['name'] ?></b></p>
                                            <div class="d-flex align-items-center justify-content-center gap-3">
                                                <?php for ($i = 1; $i <= $r['rating']; $i++) { ?>
                                                <p><i class="fa fa-star"></i></p>
                                                <?php } ?>
                                            </div>
                                            <p class="testimonial">
                                                <?= $r['review']; ?>
                                            </p>
                                        </div>
                                        <?php } } else { echo "No Reviews"; } ?>
                                    </div>
                                    <!-- Carousel Controls -->
                                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- counter-area -->
            <div class="call-area" style="background-image: url(assets/img/call/call-bg.png); background-repeat: no-repeat; background-position: bottom;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="single-counter-img fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                <img src="assets/img/call/call-man.png" alt="img" class="img" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <h2>Harmony <span>Home</span></h2>
                            <p>Harmony Home was established in 2011 by Shelva Kummar RK. with a vision to provide high-quality home solutions. Over the years, we have built a reputation for offering top-notch products and reliable services that ensure customer satisfaction.</p>
                            <div class="number"><a style="color: inherit;" href="tel:+919626414446">+91 96264 14446</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->
        </main>
        <!-- main-area-end -->
        
        <?php include "temp/footer.php" ?>