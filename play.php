



<?

include 'config.php';
// error_reporting(0);
session_start();

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
  $timfphp = $chkq['timef'];
  $tordmbns = $chkq['rdmbns'];
  $nofltrywinr = $chkq['no_of_lotry_winner'];




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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
<body style=" background-image: url('assets/images/bg-two.jpg'); background-position:fit; background-repeat:no-repeat; background-size: cover;">
<!-- preloader start -->
<div id="preloader"></div>
<!-- preloader end -->

<!-- template-version start -->
<div class="template-version">
<button type="button" style="border-radius:20px 0 0 20px;"><i class="fa fa-adjust">  </i></button>
<div class="color-version-area">
  <a href="dark/play.php" class="dark-vesion">Dark</a>
  <a href="play.php" class="light-vesion">Light</a>
</div>
</div>

<button onclick="history.back()" style="background:none;"> <span class="fa fa-arrow-left" style="background:none;color:rgb(168, 121, 121); padding: 1rem; font-size: 2rem;"> </span> </button>





<style>
  .bgtopimgforplay{
    width: 100%;
   }


   #playbtnfill{
    border-radius:25px; background:whitesmoke;border:none;border-left:15px solid skyblue;box-shadow: 1px 1px 18px silver;
    }
    #playflex1{
      display:flex; justify-content: space-evenly; max-width: 8rem;padding: 1rem;margin-left:-9rem;
    }
    .playwinp{
  width:90%;margin-left:5%;
   }
.vwinbardiv{
  display:flex;flex-direction:row;width:90%;margin-left:5%;
}














    @media all and (min-width:500px)
    {
      #playbtnfill{
       max-width :30%;
      } 
    }

    
    /*********************/
    /***********/

  .bgtopimgforplay{
    width: 100%;
  }

    /*********************/

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
  .playwinp{
   width:96%;margin-left:2%;
  
   }
   .vwinbardiv{
   width:96%;margin-left:2%;
   }

    }


 @media all and (max-width:2000px)
  {
      .bgtopimgforplay img{
    max-height: 20rem;
  }
  }
 @media all and (min-width:2000px)
  {
    .bgtopimgforplay img{
    max-height: 38rem;
  }
  #playbtnfill{
       max-width :17%;
      } 
      .playwinp{
        margin-top:2rem;
        text-align:center;
  width:60%;margin-left:15%;
  margin:auto;
   }
   .vwinbardiv{
    width:30%;
    float:right;
    margin-right:-6rem;
   }
  }

  
</style>





<div class="bgtopimgforplay">
  <img src="assets/images/result-removebg-preview.png" alt="" style="width:100%;">
</div>





<br><br>
<center>
  



  <div id="playbtnfill">
    <div id="playflex1">
      <div style="width:30%;"><img src="assets/images/playbtnblue.png" style="width:100%;"></div>
     <div style="width:70%;"> <h3 style="letter-spacing: 4px; font-style: italic; color: skyblue; text-shadow: 1px 1px 2px black; margin-left:1rem;">
       Play_&_Win </h3></div>
    </div>
    </div>
    
  </center>

<div class="playwinp">
<p class=""> Play and Win: Dear users All your Lottery Tickets Numbers thats you Have Buy are Listed below and your win chances are shown according To The Buy  Numbers of tickets When Selected Your Lottery Numbers in bottom Target area </p>
</div>

  <div style="display:flex;flex-direction:row; font-size:1rem; width:90%;margin-left:5%;">
 <i class="fas fa-circle" style="color:#4dbeed;margin-left:0.5rem;"><span style="color:silver; margin-left:0.2rem;"> Selected</span></i>
 <i class="fa fa-circle" style="color:#ffb732;margin-left:0.5rem;"><span style="color:silver;margin-left:0.2rem;"> Have </span></i>
 <i class="fa fa-circle" style="color:lime;margin-left:0.5rem;"><span style="color:silver; margin-left:0.2rem;"> Win </span></i>
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
<div class="vwinbardiv">
  <div class="progressbar" data-perc="<? echo $rdmchancebar; ?>%" style="width:60%;">
    <div class="bar"></div>
    <span class="label"><? echo $rdmchancebar; ?>%</span>
  </div>
  <h3 style="width:40%;"> Wining chances </h3>
