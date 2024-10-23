<?php include 'header.php'?>
<!-- Hero Section Start -->
    <div class="hero light-bg-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Hero Left Content Start -->
                    <div class="hero-content">
                        <!-- Google Rating Start -->
                        <div class="google-rating wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <ul>
                                <li>Google Rating <span>5.0</span></li>
                                <li>
                                    <span><img src="images/star.png" alt=""></span>
                                    <span><img src="images/star.png" alt=""></span>
                                    <span><img src="images/star.png" alt=""></span>
                                    <span><img src="images/star.png" alt=""></span>
                                    <span><img src="images/star.png" alt=""></span>
                                </li>
                                <li>based on 492 reviews</li>
                            </ul>
                        </div>
                        <!-- Google Rating End -->

                        <div class="section-title">
                            <h1 class="text-anime-style-3">Simple Fixed Price, Accounting and Tax<br/> <span class="text-anime-style-100">for small business</span>
                            </h1>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <p>We minimise your tax, provide unlimited advice and keep everything super simple. All for
                                a low fixed monthly fee.</p>
                        </div>

                        <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s"
                            style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                            <a href="make-a-referral.php" class="btn-default">Let us save you tax</a>
                            <a href="signup.php" class="btn-default btn-highlighted">Sign Up</a>
                        </div>
                    </div>
                    <!-- Hero Left Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Hero Image Start -->
                    <div class="hero-image">
                        <!-- <figure>
                            <img src="images/hero-img.png" alt="">
                        </figure> -->
                        <p></p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"  class="Log-container">

                            <h2>Sign In</h2>

                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                    <label>Username</label>
                                    <input type="text" name="username"   class="form-control" value="<?php echo $username; ?>">
                                    <span class="help-block"><?php echo $username_err; ?></span>
                            </div>
                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control">
                                    <span class="help-block"><?php echo $password_err; ?></span>
                            </div>

                            <div class="form-group">
                            <!--      <input type="submit" class="btn btn-primary" value="Sign in"> -->
                                <button type="submit" class="btn-default btn-highlighted ms-0 me-2">Sign in</button>
                                <a class="btn-default" href=" https://www.limited-company-contractor-solutions.co.uk/SignUp/SignUp1.php" >Sign up</a>
                            </div>
                            <!-- <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>  -->
                        </form>
                    </div>
                    <!-- Hero Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">What we do</h3>
                        <h1 class="text-anime-style-3">Simple Fixed Price, Accounting and Tax for small business
                        </h1>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- About Video Image Start -->
                    <div class="about-video-image">
                        <!-- About Image Start -->
                        <div class="about-image">
                            <figure class="image-anime reveal"
                                style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <img src="images/fa_1.jpg.webp" alt="" style="transform: translate(0px, 0px);">
                            </figure>
                        </div>
                        <!-- About Image End -->

                        <!-- About Video Btn Start -->
                        <div class="about-video-btn">
                            <div class="icon-box">
                                <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video">
                                    <span><img src="images/videoicon.png" alt=""></span>play video</a>
                            </div>
                        </div>
                        <!-- About Video Btn End -->
                    </div>
                    <!-- About Video Image End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- About Company Item Start -->
                    <div class="about-company-item wow fadeInUp" data-wow-delay="0.25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="images/icon-about-company-1.svg" alt="">
                        </div>
                        <div class="about-company-content">
                            <p>We prioritize building long-term relationships with our clients and always put their
                                needs first.</p>
                        </div>
                    </div>
                    <!-- About Company Item End -->
                </div>

                <div class="col-md-4">
                    <!-- About Company Item Start -->
                    <div class="about-company-item wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="images/icon-about-company-2.svg" alt="">
                        </div>
                        <div class="about-company-content">
                            <p>Every client is unique, and we tailor our services to fit your individual circumstances
                                and goals.</p>
                        </div>
                    </div>
                    <!-- About Company Item End -->
                </div>

                <div class="col-md-4">
                    <!-- About Company Item Start -->
                    <div class="about-company-item wow fadeInUp" data-wow-delay="0.75s"
                        style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="images/icon-about-company-3.svg" alt="">
                        </div>
                        <div class="about-company-content">
                            <p>We leverage cutting-edge technology and software to streamline processes.</p>
                        </div>
                    </div>
                    <!-- About Company Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Our Services Start -->
    <div class="our-service light-bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Products/Packages</h3>
                        <h2 class="text-anime-style-3">Your business goals are our priority</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Full Compliance package -£65 per month – everything you need to start, run and wind up a fully compliant, tax efficient limit company including:</p>

                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>Unlimited Tax Reports, so you always know what you owe</li>
                        <li>Free tax optimisation so you never pay more tax than you should</li>
                        <li>Your annual company accounts</li>
                        <li>Your annual company tax return</li>
                        <li>Your annual company confirmation statement</li>
                        <li>Your company VAT returns if necessary</li>
                        <li>Annual personal tax returns for each director</li>
                        <li>Unlimited advice on your personal and company tax affairs from a dedicated chartered accountant</li>
                        <li>Free company formation to get you started if you need one, and registration for all necessary taxes</li>
                        <li>Free company dissolution once you're done  (Business Asset Disposal Relief can be provided for an additional charge)</li>
                        <li>Free UK company registered office address and director’s correspondence address</li>
                        <li>Payroll for directors can be provided on the annual scheme for an extra £8 per director per month</li>
                    </ul>
                </div>

                <div class="page-blog">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <!-- Blog Item Start -->
                                <div class="blog-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                                    <!-- Post Featured Image Start-->
                                    <div class="post-featured-image">
                                        <figure class="image-anime">
                                            <a href="product-details.php"><img src="images/post-1.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                    <!-- Post Featured Image End -->

                                    <!-- post Item Body Start -->
                                    <div class="post-item-body">
                                        <h2><a href="product-details.php">Limited Company packages</a></h2>
                                        <p>starting at <span class="product-price">£65</span> per month</p>
                                    </div>
                                    <!-- Post Item Body End-->

                                    <!-- Post Item Footer Start-->
                                    <div class="post-item-footer">
                                        <a href="product-details.php" class="btn-default">read more</a>
                                    </div>
                                    <!-- Post Item Footer End-->
                                </div>
                                <!-- Blog Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Blog Item Start -->
                                <div class="blog-item wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                    <!-- Post Featured Image Start-->
                                    <div class="post-featured-image">
                                        <figure class="image-anime">
                                            <a href="product-details.php"><img src="images/post-2.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                    <!-- Post Featured Image End -->

                                    <!-- post Item Body Start -->
                                    <div class="post-item-body">
                                        <h2><a href="product-details.php">Self-Assessment / Self-employed packages</a></h2>
                                        <p>starting at <span class="product-price">£15</span> per month</p>
                                    </div>
                                    <!-- Post Item Body End-->

                                    <!-- Post Item Footer Start-->
                                    <div class="post-item-footer">
                                        <a href="product-details.php" class="btn-default">read more</a>
                                    </div>
                                    <!-- Post Item Footer End-->
                                </div>
                                <!-- Blog Item End -->
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <!-- Blog Item Start -->
                                <div class="blog-item wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                                    <!-- Post Featured Image Start-->
                                    <div class="post-featured-image">
                                        <figure class="image-anime">
                                            <a href="product-details.php"><img src="images/post-3.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                    <!-- Post Featured Image End -->

                                    <!-- post Item Body Start -->
                                    <div class="post-item-body">
                                        <h2><a href="product-details.php">Umbrella packages</a></h2>
                                        <p>starting at <span class="product-price">£22.50</span> per invoice</p>
                                    </div>
                                    <!-- Post Item Body End-->

                                    <!-- Post Item Footer Start-->
                                    <div class="post-item-footer">
                                        <a href="product-details.php" class="btn-default">read more</a>
                                    </div>
                                    <!-- Post Item Footer End-->
                                </div>
                                <!-- Blog Item End -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="service-image">
                            <figure class="image-anime">
                                <a href="product-details.php"><img src="images/service-img-1.jpg" alt=""></a>
                            </figure>
                        </div>
                        <div class="service-content">
                            <h3>tax planning and preparation</h3>
                            <div class="service-readmore-btn">
                                <a href="product-details.php" class="btn-default">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-image">
                            <figure class="image-anime">
                                <a href="product-details.php"><img src="images/service-img-2.jpg" alt=""></a>
                            </figure>
                        </div>
                        <div class="service-content">
                            <h3>book keeping and accounting</h3>
                            <div class="service-readmore-btn">
                                <a href="product-details.php" class="btn-default">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="service-image">
                            <figure class="image-anime">
                                <a href="product-details.php"><img src="images/service-img-3.jpg" alt=""></a>
                            </figure>
                        </div>
                        <div class="service-content">
                            <h3>business advisory service</h3>
                            <div class="service-readmore-btn">
                                <a href="product-details.php" class="btn-default">read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Our Services End -->

    <!-- Client Testimonials Start -->
    <div class="client-testimonials">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <div class="client-testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">testimonials
                            </h3>
                            <h2 class="text-anime-style-3" style="perspective: 400px;">
                                <div class="split-line" style="display: block; text-align: start; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            R</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            l</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            r</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            f</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            u</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            e</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                    </div>
                                </div>
                                <div class="split-line" style="display: block; text-align: start; position: relative;">
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            d</div>
                                    </div>
                                    <div style="position:relative;display:inline-block;">
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            s</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            f</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            a</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            c</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            t</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            i</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            o</div>
                                        <div
                                            style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                            n</div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Section Body Start -->
                        <div class="section-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s"
                                style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">At vero
                                eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                                deleniti atque corrupti.</p>
                            <a href="contact-us.php" class="btn-default wow fadeInUp" data-wow-delay="0.5s"
                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">contact
                                us</a>
                        </div>
                        <!-- Section Body Btn End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-12dd253c368104f10a" aria-live="off"
                                style="transition-duration: 0ms; transform: translate3d(-1210px, 0px, 0px); transition-delay: 0ms;">
                                <!-- Testimonial Slide Start -->

                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->

                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->

                                <!-- Testimonial Slide End -->
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 3"
                                    data-swiper-slide-index="0" style="width: 605px;">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-1.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h2>john doe</h2>
                                                <p>(customer)</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                                praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                                molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply
                                                dummy text of the printing and typesetting industry Lorem Ipsum has been
                                                the industry's standard .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3"
                                    data-swiper-slide-index="1" style="width: 605px;">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h2>banson doe</h2>
                                                <p>(CEO)</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                                praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                                molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply
                                                dummy text of the printing and typesetting industry Lorem Ipsum has been
                                                the industry's standard .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3"
                                    data-swiper-slide-index="2" style="width: 605px;">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-3.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h2>arita banson</h2>
                                                <p>(employee)</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                                praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                                molestias excepturi sint occaecati cupiditate. Lorem Ipsum is simply
                                                dummy text of the printing and typesetting industry Lorem Ipsum has been
                                                the industry's standard .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                                aria-controls="swiper-wrapper-12dd253c368104f10a"></div>
                            <div class="hero-button-next" tabindex="0" role="button" aria-label="Next slide"
                                aria-controls="swiper-wrapper-12dd253c368104f10a"></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Client Testimonials End -->
    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us light-bg-section mb-5">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">How we work</h3>
                        <h2 class="text-anime-style-3">Why choose us as your trusted financial partner?</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Why Choose Image Box Start -->
                    <div class="why-choose-image-box wow fadeInUp" data-wow-delay="0.25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        <!-- Why Choose Image Start -->
                        <div class="why-choose-image">
                            <img src="images/why-choose-us-img.jpg" alt="">
                        </div>
                        <!-- Why Choose Image End -->

                        <!-- Why Choose Content Start -->
                        <div class="why-choose-content">
                            <!-- Why Choose Title Start -->
                            <div class="why-choose-title">
                                <h2 class="text-anime-style-3" style="perspective: 400px;">
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                E</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                x</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                p</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                m</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                l</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                ,</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                s</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                r</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                ,</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                d</div>
                                        </div>
                                    </div>
                                    <div class="split-line"
                                        style="display: block; text-align: start; position: relative;">
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                f</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                f</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                i</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                c</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                o</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                u</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                        </div>
                                        <div style="position:relative;display:inline-block;">
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                m</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                a</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                g</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                m</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                e</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                n</div>
                                            <div
                                                style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">
                                                t</div>
                                        </div>
                                    </div>
                                </h2>
                            </div>
                            <!-- Why Choose Title End -->

                            <!-- Why Choose Counter Start -->
                            <div class="why-choose-counter">
                                <h3><span class="counter">12</span> Years</h3>
                                <p>in accounting services</p>
                            </div>
                            <!-- Why Choose Counter End -->
                        </div>
                        <!-- Why Choose Content End -->
                    </div>
                    <!-- Why Choose Image Box End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="images/icon-why-choose-1.svg" alt="">
                        </div>
                        <div class="why-choose-body">
                            <h3>expertise you can trust</h3>
                            <p>Quisque ligula quam, tempus non tempor sed, tempor in ligula. In sit amet orci elit.
                                Donec egestas eros sit amet odio ultricies fermentum. Phasellus ullamcorper.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="images/icon-why-choose-2.svg" alt="">
                        </div>
                        <div class="why-choose-body">
                            <h3>transparent communication</h3>
                            <p>Quisque ligula quam, tempus non tempor sed, tempor in ligula. In sit amet orci elit.
                                Donec egestas eros sit amet odio ultricies fermentum. Phasellus ullamcorper.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item wow fadeInUp" data-wow-delay="0.75s"
                        style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                        <div class="icon-box">
                            <img src="images/icon-why-choose-3.svg" alt="">
                        </div>
                        <div class="why-choose-body">
                            <h3>client satisfaction</h3>
                            <p>Quisque ligula quam, tempus non tempor sed, tempor in ligula. In sit amet orci elit.
                                Donec egestas eros sit amet odio ultricies fermentum. Phasellus ullamcorper.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <?php include 'footer.php'?>