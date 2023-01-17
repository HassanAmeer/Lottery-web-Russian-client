



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
 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body style=" background-image: url('assets/images/dark-bg-two.jpg'); background-position:fit; background-repeat:no-repeat; background-size: cover;">


<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->

<!-- template-version start -->
<div class="template-version">
<button type="button" style="border-radius:20px 0 0 20px;"><i class="fa fa-adjust">  </i></button>
<div class="color-version-area">
  <a href="dark/buy.php" class="dark-vesion">Dark</a>
  <a href="../buy.php" class="light-vesion">Light</a>
</div>
</div>































   <div style="margin: auto; width:80%;">
    <b style="color:#91daf0; letter-spacing:2px; text-align: center; font-size: 1.5rem; font-style: italic;"> Next Draw At </b>
    </div>
    <center> 
     
    <div class="col-xl-5 text-center">
      <div class="timer-part">
        <div class="clock"></div>
      </div>
    </div>
    </center>










































<a href="#euroblockbtm" class="cmn-btn" style="border-radius:0 30px 30px 0; border-left: 10px solid navy;"> Whats choose ? </a>
    

  <!-- cart-section start -->
  <section class="cart-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="cart-area d-flex">
            <div class="col-lg-8">
              <div class="cart-table">
                <table>
                  <thead>
                    <tr>
                      <th>From Card</th>
                      <th> Numbers </th>
                      <th> Status </th>
                      <th> Amounts </th>
                      <th>Discount</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
                  <tbody class="vcartblfromjs">
                 
                  </tbody>
                </table>
              </div>
              <span class="pull-right mt-3">All items</span>
            </div>
            <div class="col-lg-4">
              <div class="cart-summary-area">
            <h3 class="summary-area-title">Cart Summary</h3>
                <div class="sub-total-amount">
                  <span class="title">Subtotal</span>
                  <span class="amspan vttlcartsumdiv"> 1000 </span>
                </div>
                <div class="discount-amount">
                  <span class="title">discount</span>
                  <span class="amount"><? echo $chkq['discount']; ?> % </span>
                </div>
                <div class="total-amount">
                  <span class="title">total payment</span>
                  <span class="amount vttlcartsumdiv"> 1000 </span>
               
               
                  <button style="color:lime;text-shadow:1px 1px 2px blqck;" class="payment-btn confrmcartbtn"> Confirm <span class="vttlcartsumdiv"> 1000 </span></button>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
  <?php
$m_shop = $pshopid;
$m_orderid = $porderid;
$m_curr = $ptypecruncey;
$m_desc = $pdesc;
$m_key = $seckey;

$arHash = array(
	$m_shop,
	$m_orderid,
	$m_curr,
	$m_desc
);

/*
$arParams = array(
	'success_url' => 'http:///new_success_url',
	//'fail_url' => 'http:///new_fail_url',
	//'status_url' => 'http:///new_status_url',
	'reference' => array(
		'var1' => '1',
		//'var2' => '2',
		//'var3' => '3',
		//'var4' => '4',
		//'var5' => '5',
	),
	//'submerchant' => 'mail.com',
);

$key = md5(''.$m_orderid);

$m_params = @urlencode(base64_encode(openssl_encrypt(json_encode($arParams), 'AES-256-CBC', $key, OPENSSL_RAW_DATA)));

$arHash[] = $m_params;
*/

$arHash[] = $m_key;

$sign = strtoupper(hash('sha256', implode(':', $arHash)));
?>
<form method="post" action="https://payeer.com/merchant/">
<input type="hidden" name="m_shop" value="<?=$m_shop?>">
<input type="hidden" name="m_orderid" value="<?=$m_orderid?>">
<input type="hidden" id="valtopayeersum" name="m_amount" value="">
<input type="hidden" name="m_curr" value="<?=$m_curr?>">
<input type="hidden" name="m_desc" value="<?=$m_desc?>">
<input type="hidden" name="m_sign" value="<?=$sign?>">


                
<button type="submit" name="m_process" style="display:none;" class="payment-btn buycartbtnf">pay<span class="vttlcartsumdiv"> 1000 </span></button>
 
 </form>
             
                </div>
                <div class="card-area">
                  <div class="card-list">
                  <img src="assets/images/payment-methods/payeer.png" style="width:6rem;" alt="image">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- cart-section end -->











