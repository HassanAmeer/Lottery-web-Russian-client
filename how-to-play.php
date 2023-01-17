



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
    <title>  <? echo $chkq['sitename']; ?>  </title>
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
  <a href="dark/how-to-play.php" class="dark-vesion">Dark</a>
  <a href="how-to-play.php" class="light-vesion">Light</a>
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
            <h1 class="page-title">How to play</h1>
            <nav aria-label="breadcrumb" class="page-header-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="index.php">pages</a></li>
                <li class="breadcrumb-item active">how to play</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-page-banner end -->

  <!-- work-steps-section strat -->
  <section class="work-steps-section section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="section-header text-center">
            <h2 class="section-title">how it works</h2>
            <p><? echo $chkq['sitename']; ?> is the best way to play these exciting lotteries from anywhere in the world.</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="work-steps-items-part d-flex">
            <div class="line"><img src="assets/images/elements/line.png" alt="line-image"></div>
            <div class="work-steps-item">
              <div class="work-steps-item-inner">
                <div class="icon">
                  <img src="assets/images/svg-icons/how-work-icons/1.svg" alt="icon">
                  <span class="count-num">01</span>
                </div>
                <h4 class="title">choose</h4>
                <p>Choose your lottery & pick your numbers</p>
              </div>
            </div><!-- work-steps-item end -->
            <div class="work-steps-item">
              <div class="work-steps-item-inner">
                <div class="icon">
                  <img src="assets/images/svg-icons/how-work-icons/2.svg" alt="icon">
                  <span class="count-num">02</span>
                </div>
                <h4 class="title">buy</h4>
                <p>Complete your purchase</p>
              </div>
            </div><!-- work-steps-item end -->
            <div class="work-steps-item">
              <div class="work-steps-item-inner">
                <div class="icon">
                  <img src="assets/images/svg-icons/how-work-icons/3.svg" alt="icon" class="">
                  <span class="count-num">01</span>
                </div>
                <h4 class="title">win</h4>
                <p>Start dreaming, you're almost there</p>
              </div>
            </div><!-- work-steps-item end -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="work-steps-thumb-part">
            <img src="assets/images/elements/step.png" alt="work-step-image">
            <a href="https://www.youtube.com/embed/<? echo $chkq['ytvideo']; ?>" class="play-btn"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- work-steps-section strat -->

  <!-- reward-section start -->
  <section class="reward-section section-padding border-top has_bg_image" data-background="assets/images/bg-five.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="section-header text-center">
            <h2 class="section-title">Lucky-Rewards</h2>
            <p>We at <? echo $chkq['sitename']; ?> offer you the most generous and innovative lotto bonuses. How would you feel with an attractive deposit bonus, a risk free lottery ticket</p>
          </div>
        </div>
      </div>
      <div class="row m-bottom-not-30">
        <div class="col-lg-4 col-md-6">
          <div class="reward-item text-center">
            <div class="icon">
              <img src="assets/images/svg-icons/reward/1.svg" alt="image">
            </div>
            <div class="content">
              <h3 class="title">Collect Points</h3>
              <p>After playing your ticket, win or not, enter the code from your ticket to collect Lucke-Rewards points.</p>
            </div>
          </div>
        </div><!-- reward-item end-->
        <div class="col-lg-4 col-md-6">
          <div class="reward-item text-center">
            <div class="icon">
              <img src="assets/images/svg-icons/reward/2.svg" alt="image">
            </div>
            <div class="content">
              <h3 class="title">Enter Drawings</h3>
              <p>Use your Lucke-Rewards points to enter drawings for a second chance to win.So why are you waiting for?</p>
            </div>
          </div>
        </div><!-- reward-item end-->
        <div class="col-lg-4 col-md-6">
          <div class="reward-item text-center">
            <div class="icon">
              <img src="assets/images/svg-icons/reward/3.svg" alt="image">
            </div>
            <div class="content">
              <h3 class="title">Promotions & Drawings</h3>
              <p>You’ve earned your points and are ready to play again. Check out the latest Lucke-Rewards drawings</p>
            </div>
          </div>
        </div><!-- reward-item end-->
      </div>
    </div>
  </section>
  <!-- reward-section end -->

  <!-- subscribe-section start -->
  <section class="subscribe-section">
    <div class="container">
      <div class="row subscribe-area justify-content-between">
        <div class="col-lg-5">
          <div class="subscribe-content">
            <h3 class="title">Subcriber for Newsletter</h3>
            <p>Subscribe now and receive weekly newsletter for latest Lottery news and much more! </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="subscribe-form-area">
            <form class="subscribe-form">
              <input type="email" name="subs_email" id="subs_email" placeholder="Email address">
              <input type="submit" value="subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- subscribe-section end -->

  <!-- question-section start -->
  <section class="question-section border-top section-padding section-bg">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4">
          <div class="thumb text-lg-right text-center">
            <img src="assets/images/elements/faq.png" alt="image">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="content">
            <h2 class="title">If you have any questions</h2>
            <p>Our top priorities are to protect your privacy, provide secure transactions, and safeguard your data. When you're ready to play, registering an account is required so we know you're of legal age and so no one else can use your account.We answer the most commonly asked lotto questions..</p>
            <a href="faq.php" class="cmn-btn">Check FAQs</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- question-section end -->
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
   <?php include 'footer.php'; ?>
  <!-- footer-section end -->

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