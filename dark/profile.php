






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
            <a href="profile.php" class="dark-vesion">Dark</a>
            <a href="../profile.php" class="light-vesion">Light</a>
          </div>
        </div>

<br><br>


<div class="bluepopup" style="display:none;">
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; z-index:200; bottom: 200px; right:0; border-right:14px solid rgb(0, 102, 255);">
 <div style="display:flex; flex-direction:row;">
  <img src="assets/images/Coffee-blue.gif" style="width:2.5em;">
 </div>
 <div style="color:rgb(0, 102, 255); margin-top:0.5em; margin-left:5px; margin-right:5px;">
  <b class="popinerblue"> success </b>
 </div>
 <button class="popclosebtnblue" style="border: none; outline-offset:none;"> X </button>
</div>
</div>

<div class="redpopup" style="display:none;">
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; z-index:400; bottom: 160px; right:0; border-right:14px solid rgb(230, 3, 48);">
  <div style="display:flex; flex-direction:row;">
   <img src="assets/images/Coffee-red.gif" style="width:2.5em;">
  </div>
  <div style="color:rgb(236, 17, 46); margin-top:0.5em; margin-left:5px; margin-right:5px;">
   <b class="popinerred"> Warning </b>
  </div>
  <button class="popclosebtnred" style="border: none; outline-offset:none;"> X </button>
 </div>
</div>













<br><br>

<style>
    .profcss{
        display: flex;
        flex-direction: row;
     
    }
    #pdetails1{
        width:48%; margin-right:1%; margin-left: 1%;
        display: flex;
        flex-direction: column;
    }
    .pcard{
        width:48%;
        margin-left:1%;
        margin-right:1%;
        background: rgba(62, 198, 252, 0.404);
        border-radius: 30px;
        box-shadow: 1px 1px 18px black;
    }
    .pcard  input{
        border:none;
        border-bottom: 5px solid skyblue;
        color:navy;
        background: whitesmoke;
        text-align: center;
        outline: none;
        font-size: 1.5rem;
        margin-top: 1rem;
    }

@media all and (min-width:2100px){
    .profcss{
        max-width: 65%;
        margin-left:17%;
        margin-right:17%;
    }
}
@media all and (max-width:500px){
    .profcss{
       flex-direction: column;
    }
    #pdetails1{
     width: 100%;
    }
    .pcard{
        width:98%;
        margin-left:1%;
        margin-right:1%;
    }
    #pdetails1{
        width:98%; margin-right:1%; margin-left: 1%;
        margin-top: 1rem;
    }
}



</style>




<div class="profcss">
     <div class="pcard">
        <center>
        <img src="assets/images/profimg.png" alt="" style="width: 20%;margin-top:-2rem;">
        </center>
 <center>
  <u class="text-white"> Balance </u>
   <h2 style="font-size:2rem; color:aqua;text-shadow:1px 1px 4px aqua;">  
<? echo $vlogf['sumout']; ?>
<i class="fa fa-ruble text-white"> </i>
   </h2>
 </center>      
        
 <br>       
        <i class="bx bx-edit" style="color:skyblue; font-size: 2rem; float: right;"> </i>
    <h4 class="vgmail" style="color:aqua;"> user@gmail.com</h4>
        <b class="vpayeer" style="color:rgb(93,177,255); text-shadow: 1px 1px 2px ; letter-spacing:2px; font-size: 1rem; float: right;"> P1234567890 </b>
    <h4 style="color:skyblue;"> Payeer </h4>
    <center>  <u style="color:white;letter-spacing:2px; text-shadow: 1px 1px 1px silver; "> Update Profile Data </u> </center>
      <input class="setemailinpt" type="gmail" placeholder="Your Gmail">
      <input class="setpayeerinpt" type="text" placeholder="Your Payeer" autocomplete="off">
      <input class="setpassinpt" type="password" placeholder="Your Password">
      <br>
      <br>
     <center>
        <button class="setdatabtn btn btn-primary" id="setprofilebtn" class="cmn-btn"> Updates </button>
     </center>

     </div>



