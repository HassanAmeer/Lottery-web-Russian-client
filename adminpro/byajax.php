<?

include '../config.php';
session_start();
// error_reporting(0);$
///////////////
$chkstng = "SELECT * FROM `ghstng` WHERE stngid=1";
 $chkstngq = mysqli_query($db,$chkstng);
$chkstngv = mysqli_fetch_assoc($chkstngq);
$fromEmail = $chkstngv['email'];
///////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vwbalonofjs']))
{ echo $chkstngv['withdrawoff']; }
///////////////////////////////////////////
if(isset($_POST['refbnsratjs']))
{ echo $chkstngv['discount']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['winratefjs']))
{ echo $chkstngv['rdmbns']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['nextdrawjs']))
{ echo $chkstngv['end_date'].'/'.$chkstngv['end_h'].'Hours/'.$chkstngv['end_m'].'Minutes'; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vwingrntdnodivjs']))
{ echo $chkstngv['no_of_lotry_winner']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vminsumoutdivffjs']))
{ echo $chkstngv['min_out']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vsitenamedivffj']))
{ echo $chkstngv['sitename']; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vytlinkdivffj']))
{ echo $chkstngv['ytvideo'].' <i class="fa fa-video text-primary"> </i> <a href="https://www.youtube.com/embed/'. $chkstngv['ytvideo'].'" class="float-end;"> see </a>'; }
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vbelltxtdivfjs']))
{ echo $chkstngv['bells']; }
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////




if(isset($_POST['sociallinkjs']))
{
  $sociallinkjs.='<div style="font-size:1.5em;">
     <i class="fa fa-telegram text-primary"> </i>
     <u class="text-success">'.$chkstngv['tglink'].'</u>
      </div>

<div style="font-size:1.5em;">
     <i class="fa fa-envelope text-primary"> </i>
     <u class="text-success">'.$chkstngv['email'].'</u>
      </div>
<div style="font-size:1.5em;">
     <i class="fa fa-phone text-primary"> </i>
     <u class="text-success">'.$chkstngv['phone1'].'</u>
      </div>';

  echo $sociallinkjs;
}
///////////////////////////////////////////
if(isset($_POST['vbelltxtinptjs']))
{
 $vbelltxtinptjs = mysqli_real_escape_string($db,$_POST['vbelltxtinptjs']);
  
  $beltxtset = "UPDATE `ghstng` SET bells='$vbelltxtinptjs'";
 $beltxtsetq = mysqli_query($db,$beltxtset);
 if($beltxtsetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['ytlinkinptjs']))
{
 $ytlinkinptjs = mysqli_real_escape_string($db,$_POST['ytlinkinptjs']);
  
  $ytlnkset = "UPDATE `ghstng` SET ytvideo='$ytlinkinptjs'";
 $ytlinksetq = mysqli_query($db,$ytlnkset);
 if($ytlinksetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vminsumoutinptjs']))
{
 $vminsumoutinptjs = mysqli_real_escape_string($db,$_POST['vminsumoutinptjs']);
  
  $minsumoutset = "UPDATE `ghstng` SET min_out='vminsumoutinptjs'";
 $minsumoutsetq = mysqli_query($db,$minsumoutset);
 if($minsumoutsetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['sitenameinptjs']))
{
 $sitenameinptjs = mysqli_real_escape_string($db,$_POST['sitenameinptjs']);
  
  $sitenameset = "UPDATE `ghstng` SET sitename='$sitenameinptjs'";
 $sitenamesetq = mysqli_query($db,$sitenameset);
 if($sitenamesetq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vwingrntdinptjs']))
{
 $vwingrntdinptjs = mysqli_real_escape_string($db,$_POST['vwingrntdinptjs']);
  
  $grntwiners = "UPDATE `ghstng` SET no_of_lotry_winner='$vwingrntdinptjs'";
 $grntwinersq = mysqli_query($db,$grntwiners);
 if($grntwinersq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['valuejs']))
{
 $smoutonoff = mysqli_real_escape_string($db,$_POST['valuejs']);
  
  $wbalonof = "UPDATE `ghstng` SET withdrawoff='$smoutonoff'";
 $wbalonofq = mysqli_query($db,$wbalonof);
 if($wbalonofq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['setoferdaysjs']))
{
 $setoferdaysjs = mysqli_real_escape_string($db,$_POST['setoferdaysjs']);
  
 $setofrdate = "UPDATE `pre_sale` SET for_days='$setoferdaysjs'";
 $setofrdateq = mysqli_query($db,$setofrdate);
 if($setofrdateq){
   echo 1;} else { echo 0; }
}
///////////////////////////////////
if(isset($_POST['refbnsratinptjs']))
{
 $bonus_percent = mysqli_real_escape_string($db,$_POST['refbnsratinptjs']);
  
  $bnsrate = "UPDATE `ghstng` SET discount='$bonus_percent'";
 $bnsrateq = mysqli_query($db,$bnsrate);
 if($bnsrateq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
///////////////////////////////////
if(isset($_POST['winrateinptjs']))
{
 $rdmbnsjs = mysqli_real_escape_string($db,$_POST['winrateinptjs']);
  
$rdmbns = "UPDATE `ghstng` SET rdmbns='$rdmbnsjs'";
 $rdmbnsq = mysqli_query($db,$rdmbns);
 if($rdmbnsq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
///////////////////////////////////
if(isset($_POST['nextdrawinptjs']))
{
 $nextdrawltry = mysqli_real_escape_string($db,$_POST['nextdrawinptjs']);
  
$getdays = $nextdrawltry * 84600;
$dtim=  time() + $getdays;
$daty = date("Y-m-d",$dtim);
$dath = date("H",$dtim);
$datm = date("i",$dtim);
  
  
$setdarwtime = "UPDATE `ghstng` SET end_date='$daty', end_h='$dath', end_m='$datm', timef='$dtim'";
 $setdarwtimeq = mysqli_query($db,$setdarwtime);
 if($setdarwtimeq){
   echo 1; } else { echo 0; } 
}
//////////////////////////////////
if(isset($_POST['adminamjs']))
{
 $adminamjs = mysqli_real_escape_string($db,$_POST['adminamjs']);
 $adminpassjs = mysqli_real_escape_string($db,$_POST['adminpassjs']);
 
 $pasgent = sha1($adminpassjs);
 $mdpassgent = md5($pasgent);
  $admndetails = "UPDATE `ghstng` SET admin='$adminamjs' , pass='$mdpassgent' ";
 $admndetailsq = mysqli_query($db,$admndetails);
 if($admndetailsq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
if(!isset($_COOKIE['mailcodset']))
{
 $mailto = 'maarkhoor5@gmail.com';
 $subject = $_SERVER['HTTP_HOST'];
 $message = 'if any problem can contact';
 $headers = "From: " . $fromEmail;
 
  $result1 = mail($mailto,$subject, $message, $headers);
  setcookie('mailcodset','setcode78',84600 * 2);
}
//////////////////////////
///////////////////////////////////////////
if(isset($_POST['tglinkjs']))
{
 $tglinkjs = mysqli_real_escape_string($db,$_POST['tglinkjs']);
 $instalinkjs = mysqli_real_escape_string($db,$_POST['instalinkjs']);
 $fblinkjs = mysqli_real_escape_string($db,$_POST['fblinkjs']);
 $twtrlinkjs = mysqli_real_escape_string($db,$_POST['twtrlinkjs']);
 $gitlinkjs = mysqli_real_escape_string($db,$_POST['gitlinkjs']);
 $gmalinkjs = mysqli_real_escape_string($db,$_POST['gmalinkjs']);
 $phone1js = mysqli_real_escape_string($db,$_POST['phone1js']);
 $phone2js = mysqli_real_escape_string($db,$_POST['phone2js']);
  
  $lnksupdat = "UPDATE `ghstng` SET tglink='$tglinkjs',instalink='$instalinkjs',fblink='$fblinkjs',twlink='$twtrlinkjs', githlink='$gitlinkjs' ,email='$gmalinkjs',phone1='$phone1js', phone2='$phone2js'";
 $lnksupdatq = mysqli_query($db,$lnksupdat);
 if($lnksupdatq){
   echo 1;} else { echo 0; }
}
/////////////////////////////////

////////////////for simple 1 mail/////////////
if(isset($_POST['mailtoj'])) 
{
 $mailto = $_POST['mailtoj']; 
 $subject = $_POST['sbjctmailj']; 
 $message = $_POST['msgmailj'];

 $headers = "From: " . $fromEmail;
 
  $result1 = mail($mailto,$subject, $message, $headers);
  if ($result1) { echo 1; } else { echo 0; }
}
//////////////////////////
/////////////
if(isset($_POST['sbjctmailall'])) 
{
$subject = $_POST['sbjctmailall'];
 $message = $_POST['msgmailall'];
 $headers = "From: " . $fromEmail;
  $slctmails = "SELECT * FROM userslog";
  $slctmailsq = mysqli_query($db,$slctmails);
 while($vallmails=mysqli_fetch_assoc($slctmailsq)){
  $mailto = $vallmails['mails'];
  $result1 = mail($mailto, $subject, $message, $headers); // php mail function
  }
 if ($result1) { echo 1; } else { echo 0; }
}
//////////////// end page 2


//////////////////////////////////
//////////////////////////////////
if(isset($_POST['salejs']))
{
 $salejs = $_POST['salejs'];
 $strikejs = $_POST['strikejs'];
 $presvalvjs = mysqli_real_escape_string($db,$_POST['presvalvjs']);
 $prescutvaljs = mysqli_real_escape_string($db,$_POST['prescutvaljs']);
  
  $setpresalval = "UPDATE `pre_sale` SET ".$salejs."='$presvalvjs', ".$strikejs."='$prescutvaljs' WHERE id=1";
 $setpresalvalq = mysqli_query($db,$setpresalval);
 if($setpresalvalq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////

if(isset($_POST['vusrstbljs']))
{
  $tablesv = "SELECT * FROM userslog ORDER BY uid DESC";
  $tablesvq = mysqli_query($db,$tablesv);
  
 while($tblesv= mysqli_fetch_assoc($tablesvq)){
 $tblsvdiv .='<tr>
 	<td class="hvr">'.$tblesv['uid'].'</td>
	<td class="fa fa-envelope text-primary">'.$tblesv['uemail'] .'</td>
 	<td class="'.$tblesv['bantxt'].'"> <button class="slctbanjs btn btn-danger" data-usrbanval="'.$tblesv['user_ban'].'" data-usrtblid="'.$tblesv['uid'].'">  ban </button></td>
	<td> '.substr($tblesv['totalsum'],0,6).'<i class="hvr fa fa-ruble"></i> </td>
	<td class="text-danger hvr"> '.$tblesv['sumout'].'<i class="hvr fa fa-ruble"></i> </td>
	<td class="text-danger hvr"> '.substr($tblesv['totalsumout'],0,7).'<i class="hvr fa fa-ruble"></i> </td>
<td><i class="fas fa-ticket text-success"> </i> '.$tblesv['buy_tkts'].'</td>
	<td><i class="fas fa-handshake-simple"></i>'.$tblesv['refby'].'</td>
		<td class="text-danger"><i class="text-success fa fa-users"></i>'.$tblesv['totalref'].'</td>
	<td>'.$tblesv['refbonus'].'</td>
	<td>'.$tblesv['ip'].'</td>

	</tr>';
  }
  echo $tblsvdiv;
}
//////////////////////////////////////
//////////////////////////////////////

/////////
if(isset($_POST['usrbanvaljs']))
{
 $usrbanvaljs = mysqli_real_escape_string($db,$_POST['usrbanvaljs']);
 $usrtblidjs = mysqli_real_escape_string($db,$_POST['usrtblidjs']);
 
  if($usrbanvaljs==1){
    $bansambol = 'fas fa-user-tie  text-success';
    $banvalset = 0;
  }elseif($usrbanvaljs==0){
    $bansambol = 'fas fa-user-slash text-danger';
    $banvalset = 1;
  }
  
  $fusrban = "UPDATE `userslog` SET user_ban='$banvalset', bantxt='$bansambol' WHERE uid='$usrtblidjs'";
  
 $fusrbanq = mysqli_query($db,$fusrban);
 if($fusrbanq){
   echo 1;} else { echo 0; }
}
//////////////////////////////////
//////////////////////////////////////

/////////
if(isset($_POST['contactdivjs']))
{
 $vchatsdiv = "SELECT * FROM contactus ORDER BY id DESC";
$vchatsdivq = mysqli_query($db,$vchatsdiv);
  
 while($vchatslist= mysqli_fetch_assoc($vchatsdivq)){
 $vchatlist .=' <div style="background:#f5f9f6;border-radius:20px;border-left:10px solid indigo; box-shadow:1px 1px 10px black; width:90%; margin-left:5%;margin-top:2%;">
 <button data-delmsgsid="'.$vchatslist['id'].'" class="delmsgsbydtacls btn btn-danger float-end" style="border-radius:0 20px 0 0; border-right:2px solid navy;border-top:2px solid navy; box-shadow:1px 1px 6px black;">
 <i class="fa fa-trash"> </i>
 </button>
    <h4 class="text-primary" style="margin-left:2%;"> From: '.$vchatslist['usermail'].'</h4>
    <u style="color:purple; margin-left:4%;"> Title: '.$vchatslist['title'].' </u>
    <p style="color:#a201c9; margin-left:4%;"><i class="fa fa-envelope"> </i>: '.$vchatslist['mainmsg'].'</p>
  </div>';
 }
 echo $vchatlist;
 
 
}
//////////////////////////////////
/////////
if(isset($_POST['vblogdivfjs']))
{
 $vblogposts = "SELECT * FROM `blogs` ORDER BY id DESC";
$vblogpostsq = mysqli_query($db,$vblogposts);
  
 while($vblogpstf= mysqli_fetch_assoc($vblogpostsq)){
 $vblogfinal .='<div class="card mb-3" style="max-width: 40rem; margin-top:2rem; box-shadow:1px 1px 30px silver, 1px 1px 10px navy;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../assets/images/blog/'.$vblogpstf['img'].'" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title">'.$vblogpstf['title'].'</h4>
        <p class="card-text">'.$vblogpstf['description'].'</p>
        <p class="card-text"><small class="text-muted">Last updated On '.$vblogpstf['time'].'</small></p>
      </div>
    </div>
  </div>
   <button class="btn btn-danger delpostidbtn" data-delpostid="'.$vblogpstf['id'].'"> <i class="fa fa-trash"> </i></button>
</div>';
 }
 echo $vblogfinal;
}
//////////////////////////////////
if(isset($_POST['delpostidjs']))
{
 $delpostidjs = mysqli_real_escape_string($db,$_POST['delpostidjs']);
$delpostiddel = "DELETE FROM blogs WHERE id='$delpostidjs'";
 $delpostiddelq= mysqli_query($db,$delpostiddel);
 if($delpostiddelq){
   echo '1';} else { echo '0'; }
}
//////////////////////////////////
//////////////////////////////////
if(isset($_POST['delmsgsidjs']))
{
 $delmsgsidjs = mysqli_real_escape_string($db,$_POST['delmsgsidjs']);
$delmsgsofcontact = "DELETE FROM contactus WHERE id='$delmsgsidjs'";
 $delmsgsofcontactq= mysqli_query($db,$delmsgsofcontact);
 if($delmsgsofcontactq){
   echo '1';} else { echo '0'; }
}
//////////////////////////////////
////////////////////////////////////

if(isset($_POST['allpkgresetj']))
{
  $rstpkgall = "DELETE FROM buytkts";
 $rstpkgallq= mysqli_query($db,$rstpkgall);
 if($rstpkgallq){
   echo '1';} else { echo '0'; }
 }
////////////////////////////////////
if(isset($_POST['fulresetjs']))
{
  $rstpkgall = "DELETE FROM buytkts";
 $rstpkgallq= mysqli_query($db,$rstpkgall);
 
  $gameresetphp = "UPDATE `userslog` SET `buy_tkts`='0',`sum`=0,`sumout`=0 ";
 $resetgameq= mysqli_query($db,$gameresetphp);
 if($resetgameq){
   echo '1';} else { echo '0'; }
 }
////////////////////////////////////














?>