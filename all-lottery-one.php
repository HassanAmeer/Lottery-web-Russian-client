
<?

include '../config.php'; 

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);
$d = $chkq['end_date'];
  $h = $chkq['end_h'];
  $m = $chkq['end_m'];
  $s = $chkq['end_s'];
  $timfphp = $chkq['timef'];

if(isset($_GET['referid']))
{ $_SESSION['refby'] = $_GET['referid']; }





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
            <a href="all-lottery-one.php" class="dark-vesion">Dark</a>
            <a href="../all-lottery-one.php" class="light-vesion">Light</a>
          </div>
        </div>


  <div class="main-dark-version">
    <!--  header-section start  -->
    <?php include 'header.php' ?>
    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="assets/images/02.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-page-banner-area">
              <h1 class="page-title">All Lotteries</h1>
              <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item">result</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- online-ticket-section start -->
    <section class="online-ticket-section section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <h2 class="section-title">Buy Lottery Tickets Online</h2>
              <p>Buy lottery tickets online to the biggest lotteries in the world offering huge jackpot prizes that you can win when you play online lottery. Purchase official lottery tickets to the draws listed below and receive automatic result notifications and commission-free prizes when you win!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="jackpot-item text-center">
              <img src="assets/images/elements/jackpot-1.png" alt="image">
              <span class="amount"> 84,000 <i class="fa fa-ruble text-primary"> </i></span>
              <h5 class="title">US Powerball</h5>
              <p class="next-draw-time">Next Draw : <span class="draw-timer"></span></p>
              <a href="login.php" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-4 col-sm-6">
            <div class="jackpot-item text-center">
              <img src="assets/images/elements/jackpot-2.png" alt="image">
              <span class="amount"> 133,000 <i class="fa fa-ruble text-primary"> </i></span>
              <h5 class="title">Cancer Charity</h5>
              <p class="next-draw-time">Next Draw : <span class="draw-timer"></span></p>
              <a href="login.php" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-4 col-sm-6">
            <div class="jackpot-item text-center">
              <img src="assets/images/elements/jackpot-3.png" alt="image">
              <span class="amount"> 238,000 <i class="fa fa-ruble text-primary"> </i></span>
              <h5 class="title">EuroJackpot</h5>
              <p class="next-draw-time">Next Draw : <span class="draw-timer"></span></p>
              <a href="login.php" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-4 col-sm-6">
            <div class="jackpot-item text-center">
              <img src="assets/images/elements/jackpot-1.png" alt="image">
              <span class="amount"> 541,000 <i class="fa fa-ruble text-primary"> </i></span>
              <h5 class="title">US Powerball</h5>
              <p class="next-draw-time">Next Draw : <span class="draw-timer"></span></p>
              <a href="login.php" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-4 col-sm-6">
            <div class="jackpot-item text-center">
              <img src="assets/images/elements/jackpot-2.png" alt="image">
              <span class="amount"> 754,000 <i class="fa fa-ruble text-primary"> </i></span>
              <h5 class="title">Cancer Charity</h5>
              <p class="next-draw-time">Next Draw : <span class="draw-timer"></span></p>
              <a href="login.php" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-4 col-sm-6">
            <div class="jackpot-item text-center">
              <img src="assets/images/elements/jackpot-3.png" alt="image">
              <span class="amount"> 881,000 <i class="fa fa-ruble text-primary"> </i></span>
              <h5 class="title">EuroJackpot</h5>
              <p class="next-draw-time">Next Draw : <span class="draw-timer"></span></p>
              <a href="login.php" class="cmn-btn">play now!</a>
            </div>
          </div><!-- jackpot-item end -->
          <div class="col-lg-12 text-center">
            <a href="login.php" type="button" class="cmn-btn">load more</a>
          </div>
        </div>
      </div>
    </section>
    <!-- online-ticket-section end -->

    <!-- question-section start -->
    <section class="question-section section-padding section-bg border-top">
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
  
  
  

    <script>
/////////////////////////////////////////
/////////////////////////////////////////
///////////////////////////////
///////////////////
var stime = <?php echo strtotime("$d $h:$m:$s") ?> * 1000;
  var now = <? echo time() ?> * 1000;
  
  // for intervel
  var x = setInterval(function()
  {
    now = now + 1000;
    var dis = stime - now;
    
    var d = Math.floor(dis/(1000*60*60*24));
    var h = Math.floor((dis%(1000*60*60*24))/(1000*60*60));
    var m = Math.floor((dis%(1000*60*60))/(1000*60));
    var s = Math.floor((dis%(1000*60))/1000);
   
  $(".draw-timer").html( d + "d:" +  h + "h:" + m + "m: " + s + "s" );
    
  
  },1000);
  ///// end 
/////////////////////////////////////
/////////////////////////////////////


/////////////////////////////////////
/////////////////////////////////////
/////////////////////////////////////
/////////////////////////////////////
    </script>
  
  
  
  
  
  
  
</body>
</html>