<lottie-player id="confrmtktgif" style="display:none;margin:35%; position:fixed; z-index:150;width:30%; height:30%; top:20%;" src="https://assets3.lottiefiles.com/temp/lf20_j0oMVB.json" background="transparent"  speed="1" loop autoplay></lottie-player>




































  <!-- single-categories-play-section start -->
  <section class="single-categories-play-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="single-cat-play-area">
            <div class="single-header d-flex justify-content-between">
              <div class="left d-flex">
                <div class="icon">
                  <img src="assets/images/elements/jackpot-3.png" alt="">
                </div>
                <div class="content">
                  <h3 class="title text-warning">Top Sells </h3>
   <a href="#euroblockbtm" class="text-white"> Choose ? </a>
                 
<?

$onlyhvtkts = " SELECT COUNT(tktno) AS vtktsh FROM `buytkts` WHERE status=1";
$onlyhvtktsq = mysqli_query($db,$onlyhvtkts);
$vtktshv = mysqli_fetch_assoc($onlyhvtktsq);




?>
  <span class="amount">  <? 
      if($vtktshv['vtktsh'] > 10)
      { echo $vtktshv['vtktsh'];
      }else{ echo mt_rand(1000 , 72937); }
?> 

<i class="fa fa-ruble text-primary"> </i></span>
                </div>
              </div>
              <div class="right text-right">
           <span class="draw-days text-white">draw in <b class="rmndaysonly"> </b> Days </span>
                <div class="header-btn-area">
                  
                  
   <a href="#euroblockbtm"> <button type="reset" id="quick-pick-all" style="color:lime;"> Pick ?</button> </a>
   
   
     <button onclick="vblcknosto5()" type="button" id="add-item"><i class="fa fa-refresh" style="color:white;"></i></button>
    <button type="button" onclick="delalltktsnoscard()" id="delete-item"><i class="fa fa-trash" style="color:white;"></i></button>
                </div>
              </div>
            </div><!-- single-header end -->
            <div class="single-body">
              <div class="single-body-inner d-flex">
                <div class="play-card cardpikr1" style="display:none;">
                  <button type="button" class="close-play-card slctcutcard1"><i class="fa fa-times"></i></button>
                  <div class="play-card-inner text-center">
                    <div class="play-card-header">
                      <span class="number-amount">Pick lottery</span>
                      <div class="header-btn-area">
                        <button type="button" id="quick-pipick" style="color:gold;"> From card </button>
   <button type="button" class=" vrdminblckno1" id="clear-pick1" style="color:lime;"> 7 </button>
   
                      </div>
                    </div>
                    <div class="play-card-body">
                      <ul class="number-list">

 <? 
$tktsnos1 = "SELECT * FROM `cardpiker1` ";
$tktsnos1q =mysqli_query($db,$tktsnos1);
while($tktsnos1v = mysqli_fetch_array($tktsnos1q))
 {    if($tktsnos1v['saled'] == 1){
   echo '<li class="disabled" style="color:black; background:#b4a0a0; opacity:0.2;">'.$tktsnos1v['tktnos'].'</li>';
    }else{
   echo '<li class="actvcardlino1" data-listnohav='.$tktsnos1v['tktnos'].'>'.$tktsnos1v['tktnos'].'</li>';
   }
 }
  ?>            

                      </ul>
                     
                    </div>
  <div class="play-card-footer">
   <p class="play-card-footer-text"> Last Selected Numbers: </p>
   <div class="selected-numbers ">
          <span class="card1sltdno">
            
          </span>
                      </div>
                    </div>
                  </div>
                </div><!-- play-card end -->
                <div class="play-card cardpikr2">
                  <button type="button" class="close-play-card slctcutcard2"><i class="fa fa-times"></i></button>
                  <div class="play-card-inner text-center">
                   <div class="play-card-header">
                      <span class="number-amount">Pick lottery</span>
                      <div class="header-btn-area">
                        <button type="button" id="quick-pick1" style="color:gold;"> From card </button>
     <button type="button" class="vrdminblckno2" id="clear-pick1" style="color:lime;"> 8 </button>
                      </div>
                    </div>
                    <div class="play-card-body">
                      <ul class="number-list">
                 
 <? 
