



<?

include '../config.php';
error_reporting(0);


if(!isset($_COOKIE['coklog']))
{ header('location:login.php'); }
$vusrlog = $_COOKIE['coklog'];
$vlog = "SELECT * FROM `userslog` WHERE uemail = '$vusrlog'";
$vlogq =mysqli_query($db,$vlog);
$vlogf = mysqli_fetch_array($vlogq);

//////////////////////////////////////
//////////////////////////////////////

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);

  $d = $chkq['end_date'];
  $h = $chkq['end_h'];
  $m = $chkq['end_m'];
  $s = $chkq['end_s'];
  $timfphp = $chkq['timef'];
  $discount = $chkq['discount'];
//////////////////////////////////////
//////////////////////////////////////
 $nowdat = strtotime("now");
 $todaydatev = date("Y-m-d",$nowdat);
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////


/////////////////////////////////////////
$onlyhvtkts = " SELECT COUNT(tktno) AS vtktsh FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0";
$onlyhvtktsq=mysqli_query($db,$onlyhvtkts);
$vtktshv=mysqli_fetch_assoc($onlyhvtktsq);
 $chkhvtktslst = $vtktshv['vtktsh'];
 ///////////////////////////////////////
$alltkshv = " SELECT COUNT(tktno) AS totaltktshv FROM `buytkts` WHERE byusr = '$vusrlog'";
$alltkshvq = mysqli_query($db,$alltkshv);
$vtotltkts=mysqli_fetch_assoc($alltkshvq);
$chkttlbuytkts = $vtotltkts['totaltktshv'];
 ///////////////////////////////////////
$totlwonstkts = " SELECT COUNT(byusr) AS totlwonstkts FROM `wontabl` WHERE byusr = '$vusrlog' ";
$totlwonstktsq = mysqli_query($db,$totlwonstkts);
$valwonstktf = mysqli_fetch_assoc($totlwonstktsq);
$ttlwintkts = $valwonstktf['totlwonstkts'];
 ///////////////////////////////////////
 
 
 
 
 

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
    <link rel="stylesheet" href="assets/css/sec.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body style=" background-image: url('assets/images/dark-bg-two.jpg'); background-position:fit; background-repeat:no-repeat; background-size: cover;">


 
  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

        <!-- template-version start -->
        <div class="template-version">
          <button type="button" style="border-radius:20px 0 0 20px;"><i class="fa fa-adjust">  </i></button>
          <div class="color-version-area">
            <a href="history.php" class="dark-vesion">Dark</a>
            <a href="../history.php" class="light-vesion">Light</a>
          </div>
        </div>



<style>
  @media all and (min-width:2200px){
  #v31{
  width: 80%;
  margin-left:10%;
  box-shadow: 1px 1px 400px silver;
  }
}
</style>


<br>
<div class="row" id="v31">
    <div class="col-lg-8">
      <div class="lottery-winning-num-part">
        <div class="lottery-winning-num-table">
          <h3 class="block-title"> Win History </h3>
          <div class="lottery-winning-table">
            <table>
              <thead>
                <tr>
                  <th class="name">Name </th>
                  <th class="date">draw date</th>
                  <th class="numbers">winning numbers</th>
                </tr>
              </thead>
              <tbody>
                
 <?
