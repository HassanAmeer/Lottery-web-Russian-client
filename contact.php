


<?php

include "config.php";







$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);

  










if(isset($_POST['sendmsg']))
{
  $contactmail = mysqli_real_escape_string($db, $_POST['contact_email']);
  $contacttitle = mysqli_real_escape_string($db, $_POST['contact_title']);
  $contactmsgs = mysqli_real_escape_string($db, $_POST['contact_message']);
  


  $setmsgs= "INSERT INTO `contactus`(`usermail`, `title`, `mainmsg`) VALUES ('$contactmail','$contacttitle','$contactmsgs')";
  $mysqli1 = mysqli_query($db, $setmsgs);
  if($mysqli1)
  {
    $_SESSION['ok'] = 'your Message has been sent';
  }
}










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
  <a href="dark/contact.php" class="dark-vesion">Dark</a>
  <a href="contact.php" class="light-vesion">Light</a>
</div>
</div>

<div class="main-light-version">
  <!--  header-section start  -->
  <?php include 'header.php'; ?>  <!-- inner-page-banner start -->
  <section class="inner-page-banner has_bg_image" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-page-banner-area">
            <h1 class="page-title">contact us</h1>
            <nav aria-label="breadcrumb" class="page-header-breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="index.php">Pages</a></li>
                <li class="breadcrumb-item active">contact us</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-page-banner end -->





<? if(isset($_SESSION['ok']))
{ echo '<h2 style="color:green; text-align:center;">'.$_SESSION['ok'].'</h2>'; }
?>







  <!-- contact-section start -->
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-wrapper">
            <div class="contact-area d-flex">
              <div class="contact-form-area">
                <h3 class="title">Get In Touch</h3>
                <p>If you have any questions or queries our helpful support team will be more than happy to assist.</p>
                <form method="post" class="contact-form">

   <div class="form-grp">
  <input type="email" name="contact_email" id="contact_email" placeholder="Email Address" required="">
  </div>
   <div class="form-grp">
 <input type="text" name="contact_title" id="contact_title" placeholder=" Title" required="">
    </div>
    <div class="form-grp">
     <textarea name="contact_message" id="contact_message" placeholder="Message" required=""></textarea>
                  </div>
                  <div class="form-grp">
   <input class="submit-btn" type="submit" value="sent mmessage" name="sendmsg">
                  </div>
                </form>
              </div><!-- contact-form-area end -->
              <div class="address-area has_bg_image" data-background="assets/images/contact-mg.jpg">
                <div class="address-area-header">
                  <h3 class="title">We Are Available</h3>
                  <span>24 Hours A Day, 365 Days A Year</span>
                </div>
                <div class="contact-address">
                  <h3 class="title">Contact Us</h3>
                  <ul>
                    <li>
                      <div class="icon"><i class="fa fa-phone"></i></div>
                      <div class="content">
      <p> <? echo  $chkq['phone1']; ?></p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"><i class="fa fa-envelope-o"></i></div>
        <div class="content">
   <p><a href="mailto:<? echo $phone1 = $chkq['email']; ?>" class="__cf_email__"> <? echo $phone1 = $chkq['email']; ?> </a></p>
                      
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="contact-wrapper-footer">
              <span>Please see our Frequent Asked Questions (FAQ) page to read more information:</span>
              <a href="faq.php" class="cmn-btn">check FAQs</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section end -->

  <!-- map-section start -->
  <div class="map-section">
    <div id="map"></div>
  </div>
  <!-- map-section end -->

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
  <!-- google map init js file -->
  <script src="assets/js/goolg-map-activate.js"></script>
  <!-- google map api -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqFuLx8S7A8eianoUhkYMeXpGPvsXp1NM&callback=initMap"
  async defer></script> 
  <!-- main script js file -->
  <script src="assets/js/main.js"></script>
</body>
</html>