$tktsnos2 = "SELECT * FROM `cardpiker2` ";
$tktsnos2q =mysqli_query($db,$tktsnos2);
while($tktsnos2v = mysqli_fetch_array($tktsnos2q))
 {    if($tktsnos2v['saled'] == 1){
   echo '<li class="disabled" style="color:black; background:#b4a0a0; opacity:0.2;">'.$tktsnos2v['tktnos'].'</li>';
    }else{
   echo '<li class="actvcardlino2" data-listnohav='.$tktsnos2v['tktnos'].'>'.$tktsnos2v['tktnos'].'</li>';
   }
 }
  ?>            
                      </ul>
                   
                    </div>
  <div class="play-card-footer">
 <p class="play-card-footer-text"> Last Selected Numbers: </p>
   <div class="selected-numbers">
    <span class="card2sltdno">
            
          </span>
                      </div>
                    </div>
                  </div>
                </div><!-- play-card end -->
  <div class="play-card cardpikr3">
  <button type="button" class="close-play-card slctcutcard3"><i class="fa fa-times"></i></button>
                  <div class="play-card-inner text-center">
                     <div class="play-card-header">
                      <span class="number-amount">Pick lottery</span>
                      <div class="header-btn-area">
    <button type="button" id="quick-pick1" style="color:gold;"> From card </button>
   <button type="button" class="vrdminblckno3" id="clear-pick1" style="color:lime;"> 4 </button>
                      </div>
                    </div>
                    <div class="play-card-body">
                      <ul class="number-list">

 <? 
$tktsnos3 = "SELECT * FROM `cardpiker3` ";
$tktsnos3q =mysqli_query($db,$tktsnos3);
while($tktsnos3v = mysqli_fetch_array($tktsnos3q))
 {    if($tktsnos3v['saled'] == 1){
   echo '<li class="disabled" style="color:black; background:#b4a0a0; opacity:0.2;">'.$tktsnos3v['tktnos'].'</li>';
    }else{
   echo '<li class="actvcardlino3" data-listnohav='.$tktsnos3v['tktnos'].'>'.$tktsnos3v['tktnos'].'</li>';
   }
 }
  ?>            
                      </ul>
                     
                    </div>
                    <div class="play-card-footer">
<p class="play-card-footer-text"> Last Selected Numbers: </p>
  <div class="selected-numbers">
      <span class="card3sltdno">
          </span>
                      </div>
                    </div>
                  </div>
                </div><!-- play-card end -->
 <div class="play-card cardpikr4">
                  <button type="button" class="close-play-card slctcutcard4"><i class="fa fa-times"></i></button>
                  <div class="play-card-inner text-center">
                     <div class="play-card-header">
                      <span class="number-amount">Pick lottery</span>
                      <div class="header-btn-area">
                        <button type="button" id="quick-pick1" style="color:gold;"> From card </button>
  <button type="button" class="vrdminblckno4" id="clear-pick1" style="color:lime;"> 5 </button>
                      </div>
                    </div>
                    <div class="play-card-body">
                      <ul class="number-list">

 <? 
