<?php require_once 'layouts/header.php'; ?>
<!-- header-area-end -->
<?php
$infos = $db->prepare("SELECT * FROM infos");
$infos->execute();
$info = $infos->fetch(PDO::FETCH_ASSOC);
?>

<!-- main-area -->
<main>

    <!-- slider-area -->
    <section class="slider-area">
        <div class="slider-active">
            <div class="single-slider slider-bg fix" data-background="img/slider/slider_bg01.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content text-center">
                                <h2 data-animation="fadeInUp" data-delay=".3s"><?php echo $info['title']; ?></h2>
                                <h6 data-animation="fadeInUp" data-delay=".6s">Agriculture is the science and art of cultivating plants and livestock</h6>
                                <div class="slider-btn">
                                    <a href="#" class="btn gradient-btn" data-animation="fadeInLeft" data-delay=".9s"><span>+</span> discover more</a>
                                    <a href="#" class="btn transparent-btn" data-animation="fadeInRight" data-delay=".9s">shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-shape"><img src="img/slider/slider_shape01.png" data-animation="fadeInLeft" data-delay="1.1s" alt=""></div>
                <div class="slider-shape shape-2"><img src="img/slider/slider_shape02.png" data-animation="fadeInRight" data-delay="1.1s" alt=""></div>
            </div>
            <div class="single-slider slider-bg fix" data-background="img/slider/slider_bg02.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content text-center">
                                <h2 data-animation="fadeInUp" data-delay=".3s">organic and natural</h2>
                                <h6 data-animation="fadeInUp" data-delay=".6s">Agriculture is the science and art of cultivating plants and livestock</h6>
                                <div class="slider-btn">
                                    <a href="#" class="btn gradient-btn" data-animation="fadeInLeft" data-delay=".9s"><span>+</span> discover more</a>
                                    <a href="#" class="btn transparent-btn" data-animation="fadeInRight" data-delay=".9s">shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-shape"><img src="img/slider/slider_shape01.png" data-animation="fadeInLeft" data-delay="1.1s" alt=""></div>
                <div class="slider-shape shape-2"><img src="img/slider/slider_shape02.png" data-animation="fadeInRight" data-delay="1.1s" alt=""></div>
            </div>
            <div class="single-slider slider-bg fix" data-background="img/slider/slider_bg03.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content text-center">
                                <h2 data-animation="fadeInUp" data-delay=".3s">organic and natural</h2>
                                <h6 data-animation="fadeInUp" data-delay=".6s">Agriculture is the science and art of cultivating plants and livestock</h6>
                                <div class="slider-btn">
                                    <a href="#" class="btn gradient-btn" data-animation="fadeInLeft" data-delay=".9s"><span>+</span> discover more</a>
                                    <a href="#" class="btn transparent-btn" data-animation="fadeInRight" data-delay=".9s">shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-shape"><img src="img/slider/slider_shape01.png" data-animation="fadeInLeft" data-delay="1.1s" alt=""></div>
                <div class="slider-shape shape-2"><img src="img/slider/slider_shape02.png" data-animation="fadeInRight" data-delay="1.1s" alt=""></div>
            </div>
        </div>
        <div class="slider-bottom-bg" data-background="img/slider/slider_bottom.png"></div>
    </section>
    <!-- slider-area-end -->

    <!-- features-area -->
    <section class="features-area gray-bg pt-80 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-70">
                        <h6 class="sub-title">WHAT WE DO</h6>
                        <?php
                        if (isset($_GET['status'])) {
                            if ($_GET['status'] == 1)
                            { 
                                ?>
                                 <p>
                        <div class="alert alert-success" role="alert">
                          Hoşgeldiniz <?php echo $_SESSION['mail']; ?>
                        </div>
                        </p>
                        <?php
                            }
                            elseif($_GET['logout'])
                            {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                Çıkış Yaptınız.. Güle güle..
                            </div>
                            </p>
                            <?php
                            }else{

                        }
                        }
                        ?>
                        <p>
                  <h2 class="title"><span>Welcome to</span> Organic Farm</h2>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
            <div class="features-item text-center mb-30">
                <div class="features-thumb">
                    <img src="img/images/features_img01.png" alt="">
                    <div class="features-overlay">
                        <i class="flaticon-cauliflower"></i>
                    </div>
                </div>
                <div class="features-content">
                    <h4><a href="#">Organic Farm</a></h4>
                    <p>Agricultural mean crops livestock and livestock products</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
            <div class="features-item text-center mb-30">
                <div class="features-thumb">
                    <img src="img/images/features_img02.png" alt="">
                    <div class="features-overlay">
                        <i class="flaticon-cow-head"></i>
                    </div>
                </div>
                <div class="features-content">
                    <h4><a href="#">DAIRY PRODUCTS</a></h4>
                    <p>Agricultural mean crops livestock and livestock products</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
            <div class="features-item text-center mb-30">
                <div class="features-thumb">
                    <img src="img/images/features_img03.png" alt="">
                    <div class="features-overlay">
                        <i class="flaticon-rooster"></i>
                    </div>
                </div>
                <div class="features-content">
                    <h4><a href="#">POULTRY PRODUCTS</a></h4>
                    <p>Agricultural mean crops livestock and livestock products</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
            <div class="features-item text-center mb-30">
                <div class="features-thumb">
                    <img src="img/images/features_img04.png" alt="">
                    <div class="features-overlay">
                        <i class="flaticon-heavy-vehicle"></i>
                    </div>
                </div>
                <div class="features-content">
                    <h4><a href="#">crop harvester</a></h4>
                    <p>Agricultural mean crops livestock and livestock products</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- features-area-end -->

