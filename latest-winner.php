

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
            <a href="latest-winner.php" class="dark-vesion">Dark</a>
            <a href="../latest-winner.php" class="light-vesion">Light</a>
          </div>
        </div>


  <div class="main-dark-version">
    <!--  header-section start  -->
    <? include 'header.php'; ?>
    <!--  header-section end  -->









  <!--login registration Modal -->
  <div class="modal fade login-registration-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="login-registration-area">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">Registration</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <form class="login-form cmn-frm">
                  <div class="frm-group">
                    <label>Username or Email Address</label>
                    <input type="email" name="login_email" id="login_email" placeholder="Username or Email Address">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="frm-group">
                    <label>Password</label>
                    <input type="password" name="login_pass" id="login_pass" placeholder="Enter Password">
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                    <input type="submit" name="registration_submit2" id="registration_submit2" value="login">
                  </div>
                  <div class="frm-group">
                    <div class="checkbox-area">
                      <input type="checkbox" id="login_remember_pass">
                      <label for="login_remember_pass">Remember Password</label>
                    </div>
                    <div class="forgot-pass-area">
                      <a href="#0">Forgot Password?</a>
                    </div>
                  </div>
          
                </form>
                <div class="have-not-account">
                  <p>You don’t have an account?<a href="#0">Register Now</a></p>
                </div>
              </div>
              <div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                <form class="registration-form cmn-frm">
                  <div class="frm-group">
                    <label>Username or Email Address</label>
                    <input type="email" name="registration_email" id="registration_email" placeholder="Username or Email Address">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="frm-group">
                    <label>Password</label>
                    <input type="password" name="registration_pass" id="registration_pass" placeholder="Enter Password">
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                    <label>Confirm Password</label>
                    <input type="password" name="registration_re_pass" id="registration_re_pass" placeholder="Enter Password">
                    <i class="fa fa-lock"></i>
                  </div>
                  <div class="frm-group">
                    <input type="submit" name="registration_submit" id="registration_submit" value="Registration">
                  </div>
                  <div class="frm-group">
                    <div class="checkbox-area">
                      <input type="checkbox" id="registration_remember_pass">
                      <label for="registration_remember_pass">I Agree with the Terms of Use</label>
                    </div>
                    <div class="forgot-pass-area">
                      <a href="#0">Forgot Password?</a>
                    </div>
                  </div>
              
                </form>
                <div class="have-not-account">
                  <p>Already have an account?<a href="#0">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="assets/images/02.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-page-banner-area">
              <h1 class="page-title">Latest Winners</h1>
              <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="#0">pages</a></li>
                  <li class="breadcrumb-item active">winners</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- latest-winner-section start -->
    <section class="latest-winner-section section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">List of Lottery Winners</h2>
              <p>Our biggest winners have won lottery jackpots and million-dollar prizes - read their stories below. Perhaps your lottery win will soon be added to our list!</p>
            </div>
          </div>
        </div>
        <div class="row m-bottom-not-30">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="winner-item m-bottom-30">
              <div class="thumb">
                <img src="assets/images/winner/1.jpg" alt="image">
              </div>
              <div class="content">
                <span class="amount">48,000 <i class="fa fa-ruble text-primary"></i> </span>
                <span class="game-name">powerball</span>
                <span class="name">Willie Garcia</span>
              </div>
            </div>
          </div><!-- winner-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="winner-item m-bottom-30">
              <div class="thumb">
                <img src="assets/images/winner/2.jpg" alt="image">
              </div>
              <div class="content">
                <span class="amount">48,000 <i class="fa fa-ruble text-primary"></i> </span>
                <span class="game-name">powerball</span>
                <span class="name">Tomas Herrera</span>
              </div>
            </div>
          </div><!-- winner-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="winner-item m-bottom-30">
              <div class="thumb">
                <img src="assets/images/winner/3.jpg" alt="image">
              </div>
              <div class="content">
                <span class="amount">48,000 <i class="fa fa-ruble text-primary"></i> </span>
                <span class="game-name">powerball</span>
                <span class="name">Billy Abbott</span>
              </div>
            </div>
          </div><!-- winner-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="winner-item m-bottom-30">
              <div class="thumb">
                <img src="assets/images/winner/4.jpg" alt="image">
              </div>
              <div class="content">
                <span class="amount">48,000 <i class="fa fa-ruble text-primary"></i> </span>
                <span class="game-name">powerball</span>
                <span class="name">Tiffany Harrison </span>
              </div>
            </div>
          </div><!-- winner-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="winner-item m-bottom-30">
              <div class="thumb">
                <img src="assets/images/winner/5.jpg" alt="image">
              </div>
              <div class="content">
                <span class="amount">48,000 <i class="fa fa-ruble text-primary"></i> </span>
                <span class="game-name">powerball</span>
                <span class="name">Harvey Gibbs</span>
              </div>
            </div>
          </div><!-- winner-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="winner-item m-bottom-30">
              <div class="thumb">
                <img src="assets/images/winner/6.jpg" alt="image">
              </div>
              <div class="content">
                <span class="amount">48,000 <i class="fa fa-ruble text-primary"></i> </span>
                <span class="game-name">powerball</span>
                <span class="name">Pat Gutierrez</span>
              </div>
            </div>
          </div><!-- winner-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="winner-item m-bottom-30">
              <div class="thumb">
                <img src="assets/images/winner/7.jpg" alt="image">
              </div>
              <div class="content">
                <span class="amount">48,000 <i class="fa fa-ruble text-primary"></i> </span>
                <span class="game-name">powerball</span>
                <span class="name">Ronald Sanders</span>
              </div>
            </div>
          </div><!-- winner-item end -->
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="winner-item m-bottom-30">
              <div class="thumb">
                <img src="assets/images/winner/8.jpg" alt="image">
              </div>
              <div class="content">
                <span class="amount">48,000 <i class="fa fa-ruble text-primary"></i> </span>
                <span class="game-name">powerball</span>
                <span class="name">Claudia Kelly</span>
              </div>
            </div>
          </div><!-- winner-item end -->
        </div>
        <div class="row">
          <div class="col-lg-12">
         <div class="load-more-btn-area">
             <a href="login.php" class="cmn-btn">load more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- latest-winner-section end -->

    <!-- prize-collect-step-section start -->
    <section class="prize-collect-step-section section-padding section-bg border-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">How to Collect Your Wins</h2>
              <p>Winners updated weekly. Prize value listed as won may not reflect actual net claims payment amount in photo due to combined prize claim amounts and other adjustments. Purchase location shown where applicable.All Prizes are 100% commission-FREE</p>
            </div>
          </div>
        </div>
        <div class="row m-bottom-not-30">
          <div class="col-lg-4 col-md-6">
            <div class="prize-collect-item text-center">
              <div class="icon">
                <img src="assets/images/elements/collect-1.png" alt="assets">
              </div>
              <div class="content">
                <h3 class="title">Win</h3>
                <p>Win any prize while playing your favourite lotteries online at  <? echo $chkq['sitename']; ?></p>
              </div>
            </div>
          </div><!-- prize-collect-item end -->
          <div class="col-lg-4 col-md-6">
            <div class="prize-collect-item text-center">
              <div class="icon">
                <img src="assets/images/elements/collect-2.png" alt="assets">
              </div>
              <div class="content">
                <h3 class="title">Notification</h3>
                <p>Receive an instant notification When you Won!</p>
              </div>
            </div>
          </div><!-- prize-collect-item end -->
          <div class="col-lg-4 col-md-6">
            <div class="prize-collect-item text-center">
              <div class="icon">
                <img src="assets/images/elements/collect-3.png" alt="assets">
              </div>
              <div class="content">
                <h3 class="title">Collect Your Prize</h3>
                <p>Your win will be directly transferred to your account on  <? echo $chkq['sitename']; ?>!</p>
              </div>
            </div>
          </div><!-- prize-collect-item end -->
        </div>
      </div>
    </section>
    <!-- prize-collect-step-section end -->

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