$wontabls = " SELECT * FROM `wontabl` WHERE byusr = '$vusrlog' ";
$wontablsq = mysqli_query($db,$wontabls);
 while($wontablsf = mysqli_fetch_assoc($wontablsq))
{
 ?>
                
   <tr>
   <td><div class="winner-details">
   <i class="fa fa-user text-primary"> </i>
   <span class="winner-name"> <? echo $wontablsf['byusr']; ?></span></div></td>

  <td><span class="winning-date"> <? echo $wontablsf['Date']; ?></span></td>
   <td>
   <ul class="number-list">
   <li class="active"> <? echo $wontablsf['tickets']; ?></li>
   </ul>
   </td>
  
  <? } ?>           
              </tbody>
            </table>
          </div>
        </div>
      </div> 
    </div>











    
    <div class="col-lg-4">
      <div class="winner-part">
        <h4 class="float-right" style="border-bottom:1px solid skyblue; color:rgb(78, 184, 226);"> <? echo $vlogf['uemail']; ?><i class="fa fa-user"> </i> </h4>
        <h6 class="block-title text-muted"> Details </h6>
          <hr>
          <ul style="text-align: center;">
 <li class="btn btn-link"> Total Buy Tickets <i class="fa fa-ticket" style="color:aqua;; font-size:1.2rem; text-shadow:1px 1px 2px black"></i> <b> <? echo $chkttlbuytkts; ?> </b></li>
 
 <li class="btn btn-link"> Total Have Tickets <i class="fa fa-ticket" style="color:gold;; font-size:1.2rem; text-shadow:1px 1px 2px navy"></i> <b> <? echo $chkhvtktslst; ?></b></li>
           
 <li class="btn btn-link"> Total Won Tickets <i class="fa fa-ticket" style="color: lime; font-size:1.2rem; text-shadow:1px 1px 2px black"></i> <b> <? echo $ttlwintkts; ?> </b></li>
           </ul>
           <hr class="p-1 " style="box-shadow:1px 1px 8px silver; background: linear-gradient(to left,aqua , skyblue);">
            <center> <h4 style="color:gray;"><u> Go to Tables </h4> </u></center><br>
            <a href="#buyingdivtable" class="btn" style="margin: 1rem; background:linear-gradient(to left, aqua, skyblue);"> buying History <i class="fa fa-table text-warning"> </i> </a>
            <a href="#sumoutdivtable" class="btn" style="margin:1rem; background:linear-gradient(to left, aqua, skyblue);"> Withdrawal History <i class="fa fa-table text-warning"> </i> </a>




        </div>
      </div>
    </div>




























  <!-- online-ticket-section start -->
  <section class="online-ticket-section section-padding has_bg_image">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <h2 class="section-title" style="color:white;">Your Lottery Tickets</h2>
            <p style="color:silver;"> Your purchasing Lottery Tickets is shown Below </p>
          </div>
        </div>
      </div>
    
            <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="online-ticket-table-part">
            <div class="online-ticket-table">
              <h3 class="block-title" id="buyingdivtable">Buying Lottery </h3>
              <div class="online-ticket-table-wrapper">
                <table>
                  <thead>
                    <tr>
                      <th class="name">User</th>
                      <th class="jackpot">Payeer</th>
                      <th class="price">price</th>
                      <th class="draw-time"> Date </th>
                      <th class="sold-num"> Chances </th>
                      <th class="status"> Lottery Numbers </th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    
 <?
 $hvbuyonlytbl1 = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ORDER BY bid DESC";
  $hvbuyonlytblq1 = mysqli_query($db,$hvbuyonlytbl1);
 while($hvbuyonlytblf = mysqli_fetch_assoc($hvbuyonlytblq1))
{
$rdmchancebar = mt_rand(50, 100);
 ?>
    <tr>
      <td>
        <div class="winner-details"><i class="fa fa-user text-primary"> </i><span class="winner-name">  <? echo $hvbuyonlytblf['byusr']; ?></span></div>
      </td>
      <td>
        
      <span class="jackpot-price"> <? echo $hvbuyonlytblf['wallet']; ?> <i class="bx bx-wallet text-primary"></i> </span>
    </td>
    <td>
      <span class="price">
     <? $d2 = 100 - $discount; echo 1000 / 100 * $d2; ?> 
     
     <i class="fa fa-ruble text-primary"> </i></span>
    </td>
    <td>
      <div class=""> <? echo $hvbuyonlytblf['date']; ?> </div>
    </td>
    <td>
      <div class="progressbar" data-perc="<? echo $rdmchancebar; ?>%">
        <div class="bar"></div>
        <span class="label"><? echo $rdmchancebar; ?> %</span>
      </div>
    </td>
    <td>
      <ul class="number-list">
        <li class="active"><? echo $hvbuyonlytblf['tktno']; ?></li>
      </ul>
    </td>
  </tr>
 <? } ?>           
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- online-ticket-section end -->















































  <!-- online-ticket-section start -->
  <section class="online-ticket-section section-padding has_bg_image" id="sumoutdivtable">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <h2 class="section-title" style="color:white;">Your Withdrawal History </h2>
            <p style="color:silver;"> Your Withdrawal History are shown below  </p>
          </div>
        </div>
      </div>
    
            <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="online-ticket-table-part">
            <div class="online-ticket-table">
              <h3 class="block-title">Withdrawal History </h3>
              <div class="online-ticket-table-wrapper">
                <table>
                  <thead>
                    
                    

                    <tr>
                      <th class="name">User</th>
                      <th class="jackpot">Payeer</th>
                      <th class="price">price</th>
                      <th class="draw-time"> Date </th>
                      <th class="sold-num"> Status </th>
                    </tr>
                  </thead>
                  <tbody>
                    