</div>


<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->

<style>
 .playings{
    width: 4rem; margin-left:1rem;
  }
  .plyabtncards{
    width:90%; margin:5%;
    display:flex; flex-direction:row;
    flex-wrap:wrap;
  }
  .playalbtntktimg{
    width: 8rem;
    background-image:url('assets/images/skybluetkt.png'); background-repeat:no-repeat;background-size:cover;
    justify-content:center;
    text-align: center;font-size:1.8rem;
    display:flex; flex-direction:row;
    border-right: 2px dashed #fcfafa; border-radius: 0 10px 10px 0;
  }
  .ballno{
background-image:radial-gradient( circle closest-side,yellow,orange);border-radius:50%;box-shadow:1px 0px 10px rgba(255, 166, 0, 0.842); width:2rem;height:2rem; min-height:2rem;min-width:2rem; text-align:center;position:relative; z-index:1; margin-bottom:-1rem;float:right;margin-top:-0.1rem;
  }
  .btnball{
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
    background:linear-gradient(to top, aqua, skyblue, navy); position:relative; z-index:0;
    box-shadow:1px 0px 7px rgba(0, 0, 0, 0.849); width:3rem;height:3rem; min-height:3rem;min-width: 3rem; text-align:center;margin-top:-2rem; letter-spacing: 2px;margin-top:0.1rem;
  }
  .fa-angle-right{
    font-size:3rem; margin-left:1rem ;
    animation: anglemove 2s infinite reverse;
  }
  @keyframes anglemove{
  from{ color:skyblue; }
    to{ color:aqua; text-shadow:1px 1px 2px black; transform:translateX(-0.4rem); }
  }
  .onclckallplaydiv{
    width:30%;border-left:20px solid rgb(43, 182, 236);
    position:fixed; z-index:700;
    bottom:30%; box-shadow: 1px 1px 8px black;
    backdrop-filter:blur(10px);
    border-radius: 0 20px 20px 0;background:rgba(4, 205, 255, 0.103);
    
  }
  /**********************/
@media all and (min-width:2200px)
{
  .onclckallplaydiv{
    width:15%;
  }
}
@media all and (max-width:500px)
{
  .onclckallplaydiv{
    width:80%;
  }
}
/*******************/
.drawdiv{
  display:flex;
  flex-direction:row;
  width:88%;
  margin-left:6%;
  /* justify-content:space-between; */
}
.active2{
  background:green !important;
  box-shadow:1px 1px 29px lime !important;
}
.afterclkplybtn{
  opacity: 0.5;
  
}
</style>


<div class="plyabtncards">
  
  <div class="playalbtntktimg">
   <img src="assets/images/Coffee-blue.gif" style="width:3rem;margin-left:-1rem;"> <b style="color:gold; text-shadow:1px 1px 2px black;margin-left:-0.3rem;transform:translateY(0.4rem);"> Tickets </b>
  </div>
  <!-------------------------------->
  <!-------------------------------->
  <div style="display:flex;flex-direction:row; color:skyblue; margin-left:1rem;">
    <div style="color:skyblue; text-shadow:1px 1px 2px black;letter-spacing:2px;">
    <b> Powers </b>
    <p style="color:aqua;"> paly</p>
    </div>
    <div class="fa fa-angle-right">
    </div>
  </div>
  <!-------------------------------->
  <!-------------------------------->
  
 <?
 $hvbuyonlytbl1 = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ORDER BY bid DESC";
  $hvbuyonlytblq1 = mysqli_query($db,$hvbuyonlytbl1);
 while($hvbuyonlytblf = mysqli_fetch_assoc($hvbuyonlytblq1))
{
 ?>
  <div class="playings">
    <b class="ballno"> <? echo $hvbuyonlytblf['tktno']; ?> </b>
    <button type="submit" class="btnball playsinglbtn <? echo $hvbuyonlytblf['tktno']; ?>" data-tktnodatabtn="<? echo $hvbuyonlytblf['tktno']; ?>" data-vblock1="<? echo $hvbuyonlytblf['rdmcard']; ?>"> Play </button>
  </div>
 <? } ?>

