
<?
include '../config.php';


///////////////
$vfallstngs = "SELECT * FROM `ghstng` WHERE stngid = 1";
$vfallstngsq =mysqli_query($db,$vfallstngs);
$vfallstngf = mysqli_fetch_array($vfallstngsq);

$cusrs = " SELECT COUNT(uid) AS totalusrs FROM `userslog`";
$cusrsq = mysqli_query($db,$cusrs);
$cusrsv = mysqli_fetch_assoc($cusrsq);
///// end of count total users

$tsums = " SELECT SUM(totalsum) AS tusrsumbal FROM userslog";
$tsumsq = mysqli_query($db,$tsums);
$tsumsv = mysqli_fetch_assoc($tsumsq);
///// start count total sums
$tusrsumout = "SELECT SUM(totalsumout) AS tusrsmout FROM userslog";
$tusrsumoutq=mysqli_query($db,$tusrsumout);
$tumoutsv=mysqli_fetch_assoc($tusrsumoutq);
///// start count total Withdraw

$tusringame =$cusrsv['totalusrs'];
$tsumingame = $tsumsv['tusrsumbal'];
 $tusoutgame = $tumoutsv['tusrsmout'];
$totalprof = $tsumingame - $tusoutgame;


?>

<!-- footer-section start -->
<footer class="footer-section">
 <div class="footer-top border-top border-bottom has_bg_image" data-background="assets/images/bg-four.jpg">
   <div class="footer-top-first">
     <div class="container">
       <div class="row">
         <div class="col-lg-6 col-md-5 col-sm-4 text-center text-sm-left">
           <a href="index.php" class="site-logo"><img src="assets/images/logo.png" alt="logo"></a>
         </div>
         <div class="col-lg-6 col-md-7 col-sm-8">
           <div class="number-count-part d-flex">
             <div class="number-count-item">
               <span class="number"><? echo $tusringame; ?></span>
               <p>TOTAL MEMBERS</p>
             </div>
             <div class="number-count-item">
               <span class="number">
<?
 ///////////////////////////////////////
$totlwonstkts = " SELECT COUNT(tickets) AS totlwonstkts FROM `wontabl`";
$totlwonstktsq = mysqli_query($db,$totlwonstkts);
$valwonstktf = mysqli_fetch_assoc($totlwonstktsq);
        echo $valwonstktf['totlwonstkts'];
 ///////////////////////////////////////
?>                 
         </span>
               <p>TOTAL winner</p>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="footer-top-second">
     <div class="container">
       <div class="row justify-content-between">
         <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
           <div class="footer-widget widget-about">
             <h3 class="widget-title">About site</h3>
             <ul class="footer-list-menu">
               <li><a href="about.php">About us</a></li>
               <li><a href="faq.php"> Faq </a></li>
               <li><a href="blog.php">Blog</a></li>
               <li><a href="contact.php">Contact us</a></li>
             </ul>
           </div>
         </div>
         <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6">
           <div class="footer-widget widget-links">
             <h3 class="widget-title">Quick links</h3>
             <ul class="footer-list-menu">
               <li><a href="login.php"> My Account</a></li>
             <li><a href="affiliate.php">Affiliate Program</a></li>
          
               <li><a href="how-to-play.php"> how-to-play </a></li>
           
             </ul>
           </div>
         </div>
         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
           <div class="footer-widget widget-subscribe">
             <h3 class="widget-title">email newsletters</h3>
             <div class="subscribe-part">
               <p>Subscribe now and receive weekly newsletter for latest draw and offer news and much more!</p>
          <form class="subscribe-form" action="login.php">
                 <input type="email" name="subs_email" id="subs_email" placeholder="Email address">
                 <input type="submit" value="subscribe">
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="footer-bottom">
   <div class="container">
     <div class="row justify-content-between align-items-center">
       <div class="col-lg-6 col-sm-7">
         <div class="copy-right-text">
           <p>© 2022 <a href="mailto:<? $vfallstngf['email']; ?>">site name</a> - All Rights Reserved.</p>
         </div>
       </div>
     <div class="col-lg-6 col-sm-5">
       
       </div>
     </div>
   </div>
 </div>
</footer>
<!-- footer-section end -->

















