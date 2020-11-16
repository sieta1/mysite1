
        <?php include 'layouts/header.php'; ?>


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>CONTACT US</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-shape"><img src="img/images/breadcrumb_shape01.png" alt=""></div>
                <div class="breadcrumb-shape"><img src="img/images/breadcrumb_shape02.png" alt=""></div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area">
                <div class="contact-info-wrap pt-90 pb-60">
                    <div class="container">
                        <div class="row justify-content-center justify-content-lg-around">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="contact-info-box mb-30">
                                    <div class="contact-info-icon">
                                        <img src="img/icon/contact_icon01.png" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Tel</h5>
                                        <span><?php echo $cek['tel']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="contact-info-box mb-30">
                                    <div class="contact-info-icon">
                                        <img src="img/icon/contact_icon02.png" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>Find Location</h5>
                                        <span><?php echo $cek['address']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="contact-info-box mb-30">
                                    <div class="contact-info-icon">
                                        <img src="img/icon/contact_icon03.png" alt="">
                                    </div>
                                    <div class="contact-info-content">
                                        <h5>E-Postamız</h5>
                                        <span><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="98f1f6fef7eaf5f9ecf1f7f6d8f1f6fef7b6fbf7f5"><?php echo $cek['mail']; ?>[email&#160;protected]</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-wrap pt-120 pb-120">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-8">
                                <div class="section-title text-center mb-70">
                                    <h6 class="sub-title">Contact Us</h6>
                                    <h2 class="title"><span>How</span> Can We Help You?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12">
                                <div class="contact-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Fast Name *">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="Phone No">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" placeholder="Your Email *">
                                            </div>
                                        </div>
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                        <button class="btn gradient-btn">Send Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contact-map"></div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
<?php include 'layouts/footer.php'; ?>