<?if($chkhvtktslst < 1){ ?>
<h3 style="color:red; text-shadow:1px 1px 2px black;"> You have Not any Numbers Of Tickets to PLAY !</h3>
 <?  }  ?>

</div>


<?
 $hvbuyonlytbl2 = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ORDER BY bid DESC Limit 1";
  $hvbuyonlytblq2 = mysqli_query($db,$hvbuyonlytbl2);
 $hvbuyonlytblff = mysqli_fetch_assoc($hvbuyonlytblq2);
?>
 <input type="hidden" value="<? echo $hvbuyonlytblff['tktno']; ?>" class="inptktnoval" data-vblock1="<? echo $hvbuyonlytblff['rdmcard']; ?>">










<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<div class="onclckallplaydi" style="display:none;">
  <button class="plyaldivcut fa fa-close text-danger"> </button>
   <div style="padding:1rem;">
   <i class="fa fa-alert text-warning"> </i><p> Minimum 3 <i class="fa fa-ticket text-warning"> </i> tickets should be have </p>
   <br>
   <? 
   if($chkhvtktslst > 2){
   ?>
   <form method="post">
    <center>  <button type="submit" name="plyalbtn" class="cmn-btn"> Play All <i class="fa fa-ticket"> </i></button></center>
  </form>
  <? } ?>
  </div>
   <?  if($chkhvtktslst <= 2){  ?>
  <center><button class="cmn-btn" style="opacity:0.6;"> <strike style="padding:2px; text-shadow:1px 1px 2px red;"> Play All </strike> <i class="fa fa-ticket"> </i></button></center>
  <? } ?>
</div>
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------->






<style>
  .play-card-inner{
    width:50%;
  }
  .number-list li{
  margin: 1.5rem;
  }
  .drawdetaldiv{
    width:45%; margin-left:2%;
    background-image:url('assets/images/bgs/mdbarbg.jpg');
    background-repeat:no-repeat;
    background-size:cover;
    /*  background:rgba(25, 153, 204, 0.795);  */
    border-radius:10px;
    box-shadow:1px 1px 8px black;
  }
  @media all and (max-width:500px)
  {
    .drawdiv{
     flex-direction: column;
    }
    .play-card-inner{
    width:96%; margin-left:2%;
  }
  .drawdetaldiv{
    width:96%; margin-left:2%;
    margin-top: 1rem;
    border-radius:10px;
    box-shadow:1px 1px 8px black;
  }
  .number-list li{
  margin: 1rem;
   }
  }
  @media all and (min-width:2200px)
  {
    .play-card-inner{
    width:25%; margin-left:12%;margin-right:12%;
  }
  .drawdetaldiv{
    width:30%; margin-left:13%;
  }
  .number-list li{
  margin: 2rem;
}
}

</style>






<center>
<? if($chkhvtktslst < 1) { ?>
  <button class="cmn-btn" style="letter-spacing:4px;"> <strike> Can't PLAY </strike> </button>
  <? }else{ ?>
   <button class="cmn-btn" style="letter-spacing:4px;"> Choose Top </button>
  <? } ?>
</center>



<br>
<div class="drawdiv"> 

<div class="play-card-inner text-center">
  <div class="play-card-header" style="background:rgba(108, 213, 255, 0.356); backdrop-filter:blur(14px);">
    <span class="number-amount" style="color:lime;text-shadow:1px 1px 2px black; letter-spacing:3px;">Draw lottery</span>
    <div class="header-btn-area">
      <button type="button" id="quick-pick1"> card No: </button>
<button type="button" class=" vrdminblckno1 rdmblok" id="clear-pick1" style="color:orange;font-size:2rem; text-shadow:1px 1px 2px black; letter-spacing:2px;">  </button>

    </div>
 
 
    
    
    
    
    
    
    
    
    
    
    
    
