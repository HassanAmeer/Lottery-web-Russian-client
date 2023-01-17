


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
            <a href="home.php" class="dark-vesion">Dark</a>
            <a href="../home.php" class="light-vesion">Light</a>
          </div>
        </div>


















        <div style="width: 86%; margin-left: 7%; margin-right: 7%;box-shadow: 1px 1px 20px black; border-radius: 0 0 20px 20px; background: skyblue; border-radius: 0 0 30px 30px;">

            <div style="background-image: url('assets/images/02.jpg'); width:100%; box-shadow: 1px 1px 30px black; border-radius: 0 0 20px 20px; position: relative; z-index:50;">
              <div class="hstryhomsmhide" style="position:static; right: 0; box-shadow:inset 1px 1px 18px rgba(111, 207, 255, 0.45); float: right; width:25%;margin-right:0px;border-radius: 0 0 21px 0; background:#187b99;"> 
                 <ul style="text-align: center;">
     <li class="text-white"> Total Buy Tickets <i class="fa fa-ticket" style="color:aqua;; font-size:1.2rem; text-shadow:1px 1px 2px black"></i> <b> 
     
  <? if($chkttlbuytkts > 0 ){echo $chkttlbuytkts; }else{ echo 0; } ?>
     </b></li>
     <li class="text-white"> Total Have Tickets <i class="fa fa-ticket" style="color:gold;; font-size:1.2rem; text-shadow:1px 1px 2px navy"></i> <b> 
  <? if($chkhvtktslst > 0 ){echo $chkhvtktslst; }else{ echo 0; } ?>
      </b></li>
     <li class="text-white"> Total Won Tickets <i class="fa fa-ticket" style="color: lime; font-size:1.2rem; text-shadow:1px 1px 2px black"></i> <b> 
  <? if($ttlwintkts > 0 ){echo $ttlwintkts; }else{ echo 0; } ?>
     </b></li>
    </ul>
               </div>
            <div class="" style="display:flex; flex-direction: row;">
              
              <div style="margin-left:2rem;">
                 <i class="fa fa-user" style="color: #91daf0; font-size: 4rem;"> </i> <i class="fa" style="font-size: 4rem; opacity:0.4; margin-bottom:1rem; margin-left: 1rem; margin-right: 1rem;"> | </i>
              </div>
              <div class="" style="display:flex; flex-direction: column
              ;" >
                 <h3 style="text-align:center; text-shadow:  1px 1px 2px black; color: white;" class="profname"> <? echo substr($vlogf['uemail'],0,11);  ?>.. </h3>
                
                 <a href="profile.php" style="text-decoration:decoration; color: aqua;" class="btn text-btn"> View Profile </a>
              </div>
            
            </div>
            </div>
            
            
            <style>
              
                #soutmarquee{
               margin-top:0.5rem; box-shadow:inset 1px 1px 5px aqua,inset 1px 1px 6px silver, 1px 1px 6px black; border-radius:0 10px 10px 0; border-left: 10px solid crimson;
               font-size: 1rem;
              }
            @media all and (min-width:600px){
              #soutmarquee{
               box-shadow: none;
               border: none;
              }
            }
            @media all and (min-width:900px){
              #soutmarquee{
               margin-top: 1rem;
              }
            }
            </style>
            
            
            <div style="width:90%; margin-left:5%; margin-right:5%; display:flex; flex-direction:row;vertical-align: center;">
              <div style="width:20%;">
                <img class="" src="assets/images/alert1.png" alt="" style="width:5rem;">
              </div>
             <div style="width:80%;">
             <marquee id="soutmarquee">
  <small style="color: white;letter-spacing: 4px; text-shadow:1px 1px 2px black;"> <? echo $chkq['bells']; ?> </small>
  <i class="fa fa-gift" style="color:skyblue;text-shadow:1px 1px 2px navy;"> </i>
             </marquee>
             </div>
             </div>
            
            
            
            <center style="color: white; text-shadow: 1px 1px 2px black; font-size: 1rem;">
                <div>   Total Balance <b style="color:gold; text-shadow: 1px 1px 2px black; font-size: 2rem;"> <? echo $vlogf['sumout'];  ?> </b><b class="fa fa-ruble text-info" style="font-size:2rem;"> </b>
                </div>
                </center>
            
            </div>
            
            <br>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div style="margin: auto; width:80%;">
            <b style="color:#069bc9; letter-spacing:2px; text-align: center; font-size: 1.5rem; font-style: italic;"> Next Draw At </b>
            </div>
            <center> 
             
 <div class="col-xl-5 text-center">
    <div class="timer-part">
        <div class="clock"></div>
        </div>
     </div>
 </center>
<center>
  <b class="whentimendvtxt" style="color:green; display:none;"> Time To Draw Lottery Tickets </b>