<?
$vsumoutbl = "SELECT * FROM `sumout` WHERE byusr='$vusrlog' ORDER BY outid DESC";
  $vsumoutblq = mysqli_query($db,$vsumoutbl);
 while($vsumoutblf = mysqli_fetch_assoc($vsumoutblq)){
 ?>
                    
                    
                    
      <tr>
        <td>
          <div class="winner-details"><i class="fa fa-user text-primary"> </i><span class="winner-name">  <? echo $vsumoutblf['byusr'] ; ?> </span></div>
        </td>
        <td>
          <span class="jackpot-price"> <? echo $vsumoutblf['usrpayeer'] ; ?> <i class="bx bx-wallet text-primary"></i> </span>
        </td>
        <td>
          <span class="price"> <? echo $vsumoutblf['sumouts'] ; ?> <i class="fa fa-ruble text-primary"></i> </span>
        </td>
        <td>
          <div class=""> <? echo $vsumoutblf['Date'] ; ?> </div>
        </td>
        <td>
           <span class="fa fa-check-circle p-1 text-success"> </span>
        </td>
      </tr>
 
  <? } ?>          
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- online-ticket-section end -->








































     <!---------------start-->
      <div id="navbtnsdiv">
        <nav class="nav" style="box-shadow:1px 1px 30px navy;">
            <ul class="nav-content">
                <li class="nav-list">
                    <a href="#" class="link-item" onclick="bnavbtnhom()">
                        <i class='bx bxs-home link-icon'></i>
                        <span class="link-text">Home</span>
                    </a>
                </li>
                <li class="nav-list">
                    <a href="#" class="link-item" id="bnavbuybtn" onclick="bnavabtnbuy()">
                        <i class='bx bxs-cart-add link-icon'></i>
                        <span class="link-text"> Buy </span>
                    </a>
                </li>
                <li class="nav-list">
                    <a href="#" class="link-item active" id="bnavbtnhstry" onclick="bnavbtnhstry()">
                        <i class='bx bx-history link-icon' ></i>
                        <span class="link-text"> History </span>
                    </a>
                </li>
                <li class="nav-list">
                  <a href="#" class="link-item" onclick="bnavabtnexit()">
                      <i class='bx bx-wallet link-icon'></i>
                      <span class="link-text"> Exit </span>
                  </a>
              </li>
              <li class="nav-list">
                <a href="#" class="link-item" id="bnavabtnprof" onclick="bnavabtnprof()">
                    <i class='bx bxs-user link-icon'></i>
                    <span class="link-text">Profile</span>
                </a>
            </li>
            

                <span class="indicator bx bxs-spa"></span>
            </ul>
        </nav>
      </div>
        <!----------------end -->



<script>
  var bnavbuybtn = document.getElementById('bnavbuybtn') ;
  const indicator = document.querySelector(".indicator");
        indicator.style.left = `240px`;
</script>































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
  <script src="assets/js/sec.js"></script>
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
    var clock = $('.clock').FlipClock(99000 * 24 * 3, {
      clockFace: 'DailyCounter',
      countdown: true
    });
      jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
          map: 'world_en',
          color: '#eaedef',
          backgroundColor: '#f7fcff',
          hoverOpacity: 0.8,
          selectedColor: '#eaedef',
          scaleColors: ['#f7fcff', '#f7fcff'],
          normalizeFunction: 'polynomial'
        });
      });
    </script>  
</body>
</html>