<style>

  .sliderrang{
  direction: rtl;

    width: 98%;
    height: 1.2rem;
    -webkit-appearance: none;
    background: linear-gradient(to right, #ffc700, orange, #fe5b38 );
    border-radius: 0.5rem;
    outline: none;
    margin-left:2%;
    box-shadow: inset 1px 1px 3px silver;
    box-shadow: 1px 1px 6px black;
  }
  .sliderrang::-webkit-slider-thumb{
     -webkit-appearance: none;
    height: 2rem;
    width: 2rem;
    border-radius: 30%;
    background-image:url('assets/images/flame.png');
    outline: none;
    cursor: pointer;
    border: 2px solid green;
  }
  
input[type="range"]::-webkit-slider-thumb 
{
    border:none;
    width: 90px;
    height: 50px;
    background: transparent;
    background-image: url('assets/images/flame.png');
    -webkit-appearance: none;
    background-size: cover;
    
 }

.fabnk{
  -webkit-text-fill-color:transparent;
  background-image:-webkit-linear-gradient(transparent 100px, rgb(255,145,41) 100px);
  font-size: 4rem;
  -webkit-text-stroke: 3px rgb(255,145,41);
  -webkit-background-clip: text;
  background-size: 250px 250px;
 /* background-position: 0 -100px; */
  
}
#sitimgindtldiv{
  animation: sitimgindtldiv 2s infinite alternate-reverse;
}
@keyframes sitimgindtldiv
{
  from{
    transform: translateY(30px);
  }
  to{
    transform: none;
    opacity: 0.4;
  }
}
/************** end of slide *********/
</style>
  <div style="display:flex; flex-direction:row;">
   <div style="width:20%;">
 <i class="fa fa-fire-flame-curved fabnk" id="heart" aria-hidden="true" ></i>
   </div>
   <div style="width:80%;" class="slidc">
     <input type="range" min="10" max="250" value="70" step="1" class="sliderrang" id="sliderrangid">
     <h4 style="color:red;"> Speed </h4>
   </div>
  
</div>
    
    
<script type="text/javascript">
  var sliderrangid=document.getElementById("sliderrangid");
  var heart=document.getElementById("heart");

  sliderrangid.oninput=function(){
    
   var slidbnk = sliderrangid.value/2;
    heart.style.backgroundPosition =" 0"+"-"+slidbnk+"px";
  }
  
  //////////////// end of slider
    
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </div>

<div class="play-card-body" style="background:rgba(135, 207, 235, 0.479);">
  <ul class="number-list loptktnos">

 <?
 /*
 $hvbuyonlytbl1 = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ORDER BY bid DESC";
  $hvbuyonlytblq1 = mysqli_query($db,$hvbuyonlytbl1);
 while($hvbuyonlytblf = mysqli_fetch_assoc($hvbuyonlytblq1))
{
}
*/
 ?>
 
<li class="active active2"> 30 </li> 
</ul>
                     
                    </div>
  <div class="play-card-footer">
   <p class="play-card-footer-text"> Target To Win: </p>
   <div class="selected-numbers ">
    <b class="gmatchtxt" style="display:none;color:green; float:left; position:absolute;font-size:1.6rem;"> Matched  <i class="fa fa-check" style="color:rgba(0, 255, 64, 0.836);"> </i> </b>
    <b class="rmatchtxt" style="display:none;color:red; float:left; position:absolute; font-size:1.6rem;"> Not Matched <span class="fa fa-worry"> 😟 </span> </b>
    <ul class="number-list">
      <li class="active slctnovb" style="background:rgb(255, 166, 0);">  <i class="fa fa-refresh"> </i> </li> <i class="fa fa-angle-right"> </i>
      <li class="active gbalslctim" style="background:rgba(0, 255, 64, 0.836); float:;"> <b class="greenslctbal"> <i class="fa fa-gift"> </i> </b> </li>
      <li class="active rbalslctim" style="display:none; background:rgba(255, 30, 0, 0.74); float:;"> <strike class="redspctbal"> </strike> </li> 
    </ul>
       </div>
      </div>
    </div><!-- play-card end -->