<!--------------- mid ---------------->
     <div id="pdetails1">
        <div style="width: 98%; margin-left: 1%; margin-right: 1%; margin-bottom:1rem;  background: rgba(62, 198, 252, 0.404);border-radius: 30px; box-shadow: 1px 1px 18px navy;"> 
            <h3 style="text-align: center; width:100%;color:yellow; text-shadow:1px 1px 2px black;"> Account Details </h3>
                 <hr>
          <div style="  display: flex;
          justify-content:space-around;">
            <b style="color:skyblue;border-left: 1rem;"> Account Activated </b>
            <i class="fa fa-check-circle text-success" style="font-size:2rem;text-shadow:1px 1px 2px black;"> </i>
          </div>
          <div style="  display: flex;
          justify-content:space-around; margin-top: 1rem;">
            <b style="color:pink;border-left: 1rem;"> Account Ban </b>
            <i class="bx text-success" style="border-radius:10px;box-shadow:1px 1px 6px black;text-align: center;"> <span style="padding-left:1rem; padding-right:1rem; text-align: center;" class="vbandiv"> None </span> </i>
          </div>
          <div style="  display: flex;
          justify-content:space-around; margin-top: 1rem;">
            <b style="color: skyblue;border-left: 1rem;"> Registered Date </b>
           <b class="text-white"><? echo $vlogf['regdate']; ?><i class="fa fa-history" style="color:lime; font-size:1.2rem; text-shadow:1px 1px 2px black"></i></b>
          </div>
          <div style="display:flex;
          justify-content:space-around; margin-top: 1rem;">
            <b style="color: skyblue;border-left: 1rem;"> Reffers Levels  </b>
<b class="text-white"> <? if($vlogf['reflevel'] > 0 ){echo $vlogf['reflevel']; }else{ echo 0; } ?> 

<i class="fa fa-users" style="color:aqua; font-size:1.2rem; text-shadow:1px 1px 2px black"></i></b>
          </div>
          <div style="  display: flex;
          justify-content:space-around; margin-top: 1rem;">
            <b style="color: skyblue;border-left: 1rem;"> Total friends </b>
           <b class="text-white"> 
 <? if($vlogf['totalref'] > 0 ){echo $vlogf['totalref']; }else{ echo 0; } ?> 
       
           
 <i class="fa fa-users" style="color:aqua; font-size:1.2rem; text-shadow:1px 1px 2px black"></i></b>
          </div>
          <div style="  display: flex;
          justify-content:space-around; margin-top: 1rem;">
            <b style="color: skyblue;border-left: 1rem;"> friends Bonus </b>
           <b class="text-white"> 
 <? if($vlogf['refbonus'] > 0 ){echo $vlogf['refbonus']; }else{ echo 0; } ?> 
           
             <i class="fa fa-ruble text-gray" style="font-size:1rem; text-shadow:1px 1px 2px navy"></i> <i class="fa fa-database" style="color:aqua;; font-size:1.2rem; text-shadow:1px 1px 2px black"></i></b>
          </div>
        </div>
        <div style="width: 98%; margin-left: 1%; margin-right: 1%; margin-bottom:1rem;  background: rgba(62, 198, 252, 0.404);border-radius: 30px; box-shadow: 1px 1px 18px navy;"> 
         <div style="display:flex;justify-content: space-between;padding: 5px;">
            <div><h3 style="text-align: center; width:100%;color:yellow; text-shadow:1px 1px 2px black;"> Lottery Tickets </h3></div>
          <div>  <ul class="number-list" style=" display:inline;">
 <?
 $hvbuyonlytbl1 = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ORDER BY bid DESC";
  $hvbuyonlytblq1 = mysqli_query($db,$hvbuyonlytbl1);
 while($hvbuyonlytblf = mysqli_fetch_assoc($hvbuyonlytblq1))
{
 ?>
    <li class="active"><? echo $hvbuyonlytblf['tktno'];  ?></li>
<? } ?>          
          </ul></div>
         </div>
         

<? 
/////////////////////////////////////////
$onlyhvtkts = " SELECT COUNT(tktno) AS vtktsh FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0";
$onlyhvtktsq=mysqli_query($db,$onlyhvtkts);
$vtktshv=mysqli_fetch_assoc($onlyhvtktsq);
 $chkhvtktslst = $vtktshv['vtktsh'];
 ///////////////////////////////////////
