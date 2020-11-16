        <!-- footer-area -->
        <footer>
            <div class="footer-top footer-bg fix" data-background="img/bg/footer_bg.jpg">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="img/logo/w_logo.png" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <p>Agrifram Farming of relse etras sheets connig passag.</p>
                                    <div class="footer-contact">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>PO Box W75 Street
                                            lan West new queens</li>
                                            <li><i class="fas fa-headphones"></i> <span>Phone : </span>+24 1245 654 235</li>
                                            <li><i class="fas fa-envelope-open"></i><span>Email : </span><a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="751c1b131a35100d10180519105b161a18">[email&#160;protected]</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Menus</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <?php
                                        $menus = $db->prepare("SELECT * FROM menus");
                                        $menus->execute();
                                        while ( $cekM = $menus->fetch(PDO::FETCH_ASSOC)) {
                                            $check = '/phpsitesi/'.$cekM['link'];
                                            $url = $_SERVER['REQUEST_URI'];
                                            ?>
                                            <li class="<?php echo $url === $check ? 'active' : '';  ?>"><a href="<?php echo $cekM['link']; ?>"><?php echo $cekM['name']; ?></a>
                                            </li>
                                        <?php } ?>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Need Help?</h5>
                                </div>
                                <div class="footer-blog-post">
                                    <ul>
                                        <li>
                                            <div class="f-blog-post-thumb">
                                                <a href="#"><img src="img/blog/f_blog_thumb01.jpg" alt=""></a>
                                            </div>
                                            <div class="f-blog-post-content">
                                                <h5><a href="#">Agriculture is the science and art of cultivating</a></h5>
                                                <span>Tonoy Pueyo</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="f-blog-post-thumb">
                                                <a href="#"><img src="img/blog/f_blog_thumb01.jpg" alt=""></a>
                                            </div>
                                            <div class="f-blog-post-content">
                                                <h5><a href="#">Whereby farming doated species create</a></h5>
                                                <span>Mark Wiens</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Follow us</h5>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="<?php echo $cek['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo $cek['instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?php echo $cek['youtube']; ?>"><i class="fab fa-youtube-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>newsletter sign up</h5>
                                </div>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email">
                                        <button><i class="fas fa-rocket"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-shape fb-shape1 running"><img src="img/images/footer_vector01.png" alt=""></div>
                <div class="footer-bottom-shape fb-shape2"><img src="img/images/footer_vector02.png" alt=""></div>
                <div class="footer-bottom-shape fb-shape3"><img src="img/images/footer_vector03.png" class="rotateme" alt=""></div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2020 <a href="#">Agrifram</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





        <!-- JS here -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
    </html>