<div class="drawdetaldiv">
 <center><h3 style="color:white;"> Draw Details </h3></center>

 <div style="display:flex;flex-direction:row;"> 
  <div style="width:32%;"> <div><img src="assets/images/elements/collect-2.png" style="width:6rem;"></div>
  <div><i class="fa fa-user text-primary"> </i> <b class="profname" ><? echo $vlogf['uemail'] ; ?></b> </div>
</div>
 <div style="width:68%;">
 Dear Users You Have Great Chances To win Hope You Play Better.
 <b> Users Can Won  min_1500 <i class="fa fa-ruble" style="color:aqua; text-shadow:1px 1px 2px black;"> </i> To <? echo $chkq['rdmbns'] ; ?> <i class="fa fa-ruble" style="color:aqua; text-shadow:1px 1px 2px black;"> </i> or More With No. Of Tickets </b>

 </div>
  </div>
<br>
<center>
  <ul style="text-align: center;">
    <li style="color:rgb(39, 170, 221);"> Remaining Tickets <i class="fa fa-ticket" style="color:aqua;; font-size:1.2rem; text-shadow:1px 1px 2px black"></i> <b class="remningtktsdiv"> 0 </b></li>
    <li style="color:rgb(39, 170, 221);"> Playing Tickets <i class="fa fa-ticket" style="color:gold;; font-size:1.2rem; text-shadow:1px 1px 2px navy"></i> <b class="nofplydiv"> 0 </b></li>
    <li style="color:rgb(39, 170, 221);"> Won Tickets <i class="fa fa-ticket" style="color: lime; font-size:1.2rem; text-shadow:1px 1px 2px black"></i> <b class="wonvaldiv"> 0 </b></li>
   </ul>
</center>
<img id="sitimgindtldiv" src="assets/images/elements/person.png" style="float:right;">


</div>
<!-------------------------------- last end div -->
  </div>





<style>
  .wintabl{
    display:flex;flex-direction:row;
    width:100%;background:white;
  }
  
  .wintablleft{
    width:40%;
    margin-left:5%;
  }
  .wintablriht{
    width:40%;
    margin-left:5%;
  }
  
  @media all and (max-width:500px)
  {
 .wintabl{
    display:flex;flex-direction:column;
  }
  .wintablleft{
    width:98%;
    margin-left:2%;
  }
  .wintablriht{
    width:98%;
    margin-left:2%;
  }
  }
  @media all and (min-width:2200px)
  {
  .wintablleft{
    width:30%;
    margin-left:10%;
    margin-right:10%;
  }
  .wintablriht{
    width:30%;
    margin-left:10%;
  }
  }
</style>

<center>
  <h2 style="color:#4fbeeb;text-shadow:1px 1px 2px black;"> Last wining Numbers </h2>
</center>
<div class="wintabl">
 
  <div class="wintablleft">
  <div class="play-card-body">
  <div style="display:flex;flex-direction:row; font-size:1rem; background:#f3efef;">
 <i class="fas fa-circle" style="color:#4dbeed;margin-left:0.5rem;"><span style="color:silver; margin-left:0.2rem;"> Selected</span></i>
 <i class="fa fa-circle" style="color:#ffb732;margin-left:0.5rem;"><span style="color:silver;margin-left:0.2rem;"> Have </span></i>
 <i class="fa fa-circle" style="color:lime;margin-left:0.5rem;"><span style="color:silver; margin-left:0.2rem;"> Win </span></i>
 <a href="#" class="btn btn-link"> Last_winning_No </a>
     </div>
     
  <style>
.allwingno li{
  background:#00d400d7 !important;
  color: white !important;
}
  </style>
     
     <ul class="number-list allwingno">
 
  
     </ul>
  </div>
  </div>
  
  <div class="wintablriht">
   <img src="assets/images/bgs/banner3.png" style="width:80%;margin-left:10%;">
   <img src="assets/images/bgs/jakpotxt.png" style="width:80%;margin-left:10%;">
  </div>
</div>