$tktsnos4 = "SELECT * FROM `cardpiker4` ";
$tktsnos4q =mysqli_query($db,$tktsnos4);
while($tktsnos4v = mysqli_fetch_array($tktsnos4q))
 {    if($tktsnos4v['saled'] == 1){
   echo '<li class="disabled" style="color:black; background:#b4a0a0; opacity:0.2;">'.$tktsnos4v['tktnos'].'</li>';
    }else{
   echo '<li class="actvcardlino4" data-listnohav='.$tktsnos4v['tktnos'].'>'.$tktsnos4v['tktnos'].'</li>';
   }
 }
  ?>            
                      </ul>
                    
                    </div>
                    <div class="play-card-footer">
                      <p class="play-card-footer-text"> Last Selected Numbers: </p>
                      <div class="selected-numbers">
        <span class="card4sltdno">
          </span>
                      </div>
                    </div>
                  </div>
                </div><!-- play-card end -->
 <div class="play-card cardpikr5">
                  <button type="button" class="close-play-card slctcutcard5"><i class="fa fa-times"></i></button>
                  <div class="play-card-inner text-center">
                   <div class="play-card-header">
                      <span class="number-amount">Pick lottery</span>
                      <div class="header-btn-area">
                        <button type="button" id="quick-pick1" style="color:gold;"> From card </button>
                        <button type="button" class="vrdminblckno5" id="clear-pick1" style="color:lime;"> 10 </button>
                      </div>
                    </div>
                    <div class="play-card-body">
                      <ul class="number-list">

 <? 
$tktsnos5 = "SELECT * FROM `cardpiker5` ";
$tktsnos5q =mysqli_query($db,$tktsnos5);
while($tktsnos5v = mysqli_fetch_array($tktsnos5q))
 {    if($tktsnos5v['saled'] == 1){
   echo '<li class="disabled" style="color:black; background:#b4a0a0; opacity:0.2;">'.$tktsnos5v['tktnos'].'</li>';
    }else{
   echo '<li class="actvcardlino5" data-listnohav='.$tktsnos5v['tktnos'].'>'.$tktsnos5v['tktnos'].'</li>';
   }
 }
  ?>            
                      </ul>
                  
                    </div>
                    <div class="play-card-footer">
   <p class="play-card-footer-text"> Last Selected Numbers: </p>
   <div class="selected-numbers">
       <span class="card5sltdno">
          </span>
                      </div>
                    </div>
                  </div>
                </div><!-- play-card end -->
              </div>
            </div><!-- single-body end -->
            <div class="single-footer d-flex justify-content-between">
              <div class="left">
                <span style="color:gold;">Winning Chances</span>
                
                
                
                
 <div class="vwinbars">      
 </div>
                     
                        
                        
                        
              </div>
              <div class="right d-flex justify-content-between">
                <div class="content">
                  <p>
                    <span style="color:gold;">Can draw with 1 ticket </span>
                    <span style="color:silver;" class="amount"> 1 x 1000 <i class="fa fa-ruble text-aqua"> </i></span>
                  </p>
                  <p>
