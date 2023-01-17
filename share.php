



<?

include 'config.php';
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
//////////////////////////////////////
//////////////////////////////////////
 $nowdat = strtotime("now");
 $todaydatev = date("Y-m-d",$nowdat);
//////////////
$vusrlog = $_COOKIE['coklog'];
$tktridfp = $_COOKIE['tktridfp'];





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
    <!-- responsive css link -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/sec.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                    
</head>
<body style=" background-image: url('assets/images/bg-two.jpg'); background-position:fit; background-repeat:no-repeat; background-size: cover;">
<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->

<!-- template-version start -->
<div class="template-version">
<button type="button" style="border-radius:20px 0 0 20px;"><i class="fa fa-adjust">  </i></button>
<div class="color-version-area">
  <a href="dark/share.php" class="dark-vesion">Dark</a>
  <a href="share.php" class="light-vesion">Light</a>
</div>
</div>



















<button onclick="history.back()" style="background:none;"> <span class="fa fa-arrow-left" style="background:none;color:rgb(168, 121, 121); padding: 1rem; font-size: 2rem;"> </span> </button>

<br>
<center>
    <h3 style="color:indigo;"> Invites friends </h3>
<b style="color:green;"> Get Rewards </b><br>
    <br>
<div style=" background: rgba(0, 128, 0, 0.377); box-shadow: 1px 1px 18px black; width: 170px; padding:10px;">
<div style=" background:rgba(0, 89, 255, 0.521); box-shadow: 1px 1px 18px silver; width: 150px; padding:10px;">
<div style=" background:skyblue; width: 130px; padding:10px;">
<img src="https://chart.apis.google.com/chart?cht=qr&chs=110x110&chl=<? $_SERVER['HTTP_HOST'].'/?referid='.$vlogf['uid']; ?>" alt="">
</div>
</div>
</div>
    <br>
</center>


<style>
    .custom-copy {
  position: relative;
  width: 80%;
  margin-left:10%;
}
.custom-copy-input {
  width: 100%;
  border: 1px solid #ccc;
  border-radius: 100px;
  padding: 10px 100px 10px 20px; 
  line-height: 1;
  box-sizing: border-box;
  outline: none;
}
.custom-copy-botton {
  position: absolute;
  right: 3px; 
  top: 3px;
  bottom: 3px;
  border: 0;
  background: skyblue;
  color: #fff;
  outline: none;
  margin: 0;
  padding: 0 10px;
  border-radius: 100px;
  z-index: 2;
}
.custom-copy-botton:hover{
    color: lime;
    background:navy;
}
</style>
 


<br><br><br>
<div class="custom-copy">
    <input type="text" id="refferallinkinpt" value="<? echo $_SERVER['HTTP_HOST'].'/?referid='.$vlogf['uid']; ?>" class="important-message custom-copy-input" placeholder=" Your Refferal Link ">
    <button id="btnCopyAdress" onclick="copyToClipboard('.important-message')" class="custom-copy-botton" type="submit"> Copy Link</button>  
  </div>























<br><br>
<center>
    <div class="col-lg-6">
        <div class="join-item text-center">
          <h3 class="title">Get Your referral Link</h3>
          <p>Invites users & you will receive a revenue share of between 10%-15%, depending on the number of players that you refer. The more traffic you send, the more revenue you earn.</p>
          <a href="#" class="cmn-btn"> Invites Now </a>
        </div>
      </div><!-- join-item end -->
</center>
<br><br>


  <div style="width:80%; margin-left:10%;">
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

















<br><br><br><br>





    
      <!---------------start-->
      <div id="navbtnsdiv">
        <nav class="nav" style="box-shadow:1px 1px 30px silver;">
            <ul class="nav-content">
                <li class="nav-list">
                    <a href="#" class="link-item active" onclick="bnavbtnhom()">
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
                    <a href="#" class="link-item" id="bnavbtnhstry" onclick="bnavbtnhstry()">
                        <i class='bx bx-history link-icon' ></i>
                        <span class="link-text"> History </span>
                    </a>
                </li>
                <li class="nav-list">
                    <a href="#" class="link-item" onclick="bnavabtnexit()">
                        <i class='bx bx-wallet link-icon'></i>
                        <span class="link-text"> Withdraw </span>
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
    <script>
///////////////////////////////
///////////////////////////////
function copyToClipboard(el) {

	// resolve the element
	el = (typeof el === 'string') ? document.querySelector(el) : el;

	// handle iOS as a special case
	if (navigator.userAgent.match(/ipad|ipod|iphone/i)) {

		// save current contentEditable/readOnly status
		var editable = el.contentEditable;
		var readOnly = el.readOnly;

		// convert to editable with readonly to stop iOS keyboard opening
		el.contentEditable = true;
		el.readOnly = true;

		// create a selectable range
		var range = document.createRange();
		range.selectNodeContents(el);

		// select the range
		var selection = window.getSelection();
		selection.removeAllRanges();
		selection.addRange(range);
		el.setSelectionRange(0, 999999);

		// restore contentEditable/readOnly to original state
		el.contentEditable = editable;
		el.readOnly = readOnly;
		document.getElementById('btnCopyAdress').innerHTML = "<span> √ Copied</span>";
		
		setTimeout(function() { document.getElementById('btnCopyAdress').innerHTML = '<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-success rounded-md group-hover:bg-opacity-0 fa fa-copy"> Copied </span>'; }, 1000);
	}
	else {
		el.select();
		document.getElementById('btnCopyAdress').innerHTML = "<span> √ Copied</span>";

		setTimeout(function() { document.getElementById('btnCopyAdress').innerHTML = '<span class="relative  fa fa-copy text-warning"> √ </span>'; }, 1000);
	}

	// execute copy command
	document.execCommand('copy');
}	
///////////////////////////////
///////////////////////////////
    </script>
</body>
</html>