<img src="assets/images/bgs/person-2.png" style="width:40%;margin-left:25%;">




























<audio id="playmp3_1">
  <source src="https://orangefreesounds.com/wp-content/uploads/2022/06/Casino-winner-sound-effect.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>












<div id="winpopdiv" style="display:none;position:fixed;z-index:800; top:500px; width:80%; margin-left:10%; backdrop-filter:blur(20px); background:rgba(0,107,203,0.108);">
 <button class="btn btn-danger float-right" onclick="winpopclosbtn()"> X </button>
  <center>
  <h1 style="color:green;"> You Won </h1>
  <b> <span id="wonpopbnstxt" style="color:#008de0; text-shadow:10x 1px 2px black; font-size:5rem;"> 2000 </span> <i class="fa fa-ruble" style="color:lime; text-shadow:1px 1px 2px black; font-size:3rem"> </i></b>
</center>
  <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_h7q0t9pm.json" style="position:relative;z-index:850;margin-top:-200px; width:100%;overflow:hidden;" background="transparent" speed="1" loop autoplay>
  </lottie-player>
</div>










<div id="redpoptimediv" style="backdrop-filter:blur(10px);width:100%; height:2000%; position:absolute; z-index:900; top:0; bottom:0; left:0; right:0;">
  <br>
  <br>
  <br>
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
  <br>
  <br>
  <br>
  <center>
    <h2 style="color:red;">Can't Draw untill Time Is end</h2>
  </center>
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
{
jQuery(document).ready(function() {
  $('#redpoptimediv').hide();
  });
}else{
  setTimeout(function(){
  history.back(1000);
  }, 12000);
}