<span style="color:gold;"> Maximum 100 Tickets can buy</span>
                    <span class="amount fa fa-gift">  <i class="fa fa-ticket text-warning"> </i></span>
                  </p>
                </div>
                <div class="card-cart-btn-area">
   <a href="#" class="single-cart-btn confrmcartbtn">
 <span class="amount vttlcartsumdiv"> 2000</span> Confirm </a>
 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- single-categories-play-section end -->
        
        
        
        
        
        
        
        
        
   














 <!-- jackpot-section start -->
 <section class="jackpot-section section-padding" style="margin-bottom:8rem;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="section-header text-center">
          <h2 class="section-title text-white">Lottery Jackpots</h2>
          <p style="color:silver;">Choose from the Powerball, Mega Millions, Lotto or Lucky Day Lotto and try for a chance to win a big cash prize ( many Tickets have many chances to WIN ) To choose Jackpots by Increasing of Lottery Tickets No. </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="jackpot-item text-center">
          <img src="assets/images/elements/jackpot-1.png" alt="image">
          <span class="amount"> 1000 <i class="fa fa-ruble"> </i> <b> = </b>  <b class="text-primary"> 1 </b> <i class="fa fa-ticket text-primary"> </i></span>
          <h5 class="title"> Powerball</h5>
          <p class="next-draw-time">Next Draw : <span class="vlcltime"> end of Every month</span></p>
          <a href="#" class="cmn-btn">Choose From Card!</a>
        </div>
      </div><!-- jackpot-item end -->
      <div class="col-lg-4 col-md-6">
        <div class="jackpot-item text-center">
          <img src="assets/images/elements/jackpot-2.png" alt="image">
          <span class="amount"> 2000 <i class="fa fa-ruble"> </i> <b> = </b>  <b class="text-primary"> 2 </b> <i class="fa fa-ticket text-primary"> </i></span>
          <h5 class="title">Cancer Charity</h5>
          <p class="next-draw-time">Next Draw : <span class="vlcltime"> end of Every month</span></p>
           <a href="#" class="cmn-btn">Choose From Card!</a>
        </div>
      </div><!-- jackpot-item end -->
      <div class="col-lg-4 col-md-6" id="euroblockbtm">
        <div class="jackpot-item text-center">
          <img src="assets/images/elements/jackpot-3.png" alt="image">
          <span class="amount"> 3000 <i class="fa fa-ruble"> </i> <b> = </b>  <b class="text-primary"> 3 </b> <i class="fa fa-ticket text-primary"> </i></span>
          <h5 class="title">EuroJackpot</h5>
          <p class="next-draw-time">Next Draw : <span class="vlcltime"> end of Every month</span></p>
           <a href="#" class="cmn-btn">Choose From Card!</a>
        </div>
      </div><!-- jackpot-item end -->
    </div>
  </div>
</section>
<!-- jackpot-section start -->




<div id="redpoptimediv" style="display:none; backdrop-filter:blur(10px);width:100%; height:2000%; position:absolute; z-index:900; top:0; bottom:0; left:0; right:0;">
  <br>
  <br>
  <br>
  <br>



<div style="margin: auto; width:80%;">
<b style="color:#069bc9; letter-spacing:2px; text-align: center; font-size: 1.5rem; font-style: italic;"> Next Draw Start Soon Wait For Buy Some days </b>
</div>
<center> 
 
<div class="col-xl-5 text-center">
  <div class="timer-part">
    <div id="clk2"></div>
  </div>
</div>
</center>
  <br>
  <br>
  <br>
  <center>
    <h2 style="color:red;">Can't Buy untill Another jackpot-section Start </h2>
  </center>
</div>














































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
                    <a href="#" class="link-item active" id="bnavbuybtn" onclick="bnavabtnbuy()">
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
        indicator.style.left = `145px`;
</script>


















<input type="hidden" class="vrdminblckno1">
<input type="hidden" class="vrdminblckno2">
<input type="hidden" class="vrdminblckno3">
<input type="hidden" class="vrdminblckno4">
<input type="hidden" class="vrdminblckno5">











<div class="bluepopup" style="display:none;">
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 300px; right:0;z-index:250; border-right:14px solid rgb(0, 102, 255);">
 <div style="display:flex; flex-direction:row;">
  <img src="assets/images/Coffee-blue.gif" style="width:2.5em;">
 </div>
 <div style="color:rgb(93,255,243); margin-top:0.5em; margin-left:5px; margin-right:5px;">
  <b class="popinerblue"> success </b>
 </div>
 <button class="popclosebtnblue" style="border: none; outline-offset:none;"> X </button>
</div>
</div>