</center>           





            
            
            
            
            
            
            
            
            
            <div style="width:80%;margin-left:10%; margin-right:10%;">
            <br>
              <hr>
            <br>
            </div>
            
            <div style="width:80%; margin-left:10%; margin-right: 10%;">
               <div class="" style="  display: flex;justify-content:space-around;">
                  <a href="buy.php" style="text-align: center;">
                        <span style="border-radius:50%; box-shadow: 1px 1px 8px black; background: white; width: 3rem; height:3rem; text-align: center; justify-content:center;">
                          <i class="bx bx-cart-add text-info" style="font-size:3rem;"> </i>
                        </span>
                      <p style="color:skyblue;" > Buy </p>
                  </a>
                  <a href="sumout.php" style="text-align: center;">
                        <span style="border-radius:50%; box-shadow: 1px 1px 8px black; background: white; width: 3rem; height:3rem; text-align: center; justify-content:center;">
                          <i class="bx bx-wallet text-info" style="font-size:2.9rem;"> </i>
                        </span>
                      <p style="color:skyblue;" > Wallet </p>
                  </a>
                  <a href="history.php" style="text-align: center;">
                        <span style="border-radius:50%; box-shadow: 1px 1px 8px black; background: white; width: 3rem; height:3rem; text-align: center; justify-content:center;">
                          <i class="bx bx-history text-info" style="font-size:3rem;"> </i>
                        </span>
                      <p style="color:skyblue;" > History </p>
                  </a>
               </div>
               <br>
               <br>
               <div class="" style="  display: flex;justify-content:space-around;">
                  <a href="profile.php" style="text-align: center;">
                        <span style="border-radius:50%; box-shadow: 1px 1px 8px black; background: white; width: 3rem; height:3rem; text-align: center; justify-content:center;">
                          <i class="bx bx-user-circle text-info" style="font-size:3rem;"> </i>
                        </span>
                      <p style="color:skyblue;" > Profile </p>
                  </a>
                  <a href="share.php" style="text-align: center;">
                        <span style="border-radius:50%; box-shadow: 1px 1px 8px black; background: white; width: 3rem; height:3rem; text-align: center; justify-content:center;">
                          <i class="bx bx-share text-info" style="font-size:3rem;"> </i>
                        </span>
                      <p style="color:skyblue;" > Share </p>
                  </a>
                  <a href="logout.php" style="text-align: center;">
                        <span style="border-radius:50%; box-shadow: 1px 1px 8px black; background: white; width: 3rem; height:3rem; text-align: center; justify-content:center;">
                          <i class="bx bx-log-in-circle text-info" style="font-size:3rem;"> </i>
                        </span>
                      <p style="color:skyblue;" > Logout </p>
                  </a>
               </div>
            </div>
            <br><br>
            <center>
              
            
            
            
            
<style>
  #playbtnfill{
border-radius:25px; background:whitesmoke;border:none;border-left:15px solid skyblue;box-shadow: 1px 1px 18px silver;
  }
  #playflex1{
    display:flex; justify-content: space-evenly; max-width: 8rem;padding: 1rem;margin-left:-9rem;
  }
 
  @media all and (min-width:2200px)
  {
    #playbtnfill{
     max-width :17%;
    } 
  }
  @media all and (min-width:500px)
  {
    #playbtnfill{
     max-width :30%;
    } 
  }
  @media all and (max-width:500px)
  {
#playbtnfill{
  width: 90%;
  margin-left: 5%;
  margin-right: 5%;
}
#playflex1{
 width: 18rem;
}
  }
</style>



<div id="playbtnfill">
  <div id="playflex1">
    <div style="width:30%;"><img src="assets/images/playbtnblue.png" style="width:100%;"></div>
   <div style="width:70%;"> <h3 style="letter-spacing: 4px; font-style: italic; color: skyblue; text-shadow: 1px 1px 2px black; margin-left:1rem;">
     Play_Lottery </h3></div>
  </div>
  </div>
  
</center>

<br>
<br>

            
            
            
            
            
            
            
            
            
            
            
            
 <!-- question-section start -->
 <section class="question-section section-padding section-bg" style="background:none;">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4">
          <div class="thumb text-lg-right text-center">
            <img src="assets/images/elements/faq.png" alt="image">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="content">
            <h2 class="title text-white">If you have any questions</h2>
            <p style="color:silver;">Our top priorities are to protect your privacy, provide secure transactions, and safeguard your data. When you're ready to play, registering an account is required so we know you're of legal age and so no one else can use your account.We answer the most commonly asked lotto questions..</p>
            <a href="<? echo $chkq['tglink']; ?>" class="cmn-btn"> Support </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- question-section end -->
  
  
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                
                  <!---------------start-->
                  <div id="navbtnsdiv">
                    <nav class="nav" style="box-shadow:1px 1px 15px navy;">
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
  
var clock;
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
var clock;
   var currentDate = <? echo time() ?>;
   var futureDate  = <? echo $timfphp ?>;
 var diff = futureDate - currentDate;
  clock = $('.clock').FlipClock(diff, {
  clockFace: 'DailyCounter',
           countdown: true
  });
                 
if(diff < 0)
{ $('.whentimendvtxt').show(); }

/////////////////////////////////////
/////////////////////////////////////
/////////////////////////////////////
                
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
            
            
                  ///////////////////////////////
            
                  $(document).on('click','#playbtnfill', function(){
                    window.location.href = 'play.php';
                  });
             ////////////////////////////////////////
            
            
            
            
            
            
            
            
            
            
             
                </script>  
            </body>
            </html>








