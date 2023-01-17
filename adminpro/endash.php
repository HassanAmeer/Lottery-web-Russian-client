
<?
include '../config.php';
session_start();
 error_reporting(0);
if(!isset($_SESSION['adminses']))
{ header('location:../index.php'); }




if(isset($_POST['loginbtnbymail']))
{
  $loginmail = $_POST['loginmailnam'];
   setcookie('coklog',$loginmail,time() + 84600 ,'/');
  header('location:../home.php');
}






if(isset($_POST['logoutbtn']))
{
  unset($_SESSION['adminses']);
  header('location:../index.php');
}
/////////////////////////////////
/**********************************/
$thistime = date('d/m/Y H:i:s a', time());
$cusrs = " SELECT COUNT(uid) AS totalusrs FROM `userslog`";
$cusrsq = mysqli_query($db,$cusrs);
$cusrsv = mysqli_fetch_assoc($cusrsq);
///// end of count total users

$tsums = " SELECT SUM(sum) AS tusrsumbal FROM userslog";
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








/*
$chkstng = "SELECT * FROM `allstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
///////////////
*/

///////////////
$chkstng = "SELECT * FROM `ghstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
///////////////


?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.4">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title> Admin Panel </title>
  </head>
  <body>


<style>
.navadscolor{
  color:navy;background: rgb(227,190,254); letter-spacing: :1px; font-style: bold;
}
.navbitcoin{
  animation: navbitcoin 4s infinite;
}
@keyframes navbitcoin
{
  10%{
   opacity: 0.2; margin-left: 1em;
  }
  80%{
   opacity: 1; margin-left: 0em;
  }
}

  /* for table golden star and silver */
      
      
 table.edTable { width: 100%; font: 17px calibri; } table, table.edTable th, table.edTable td { border: solid px #9b58b5; border-collapse: collapse; padding: 3px; text-align: center; } table.edTable td { background-color: #5c0e80; color: #ffffff; font-size: 14px; } table.edTable th { background-color : #b02875; color: #ffffff; } tr:hover td { background-color:navy; color: #dddddd; }
 
      
/*  own */
.silTable{
  width: 100%;

  
}
.sthead{
  background: silver;
  border:2px solid gray;
  border-radius: 10%;
  box-shadow: 2px 3px 14px 2px black;
}
.sthead th{
  color:green;
  font-size: 1em;
}
.gthead{
  background:rgb(203,149,6);
  border:2px solid gray;
  border-radius: 10%;
  box-shadow: 2px 3px 14px 2px black;
}
.gthead th{
  color:indigo;
  font-size: 1em;
}
.strowdata td{
  font-size: 0.8em;
  
}
.strowdata:hover { letter-spacing:1px; }
.strowdata:hover td i{ color:#05cecd; }
.strowdata td i{
  width: 1em;
  color:indigo;
}
/* end of golden star table */
#listtable{
    width: 100%;
    height: 80%;
    overflow-x: auto; 
    overflow-y: auto; 
    height: 82em;
 }      

</style>



<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
     <i class="fas fa-user-tie text-info"> </i> 
      <? echo $_SESSION['adminses']; ?>
    </a>
<button class="float-end bg-dark navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>







<div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
   <i class="fas fa-user-tie text-info"> </i> 
    <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel"><? echo $_SESSION['adminses']; ?></h5>
    <button type="button" class=" btn-close btn-close-white text-light" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
  </div>
  <div class="offcanvas-body">
    <div class="text-light">
      Lottery / Tickets systems
    </div>
    <hr class="bg-light">
    <div class="dropdown mt-3">
      <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        <i class="fa fa-recycle text-white"> </i> Reset Projects
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" id="fulresetbtn"> Full  with Withdraw details + others</a></li>
        <li><a class="dropdown-item" id="allpkgresetbtn"> Only buyer Packeges Reset(removed)</a></li>
       <u class="text-muted"> action on All users accounts <i class="fa fa-warning text-danger"> </i> <b class="text-danger"> Carefully </b></u>
      </ul>
    </div>
   <br>
   <br>
   <br>
   <br>
   <br>
    
<div class="d-grid gap-2">
  <button class="btn btn-success navbtns navdboardbtn" type="button"><i class="fa fa-dashboard text-white"> </i> Dashboard</button>
  <button class="btn btn-success navbtns advacstngbtn" type="button"><i class="fa fa-gear text-white navbitcoin"> </i> Advance </button>
  <button class="btn btn-success navbtns navmailbtn" type="button"><i class="fa fa-paper-plane text-white"> </i> Send Emails</button>
  <button class="btn btn-success navbtns navusrslistbtn" type="button"><i class="fa fa-users text-white"> </i> Users Accounts</button>
  <button class="btn btn-success navbtns vtktstblsbtn" type="button"><i class="fa fa-ticket text-white"> </i> Users Tickets </button>
  <button class="btn btn-success navbtns navreqwithdrawbtn" type="button"><i class="fa fa-history text-white"> </i> Contact Page  </button>
  <button class="btn btn-success navbtns navblogbtn" type="button"><i class="fa fa-photo text-white"> </i> Blog Page  </button>
</div>



  <form method="post">
 <div class="d-grid gap-2" style="position:absolute; bottom:0;width:90%;text-align:center;">
  <button type="submit" name="logoutbtn" class="btn btn-danger"> Logout  <i class="fa fa-arrow-right text-white"></i> </button>
   </div>
</form>


  </div>
</div>
   <br>
   <br>
  <!----------------------------------------------------------------------------------------------------- start js divs ----------------------------------------------------------------------------------------------------->
  
  
<div id="errors" class="alert notifycross" style="display:none;background:#fdb0b0f0; color:red; border-radius:20px; border:1px solid red; box-shadow:2px 2px 14px 2px black;font-size:2em; position:fixed;z-index:100;top:400px;" role="alert">
   </div>
 
 <!---------------------------------->
 <!---------------------------------->

 <div id="successrs" class="alert alert-success notifycross" style="display:none;color:green;border-radius:20px; border:1px solid green;font-size:2em; box-shadow:2px 2px 14px 2px black;position:fixed;z-index:100;top:450px;" role="alert">
</div>
 <!---------------------------------->
  
  
  
  <center>
   <div id="dashboarddiv">
     
    <div style="display:flex;flex-direction:row; width:90%">
     
      <div class="bg-primary p-2" style="width:50%;box-shadow:2px 2px 20px black;">
        <u class="text-white"> <i class="fa fa-history text-warning"> </i> Login Time</u>
        <hr class="p-1">
         <h3 class="text-white"> <? echo $thistime; ?></h3>
    <p class="text-warning"> <? echo $_SERVER['REMOTE_ADDR']; ?></p>
       </div>
       
      <div class="bg-warning p-2" style="width:50%;">
        <u class="text-white"> <i class="fas fa-sack-dollar text-primary">  </i> Balance Status </u>
        <hr class="p-1">
         <h3 class="text-white"> <? echo $totalprof; ?>  <i class="fa fa-ruble text-primary"> </i></h3>
       <p class="text-muted"> remaining from total Sum and Sumout </p>
       </div>
     </div>
     
    <br>
    <br>
    <br>
   <div class="container">
      <!-- single canvas node to render the chart -->
      <canvas
        id="myChart"
        width="700"
        height="700"
        aria-label="chart"
        role="img"
      ></canvas>
    </div>    
    
    
    
    
    
    
    
    
    
    
    
    
<div style="width:16rem;border-radius:0 30px 30x 0; box-shadow:1px 1px 10px navy;border-left:15px solid navy;background;silver;" class="float-start">
  <button class="advacstngbtn" style="color:orange;font-size:1.7rem; text-shadow:1px 1px 2px black;"> Advanced <i class="fa fa-gear"> </i> </button>
</div>
    
<center>
 <h1 class=" text-success" style="border:1px solid green;box-shadow:1px 1px 15px black; border-radius:10px; background:#c0fcadb2; text-align:center;"> Site Settings </h1> 
</center>

 <div class="" style="background:#e1f2e0;"><center>
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">1. Contact Links</h1>
    <div id="vlinks"> </div><hr>
     </center>
   </div>
   
   

<div class="" style="background:#e1f2e0;">
     <center>
     
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">2. This Time All Withdrawals <i class="float-end fa fa-gear text-primary"> </i></h1>
    <div style="font-size:2em;">
    
   <select id="wbalidonofv" style="background:navy;color:lime;" onchange="allsmoutonoff(this.options[this.selectedIndex].value)">
      <option value="0"> ON </option>
      <option value="1"> OFF </option>
    </select>
    </div>
<hr>
     </center>
   </div>
   
   
<div class="" style="background:#e1f2e0;">
<center>
     
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">3. Update Contact Links <i class="float-end fa fa-gear text-primary"> </i></h1>
    
  <input type="text" placeholder=" Telegram Link" id="tglink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder="Facebook Link" id="fblink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">

  <input type="text" placeholder=" Gmail " id="gmaillink" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="number" placeholder="Phone 1 " id="phone1" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<br>
<button class="btn btn-primary setlinksbtn" style="letter-spacing:4px;">Update Links</button>
  <hr>
     </center>
   </div>
   
   
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">4. Update Tickets Discounts Rate in % percent from 1000 <i class="fa fa-ruble text-primary"> </i> <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> Can Set Own discount rate : for buy Tickets </p>
  <p class="text-primary">Already Set Discount rate : <b class="text-danger" id="refbnsratdiv"> 2 </b> % </p>
  <input type="text" placeholder=" Discounts rate" id="refbnsratinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary refbnsratbtn" style="letter-spacing:4px;">Update Discounts in % </button>
<hr>
     </center>
   </div>
   

   
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">5. Update For Next Draw lottery Date <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> you can set own <i class="fa fa-history"> </i> only write days its set automatically updates </p>
  <p class="text-primary">Already Set on this date : <b class="text-danger" id="nextdrawdiv"> 30 </b> <i class="fa fa-history text-primary"> </i> </p>
  <input type="text" placeholder=" next lottery draw in days" id="nextdrawinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary nextdrawbtn" style="letter-spacing:4px;">Update next draw in days <i class="fa fa-history text-warning"> </i> </button>
<hr>
     </center>
   </div>
   
   
<div class="" style="background:#e1f2e0;">
<center>
 <h1 class="" style="color:indigo; box-shadow:1px 1px 3px black;">6. Admin Control <i class="float-end fa fa-gear text-primary"> </i></h1>
 
  <input type="text" placeholder=" Admin Name" id="admnname" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
  <input type="text" placeholder=" Admin Password" id="admnpass" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary admnpassbtn" style="letter-spacing:4px;">Update Control</button>
     </center>
   </div>
  
   </div>
</center>





<!-----1.2.------------------------------------------------------------------------------------------------>

<!------ start of advance settings divs -------->

<div class="advancstnddiv" style="width:100%;display:none;">
  <center>
<h2 style="color:purple;font-size:2rem">
  Advance Settings </h2>
  </center>
  <br>
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">7. Update win rate in rubles Maximum<i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> min-1500 <i class="fa fa-ruble"> </i> max- you own set to won</p>
  <p class="text-primary">Already Set Price : <b class="text-danger" id="winratediv"> 25000 </b> <i class="fa fa-ruble text-primary"> </i> </p>
  <input type="text" placeholder=" Win rate" id="winrateinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary winratebtn" style="letter-spacing:4px;">Update WIN Rate In <i class="fa fa-ruble text-warning"> </i> </button>
<hr>
     </center>
   </div>
  
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">8. Updates For 100% win persons <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> Win granted <i class="fa fa-ruble"> </i> If you want to win granted for persons then set the value only when have no of tickets as your demand (others all on luck) </p>
  <p class="text-primary">Already Set On if played Tickets at a time : <b class="text-danger" id="vwingrntdnodiv"> 2 </b> <i class="fa fa-ticket text-primary"> </i> </p>
  <input type="text" placeholder="value tickets for granted wins" id="vwingrntdinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary vwingrntdbtn" style="letter-spacing:4px;">Update win granted <i class="fa fa-ticket text-warning"> </i> </button>
<hr>
     </center>
   </div>

   
   
   
   
  
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">9. Updates For min Withdrawals <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> Withdrawals in  <i class="fa fa-ruble"> </i> Controls for every users </p>
  <p class="text-primary">Already Set Min-withdrawals : <b class="text-danger" id="vminsumoutdiv"> 2 </b> <i class="fa fa-ruble text-primary"> </i> </p>
  <input type="text" placeholder="value of Min-withdrawals" id="vminsumoutinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary vminsumoutbtn" style="letter-spacing:4px;">Update <i class="fa fa-ruble text-warning"> </i> </button>
<hr>
     </center>
   </div>
   
   
   
  
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">10. Updates Site Name <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> In Titles or others <i class="fa fa-globe"> </i> if in logo then own set logo </p>
  <p class="text-primary">Already Sets : <b class="text-danger" id="vsitenamediv"> lotto tickets </b> <i class="fa fa-globe text-primary"> </i> </p>
  <input type="text" placeholder="Website Name" id="sitenameinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary sitenamebtn" style="letter-spacing:4px;">Update <i class="fa fa-globe text-warning"> </i> </button>
<hr>
     </center>
   </div>
   
   
   
  
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">11. Updates Youtube Video link <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> Only Youtube <i class="fa fa-youtube"> </i> need only name not completely link (<strike class="fa fa-close" style="color:red;"> youtube.com/</strike><b style="color:green;"> Sx_pxejch2g <i class="fa fa-check"> </i> </b>)</p>
  <p class="text-primary">Already Sets : <i>https://www.youtube.com/embed/</i><b class="text-danger" id="vytlinkdiv">  </b> </p>
  <input type="text" placeholder=" value " id="ytlinkinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:1.5em;">
<button class="btn btn-primary ytlinkbtn" style="letter-spacing:4px;"> Update <i class="fa fa-video text-warning"> </i> </button>
<hr>
     </center>
   </div>
   

   
   
   
<div class="" style="background:#e1f2e0;">
<center>
 <h3 class="" style="color:indigo; box-shadow:1px 1px 3px black;">12. Updates For show any notification <i class="float-end fa fa-gear text-primary"> </i></h3>
  <p class="text-muted"> On home page <i class="fa fa-bell"> </i> about any things </p>
  <p class="text-primary">Already Set : <b class="text-danger" id="vbelltxtdiv">  akwooeoeoe  </b> <i class="fa fa-bell text-primary"> </i> </p>
  <textarea type="text" placeholder="Something For Notification" id="vbelltxtinpt" style="border: 1px solid blue; outline:none; color:indigo; font-size:2rem;">
  </textarea><br>
<button class="btn btn-primary belltxtbtn" style="letter-spacing:4px;">Update <i class="fa fa-bell text-warning"> </i> </button>
<hr>
     </center>
   </div>
   











</div>


<!-----2.------------------------------------------------------------------------------------------------>

<!------ start of mail divs -------->
<div id="mailsdiv" style="display:none;">
  <center>
   <h3 class="" style="color:#016dbdd5">1. Send Mail To all / or 1 person </h3>
  <b style="color:green;"> If want to send all mails no need to type there mail press button for all (emails selected from data base)</b></br>

  
 <input type="text" placeholder="Subject Here" id="sbjctmail1" style="border: 1px solid rgb(0,87,107); outline:none; color:rgb(0,87,107); font-size:2em;"><br><br>
  <textarea type="text" placeholder="Main Message Here" id="msgmail1" style="border: 1px solid navy; outline:none; color:navy; font-size:1em;width:80%;height:8em;"></textarea><br><br>
  <button class="btn btn-danger sndmailallbtn"> send to all </button><br>
  <br>
  <br>
  <br>
  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px brown; background:silver;">
<!----------------------------->
  <b class="text-success">2. To Only one person get email from users Accounts to send mail</b>
  
  <input type="text" value="From : <? echo $chkstngv['email']; ?>" style="border: 1px solid red; outline:none; color:red; font-size:2em;" disabled=""><br><br>

  <input type="text" placeholder="Email To" value="To@gmail.com" id="mailto" style="border: 1px solid green; outline:none; color:green; font-size:2em;"><br><br>
  <input type="text" placeholder="Subject Here" id="sbjctmail" style="border: 1px solid rgb(0,87,107); outline:none; color:rgb(0,87,107); font-size:2em;"><br><br>
  <textarea type="text" placeholder="Main Message Here" id="msgmail" style="border: 1px solid navy; outline:none; color:navy; font-size:1em;width:80%;height:8em;"></textarea><br><br>
  <button class="btn btn-success sndmail1btn"> send to this only</button><br><br>

</center>
</div>
<!------ end of mail divs -------->
   
<!-----3.------------------------------------------------------------------------------------------------>

<!-----4.------------------------------------------------------------------------------------------------>
<!----end of setting div--->
<div id="usrslistdiv" style="display:none;">
  <center><h3 class="" style="color:indigo;"> lists Of  Users Accounts <u class="text-success"> Amounts In  <i class="fa fa-ruble"> </i> </u></h3>
<div id="listtable">
   <!-- start here for Silver stars users -->
 <table class="silTable" id="sTab" style="width:180%;">
<tbody class="vbandusrs">
  <tr class="sthead">
	<th>id</th>
	<th>Email</th>
	<th>Total Invest</th>
	<th>sumout</th>
	<th>Totalsumout</th>
	<th>buy_tickets</th>
	<th>reffer by</th>
	<th>Total reff</th>
	<th>reff Bonus</th>
	<th>Ip Address</th>
  </tr>
  </tbody>
  
  <tbody class="tablesvall"> </tbody>
  
  
</table> 
</div>
  
  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px brown; background:silver;">

<p class="text-primary"> Ban only Withdrawals off of specific person </p>
<b class="text-danger">view any users total Tickets thats buy </b>
<b class="text-success"> Only this month  </b>

  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px lime; background:white;">


  </center>
</div>
<!------ end of list div1 ------->





<div id="usrstktsbuydiv" style="display:none;">
  <center><h3 class="" style="color:indigo;"> lists Of  Users Tickets <u class="text-success"> Amounts In  <i class="fa fa-ruble"> </i> </u></h3>
<div id="listtable">
   <!-- start here for Silver stars users -->
 <table class="silTable" id="sTab" style="width:180%;">
<tbody class="vbandusrs">
  <tr class="sthead">
	<th>id</th>
	<th>Email</th>
	<th> See by </th>
	<th> Total Tickets </th>
	<th> Tickets buy </th>
	<th> Tickets played </th>
	<th> Tickets Won </th>
	<th> Payeer </th>
  </tr>
  </tbody>
  
  <tbody class="vtktstblsdiv"> 
<?
$vtiktstbls = "SELECT * FROM `userslog` ORDER BY uid DESC";
  $vtiktstblsq = mysqli_query($db,$vtiktstbls);
 while($vtktf = mysqli_fetch_assoc($vtiktstblsq)){
  $bycontmail = $vtktf['uemail'];
?>
	<td class="hvr"><? echo $vtktf['uid']; ?></td>
	
	<td class="fa fa-envelope text-primary"><? echo $bycontmail; ?></td>
 	
 	<td class=""><form method="post">
<input type="hidden" name="loginmailnam" value="<? echo $vtktf['uemail']; ?>"> <button type="submit" name="loginbtnbymail" class=" btn btn-danger"> Login </button></form></td>
 	
	<td> 
	
	<?
/////////////////////////////////////////
$onlyhvtkts = " SELECT COUNT(tktno) AS vtktsh FROM `buytkts` WHERE byusr = '$bycontmail'";
$onlyhvtktsq=mysqli_query($db,$onlyhvtkts);
$vtktshv=mysqli_fetch_assoc($onlyhvtktsq);
if($vtktshv['vtktsh'] > 0){echo $vtktshv['vtktsh']; }else{
  echo 0; }
 ///////////////////////////////////////
 ?>
</td>

	<td> 
	<?
 ///////////////////////////////////////
$alltkshv = " SELECT COUNT(tktno) AS totaltktshv FROM `buytkts` WHERE byusr = '$bycontmail' AND status=1 AND statusend=0";
$alltkshvq = mysqli_query($db,$alltkshv);
$vtotltkts=mysqli_fetch_assoc($alltkshvq);
if($vtotltkts['totaltktshv'] > 0){echo $vtotltkts['totaltktshv']; }else{
  echo 0; }


 ///////////////////////////////////////
 ///////////////////////////////////////
 ?>
</td>




	<td> 
	<?
 ///////////////////////////////////////
$tktsplyd = " SELECT COUNT(tktno) AS tktsplydv FROM `buytkts` WHERE byusr = '$bycontmail' AND status=1 AND statusend=1";
$tktsplydq = mysqli_query($db,$tktsplyd);
$tktsplydf=mysqli_fetch_assoc($tktsplydq);
if($tktsplydf['tktsplyd'] > 0){
echo $tktsplydf['tktsplyd']; }else{
  echo 0; }
 ///////////////////////////////////////
 ///////////////////////////////////////
 ?>
</td>

	<td> 
	<?
 ///////////////////////////////////////
$ttlwonsvv = "SELECT COUNT(tickets) AS ttlwonsv FROM `wontabl` WHERE byusr= '$bycontmail'";
$ttlwonsvq = mysqli_query($db,$ttlwonsvv);
$ttlwonsf=mysqli_fetch_assoc($ttlwonsvq);
if($ttlwonsf['ttlwonsv'] > 0){echo $ttlwonsf['ttlwonsv']; }else{
  echo 0; }
 ///////////////////////////////////////
 ///////////////////////////////////////
 ?>
</td>

	<td class="text-danger hvr"><? echo $vtktf['uacc']; ?></td>

	</tr>
 <? } ?> 
  
  
  
  
  </tbody>
  
  
</table> 
</div>
  
  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px brown; background:silver;">

<p class="text-primary"> tickets details of every users </p>
<b class="text-danger"> Tickets thats buy Win etc </b>
<b class="text-success"> Times From Registerd  </b>

  <hr style="padding:1%; box-shadow:inset 3px 3px 6px 4px navy,3px 3px 11px 4px lime; background:white;">


  </center>
</div>
<!------ end of list div2 ------->

<!-----5.------------------------------------------------------------------------------------------------>
















<!-----6.------------------------------------------------------------------------------------------------>
<div id="reqwithdrawdiv" style="display:none;">

<h2 class="text-danger"> Contact Us Page </h2>
<hr>
<div id="contactdiv">
 
  
  
  
</div>
</div>
<!-----7.------------------------------------------------------------------------------------------------>
<div id="blogdivhide" style="display:none;">
<a class="float-end" href="blog.php" style="font-size:2rem;"> <i class="fa fa-upload"> </i> Upload a Post </a>
<h2 class="text-danger"> Blog Page Management </h2>
<hr>
  <center>
<div id="vblogdiv">
 
 















<div class="card mb-3" style="max-width: 40rem; margin-top:1rem;">
  <div class="row g-0">
 
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
   <button class="btn btn-danger"> <i class="fa fa-trash" data-delpostid="74"> </i></button>
</div>




  
</div>
  </center>
</div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="js/chart.js"></script>

  <script>
 ///////// get data 

 
 
function sociallinks(){
    $.post(
      "byajax.php",
      {sociallinkjs:'jxdjjdk'},
      function(socialvf){
      $("#vlinks").html(socialvf);
      }
    ); // end post
}    
//////////////////
function vusrstblf(){
    $.post(
      "byajax.php",
      {vusrstbljs:'icidu'},
      function(vusrstblfj){
      $(".tablesvall").html(vusrstblfj);
      }
    ); // end post
}    
//////////////////
//////////////////
function voferdatef(){
    $.post(
      "byajax.php",
      {voferdatjs:'jfjrdj'},
      function(voferdatf){
      $("#voferdate").html(voferdatf);
      }
    ); // end post
}    
//////////////////
//////////////////
function contactdivff(){
    $.post(
      "byajax.php",
      {contactdivjs:'dijdjd'},
      function(contactdivf){
      $("#contactdiv").html(contactdivf);
      }
    ); // end post
}    
//////////////////
//////////////////
function vusrsreqoutbl(){
    $.post(
      "byajax.php",
      {vusrsreqj:'bdhdh'},
      function(vusrsreqf){
      $(".vreqwithdrawal").html(vusrsreqf);
      }
    ); // end post
}    

 ///////// get data 
function refbnsratf(){
    $.post(
      "byajax.php",
      {refbnsratjs:'hdjdjfufu'},
      function(refbnsratf){
  $("#refbnsratdiv").html(refbnsratf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function winratef(){
    $.post(
      "byajax.php",
      {winratefjs:'djjdjdjsj'},
      function(winratef){
  $("#winratediv").html(winratef);
      }
    ); // end post
}    
//////////////////
//////////////////
 ///////// get data 
function vbelltxtdivff(){
    $.post(
      "byajax.php",
      {vbelltxtdivfjs:'peoenek'},
      function(vbelltxtdivf){
  $("#vbelltxtdiv").html(vbelltxtdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function nextdrawff(){
    $.post(
      "byajax.php",
      {nextdrawjs:'aiksjeiie'},
      function(nextdrawf){
  $("#nextdrawdiv").html(nextdrawf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vwingrntdinptff(){
    $.post(
      "byajax.php",
      {vwingrntdnodivjs:'mbkgkgkkvov'},
      function(vwingrntdnodivf){
  $("#vwingrntdnodiv").html(vwingrntdnodivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vminsumoutdivff(){
    $.post(
      "byajax.php",
      {vminsumoutdivffjs:'owowkekkw'},
      function(vminsumoutdivf){
  $("#vminsumoutdiv").html(vminsumoutdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vsitenamedivff(){
    $.post(
      "byajax.php",
      {vsitenamedivffj:'oqoeoie'},
      function(vsitenamedivf){
  $("#vsitenamediv").html(vsitenamedivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vytlinkdivff(){
    $.post(
      "byajax.php",
      {vytlinkdivffj:'pqmswj'},
      function(vytlinkdivf){
  $("#vytlinkdiv").html(vytlinkdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vblogdivff(){
    $.post(
      "byajax.php",
      {vblogdivfjs:'qoow'},
      function(vblogdivf){
  $("#vblogdiv").html(vblogdivf);
      }
    ); // end post
}    
//////////////////
 ///////// get data 
function vwbalonoff(){
    $.post(
      "byajax.php",
      {vwbalonofjs:'djjdje'},
      function(vwbalonof){
      var onofwbal = vwbalonof;

  if(vwbalonof==0){
$("#wbalidonofv option[value='0']").prop('selected',true);}else{
$("#wbalidonofv option[value='1']").prop('selected',true);
}
      }
    ); // end post
}    
//////////////////
 function allsmoutonoff(value)
  {   var valonoff = value;
      $.post(
      "byajax.php",
      {valuejs:valonoff},
      function(smoutonof){
       if(smoutonof == 1){
        $("#successrs").fadeIn();
          $("#successrs").html('√  successfully updated'); 
            vwbalonoff();
        }else if(smoutonof == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  }
/////////////start for links update
//////////////////////////////
 $(document).on('click','.setlinksbtn',function(){
  var tglink = $('#tglink').val();
   var instalink = $('#instalink').val();
   var fblink = $('#fblink').val();
   var twtrlink = $('#twitterlink').val();
   var gitlink = $('#githublink').val();
   var gmalink = $('#gmaillink').val();
   var phone1 = $('#phone1').val();
   var phone2 = $('#phone2').val();
      $.post(
      "byajax.php",
      {tglinkjs:tglink,instalinkjs:instalink,fblinkjs:fblink,twtrlinkjs:twtrlink,gitlinkjs:gitlink,gmalinkjs:gmalink,phone1js:phone1,phone2js:phone2},
       function(updatlnks){
       if(updatlnks == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Update ');
      
      $('#twitterlink').val("");
      $('#gmaillink').val("");
      $('#fblink').val("");
      $('#instalink').val("");
      $('#tglink').val("");
      $('#phone1').val("");
       
       
       
        sociallinks();
        }else if(updatlnks == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.refbnsratbtn',function(){
  var refbnsratinpt = $('#refbnsratinpt').val();
      $.post(
      "byajax.php",
    {refbnsratinptjs:refbnsratinpt},
       function(refbnsratinptf){
       if(refbnsratinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#btcrateinpt').val("");
        refbnsratf();
       }else if(refbnsratinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.winratebtn',function(){
  var winrateinpt = $('#winrateinpt').val();
      $.post(
      "byajax.php",
    {winrateinptjs:winrateinpt},
       function(winrateinptf){
       if(winrateinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#winrateinpt').val("");
        winratef();
       }else if(winrateinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.nextdrawbtn',function(){
  var nextdrawinpt = $('#nextdrawinpt').val();
      $.post(
      "byajax.php",
    {nextdrawinptjs:nextdrawinpt},
       function(nextdrawinptf){
       if(nextdrawinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#winrateinpt').val("");
        nextdrawff();
       }else if(nextdrawinptf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.ofertimebtn',function(){
  var setoferdays = $('#setoferdays').val();
      $.post(
      "byajax.php",
    {setoferdaysjs:setoferdays},
       function(setoferdaysf){
       if(setoferdaysf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       $('#setoferdays').val("");
        voferdatef();
       }else if(setoferdaysf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// 
//////////////////////////////
 $(document).on('click','.admnpassbtn',function(){
  var admnname = $('#admnname').val();
  var admnpass = $('#admnpass').val();
      $.post(
      "byajax.php",
    {adminamjs:admnname, adminpassjs:admnpass},
       function(admnsetsf){
       if(admnsetsf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Updated ');
       }else if(admnsetsf == 0){
          $('#errors').fadeIn();
          $("#errors").html('× Something Went Wrong');
      }  }); // end post
  })
////////////////// end page1
  
/////////////single person mail ///////////////
 $(document).on('click','.sndmail1btn',function(){
   var mailto = $('#mailto').val();
   var sbjctmail = $('#sbjctmail').val();
   var msgmail = $('#msgmail').val();
      $.post(
      "byajax.php",
      {mailtoj:mailto,sbjctmailj:sbjctmail,msgmailj:msgmail},
       function(sndmail1btnf){
       if(sndmail1btnf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ mail send successfully to this ' + mailto);
     }else if(sndmail1btnf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Mail not send try again');
      }  }); // end post
  })
///////////////////////////////
  
/////////////single person mail ///////////////
 $(document).on('click','.sndmailallbtn',function(){
   var sbjctmail = $('#sbjctmail1').val();
   var msgmail = $('#msgmail1').val();
      $.post(
      "byajax.php",
      {sbjctmailall:sbjctmail,msgmailall:msgmail},
       function(sndmailallf){
       if(sndmailallf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ mail send successfully');
     }else if(sndmailallf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Mail not send try again');
      }  }); // end post
  })
///////////////////////////////
/////////////single person mail ///////////////
 $(document).on('click','#allpkgresetbtn',function(){

      $.post(
      "byajax.php",
      {allpkgresetj:'ueuejfj'},
       function(allpkgrstf){
       if(allpkgrstf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Removed All packeges Of Users');
     }else if(allpkgrstf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× try again');
      }  }); // end post
  })
///////////////////////////////
/////////////single person mail ///////////////
 $(document).on('click','#fulresetbtn',function(){
      $.post(
      "byajax.php",
      {fulresetjs:'dhueuw8'},
       function(fulrstgamf){
       if(fulrstgamf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√ successfully Reset All user details but hidden details you can see');
     }else if(fulrstgamf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× try again');
      }  }); // end post
  })
///////////////////////////////
 
$(document).on('click','.setpresvalbtn',function()
{
  var salename = $(this).data("sale");
  var strike = $(this).data("strike");
if(salename=="sale1")
{
  var prescutval = $('#prescut1').val();
  var presvalv = $('#presvalv1').val();
}else if(salename=="sale2"){
 var prescutval = $('#prescut2').val();
  var presvalv = $('#presvalv2').val();
}else if(salename=="sale3"){
 var prescutval = $('#prescut3').val();
  var presvalv = $('#presvalv3').val();
}else if(salename=="sale4"){
 var prescutval = $('#prescut4').val();
  var presvalv = $('#presvalv4').val();
}else if(salename=="sale5"){
 var prescutval = $('#prescut5').val();
  var presvalv = $('#presvalv5').val();
}else if(salename=="sale6"){
 var prescutval = $('#prescut6').val();
  var presvalv = $('#presvalv6').val();
}else if(salename=="sale7"){
 var prescutval = $('#prescut7').val();
  var presvalv = $('#presvalv7').val();
}else if(salename=="sale8"){
 var prescutval = $('#prescut8').val();
  var presvalv = $('#presvalv8').val();
}

 $.post(
      "byajax.php",
      {salejs:salename,strikejs:strike,presvalvjs:presvalv,prescutvaljs:prescutval},
       function(strikef){
       if(strikef == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
         vpresalef();
     }else if(strikef == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

})
///////////////////////////////
 
$(document).on('click','.slctbanjs',function()
{
  var usrbanval = $(this).data("usrbanval");
  var usrtblid = $(this).data("usrtblid");

 $.post(
      "byajax.php",
      {usrbanvaljs:usrbanval,usrtblidjs:usrtblid},
       function(usrbanf){
       if(usrbanf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
         vusrstblf();
     }else if(usrbanf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.belltxtbtn',function()
{
  var vbelltxtinpt = $('#vbelltxtinpt').val();

 $.post(
      "byajax.php",
      {vbelltxtinptjs:vbelltxtinpt},
       function(vbelltxtinptf){
       if(vbelltxtinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
       $('#vbelltxtinpt').val("");
         vbelltxtdivff();
     }else if(vbelltxtinptf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.ytlinkbtn',function()
{
  var ytlinkinpt = $('#ytlinkinpt').val();

 $.post(
      "byajax.php",
      {ytlinkinptjs:ytlinkinpt},
       function(ytlinkinptf){
       if(ytlinkinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
       $('#ytlinkinpt').val("");
         vytlinkdivff();
     }else if(ytlinkinptf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.sitenamebtn',function()
{
  var sitenameinpt = $('#sitenameinpt').val();

 $.post(
      "byajax.php",
      {sitenameinptjs:sitenameinpt},
       function(sitenameinptf){
       if(sitenameinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
       $('#sitenameinpt').val("");
         vsitenamedivff();
     }else if(sitenameinptf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.vminsumoutbtn',function()
{
  var vminsumoutinpt = $('#vminsumoutinpt').val();

 $.post(
      "byajax.php",
      {vminsumoutinptjs:vminsumoutinpt},
       function(vwingrntdinptf){
       if(vwingrntdinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
       $('#vminsumoutinpt').val("");
         vminsumoutdivff();
     }else if(vwingrntdinptf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.vwingrntdbtn',function()
{
  var vwingrntdinpt = $('#vwingrntdinpt').val();

 $.post(
      "byajax.php",
      {vwingrntdinptjs:vwingrntdinpt},
       function(vwingrntdinptf){
       if(vwingrntdinptf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
       $('#vwingrntdinpt').val("");
         vwingrntdinptff();
     }else if(vwingrntdinptf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

});
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
  
  
///////////////////////////////
 
$(document).on('click','.reqchangbtn',function()
{
  var reqid = $(this).data("reqid");
  var reqstatus = $(this).data("reqstatus");

 $.post(
      "byajax.php",
      {reqidjs:reqid,reqstatusjs:reqstatus},
       function(reqchangf){
       if(reqchangf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Updated');
         vusrsreqoutbl();
     }else if(reqchangf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

})
///////////////////////////////
 
$(document).on('click','.delmsgsbydtacls',function()
{
  var delmsgsid = $(this).data("delmsgsid");

 $.post(
      "byajax.php",
      {delmsgsidjs:delmsgsid},
       function(delmsgsidf){
       if(delmsgsidf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Removed');
         contactdivff();
     }else if(delmsgsidf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 

})
 ///////////////////////////////
///////////////////////////////
 
$(document).on('click','.delpostidbtn',function()
{
var delpostid = $(this).data("delpostid");
 $.post(
      "byajax.php",
      {delpostidjs:delpostid},
       function(delpostidf){
       if(delpostidf == 1){
       $("#successrs").fadeIn();
       $("#successrs").html('√  successfully Removed');
         vblogdivff();
     }else if(delpostidf == 0){
       $('#errors').fadeIn();
       $("#errors").html('× Something Went Wrong');
      }  }); // 
})
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
 ///////////////////////////////
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
/////////////////////////////////
/////////////////////////////////
$(document).on('click','.navbtns',function(){
$(this).siblings().removeClass('navadscolor');
$(this).addClass('navadscolor');

});
//////////////////////////////////
   /////////////////////////////////////
  $(document).on('click','.notifycross',function(){
      $('#errors').hide(100);
      $('#successrs').hide(100);
    })
//////////////////////////////////
/////////////////////////////////////////
  $(document).on('click','.vtktstblsbtn', function(){
  $('#usrstktsbuydiv').show();
  $('.advancstnddiv').hide();
  $('#dashboarddiv').hide();
  $('#mailsdiv').hide();
  $('#presalediv').hide();
  $('#usrslistdiv').hide();
  $('#reqwithdrawdiv').hide();
  $('#blogdivhide').hide();
});
/////////
/////////////////////////////////////////
  $(document).on('click','.advacstngbtn', function(){
  $('.advancstnddiv').show();
  $('#dashboarddiv').hide();
  $('#mailsdiv').hide();
  $('#presalediv').hide();
  $('#usrslistdiv').hide();
  $('#reqwithdrawdiv').hide();
  $('#usrstktsbuydiv').hide();
  $('#blogdivhide').hide();
});
/////////
  $(document).on('click','.navdboardbtn', function(){
    $('#dashboarddiv').show();
    $('#mailsdiv').hide();
    $('#presalediv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#usrstktsbuydiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navmailbtn', function(){
    $('#mailsdiv').show();
    $('#dashboarddiv').hide();
    $('#presalediv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#usrstktsbuydiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navpresbtn', function(){
    $('#presalediv').show();
    $('#mailsdiv').hide();
    $('#dashboarddiv').hide();
    $('#usrslistdiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#usrstktsbuydiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navusrslistbtn', function(){
    $('#presalediv').hide();
    $('#usrslistdiv').show();
    $('#mailsdiv').hide();
    $('#dashboarddiv').hide();
    $('#reqwithdrawdiv').hide();
    $('.advancstnddiv').hide();
    $('#usrstktsbuydiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navreqwithdrawbtn', function(){
    $('#presalediv').hide();
    $('#reqwithdrawdiv').show();
    $('#usrslistdiv').hide();
    $('#mailsdiv').hide();
    $('#dashboarddiv').hide();
    $('.advancstnddiv').hide();
    $('#usrstktsbuydiv').hide();
    $('#blogdivhide').hide();
  }) 
//////
  $(document).on('click','.navblogbtn', function(){
    $('#presalediv').hide();
    $('#blogdivhide').show();
    $('#reqwithdrawdiv').hide();
    $('#usrslistdiv').hide();
    $('#mailsdiv').hide();
    $('#dashboarddiv').hide();
    $('.advancstnddiv').hide();
    $('#usrstktsbuydiv').hide();
  }) 
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//// chart 
var ctx = document.getElementById("myChart").getContext("2d");
var myChart = new Chart(ctx, {

  type: "bar",
  data: {
    // Data Labels
    labels: ["Total Users", "Total Sum", "Total Sumout"],

    datasets: [
      // Data Set 1
      {
        //  Chart Label
        label: "performance",

        // Actual Data
        data: [<? echo $tusringame ?> , <? echo $tsumingame ?>, <? echo $tusoutgame ?>],

        // Background Color
        backgroundColor: [
        "rgba(54, 162, 235, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(255, 99, 132, 0.2)",
        ],

        // Border Color
        borderColor: [
          "rgba(54, 162, 235, 1)",
          "rgba(75, 192, 192, 1)",
          "rgba(255, 99, 132, 1)",
           ],

        // Border Width
        borderWidth: 1,
      },

    ],
  },

  options: {
 
    responsive: false,

    layout: {
      padding: {
        left: 50,
        right: 0,
        top: 0,
        bottom: 0,
      },
    },

    tooltips: {
      enabled: true,
      backgroundColor: "black", // 
      titleFontFamily: "Comic Sans MS",
      titleFontSize: 30, // Set Tooltip Font Size
      titleFontStyle: "bold italic",
      titleFontColor: "yellow",
      titleAlign: "center",
      titleSpacing: 3,
      titleMarginBottom: 50,
      bodyFontFamily: "Comic Sans MS",
      bodyFontSize: 20,
      bodyFontStyle: "italic",
      bodyFontColor: "silver",
      bodyAlign: "center",
      bodySpacing: 3,
    },

    // Custom Chart Title
    title: {
      display: true,
      text: "Project Statics With Rubles",
      position: "bottom",
      fontSize: 25,
      fontFamily: "Comic Sans MS",
      fontColor: "green",
      fontStyle: "bold italic",
      padding: 20,
      lineHeight: 5,
    },

    // Legends Configuration
    legend: {
      display: true,
      position: "bottom", // top left bottom right
      align: "end", // start end center
      labels: {
        fontColor: "navy",
        fontSize: 16,
        boxWidth: 20,
      },
    },

    animation: {
      duration: 7000,
      easing: "easeInOutBounce",
    },
  },
});
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
////// windows loads
window.onload = sociallinks();
window.onload = vwbalonoff();
window.onload = vusrstblf();
window.onload = voferdatef();
window.onload = contactdivff();
window.onload = vblogdivff();
window.onload = refbnsratf();
window.onload = winratef();
window.onload = nextdrawff();
window.onload = vwingrntdinptff();
window.onload = vminsumoutdivff();
window.onload = vsitenamedivff();
window.onload = vytlinkdivff();
window.onload = vbelltxtdivff();




  </script>
    
    
    
    
  </body>
</html>