<div class="redpopup" style="display:none;">
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 250px; right:0;z-index:250; border-right:14px solid rgb(230, 3, 48);">
  <div style="display:flex; flex-direction:row;">
   <img src="assets/images/Coffee-red.gif" style="width:2.5em;">
  </div>
  <div style="color:rgb(255,124,141); margin-top:0.5em; margin-left:5px; margin-right:5px;">
   <b class="popinerred"> Warning </b>
  </div>
  <button class="popclosebtnred" style="border: none; outline-offset:none;"> X </button>
 </div>
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














  /*
  $(document).on('click','.play-card-body .number-list li', function(){
    $(this).toggleClass("active");
 //  var fd = $(this).data('listnohav');
  //  alert(fd);
  }); */
  
  

  ////////////////////////////
  $(document).on('click','.actvcardlino1', function(){
  //  $(this).toggleClass("active");
    var listnohav = $(this).data('listnohav');
   var vrdminblckno = $('.vrdminblckno1').val();
   
   $('.card1sltdno').html(listnohav);
   
 $.post(
      "jaxo1.php",
      {tktsnocartjs:listnohav,vrdminblcknojs:vrdminblckno,sqlcard:1},
      function(listnohavf){ 
      vfihavtktsnoincart();
      vhavtktscartsum();
      vwinbarsf();
     if(listnohavf==1){
     $('.bluepopup').fadeIn();
     $('.popinerblue').html( ' Lottery No ('+listnohav + ') Added To Cart ');
  }else if(listnohavf==2){
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Already have');
    }
      });
 // end of post 
  $('.confrmcartbtn').fadeIn(1500);
  $('.buycartbtnf').fadeOut(2500);
  });
/////////////////////////////////////////
/////////////////////////////////////////
  ////////////////////////////
  $(document).on('click','.actvcardlino2', function(){
  //  $(this).toggleClass("active");
    var listnohav = $(this).data('listnohav');
   var vrdminblckno = $('.vrdminblckno2').val();
 $('.card2sltdno').html(listnohav);
 $.post(
      "jaxo1.php",
      {tktsnocartjs:listnohav,vrdminblcknojs:vrdminblckno,sqlcard:2},
      function(listnohavf){ 
      vfihavtktsnoincart();
      vhavtktscartsum();
      vwinbarsf();
     if(listnohavf==1){
     $('.bluepopup').fadeIn();
     $('.popinerblue').html( ' Lottery No ('+listnohav + ') Added To Cart ');
  }else if(listnohavf==2){
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Already have');
    }
      });
 // end of post 
  $('.confrmcartbtn').fadeIn(1500);
  $('.buycartbtnf').fadeOut(2500);
  });
/////////////////////////////////////////
/////////////////////////////////////////
  ////////////////////////////
  $(document).on('click','.actvcardlino3', function(){
  //  $(this).toggleClass("active");
    var listnohav = $(this).data('listnohav');
   var vrdminblckno = $('.vrdminblckno3').val();
 $('.card3sltdno').html(listnohav);
 $.post(
      "jaxo1.php",
      {tktsnocartjs:listnohav,vrdminblcknojs:vrdminblckno,sqlcard:3},
      function(listnohavf){ 
      vfihavtktsnoincart();
      vhavtktscartsum();
      vwinbarsf();
     if(listnohavf==1){
     $('.bluepopup').fadeIn();
     $('.popinerblue').html( ' Lottery No ('+listnohav + ') Added To Cart ');
  }else if(listnohavf==2){
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Already have');
    }
      });
 // end of post 
  $('.confrmcartbtn').fadeIn(1500);
  $('.buycartbtnf').fadeOut(2500);
  });