<!-- faq-area -->
<section class="faq-area faq-bg pt-120 pb-120" data-background="img/bg/faq_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-image">
                    <img src="img/images/faq_img.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-wrap">
                    <div class="section-title mb-50">
                        <h6 class="sub-title">asked questions</h6>
                        <h2 class="title"><span>Answer</span> Particular Topic</h2>
                    </div>
                    <div id="accordion">
                        <h3>What is farming in agriculture?</h3>
                        <div class="accordion-content">
                            <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.
                            People probably started agriculture</p>
                        </div>
                        <h3>What is difference between farming and agriculture?</h3>
                        <div class="accordion-content">
                            <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.
                            People probably started agriculture</p>
                        </div>
                        <h3>What is importance of farming?</h3>
                        <div class="accordion-content">
                            <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.
                            People probably started agriculture</p>
                        </div>
                        <h3>What is agriculture and its importance?</h3>
                        <div class="accordion-content">
                            <p>Farming is growing crops or keeping animals by people for food and raw materials. Farming is a part of agriculture.
                            People probably started agriculture</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-area-end -->

<!-- video-area -->
<section class="video-area video-bg pt-130" data-background="img/bg/video_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="video-wrap">
                    <div class="video-play">
                        <a href="https://www.youtube.com/watch?v=H1jujj-OTvA" class="popup-video"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="section-title white-title text-center mb-70">
                        <h6 class="sub-title">HELLO AND WELCOME Farm</h6>
                        <h2 class="title"><span>We Take Care</span> of Your Farm 24/7</h2>
                    </div>
                </div>
                <div class="newsletter-wrap">
                    <div class="section-title newsletter-title">
                        <h2 class="title">Sign Up For <span>Newsletter</span></h2>
                    </div>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Enter your email address here">
                            <button class="btn gradient-btn">Subscribe <i class="fas fa-rocket"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video-bottom-shape" data-background="img/bg/video_bottom_shape.png"></div>
</section>
<!-- video-area-end -->

<!-- project-area -->
<section class="project-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <h6 class="sub-title">your dream gallery</h6>
                    <h2 class="title"><span>Our Recent</span> Projects Farm</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-full">
        <div class="row project-active">
            <div class="col-xl-3">
                <div class="project-item mb-30">
                    <div class="project-thumb">
                        <img src="img/images/project_thumb01.jpg" alt="">
                    </div>
                    <div class="project-overlay-content">
                        <div class="project-tag">
                            <a href="#">vegetable</a>
                        </div>
                        <div class="project-content">
                            <h4><a href="#">Rice Field</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="project-item mb-30">
                    <div class="project-thumb">
                        <img src="img/images/project_thumb02.jpg" alt="">
                    </div>
                    <div class="project-overlay-content">
                        <div class="project-tag">
                            <a href="#">vegetable</a>
                        </div>
                        <div class="project-content">
                            <h4><a href="#">Chicken Field</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="project-item mb-30">
                    <div class="project-thumb">
                        <img src="img/images/project_thumb03.jpg" alt="">
                    </div>
                    <div class="project-overlay-content">
                        <div class="project-tag">
                            <a href="#">vegetable</a>
                        </div>
                        <div class="project-content">
                            <h4><a href="#">Rice Field</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="project-item mb-30">
                    <div class="project-thumb">
                        <img src="img/images/project_thumb04.jpg" alt="">
                    </div>
                    <div class="project-overlay-content">
                        <div class="project-tag">
                            <a href="#">vegetable</a>
                        </div>
                        <div class="project-content">
                            <h4><a href="#">Rice Field</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="project-item mb-30">
                    <div class="project-thumb">
                        <img src="img/images/project_thumb03.jpg" alt="">
                    </div>
                    <div class="project-overlay-content">
                        <div class="project-tag">
                            <a href="#">vegetable</a>
                        </div>
                        <div class="project-content">
                            <h4><a href="#">Rice Field</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-area-end -->

