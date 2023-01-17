
<?

include 'config.php';
error_reporting(0);
session_start();
unset($_SESSION['redpop']);
unset($_SESSION['bluepop']);




if(!isset($_COOKIE['coklog']))
{ header('location:login.php'); }
$vusrlog = $_COOKIE['coklog'];
$vlog = "SELECT * FROM `userslog` WHERE uemail = '$vusrlog'";
$vlogq =mysqli_query($db,$vlog);
$vlogf = mysqli_fetch_array($vlogq);
  $uemailv = $vlogf['uemail'];
  $sumout = $vlogf['sumout'];
  $totalsumout = $vlogf['totalsumout'];
  $uacc = $vlogf['uacc'];
  $sban = $vlogf['user_ban'];
//////////////////////////////////////
//////////////////////////////////////

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);

  $minout = $chkq['min_out'];
  $stngsban = $chkq['withdrawoff'];


/* //////////////////////////////////////
 //////////////////////////////////////////
 //////////////////////////////////////////
 ////////////////////////////////////////// */
 
 if(isset($_POST['sumoutbtn']))
 {
   $pwbalnc = mysqli_real_escape_string($db,$_POST['sumoutval']);
   
   if($pwbalnc >= $minout)
 {
   if($pwbalnc > $sumout)
   {
     $_SESSION['redpop'] = 'You enterd Highest Amounts Thats You Not enterd';
   } else{
    if($sban == 1 || $stngsban == 1){
     $_SESSION['redpop'] = 'Your Account Is Ban';
    }else{
    require_once('cpayeer.php');
  $accountNumber = $payeeraccno;
  $apiId = $apiIdset;
  $apiKey = $apikeyp;
  $payeer = new CPayeer($accountNumber, $apiId, $apiKey);
if ($payeer->isAuth())
{
	$arTransfer = $payeer->transfer(array(
		'curIn' => 'RUB',
		'sum' => $pwbalnc,
		'curOut' => 'RUB',
		'to' => $uacc,
		'comment' => $commentforsumout,
	));
	// for updates
	if (empty($arTransfer['errors']))
	{
$pwbalslct = "UPDATE `userslog` SET `totalsumout`=totalsumout + '$pwbalnc', sumout=sumout - '$pwbalnc' WHERE uemail='$vusrlog'";
   $pwbalslctq = mysqli_query($db,$pwbalslct);
	  if($pwbalslctq){ $_SESSION['bluepop'] = 'Withdrawl has been Successed'; }
	$setwptbl = "INSERT INTO `sumout`(`byusr`, `usrpayeer`, `sumouts`) VALUES ('$vusrlog','$uacc','$pwbalnc')";
   $setwpt1blq = mysqli_query($db,$setwptbl);
	
	}else{
	  echo 'Tr errors Some Time By Payeer';
		/*echo '<pre>'.print_r($arTransfer["errors"], true).'</pre>'; */
	} // end updates
}else{ // for not authorized

	  echo 'Tr auth errors Some Time By Payeer'; 
	  /*
	echo '<pre>'.print_r($payeer->getErrors(), true).'</pre>'; */
}
}
  }
 }else{
   $_SESSION['redpop'] = 'minimum '.$minout.' rubles can withdrawal';
 }
}
 
/* //////////////////////////////////////
 //////////////////////////////////////////
 //////////////////////////////////////////
 ////////////////////////////////////////// */

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
<body>
<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->

<!-- template-version start -->
<div class="template-version">
<button type="button" style="border-radius:20px 0 0 20px;"><i class="fa fa-adjust">  </i></button>
<div class="color-version-area">
  <a href="dark/sumout.php" class="dark-vesion">Dark</a>
  <a href="sumout.php" class="light-vesion">Light</a>
</div>
</div>





<style>
#soutdiv2{
  background: skyblue;
  border-radius: 0 0 35px 35px;
  box-shadow: 1px 1px 6px silver;
}
  #sumoutopdiv{
    background: white;
    position: relative;
    z-index: 50;
    width:100%;
    align-content: center;
    text-align: center;
    align-items: center;
    border-radius: 0 0 35px 35px;
    box-shadow: 1px 1px 20px silver;
  }
  .sumoutprof{
    border-radius: 50%;
    height: 3rem;
    width: 3rem;
    border-bottom: 1px solid skyblue;
    
  }
  #soutmarquee{
   margin-top:0.5rem; box-shadow:inset 1px 1px 5px #000000bb; border-radius:0 10px 10px 0;
   font-size: 1rem;
  }
@media all and (min-width:600px){
  #soutmarquee{
   box-shadow: none;
  }
}
@media all and (min-width:900px){
  #soutmarquee{
   margin-top: 1rem;
  }
}

#horizvtop{
 width: 80%;
  margin-left: 5%;
  margin-right: 5%;
}
.horizvdiv{
  display: flex;
  justify-content:space-around;
  width: 100%;
}
.horizvdivin{
  width: 8rem;
 background: skyblue;
 border-radius: 10px;
 box-shadow: 1px 1px 8px silver;
 text-align: center;
}
</style>


