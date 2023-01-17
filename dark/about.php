
<?

include '../config.php'; 

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
    <title> <? echo $chkq['sitename']; ?> </title>
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
    <!-- dark version css -->
    <link rel="stylesheet" href="assets/css/dark-version.css">
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
            <a href="about.php" class="dark-vesion">Dark</a>
            <a href="../about.php" class="light-vesion">Light</a>
          </div>
        </div>


  <div class="main-dark-version">
    <!--  header-section start  -->
    <?php include 'header.php' ?>
    <!--  header-section end  -->
  
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="assets/images/01.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-page-banner-area">
              <h1 class="page-title">About Us</h1>
              <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="#0">pages</a></li>
                  <li class="breadcrumb-item active">About</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- about-section start -->
    <section class="about-section section-padding">
      <div class="container-fluid">
        <div class="row justify-content-between">
          <div class="col-xl-5 p-xl-0">
            <div class="thumb">
              <img src="assets/images/about-image.jpg" alt="image">
            </div>
          </div>
          <div class="col-xl-6 p-xl-0">
            <div class="content">
              <h2 class="title">A FEW WORDS ABOUT US</h2>
              <p>Our goal is to provide our customers with the most convenient and enjoyable lottery purchasing experience.</p>
              <p>It’s not just what we do, it’s who we are. From past to present, we are a success story still in the making.With an enthusiasm to serve, our commitment to providing fun and fair games is matched by our desire to make a positive difference in the community.</p>
              <ul class="cmn-list">
                <li>Playing It Global for Over a Decade</li>
                <li>Play from Anywhere in the World</li>
                <li>Absolutely No Commissions Taken</li>
                <li>A Simple and Secure Service</li>
                <li>Winning Made Easy</li>
              </ul>
              <a href="#0" class="cmn-btn">a bit of history</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about-section end -->

    <!-- choose-us-section start -->
    <section class="choose-us-section section-padding border-top border-bottom has_bg_image" data-background="assets/images/03.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-header text-center">
              <h2 class="section-title">Why Choose Us?</h2>
              <p>With a selection of the world’s biggest and best international jackpots to choose from, there are already millions of reasons why you should be playing with <? echo $chkq['sitename']; ?> lottery. But you don’t need a million reasons. All you need is six - and every one of them’s a winner:</p>
            </div>
          </div>
        </div>
        <div class="row mt-mb-15">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="choose-item text-center choose-item--gray-border">
              <div class="front">
                <div class="icon">
                  <img src="assets/images/svg-icons/choose-us-icons/1.svg" alt="icon">
                </div>
                <h4 class="title">Biggest lottery jackpots</h4>
              </div>
              <div class="back">
                <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
              </div>
            </div>
          </div><!-- choose-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="choose-item text-center choose-item--gray-border">
              <div class="front">
                <div class="icon">
                  <img src="assets/images/svg-icons/choose-us-icons/2.svg" alt="icon">
                </div>
                <h4 class="title">No commission on Winnings</h4>
              </div>
              <div class="back">
                <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
              </div>
            </div>
          </div><!-- choose-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="choose-item text-center choose-item--gray-border">
              <div class="front">
                <div class="icon">
                  <img src="assets/images/svg-icons/choose-us-icons/3.svg" alt="icon">
                </div>
                <h4 class="title"> Safe and Secure Playing</h4>
              </div>
              <div class="back">
                <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
              </div>
            </div>
          </div><!-- choose-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="choose-item text-center choose-item--gray-border">
              <div class="front">
                <div class="icon">
                  <img src="assets/images/svg-icons/choose-us-icons/4.svg" alt="icon">
                </div>
                <h4 class="title">Instant payout system</h4>
              </div>
              <div class="back">
                <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
              </div>
            </div>
          </div><!-- choose-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="choose-item text-center choose-item--gray-border">
              <div class="front">
                <div class="icon">
                  <img src="assets/images/svg-icons/choose-us-icons/5.svg" alt="icon">
                </div>
                <h4 class="title">Performance Bonuses</h4>
              </div>
              <div class="back">
                <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
              </div>
            </div>
          </div><!-- choose-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="choose-item text-center choose-item--gray-border">
              <div class="front">
                <div class="icon">
                  <img src="assets/images/svg-icons/choose-us-icons/6.svg" alt="icon">
                </div>
                <h4 class="title">Dedicated Support</h4>
              </div>
              <div class="back">
                <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
              </div>
            </div>
          </div><!-- choose-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="choose-item text-center choose-item--gray-border">
              <div class="front">
                <div class="icon">
                  <img src="assets/images/svg-icons/choose-us-icons/7.svg" alt="icon">
                </div>
                <h4 class="title">Reliable Payment </h4>
              </div>
              <div class="back">
                <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
              </div>
            </div>
          </div><!-- choose-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="choose-item text-center choose-item--gray-border">
              <div class="front">
                <div class="icon">
                  <img src="assets/images/svg-icons/choose-us-icons/8.svg" alt="icon">
                </div>
                <h4 class="title">Unlimited Affiliates</h4>
              </div>
              <div class="back">
                <p>One of the core advantages of playing an online lotto is that it is both safe and secure. So, there is no need for you to queue, or visit a retail store, to get tickets.</p>
              </div>
            </div>
          </div><!-- choose-item end -->
        </div>
      </div>
    </section>
    <!-- choose-us-section end -->

    <!-- testimonial-section start -->
    <section class="testimonial-section section-padding">
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
                      <p>I've played with <? echo $chkq['sitename']; ?> for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  <? echo $chkq['sitename']; ?>!"</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="assets/images/testimonial/2.png" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Edward L.</h5>
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
                      <p>I've played with <? echo $chkq['sitename']; ?> for several years and really appreciate the site. All of my wins have been credited to my account. Thanks to the entire team at  <? echo $chkq['sitename']; ?>!"</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-slide">
                    <div class="testimonial-slide-header d-flex">
                      <div class="client-thumb">
                        <img src="assets/images/testimonial/2.png" alt="image">
                      </div>
                      <div class="client-details">
                        <h5 class="name">Edward L.</h5>
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

    <!-- team-section start -->
    <section class="team-section border-top border-bottom section-padding section-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">Our Management Team</h2>
              <p>Our team of creative programmers, marketing experts, and members of the global lottery community have worked together to build the ultimate lottery site, and every win and happy customer reminds us how lucky we are to be doing what we love.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="assets/images/team/1.png" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Philip Brower</h3>
                <span class="designation">Co-Founder & CEO</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="assets/images/team/2.png" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Penny Tool</h3>
                <span class="designation">IT Specialist</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="assets/images/team/3.png" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Conrad Berry</h3>
                <span class="designation">Consultant</span>
              </div>
            </div>
          </div><!-- team-single end -->
          <div class="col-lg-3 col-sm-6">
            <div class="team-single text-center">
              <div class="thumb">
                <img src="assets/images/team/4.png" alt="team-image">
                <ul class="team-social-link d-flex justify-content-center">
                  <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
              <div class="content">
                <h3 class="name">Alexis Brady</h3>
                <span class="designation">Financial Adviser</span>
              </div>
            </div>
          </div><!-- team-single end -->
        </div>
      </div>
    </section>
    <!-- team-section end -->

      <!-- brand-section start -->
      <div class="brand-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="brand-slider">
                <div class="single-slide">
                  <div class="slide-inner">
                    <img src="assets/images/elements/jackpot-1.png" alt="image">
                  </div>
                </div><!-- single-slide end -->
                <div class="single-slide">
                  <div class="slide-inner">
                    <img src="assets/images/elements/jackpot-2.png" alt="image">
                  </div>
                </div><!-- single-slide end -->
                <div class="single-slide">
                  <div class="slide-inner">
                    <img src="assets/images/elements/jackpot-3.png" alt="image">
                  </div>
                </div><!-- single-slide end -->
                <div class="single-slide">
                  <div class="slide-inner">
                    <img src="assets/images/elements/jackpot-4.png" alt="image">
                  </div>
                </div><!-- single-slide end -->
                <div class="single-slide">
                  <div class="slide-inner">
                    <img src="assets/images/elements/jackpot-1.png" alt="image">
                  </div>
                </div><!-- single-slide end -->
                <div class="single-slide">
                  <div class="slide-inner">
                    <img src="assets/images/elements/jackpot-2.png" alt="image">
                  </div>
                </div><!-- single-slide end -->
                <div class="single-slide">
                  <div class="slide-inner">
                    <img src="assets/images/elements/jackpot-3.png" alt="image">
                  </div>
                </div><!-- single-slide end -->
                <div class="single-slide">
                  <div class="slide-inner">
                    <img src="assets/images/elements/jackpot-4.png" alt="image">
                  </div>
                </div><!-- single-slide end -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- brand-section end -->




      
    <!-- footer-section start -->
    <?php include 'footer.php' ?>
    <!-- footer-section end -->
  </div>
  
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