/////////////////////////////////////
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
      ////////////////////////////////////////////
      
      $(document).on('click','#playbtnfill', function(){
        window.location.href = '#playbalsdiv';
      });
      ////////////////////////////////////////////
      $(document).on('click','.plyaldivcut', function(){
      $('.onclckallplaydiv').hide();
      });
      $(document).on('click','.playalbtntktimg', function(){
      $('.onclckallplaydiv').slideToggle();
      });
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
/////////////// 1
function loptktnosf()
{ var vrdmtktnos = [];
  for(let i=1; i < 20; i++)
  {
   var rdmtktnosjs2 = Math.floor(Math.random() * 50) +1;
   vrdmtktnos[i] = '<li class="active rv" data-rdinbal="' + rdmtktnosjs2 + '">' + rdmtktnosjs2 + '</li>';
  }
  $(".loptktnos").html(vrdmtktnos);
}
/////////// 2
$(document).on('click','.playsinglbtn', function(){
  var plysinglval = $(this).data('tktnodatabtn');
 localStorage.setItem('sesplyval', plysinglval);
var vnofply = localStorage.getItem('nofply');
 localStorage.setItem('nofply', +vnofply + 1);
  var vblock1js = $(this).data('vblock1');
  localStorage.setItem('vblocknoforpost', vblock1js);
var nthnobalsfnl = Math.floor(Math.random() * 21) +1;
$('.rv:nth-child('+ nthnobalsfnl +')').html(plysinglval);
$('.slctnovb').html(plysinglval);
$('.rdmblok').html(vblock1js);
/////
$(this).removeClass('playsinglbtn');
$(this).addClass('afterclkplybtn');
startplayftim();
});
////////////////////----------
function autofplytktvno(){
  var plysinglval = $('.inptktnoval').val();
  var vblock1js = $('.inptktnoval').data('vblock1');
var nthnobalsfnl = Math.floor(Math.random() * 21) +1;
$('.rv:nth-child('+ nthnobalsfnl +')').html(plysinglval);
$('.slctnovb').html(plysinglval);
$('.rdmblok').html(vblock1js);
}
///////////// 3
/////////////////////////////////////
 function startplayftim(){
ply1fmp3();
var slidtime = $('.sliderrang').val();
$('.playsinglbtn').hide();
var nthbalstim = setInterval(function()
 { var rdmnthnobals = Math.floor(Math.random() * 21) +1;
$('.rv').removeClass('active2');
$('.rv:nth-child('+ rdmnthnobals +')').addClass('active2');
}, slidtime);
///1/2
 setTimeout(function(){
  clearInterval(nthbalstim);
  $('.playsinglbtn').show();
  var rdinhtm = $('.active2').data('rdinbal');
  $('.greenslctbal').html(rdinhtm);
   var vsesplyval = localStorage.getItem('sesplyval');
   if(vsesplyval == rdinhtm)
   {  $('.winpopdiv').show();
      $('.gmatchtxt').show();
var vseswonval = localStorage.getItem('seswonval');
 localStorage.setItem('seswonval', +vseswonval + 1);
  var bonuswon = Math.floor(Math.random() * <? echo $tordmbns ?>) +1500;
   $('#winpopdiv').show(1000);
   $('#wonpopbnstxt').html(bonuswon);
/////1/3
      $.post(
      "jaxo1.php",
      {vsesplyvalwinjs:vsesplyval,bonuswonj:bonuswon},
       function(bonuswonf){
         
       }); // end post
//// else 
   }else{
      $('.rmatchtxt').show(); }
 /////------
var vnofply=localStorage.getItem('nofply');
if(vnofply == <? echo $nofltrywinr ?>){
 var vsesplyval = localStorage.getItem('sesplyval');
  $('.active2').html(vsesplyval);
  $('.greenslctbal').html(vsesplyval);
$('.rmatchtxt').hide();
$('.gmatchtxt').show();
var vseswonval = localStorage.getItem('seswonval');
 localStorage.setItem('seswonval', +vseswonval + 1);
 
  var bonuswon = Math.floor(Math.random() * <? echo $tordmbns ?>) +1500;
   $('#winpopdiv').show(1000);
   $('#wonpopbnstxt').html(bonuswon);
     $.post(
      "jaxo1.php",
      {vsesplyvalwinjs:vsesplyval,bonuswonj:bonuswon},
       function(bonuswonf){
       }); // end post
}
//  alert(vsesplyval);
hidpops();
vnofplyf();
//// 1/4 playnotagain
     var vblocknoforpost =  localStorage.getItem('vblocknoforpost');
    $.post(
      "jaxo1.php",
     {vsesplyvaljs:vsesplyval,vblocknoforpostj:vblocknoforpost},
       function(setbalvalpostf){
       }); // end post  
       remningtktsf();
        }, 7000);
}
//////// 4 
 var playmp3_1 = document.getElementById('playmp3_1');
  function ply1fmp3(){
    playmp3_1.play(); }
  function stp1fmp3(){
    playmp3_1.pause(); }
///////////////////
////////// 5 
function hidpops(){
$('.rmatchtxt').hide(7000);
$('.gmatchtxt').hide(7000);
}
////////// 6 
function vnofplyf(){
var vseswonval = localStorage.getItem('seswonval');
var vnofply = localStorage.getItem('nofply');
if(vnofply){
$('.nofplydiv').html(vnofply);
}else{
$('.nofplydiv').html(0); }
/////
if(vseswonval){
$('.wonvaldiv').html(vseswonval);
}else{
$('.wonvaldiv').html(0); }
}
/////////////////////////////////////////
//// others two 
/////////////// 1
function allwingnof()
{ var vallwingno = [];
  for(let i=1; i < 21; i++)
  {
   var rdmallwingno = Math.floor(Math.random() * 50) +1;
   vallwingno[i] = '<li class="">' + rdmallwingno + '</li>';
  }
  $(".allwingno").html(vallwingno);
}




//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
///// functions load 
function remningtktsf()
{
    $.post(
      "jaxo1.php",
     {remningtktsj:'isjfjrj'},
       function(remningtktsfv){
    $('.remningtktsdiv').html(remningtktsfv);
       }); // end post 
}
function winpopclosbtn()
{  $('#winpopdiv').hide(10); }
//// test part 

//////////////////////////////////////////
window.onload = loptktnosf();
window.onload = autofplytktvno();
window.onload = vnofplyf();
window.onload = allwingnof();
window.onload = remningtktsf();






    </script>  
</body>
</html>