<div id="soutdiv2">
<div id="sumoutopdiv">
 <span class="sumoutprof"><img src="assets/images/profimg.png" class="fa fa-user" style="width:3rem;"> </span> 
  <h5 style="color:lime"><? echo $uemailv ; ?></h5>
</div>

<div style="width:90%; margin-left:5%; margin-right:5%; display:flex; flex-direction:row;vertical-align: center;">
 <div style="width:20%;">
   <img class="" src="assets/images/alert1.png" alt="" style="width:5rem;">
 </div>
<div style="width:80%;">
<marquee id="soutmarquee">
 <small style="color:indigo;"> Minimum Withdrawal is </small> <b class="text-warning"> <? echo $minout ; ?> </b> <i class="fa fa-ruble text-primary"> </i>
</marquee>
</div>
</div>

<center style="color: orange; text-shadow: 1px 1px 2px black; font-size: 2rem;">
  Withdrawal Here  
</center>

</div>

<!---------------start---->
<div id="horizvtop">
<br>
<div class="horizvdiv">
  <div class="horizvdivin">
    <b style="color:#009e00;">
       Balance
    </b>
    <h3 style="color:white; text-shadow:1px 1px 2px black;"> <? echo $sumout ; ?> </h3>
  </div>
  <div class="horizvdivin">
    <b style="color:#009e00;">
       Total Out
    </b>
    <h3 style="color:white; text-shadow:1px 1px 2px black;"> <? echo $totalsumout ; ?> </h3>
  </div>
</div>

<br>
</div>
<!----------------end---->








<?
if(isset($_SESSION['bluepop']))
{
  echo '<b style="color:green; font-size:1.5rem;">'.$_SESSION['bluepop'].'</b>';
}
if(isset($_SESSION['redpop']))
{
  echo '<b style="color:red; font-size:1.5rem;">'.$_SESSION['redpop'].'</b>';
}
?>

<style>
  .sumoutform{
    display: flex; flex-direction:row;
    width: 90%; margin-left:5%;
    overflow:hidden;
  }
  .formdiv1{
      width: 60%;
      background: #87ceeb9a;
      border-radius:20px 0 0 20px;
      border:1px solid indigo;
      border-right:none;
  }
  .imgdiv2 img{
    border-radius:0 20px 20px 0;
  }
  .imgdiv2{
    width: 40%;
    border: 1px solid indigo;
    border-left:none; 
    border-radius:0 20px 20px 0;
  }
  input{
    border:none;
    border-bottom:2px solid navy;
    outline: none;
    font-size: 1.5rem;
    text-align:center;
    background:none ;
    margin-top:1rem;
    box-shadow:1px 1px 10px black;
    color: navy;
  }
  @media all and (max-width:500px)
  {
    .sumoutform{ 
      width: 98%; margin-left:1%;
      display: flex; flex-direction:column;
    }
    .formdiv1{
      width: 98%; margin-left:1%;
      border-radius:20px; border: 1px solid indigo; box-shadow:1px 1px 20px silver, 1px 1px 6px black;
    }
    .imgdiv2 img{
      border-radius: 20px ; opacity: 0.8;
      margin-top:-1.5rem; position:relative;z-index: -1;
      border-radius:0 0 20px 20px;
    }
    .imgdiv2{
      width: 98%; margin-left:1%;
      border-radius:0 0 20px 20px;
      border: 1px solid indigo;
      border-top:none;
    }
  }
</style>


<div class="sumoutform">
  <div class="formdiv1">
    <h3 class="fa fa-ruble" style="color:skyblue; text-shadow:1px 1px 2px black; background:indigo; border-radius:3rem; width:4rem; height:4rem; font-size:4rem; text-align:center; float:right; margin-right:-2rem; border:none;border-left:2px solid white; z-index:80;position:relative; box-shadow:1px 1px 8px white;">  </h3>
   <form method="post" style="width:100%;">
   
    <center>
   <select style="color:indigo; font-size:2rem; border-radius:10px; background:#87ceeb98;box-shadow:1px 1px 6px black;outline:none;">
     <option>
       <? echo $uacc ; ?>
     </option>
   </select>
   </center>
   
   
   <br>
   <input name="sumoutval" type="number" placeholder="Enter Rubles Amounts"> 
   <br>
   <br>
  <center><button type="submit" class="cmn-btn" name="sumoutbtn"> Withdraw </button></center> 
    </form>
  </div>
  <div class="imgdiv2">
    <img src="assets/images/payeerimg.png" style="width:100%;">
  </div>
</div>





















<br>
<br>
<br>

     
      <!---------------start-->
      <div id="navbtnsdiv">
        <nav class="nav" style="box-shadow:1px 1px 30px silver;">
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
                    <a href="#" class="link-item" id="bnavbtnhstry" onclick="bnavbtnhstry()">
                        <i class='bx bx-history link-icon' ></i>
                        <span class="link-text"> History </span>
                    </a>
                </li>
                <li class="nav-list">
                    <a href="#" class="link-item active" onclick="bnavabtnexit()">
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
     <script>
            var bnavbuybtn = document.getElementById('bnavbuybtn') ;
            const indicator = document.querySelector(".indicator");
                  indicator.style.left = `335px`;
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


