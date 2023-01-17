


<?

include 'config.php'; 

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  <? echo $chkq['sitename']; ?> </title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css link -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <!-- slick css link -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- swiper css link -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- flipclock css link -->
    <link rel="stylesheet" href="assets/css/flipclock.css">
    <!-- jqvmap css link -->
    <link rel="stylesheet" href="assets/css/jqvmap.min.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive css link -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->

<!-- template-version start -->
<div class="template-version">
<button type="button" style="border-radius:20px 0 0 20px;"><i class="fa fa-adjust">  </i></button>
<div class="color-version-area">
  <a href="dark/affiliate.php" class="dark-vesion">Dark</a>
  <a href="affiliate.php" class="light-vesion">Light</a>
</div>
</div>

<div class="main-light-version">
  <!--  header-section start  -->
  <?php include 'header.php'; ?>
  <!-- inner-page-banner start -->
  <section class="inner-page-banner has_bg_image" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-page-banner-area">
            <h1 class="page-title">Affiliate Program</h1>
            <nav aria-label="breadcrumb" class="page-header-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                <li class="breadcrumb-item active">Affiliate Program</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-page-banner end -->

  <!-- affiliate-section start -->
  <section class="affiliate-section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="section-header text-center">
            <h2 class="section-title">Why Should You Join ?</h2>
            <p>The World's Leading Online Lottery Affiliate Program.Promote <? echo $chkq['sitename']; ?> with the biggest lotteries around and get 15% to 25% revenue share commission</p>
          </div>
        </div>
      </div>
      <div class="row affiliate-single justify-content-between">
        <div class="col-lg-5">
          <div class="affiliate-content">
              <div class="icon">
                <div class="icon-inner">
                  <img src="assets/images/svg-icons/affiliate-icons/1.svg" alt="icon">
                </div>
              </div>
              <div class="content">
                <h3 class="title">High Revenues</h3>
                <p>We offer the best commissions in the market and provide proven conversions.As our ongoing partner, you will receive a revenue share of between 10%-15%, depending on the number of players that you refer. The more traffic you send, the more revenue you earn for all of your player portfolio with us.</p>
              </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="affiliate-thumb">
            <img src="assets/images/affiliate/1.png" alt="image">
          </div>
        </div>
      </div>
      <div class="row affiliate-single justify-content-between">
        <div class="col-lg-5">
          <div class="affiliate-content">
              <div class="icon">
                <div class="icon-inner">
                  <img src="assets/images/svg-icons/affiliate-icons/4.svg" alt="icon">
                </div>
              </div>
              <div class="content">
                <h3 class="title">Reliable Payments</h3>
                <p>Payments are made monthly via a variety of payment methods. PAYEER </p>
              </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="affiliate-thumb">
            <img src="assets/images/affiliate/2.png" alt="image">
          </div>
        </div>
      </div>
      <div class="row affiliate-single justify-content-between">
        <div class="col-lg-5">
          <div class="affiliate-content">
              <div class="icon">
                <div class="icon-inner">
                  <img src="assets/images/svg-icons/affiliate-icons/2.svg" alt="icon">
                </div>
              </div>
              <div class="content">
                <h3 class="title">Unlimited Affiliates</h3>
                <p>There is no limit  for your number of affiliates and no earning limit. </p>
              </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="affiliate-thumb">
            <img src="assets/images/affiliate/3.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- affiliate-section end -->

  <!-- payment-method-section start -->
  <section class="payment-method-section section-padding border-top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">Payment Method</h2>
            <p>Buy international lottery tickets online using any of the payment methods available on <? echo $chkq['sitename']; ?> Play now and win big!</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="payment-method-area d-flex">
            <div class="payment-item">
              <a href="#0"><img style="width:40%;" src="assets/images/payment-methods/payeer.png" alt="payment-method-image"></a>
            </div><!-- payment-item end -->
         
          </div>
        </div>
        <div class="col-lg-12">
          <div class="commission-area d-flex align-items-center">
            <div class="title-area">
              <h3 class="title">Referral commission</h3>
            </div>
            <div class="commission-items-wrapper d-flex align-items-center">
              <div class="commission-items d-flex align-items-center">
                <div class="icon">
                  <img src="assets/images/payment-methods/cm1.png" alt="image">
                </div>
                <div class="content">
                  <span class="percentage">10%</span>
                  <p>1st Level</p>
                </div>
              </div><!-- commission-items end -->
              <div class="commission-items d-flex align-items-center">
                <div class="icon">
                  <img src="assets/images/payment-methods/cm2.png" alt="image">
                </div>
                <div class="content">
                  <span class="percentage">05%</span>
                  <p>2nd Level</p>
                </div>
              </div><!-- commission-items end -->
              <div class="commission-items d-flex align-items-center">
                <div class="icon">
                  <img src="assets/images/payment-methods/cm3.png" alt="image">
                </div>
                <div class="content">
                  <span class="percentage">03%</span>
                  <p>3rd Level</p>
                </div>
              </div><!-- commission-items end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- payment-method-section end -->

  <!-- join-section start -->
  <section class="join-section section-padding section-bg border-top">
    <div class="container">
      <div class="row m-bottom-not-30">
        <div class="col-lg-6">
          <div class="join-item text-center">
            <h3 class="title">Become an affiliate today</h3>
            <p>The affiliate program is our special feature for loyal customers. Are you ready to start making money and earning? Join today and become an affiliate!</p>
            <a href="login.php" class="cmn-btn">join now!</a>
          </div>
        </div><!-- join-item end -->
        <div class="col-lg-6">
          <div class="join-item text-center">
            <h3 class="title">Get Your referral Link</h3>
            <p>Invites users & you will receive a revenue share of between 10%-15%, depending on the number of players that you refer. The more traffic you send, the more revenue you earn.</p>
            <a href="login.php" class="cmn-btn">join now!</a>
          </div>
        </div><!-- join-item end -->
      </div>
    </div>
  </section>
  <!-- join-section end -->

  <!-- testimonial-section start -->
  <section class="testimonial-section section-padding border-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-6">
          <div class="testimonial-content">
            <h5>What they think about us</h5>
            <h2>Testimonials</h2>
            <div class="total-ratings">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <span class="ratings-count-num">3.4M Reviews</span>
            </div>
            <p>With over 12 years of experience as the world’s leading online lottery service provider, <? echo $chkq['sitename']; ?> has catered to over a million users. Find out what our members have to say about us! </p>
            <div class="testimonial-slider-arrows d-flex">
              <div class="button-next"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
              <div class="button-prev"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="testimonial-slider swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="testimonial-slide">
                  <div class="testimonial-slide-header d-flex">
                    <div class="client-thumb">
                      <img src="assets/images/testimonial/1.png" alt="image">
                    </div>
                    <div class="client-details">
                      <h5 class="name">Albert G.</h5>
                      <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>5.00</span>
                      </div>
                      <p><span class="place">France</span><span class="date">15th June, 2022</span></p>
                    </div>
                  </div>
                  <div class="testimonial-slide-body">
                    <p>I've played with <? echo $chkq['sitename']; ?> for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at <? echo $chkq['sitename']; ?>!"</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-slide">
                  <div class="testimonial-slide-header d-flex">
                    <div class="client-thumb">
                      <img src="assets/images/testimonial/1.png" alt="image">
                    </div>
                    <div class="client-details">
                      <h5 class="name">Albert G.</h5>
                      <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>5.00</span>
                      </div>
                      <p><span class="place">France</span><span class="date">15th June, 2022</span></p>
                    </div>
                  </div>
                  <div class="testimonial-slide-body">
                    <p>I've played with <? echo $chkq['sitename']; ?> for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  <? echo $chkq['sitename']; ?>!"</p>
                  </div>
                </div>
              </div><!--swiper-slide end -->
              <div class="swiper-slide">
                <div class="testimonial-slide">
                  <div class="testimonial-slide-header d-flex">
                    <div class="client-thumb">
                      <img src="assets/images/testimonial/1.png" alt="image">
                    </div>
                    <div class="client-details">
                      <h5 class="name">Albert G.</h5>
                      <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>5.00</span>
                      </div>
                      <p><span class="place">France</span><span class="date">15th June, 2022</span></p>
                    </div>
                  </div>
                  <div class="testimonial-slide-body">
                    <p>I've played with <? echo $chkq['sitename']; ?> for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  <? echo $chkq['sitename']; ?>"</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-slide">
                  <div class="testimonial-slide-header d-flex">
                    <div class="client-thumb">
                      <img src="assets/images/testimonial/1.png" alt="image">
                    </div>
                    <div class="client-details">
                      <h5 class="name">Albert G.</h5>
                      <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>5.00</span>
                      </div>
                      <p><span class="place">France</span><span class="date">15th June, 2022</span></p>
                    </div>
                  </div>
                  <div class="testimonial-slide-body">
                    <p>I've played with <? echo $chkq['sitename']; ?> for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  <? echo $chkq['sitename']; ?>"</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="testimonial-slide">
                  <div class="testimonial-slide-header d-flex">
                    <div class="client-thumb">
                      <img src="assets/images/testimonial/1.png" alt="image">
                    </div>
                    <div class="client-details">
                      <h5 class="name">Albert G.</h5>
                      <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <span>5.00</span>
                      </div>
                      <p><span class="place">France</span><span class="date">15th June, 2022</span></p>
                    </div>
                  </div>
                  <div class="testimonial-slide-body">
                    <p>I've played with <? echo $chkq['sitename']; ?> for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  <? echo $chkq['sitename']; ?>!"</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial-section end -->

  


<?php include 'footer.php'; ?>



  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-angle-up"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <!-- jquery library js file -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js file -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- flipclock js file -->
  <script src="assets/js/flipclock.min.js"></script>
  <!-- countdown js file -->
  <script src="assets/js/jquery.countdown.min.js"></script>
  <!-- slick js file -->
  <script src="assets/js/slick.min.js"></script>
  <!-- swiper js file -->
  <script src="assets/js/swiper.min.js"></script>
  <!-- lightcase js file -->
  <script src="assets/js/lightcase.js"></script>
  <!-- wow js file -->
  <script src="assets/js/wow.min.js"></script>
  <!-- vamp js files -->
  <script src="assets/js/jquery.vmap.min.js"></script>
  <script src="assets/js/jquery.vmap.world.js"></script>
  <!-- main script js file -->
  <script src="assets/js/main.js"></script>
</body>
</html>