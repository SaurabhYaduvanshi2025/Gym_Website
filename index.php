<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Home 01 - Zymzoo - Gym & Fitness Centre Bootstrap 5 Template</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Exo:400" rel="stylesheet">

  <!--== Bootstrap CSS ==-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--== Font-awesome Icons CSS ==-->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--== Pe Icon 7 Min Icons CSS ==-->
  <link href="assets/css/pe-icon-7-stroke.min.css" rel="stylesheet" />
  <!--== Animate CSS ==-->
  <link href="assets/css/animate.css" rel="stylesheet" />
  <!--== Aos CSS ==-->
  <link href="assets/css/aos.css" rel="stylesheet" />
  <!--== FancyBox CSS ==-->
  <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet" />
  <!--== Slicknav CSS ==-->
  <link href="assets/css/slicknav.css" rel="stylesheet" />
  <!--== Swiper CSS ==-->
  <link href="assets/css/swiper.min.css" rel="stylesheet" />
  <!--== Slick CSS ==-->
  <link href="assets/css/slick.css" rel="stylesheet" />
  <!--== Main Style CSS ==-->
  <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body>

  <!--wrapper start-->
  <div class="wrapper home-default-wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
      <div class="preloader">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->

    <?php include 'include/header.php'; ?>

    <!--== End Header Wrapper ==-->


    <?php include 'include/heroarea.php'; ?>

    <!--== Start Features Area Wrapper ==-->


    <?php include 'include/featuresarea.php'; ?>


    <!--== End Features Area Wrapper ==-->

    <!--== Start About Area ==-->
    <?php include 'include/aboutus.php'; ?>
    <!--== End About Area ==-->

    <!--== Start Features Area Wrapper ==-->

    <?php include 'include/science.php'; ?>


    <!--== Start Service Area ==-->

    <?php include 'include/servicearea.php'; ?>

    <!--== End Service Area ==-->



    <!--== Start Gallery Slider Area Wrapper ==-->
    <section class="gallery-area gallery-default-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xl-4 pr-0">
            <div class="section-title stitle-style2" data-aos="fade-up" data-aos-duration="1000">
              <div class="subtitle">FITNESS GALLERY</div>
              <h2 class="title">BELIEVE IN <span>YOURSELF, <br>BE FIT </span>& HEALTHIER</h2>
            </div>
          </div>
          <!-- <div class="col-md-6 col-xl-8 d-none d-md-block text-center text-md-end">
            <a href="classes.html" class="btn-theme">VIEW ALL</a>
          </div> -->
        </div>
      </div>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-12">
            <div class="gallery-slider-content">
              <div class="swiper-container gallery-slider-container">
                <div class="swiper-wrapper gallery-slider">
                  <div class="swiper-slide">
                    <div class="gallery-item">
                      <div class="thumb">
                        <a class="lightbox-image" data-fancybox="gallery" href="assets/img/gallery/g1.png"><img src="assets/img/gallery/g1.png" alt="Image"></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-item">
                      <div class="thumb">
                        <a class="lightbox-image" data-fancybox="gallery" href="assets/img/gallery/g2.png"><img src="assets/img/gallery/g2.png" alt="Image"></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-item">
                      <div class="thumb">
                        <a class="lightbox-image" data-fancybox="gallery" href="assets/img/gallery/g3.png"><img src="assets/img/gallery/g3.png" alt="Image"></a>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="gallery-item">
                      <div class="thumb">
                        <a class="lightbox-image" data-fancybox="gallery" href="assets/img/gallery/g4.png"><img src="assets/img/gallery/g4.png" alt="Image"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Gallery Slider Area Wrapper ==-->

    <!--== Start Team Area ==-->
    <section class="team-area team-default-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
              <h2 class="title">PROFESSIONAL <span>INSTRUCTORS</span></h2>
              <div class="desc">
                <p>Gym classes dolor sit amet, consectetur adipiscing elit, sed do eiod tempor <br>didunt ut labore et dolore m et dolore magna aliqua minim niam</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1100">
          <div class="col-sm-6 col-lg-3">
            <!-- Start Team Item -->
            <div class="team-item mb-md-30">
              <div class="team-member">
                <div class="thumb">
                  <a href="team-details.html"><img src="assets/img/team/1.jpg" alt="Image"></a>
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name"><a href="team-details.html">Robert Cristopher</a></h4>
                    <h6 class="designation">Bodybuilding Trainer</h6>
                    <div class="social-icons">
                      <a href="#/"><i class="fa fa-facebook icon"></i></a>
                      <a href="#/"><i class="fa fa-phone icon"></i></a>
                      <a href="#/"><i class="fa fa-instagram icon"></i></a>
                      <a href="#/"><i class="fa fa-twitter icon"></i></a>
                    </div>
                    <!-- <div class="team-footer">
                      <a class="btn" href="team-details.html">VIEW PROFILE</a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Item -->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!-- Start Team Item -->
            <div class="team-item mb-md-30">
              <div class="team-member">
                <div class="thumb">
                  <a href="team-details.html"><img src="assets/img/team/2.jpg" alt="Image"></a>
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name"><a href="team-details.html">Oliviea Williams</a></h4>
                    <h6 class="designation">Fitness Trainer</h6>
                    <div class="social-icons">
                      <a href="#/"><i class="fa fa-facebook icon"></i></a>
                      <a href="#/"><i class="fa fa-phone icon"></i></a>
                      <a href="#/"><i class="fa fa-instagram icon"></i></a>
                      <a href="#/"><i class="fa fa-twitter icon"></i></a>
                    </div>
                    <!-- <div class="team-footer">
                      <a class="btn" href="team-details.html">VIEW PROFILE</a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Item -->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!-- Start Team Item -->
            <div class="team-item mb-xs-30">
              <div class="team-member">
                <div class="thumb">
                  <a href="team-details.html"><img src="assets/img/team/3.jpg" alt="Image"></a>
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name"><a href="team-details.html">Nikolus Smith</a></h4>
                    <h6 class="designation">Crossfit Trainer</h6>
                    <div class="social-icons">
                      <a href="#/"><i class="fa fa-facebook icon"></i></a>
                      <a href="#/"><i class="fa fa-phone icon"></i></a>
                      <a href="#/"><i class="fa fa-instagram icon"></i></a>
                      <a href="#/"><i class="fa fa-twitter icon"></i></a>
                    </div>
                    <!-- <div class="team-footer">
                      <a class="btn" href="team-details.html">VIEW PROFILE</a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Item -->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!-- Start Team Item -->
            <div class="team-item">
              <div class="team-member">
                <div class="thumb">
                  <a href="team-details.html"><img src="assets/img/team/4.jpg" alt="Image"></a>
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name"><a href="team-details.html">Jenifer Parker</a></h4>
                    <h6 class="designation">Aerobics Instructor</h6>
                    <div class="social-icons">
                      <a href="#/"><i class="fa fa-facebook icon"></i></a>
                      <a href="#/"><i class="fa fa-phone icon"></i></a>
                      <a href="#/"><i class="fa fa-instagram icon"></i></a>
                      <a href="#/"><i class="fa fa-twitter icon"></i></a>
                    </div>
                    <!-- <div class="team-footer">
                      <a class="btn" href="#/">VIEW PROFILE</a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Team Item -->
          </div>
        </div>
      </div>
    </section>
    <!--== End Team Area ==-->

    <!--== Start Testimonial Area ==-->

    <?php include 'include/testimonial.php'; ?>

    <!--== End Testimonial Area ==-->

    <!--== Start Blog Area Wrapper ==-->

    <!--== End Blog Area Wrapper ==-->
    </main>

    <!--== Start Footer Area Wrapper ==-->

    <?php include 'include/footer.php'; ?>

    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

    <!--== Start Side Menu ==-->
    <aside class="off-canvas-wrapper">
      <div class="off-canvas-inner">
        <div class="off-canvas-overlay d-none"></div>
        <!-- Start Off Canvas Content Wrapper -->
        <div class="off-canvas-content">
          <!-- Off Canvas Header -->
          <div class="off-canvas-header">
            <div class="close-action">
              <button class="btn-close"><i class="pe-7s-close"></i></button>
            </div>
          </div>

          <div class="off-canvas-item">
            <!-- Start Mobile Menu Wrapper -->
            <div class="res-mobile-menu">
              <!-- Note Content Auto Generate By Jquery From Main Menu -->
            </div>
            <!-- End Mobile Menu Wrapper -->
          </div>
          <!-- Off Canvas Footer -->
          <div class="off-canvas-footer"></div>
        </div>
        <!-- End Off Canvas Content Wrapper -->
      </div>
    </aside>
    <!--== End Side Menu ==-->
  </div>

  <!--=======================Javascript============================-->

  <!--=== Modernizr Min Js ===-->
  <script src="assets/js/modernizr.js"></script>
  <!--=== jQuery Min Js ===-->
  <script src="assets/js/jquery-main.js"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="assets/js/jquery-migrate.js"></script>
  <!--=== Popper Min Js ===-->
  <script src="assets/js/popper.min.js"></script>
  <!--=== Bootstrap Min Js ===-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!--=== jquery Appear Js ===-->
  <script src="assets/js/jquery.appear.js"></script>
  <!--=== jquery Swiper Min Js ===-->
  <script src="assets/js/swiper.min.js"></script>
  <!--=== jquery Fancybox Min Js ===-->
  <script src="assets/js/fancybox.min.js"></script>
  <!--=== jquery Aos Min Js ===-->
  <script src="assets/js/aos.min.js"></script>
  <!--=== jquery Slicknav Js ===-->
  <script src="assets/js/jquery.slicknav.js"></script>
  <!--=== jquery Countdown Js ===-->
  <script src="assets/js/jquery.countdown.min.js"></script>
  <!--=== jquery Tippy Js ===-->
  <script src="assets/js/tippy.all.min.js"></script>
  <!--=== Isotope Min Js ===-->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!--=== jquery Vivus Js ===-->
  <script src="assets/js/vivus.js"></script>
  <!--=== Parallax Min Js ===-->
  <script src="assets/js/parallax.min.js"></script>
  <!--=== Slick  Min Js ===-->
  <script src="assets/js/slick.min.js"></script>
  <!--=== jquery Wow Min Js ===-->
  <script src="assets/js/wow.min.js"></script>
  <!--=== jquery Zoom Min Js ===-->
  <script src="assets/js/jquery-zoom.min.js"></script>

  <!--=== Custom Js ===-->
  <script src="assets/js/custom.js"></script>

</body>


</html>