if($chkhvtktslst == 1){
$rdmchancebar = mt_rand(50 , 60);
}else if($chkhvtktslst == 2){
$rdmchancebar = mt_rand(60 , 75);
}else if($chkhvtktslst == 3){
$rdmchancebar = mt_rand(75 ,100);
}else{
$rdmchancebar = mt_rand(90 , 100);
}
?>


 <hr>
  <h4 class="text-white"> Wining Chances </h4>
  <div class="progressbar" data-perc="<? echo $rdmchancebar; ?>%">
  <div class="bar"></div>
  <span class="label"><? echo $rdmchancebar; ?>%</span>
  </div>
          <div style="  display: flex;
          justify-content:space-around;margin-top: 1rem;">
            <b style="color:skyblue;border-left: 1rem;"> Total Have Tickets </b>
            <b class="text-white">   <? if($chkttlbuytkts > 0 ){echo $chkttlbuytkts; }else{ echo 0; } ?> <i class="fa fa-ticket" style="color:aqua; font-size:1.2rem; text-shadow:1px 1px 2px black"></i></b>
          </div>
          <div style="  display: flex;
          justify-content:space-around;margin-top: 1rem;">
            <b style="color:skyblue;border-left: 1rem;"> Total Buy Tickets </b>
            <b class="text-white">   <? if($chkhvtktslst > 0 ){echo $chkhvtktslst; }else{ echo 0; } ?> <i class="fa fa-ticket" style="color:yellow;; font-size:1.2rem; text-shadow:1px 1px 2px black"></i></b>
          </div>
          <div style="  display: flex;
          justify-content:space-around; margin-top: 1rem;">
            <b style="color:skyblue;border-left: 1rem;"> Total Won Tickets </b>
            <b class="text-white">   <? if($ttlwintkts > 0 ){echo $ttlwintkts; }else{ echo 0; } ?> <i class="fa fa-ticket" style="color:lime;; font-size:1.2rem; text-shadow:1px 1px 2px black"></i></b>
          </div>
      
        </div>
        <div> </div>
     </div>
</div>









<br><br><br><br>























































    





    
      <!---------------start-->
      <div id="navbtnsdiv">
        <nav class="nav" style="box-shadow:1px 1px 15px navy;">
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
                    <a href="#" class="link-item" onclick="bnavabtnexit()">
                        <i class='bx bx-wallet link-icon'></i>
                        <span class="link-text"> Withdraw </span>
                    </a>
                </li>
                <li class="nav-list">
                  <a href="#" class="link-item active" id="bnavabtnprof" onclick="bnavabtnprof()">
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
                  indicator.style.left = `430px`;
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
      
/////////////single person mail ///////////////
 $(document).on('click','.setdatabtn',function(){
  var setemail = $('.setemailinpt').val();
   var setpass = $('.setpassinpt').val();
   var setpayeer = $('.setpayeerinpt').val();
  
  if(setemail=="" || setpass=="" || setpayeer==""){
     $('.redpopup').fadeIn();
     $('.popinerred').html('All fields are required');
  }else{
      $.post(
      "jaxo1.php",
      {setemailjs:setemail,setpassjs:setpass,setpayeerjs:setpayeer},
       function(setdatafstng){
       if(setdatafstng == 1){
      $('.bluepopup').fadeIn();
     $('.popinerblue').html(' Successfully Updated');
     vpayeerf();
     vgmailf();
      $('#setemailinpt').val("");
      $('#setpassinpt').val("");
      $('.setpayeerinpt').val("");
     }else if(setdatafstng == 0){
      $('.redpopup').fadeIn();
     $('.popinerred').html(' Try Again Later ');
      }else if(setdatafstng == 2){
      $('.redpopup').fadeIn();
      $('.popinerred').html('This Email Already Set');
      } }); // end post
    }
  })
///////////////////////////////
///////////////////////////////
      
///////////////////////////////
//////////////////////////
$(document).on('click','.popclosebtnblue', function(){
      $('.bluepopup').hide();
});                     
$(document).on('click','.popclosebtnred', function(){
      $('.redpopup').hide();
});                     
////////////////////////
////////////////////////
function vgmailf()
{
    $.post(
      "jaxo1.php", 
     {vgmailjs:'dhhdhdhf'},
       function(vgmailff){
    $('.vgmail').html(vgmailff);
    $('.setemailinpt').val(vgmailff);
       }); // end post 
}
/////////
function vpayeerf()
{
    $.post(
      "jaxo1.php", 
     {vpayeerj:'djhdhd'},
       function(vpayeerff){
    $('.vpayeer').html(vpayeerff);
    $('.setpayeerinpt').val(vpayeerff);
       }); // end post 
}
///////////      
function vbanf()
{
    $.post(
      "jaxo1.php", 
     {vbanfjs:'jfjdue'},
       function(vbanff){
    $('.vbandiv').html(vbanff);
       }); // end post 
}
///////////      
      
      
      
      
      
      
 
 
 
 
 
 window.onload = vpayeerf();
 window.onload = vgmailf();
 window.onload = vbanf();
      
    </script>  
</body>
</html>