<!-- farming-area -->
<section class="farming-area farming-bg pt-120 pb-140" data-background="img/bg/farming_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center">
                    <h6 class="sub-title">your dream gallery</h6>
                    <h2 class="title"><span>Benefits of</span> Organic Farming</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="organic-farm-item">
                    <div class="org-frm-icon">
                        <i class="flaticon-cauliflower"></i>
                        <img src="img/images/organic_item_shape01.png" alt="" class="org-frm-icon-shape">
                    </div>
                    <div class="org-frm-content">
                        <h4><a href="#">Organic Agriculture</a></h4>
                        <p>Agricultural mean crops livestock and livestock products Agriculture was key development.</p>
                        <a href="#" class="btn green-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="organic-farm-item">
                    <div class="org-frm-icon">
                        <i class="flaticon-cow-head"></i>
                        <img src="img/images/organic_item_shape02.png" alt="" class="org-frm-icon-shape">
                    </div>
                    <div class="org-frm-content">
                        <h4><a href="#">More Dairy Products</a></h4>
                        <p>Agricultural mean crops livestock and livestock products Agriculture was key development.</p>
                        <a href="#" class="btn green-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="organic-farm-item">
                    <div class="org-frm-icon">
                        <i class="flaticon-null"></i>
                        <img src="img/images/organic_item_shape03.png" alt="" class="org-frm-icon-shape">
                    </div>
                    <div class="org-frm-content">
                        <h4><a href="#">Improved Symbiosis</a></h4>
                        <p>Agricultural mean crops livestock and livestock products Agriculture was key development.</p>
                        <a href="#" class="btn green-btn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="organic-farm-item">
                    <div class="org-frm-icon">
                        <i class="flaticon-duck"></i>
                        <img src="img/images/organic_item_shape04.png" alt="" class="org-frm-icon-shape">
                    </div>
                    <div class="org-frm-content">
                        <h4><a href="#">Livestock Farming</a></h4>
                        <p>Agricultural mean crops livestock and livestock products Agriculture was key development.</p>
                        <a href="#" class="btn green-btn">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- farming-area-end -->

<!-- fact-area -->
<section class="fact-area fact-bg" data-background="img/bg/fact_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="fact-item">
                    <h2><span class="odometer" data-count="15">00</span>+</h2>
                    <span>plant nurseries</span>
                    <div class="fact-icon"><i class="flaticon-pistachio"></i></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fact-item">
                    <h2><span class="odometer" data-count="99">00</span>+</h2>
                    <span>ORGANIC ORCHARDS</span>
                    <div class="fact-icon"><i class="flaticon-null-1"></i></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fact-item">
                    <h2><span class="odometer" data-count="365">00</span>+</h2>
                    <span>ENVIRONMENTALISTS</span>
                    <div class="fact-icon"><i class="flaticon-grain"></i></div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="fact-item">
                    <h2><span class="odometer" data-count="26">00</span>+</h2>
                    <span>YEARS OF FARMING</span>
                    <div class="fact-icon"><i class="flaticon-placeholder"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fact-area-end -->

<!-- blog-area -->
<section class="blog-area blog-bg pt-120 pb-90" data-background="img/bg/blog_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <h6 class="sub-title">FROM THE BLOG</h6>
                    <h2 class="title"><span>Latest</span> News & Articles</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog-post-item mb-30">
                    <div class="blog-post-thumb position-relative">
                        <a href="blog-details.html"><img src="img/blog/blog_post_thumb01.jpg" alt=""></a>
                        <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>Rice Field</a>
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-meta">
                            <ul>
                                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                <li><i class="far fa-calendar-alt"></i>OCTOBER 23, 2020</li>
                            </ul>
                        </div>
                        <h4><a href="blog-details.html">The Best Milk in the State</a></h4>
                        <p>Agricultural mean crops livestock and livestock products Agriculture was development.</p>
                        <a href="#" class="arrow-btn">Read More <span></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-post-item mb-30">
                    <div class="blog-post-thumb position-relative">
                        <a href="blog-details.html"><img src="img/blog/blog_post_thumb02.jpg" alt=""></a>
                        <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>Rice Field</a>
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-meta">
                            <ul>
                                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                <li><i class="far fa-calendar-alt"></i>OCTOBER 23, 2020</li>
                            </ul>
                        </div>
                        <h4><a href="blog-details.html">Poultry Farming Husbandry</a></h4>
                        <p>Agricultural mean crops livestock and livestock products Agriculture was development.</p>
                        <a href="#" class="arrow-btn">Read More <span></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-post-item mb-30">
                    <div class="blog-post-thumb position-relative">
                        <a href="blog-details.html"><img src="img/blog/blog_post_thumb03.jpg" alt=""></a>
                        <a href="#" class="blog-post-tag"><i class="fas fa-tag"></i>Rice Field</a>
                    </div>
                    <div class="blog-post-content">
                        <div class="blog-post-meta">
                            <ul>
                                <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                <li><i class="far fa-calendar-alt"></i>OCTOBER 23, 2020</li>
                            </ul>
                        </div>
                        <h4><a href="blog-details.html">Cultivating Plants Livestock</a></h4>
                        <p>Agricultural mean crops livestock and livestock products Agriculture was development..</p>
                        <a href="#" class="arrow-btn">Read More <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->

</main>
<!-- main-area-end -->


<!-- footer-area -->
<?php require_once 'layouts/footer.php'; ?>