/////////////////////////////////////////
/////////////////////////////////////////
  ////////////////////////////
  $(document).on('click','.actvcardlino4', function(){
  //  $(this).toggleClass("active");
    var listnohav = $(this).data('listnohav');
   var vrdminblckno = $('.vrdminblckno4').val();
 $('.card4sltdno').html(listnohav);
 $.post(
      "jaxo1.php",
      {tktsnocartjs:listnohav,vrdminblcknojs:vrdminblckno,sqlcard:4},
      function(listnohavf){ 
      vfihavtktsnoincart();
      vhavtktscartsum();
      vwinbarsf();
     if(listnohavf==1){
     $('.bluepopup').fadeIn();
     $('.popinerblue').html( ' Lottery No ('+listnohav + ') Added To Cart ');
  }else if(listnohavf==2){
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Already have');
    }
      });
 // end of post 
  $('.confrmcartbtn').fadeIn(1500);
  $('.buycartbtnf').fadeOut(2500);
  });
/////////////////////////////////////////
/////////////////////////////////////////
  ////////////////////////////
  $(document).on('click','.actvcardlino5', function(){
  //  $(this).toggleClass("active");
    var listnohav = $(this).data('listnohav');
   var vrdminblckno = $('.vrdminblckno5').val();
 $('.card5sltdno').html(listnohav);
 $.post(
      "jaxo1.php",
      {tktsnocartjs:listnohav,vrdminblcknojs:vrdminblckno,sqlcard:5},
      function(listnohavf){ 
      vfihavtktsnoincart();
      vhavtktscartsum();
      vwinbarsf();
     if(listnohavf==1){
     $('.bluepopup').fadeIn();
     $('.popinerblue').html( ' Lottery No ('+listnohav + ') Added To Cart ');
  }else if(listnohavf==2){
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Already have');
    }
      });
 // end of post 
  $('.confrmcartbtn').fadeIn(1500);
  $('.buycartbtnf').fadeOut(2500);
  });
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
  $(document).on('click','.delcartidbtn', function(){
    var cartidel = $(this).data('cartidel');
 $.post(
      "jaxo1.php",
      {cartideljs:cartidel},
      function(cartidelf){ 
      vfihavtktsnoincart();
      vhavtktscartsum();
      vwinbarsf();
     if(cartidelf==1){
     $('.bluepopup').fadeIn();
  $('.popinerblue').html( ' Lottery No ('+cartidel + ') Deleted From Cart ');
    } 
      });
 // end of post 
  $('.confrmcartbtn').fadeIn(1500);
  $('.buycartbtnf').fadeOut(2500);
  });
  ////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
function vfihavtktsnoincart(){
    $.post(
      "jaxo1.php",
      {vifhavtktscartjs:'euiw7w'},
      function(vifhavtktscartf){
 $(".vcartblfromjs").html(vifhavtktscartf);
      }
    ); // end post
}    
 /////////
function vhavtktscartsum(){
    $.post(
      "jaxo1.php",
      {vhavtktscartsumjs:'djjsjd'},
      function(vhavtktscartsumf){
   
     $(".vttlcartsumdiv").html(vhavtktscartsumf + '<i class="fa fa-ruble"> </i>');
     $("#valtopayeersum").val(vhavtktscartsumf);
      }
    ); // end post
}    
 /////////
 /////////
function delalltktsnoscard(){
    $.post(
      "jaxo1.php",
      {delalltktsnoscardjs:'jdjd'},
      function(delalltktsnoscardf){
        vfihavtktsnoincart();
        vhavtktscartsum();
        vwinbarsf();
      }
    ); // end post 
  $('.confrmcartbtn').fadeIn(1500);
  $('.buycartbtnf').fadeOut(2500);
}    
 /////////
 /////////
function vwinbarsf(){
    $.post(
      "jaxo1.php",
      {vwinbarsjs:'skiwi'},
      function(vwinbarsf){
       $('.vwinbars').html(vwinbarsf);
      }
    ); // end post
}    
 /////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////
//////////////////////////
$(document).on('click','.popclosebtnblue', function(){
      $('.bluepopup').hide();
});                     
$(document).on('click','.popclosebtnred', function(){
      $('.redpopup').hide();
});                     
////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////
/////////////////////////////////////////



