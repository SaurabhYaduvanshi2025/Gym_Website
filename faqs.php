<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>FAQs - Zymzoo - Gym & Fitness Centre Bootstrap 5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:400" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--== Font-awesome Icons CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"/>
    <!--== Pe Icon 7 Min Icons CSS ==-->
    <link href="assets/css/pe-icon-7-stroke.min.css" rel="stylesheet"/>
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <!--== Aos CSS ==-->
    <link href="assets/css/aos.css" rel="stylesheet"/>
    <!--== FancyBox CSS ==-->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet"/>
    <!--== Slicknav CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet"/>
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet"/>
    <!--== Slick CSS ==-->
    <link href="assets/css/slick.css" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />

    <style>
        .faq-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .faq-title {
            padding: 20px;
            background: #f5f5f5;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            font-weight: 600;
            color: #222;
        }
        .faq-title:hover {
            background: #efefef;
        }
        .faq-title i {
            transition: transform 0.3s ease;
        }
        .faq-item.active .faq-title {
            background: #ff6b35;
            color: white;
        }
        .faq-item.active .faq-title i {
            transform: rotate(180deg);
        }
        .faq-content {
            display: none;
            padding: 20px;
            background: white;
            color: #666;
            line-height: 1.8;
        }
        .faq-item.active .faq-content {
            display: block;
        }
    </style>

</head>

<body>

<!--wrapper start-->
<div class="wrapper faqs-default-wrapper">

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
  
  <main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg-page2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content content-style2">
              <h2 class="title"><span>FREQUENTLY ASKED</span> QUESTIONS</h2>
              <div class="desc">
                <p class="ml-0">Find answers to common questions about our gym,<br>membership, classes, and training programs</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start FAQ Area ==-->
    <section class="faq-area py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="faq-container">
              <!-- FAQ Item 1 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>What are your membership options?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>We offer three membership packages: Basic (1 month), Silver (6 months), and Gold (1 year). Each membership includes gym access, classes, and personal training sessions. Choose the package that best fits your fitness goals and budget.</p>
                </div>
              </div>

              <!-- FAQ Item 2 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>Can I cancel my membership anytime?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>Yes, you can cancel your membership with 30 days notice. However, for annual memberships, we recommend contacting our staff to discuss options like membership pauses or transfers.</p>
                </div>
              </div>

              <!-- FAQ Item 3 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>What equipment is available in the gym?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>Our gym is equipped with state-of-the-art fitness equipment including dumbbells, barbells, machines, cardio equipment, and more. We regularly upgrade our facilities to ensure our members have access to the latest gym technology.</p>
                </div>
              </div>

              <!-- FAQ Item 4 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>Do you offer personal training sessions?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>Yes, personal training is included with all our membership packages. Our certified trainers will help you create a customized workout plan based on your fitness goals and experience level.</p>
                </div>
              </div>

              <!-- FAQ Item 5 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>What classes do you offer?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>We offer a variety of classes including yoga, strength training, cardio, boxing, crossfit, and more. Classes are included with your membership and available at different times throughout the day.</p>
                </div>
              </div>

              <!-- FAQ Item 6 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>Are there beginner-friendly classes?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>Absolutely! We have beginner classes and our trainers are experienced in working with people at all fitness levels. Don't hesitate to let your trainer know about your experience level when you join.</p>
                </div>
              </div>

              <!-- FAQ Item 7 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>What are your gym hours?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>Our gym is open Monday to Friday from 7 AM to 10 PM, and Saturday to Sunday from 9 AM to 10 PM. We're closed on major holidays. Check our website for any holiday adjustments.</p>
                </div>
              </div>

              <!-- FAQ Item 8 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>Do you provide lockers and storage?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>Yes, we have secure lockers and storage facilities available for all members. A valid locker key is required, and members are responsible for their belongings.</p>
                </div>
              </div>

              <!-- FAQ Item 9 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>Is there a trial period or day pass?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>Yes, we offer a free trial session so you can experience our facility and meet our trainers. Contact us for more information about scheduling your trial.</p>
                </div>
              </div>

              <!-- FAQ Item 10 -->
              <div class="faq-item">
                <div class="faq-title">
                  <h5>Do you have nutrition guidance?</h5>
                  <i class="fa fa-chevron-down"></i>
                </div>
                <div class="faq-content">
                  <p>Our trainers provide basic nutrition guidance as part of your membership. For specialized diet plans, we recommend consulting with a professional nutritionist.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End FAQ Area ==-->

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

<script>
  // FAQ Accordion Functionality
  document.querySelectorAll('.faq-title').forEach(title => {
    title.addEventListener('click', function() {
      const faqItem = this.parentElement;
      const isActive = faqItem.classList.contains('active');
      
      // Close all other FAQ items
      document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
      });
      
      // Toggle current item
      if (!isActive) {
        faqItem.classList.add('active');
      }
    });
  });
</script>

</body>

</html>