function vblcknosto5(){
 var rdmblokn1 = Math.floor(Math.random() * 22) +1;
 $(".vrdminblckno1").html(rdmblokn1);
 $(".vrdminblckno1").val(rdmblokn1);
 var rdmblokn2 = Math.floor(Math.random() * 22) +1;
 $(".vrdminblckno2").html(rdmblokn2);
 $(".vrdminblckno2").val(rdmblokn2);
 var rdmblokn3 = Math.floor(Math.random() * 22) +1;
 $(".vrdminblckno3").html(rdmblokn3);
 $(".vrdminblckno3").val(rdmblokn3);
 var rdmblokn4 = Math.floor(Math.random() * 22) +1;
 $(".vrdminblckno4").html(rdmblokn4);
 $(".vrdminblckno4").val(rdmblokn4);
 var rdmblokn5 = Math.floor(Math.random() * 22) +1;
 $(".vrdminblckno5").html(rdmblokn5);
 $(".vrdminblckno5").val(rdmblokn5);
 
$('.cardpikr1').slideToggle(10);
$('.cardpikr2').show();
$('.cardpikr3').show();
$('.cardpikr4').show();
$('.cardpikr5').show();
 }
 ////////////////////////////////////////
 ////////////////////////////////////////
 
 $(document).on('click','.slctcutcard1',function(){
   $('.cardpikr1').hide();
 });
 $(document).on('click','.slctcutcard2',function(){
   $('.cardpikr2').hide();
 });
 $(document).on('click','.slctcutcard3',function(){
   $('.cardpikr3').hide();
 });
 $(document).on('click','.slctcutcard4',function(){
   $('.cardpikr4').hide();
 });
 $(document).on('click','.slctcutcard5',function(){
   $('.cardpikr5').hide();
 }); 
 /////////////////////////////////
 </script>
 <script>
$(document).on('click','.confrmcartbtn',function(){
  
$('#confrmtktgif').show();
$(function(){
 setTimeout(function(){
$('#confrmtktgif').hide();
   }, 6000);
 });
 
  $('.confrmcartbtn').fadeOut(1500);
  $('.buycartbtnf').fadeIn(2500);

      $.post(
      "jaxo1.php",
      {cnfrmtktsjs:'p3oejfdk'},
      function(cnfrmtktsf){ 
      vhavtktscartsum();
    if(cnfrmtktsf == 0){
    $('.redpopup').fadeIn();
     $('.popinerred').html('× Cart Is Empty ');
  //$('.confrmcartbtn').fadeIn(1500);
 // $('.buycartbtnf').fadeOut(2500);
    } 
      });
})
/////////////////////////////
      

      
 </script>
    
    
    
    
    
    
 
  
  
  
  
  
  <script>
  ////////////////
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

var clock;
/////////////////////////////;////////////
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
  $(".vlcltime").html( d + "d:" +  h + "h:" + m + "m: " + s + "s" );
  $(".rmndaysonly").html( d );
  
  },1000);
  ///// end 
/////////////////////////////////////
/////////////////////////////////////

var clock;
   var currentDate = <? echo time() ?>;
   var futureDate  = <? echo $timfphp ?>;
 var diff = futureDate - currentDate;
  clock = $('.clock').FlipClock(diff, {
  clockFace: 'DailyCounter',
           countdown: true
  });
  clock = $('#clk2').FlipClock(diff, {
  clockFace: 'DailyCounter',
           countdown: true
  });
                 
if(diff < 0)
{
  $('.whentimendvtxt').show();
}

/////////////////////////////////////
/////////////////////////////////////

/////////////////////////////////////
/////////////////////////////////////
/////////////////////////////////////
  </script>
  <script>
     window.onLoad = vblcknosto5();
     window.onLoad = vhavtktscartsum();
     window.onLoad = vwinbarsf();
   </script>
    
</body>
</html>