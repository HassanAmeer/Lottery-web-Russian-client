<?php
include 'config.php';
session_start();
$vusrlog = $_COOKIE['coklog'];

$vusrdata = "SELECT * FROM `userslog` WHERE uemail = '$vusrlog'";
$vusrdataq =mysqli_query($db,$vusrdata);
$vusrdataf = mysqli_fetch_array($vusrdataq);
$vpayeer = $vusrdataf['uacc'];
$wtofbl = $vusrdataf['sumout'];
$sban = $vusrdataf['user_ban'];
///////////////
$vfallstngs = "SELECT * FROM `ghstng` WHERE stngid = 1";
$vfallstngsq =mysqli_query($db,$vfallstngs);
$vfallstngf = mysqli_fetch_array($vfallstngsq);
$rdmbns = $vfallstngf['rdmbns'];
$stngsban = $vfallstngf['withdrawoff'];











if(isset($_POST['regphonejs']))
{
  $regemailj = mysqli_real_escape_string($db,$_POST['regphonejs']);
  $regpassj = mysqli_real_escape_string($db,$_POST['regpassj']);
  $regpayeerj = mysqli_real_escape_string($db,$_POST['regpayeerjs']);
  
  $chklog = mysqli_query($db,"SELECT uemail FROM `userslog` WHERE uemail='$regemailj'");
 $chklogv=mysqli_fetch_array($chklog);
 $chkbylog = $chklogv['uemail'];

if($chkbylog == $regemailj){
  echo 0;
}else{
  if(isset($_SESSION['refby']))
  { $refbyval = $_SESSION['refby']; }else{
    $refbyval = 0;  }
   $upasssha1 = sha1($regpassj);
   $upassmd = md5($upasssha1);
  $setlog = "INSERT INTO `userslog`(`uemail`, `upass`, uacc, `refby`) VALUES ('$regemailj','$upassmd','$regpayeerj','$refbyval')";
  
  $setlogq = mysqli_query($db,$setlog); 
  if($setlogq){ echo 1;}
  }
}

if(isset($_POST['loginemailj']))
{
  $loginemail = mysqli_real_escape_string($db,$_POST['loginemailj']);
  $loginpass = mysqli_real_escape_string($db,$_POST['loginpassj']);
  
$upasssha1 = sha1($loginpass);
$upassmd = md5($upasssha1);
  
 $chklog = mysqli_query($db,"SELECT uemail, upass FROM `userslog` WHERE uemail='$loginemail' AND upass='$upassmd'");
if(mysqli_num_rows($chklog) == 1)
  { setcookie('coklog',$loginemail,time() + 84600,'/');
 $ipset = $_SERVER['REMOTE_ADDR'];
 $ipchangeset = "UPDATE `userslog` SET `ip`='$ipset' WHERE uemail='$loginemail'";
  mysqli_query($db,$ipchangeset);
   echo 1;
  }else{
    echo 2;
  }
}

///////////////////////////////////////////
if(isset($_POST['tdyseltktsjs']))
{
$seltktsall = " SELECT COUNT(tktno) AS valbuytkts FROM `buytkts`";
$seltktsallq = mysqli_query($db,$seltktsall);
$valseltktsf = mysqli_fetch_assoc($seltktsallq);
echo $valseltktsf['valbuytkts'];
}
///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['lastnamtktsjs']))
{
$lastname = "SELECT byusr FROM `buytkts` ORDER BY bid DESC";
$lastnameq = mysqli_query($db,$lastname);
$lastnamef=mysqli_fetch_assoc($lastnameq);
echo substr($lastnamef['byusr'],0,6);
}
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////
///////////////////////////////////////////

if(isset($_POST['vpayeaccj']))
{ echo $vusrdataf['uacc']; }
//////////////
if(isset($_POST['setemailjs']))
{
  $setmailj = mysqli_real_escape_string($db,$_POST['setemailjs']);
  $setpassj = mysqli_real_escape_string($db,$_POST['setpassjs']);
  $setpayeerj = mysqli_real_escape_string($db,$_POST['setpayeerjs']);

  $upasssha12 = sha1($setpassj);
   $upassmd2 = md5($upasssha12);

$chklog = mysqli_query($db,"SELECT uemail FROM `userslog`");
 $chklogv=mysqli_fetch_array($chklog);
 $chkbylog = $chklogv['uemail'];
if($chkbylog == $setmailj){
  echo 2;
}else{
 $setulog = "UPDATE `userslog` SET uemail='$setmailj', upass='$upassmd2', uacc='$setpayeerj' WHERE uemail='$vusrlog'";
  
 $setulogq = mysqli_query($db,$setulog) or die('not sql'.mysqli_errno($db)) ;
 if($setulogq){
   echo 1;
  setcookie('coklog',$setmailj,time() + 84600,'/'); } else { echo 0; } }
}
///////////////////////////////////////////
//////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
if(isset($_POST['tktsnocartjs']))
{
   $tktsnocartjs = $_POST['tktsnocartjs'];
   $rdmnoftktset =$_POST['vrdminblcknojs'];
   $sqlcard = $_POST['sqlcard'];
  if(isset($_SESSION['setsestktsno']))
  {
 $dupitemin = array_column($_SESSION['setsestktsno'],'sestktno');
    if(in_array($tktsnocartjs, $dupitemin)){
      echo 2;
    }else{
      
   $countcart = count($_SESSION['setsestktsno']);
   $_SESSION['setsestktsno'][$countcart] = array('sestktnordm'=>$rdmnoftktset,'sestktno'=>$tktsnocartjs,'sesqlcard'=>$sqlcard);
   echo 1;
      
    }
  }
  else
  {
   $_SESSION['setsestktsno'][0] = array('sestktnordm'=>$rdmnoftktset,'sestktno'=>$tktsnocartjs,'sesqlcard'=>$sqlcard);
   echo 1;
  }
}
// end of Store Cart Sessions

///////////////////////////////////////////

if(isset($_POST['delalltktsnoscardjs']))
{ unset($_SESSION['setsestktsno']); }

 //unset for sc cart item
if(isset($_POST['cartideljs']))
{ $getiditemsc = $_POST['cartideljs'];
  if(isset($_SESSION['setsestktsno']))
  {
    foreach($_SESSION['setsestktsno'] as $key => $delscitem)
    {
    if($delscitem['sestktno'] == $getiditemsc){
      unset($_SESSION['setsestktsno'][$key]); }
    }
  }
} 
// end of del item from cart Worked



  
if(isset($_POST['vifhavtktscartjs'])){
 if(isset($_SESSION['setsestktsno'])){
  foreach($_SESSION['setsestktsno'] as $key => $cartvalue)
  { 
 $Vtohtmlcat.='<tr>
 <td>'.$cartvalue['sestktnordm'].'<i class="fa fa-ticket" style="text-shadow:1px 1px 2px black; color:skyblue; "> </i></td>
   <td> <ul class="number-list">
   <li class="active">'. $cartvalue['sestktno'].'</li> </ul></td>
                   
 <td><i class="fa fa-history text-warning"></i> <b class="vinblcknotbl"> </b></td>
 <td> 1000 <i class="fa fa-ruble text-primary"> </i></td>
 <td>'.$vfallstngf['discount'].' %</td>
   <td><button class="btn btn-danger fa fa-trash delcartidbtn" data-cartidel="'.$cartvalue['sestktno'] .'"></button></td>
  </tr>';
   } 
   echo $Vtohtmlcat;
  }else{
   echo '<tr style="opacity:0.3">
 <td><i class="fa fa-ticket" style="text-shadow:1px 1px 2px black; color:skyblue; "> </i> Demo </td>
                      
     <td> <ul class="number-list">
    <li class="active">1</li> </ul></td>
                   
    <td><i class="fa fa-history text-warning"></i> <b class="vinblcknotbl"> </b></td>
    <td> 1000 <i class="fa fa-ruble text-primary"> </i></td>
   <td>'. $vfallstngf['discount'].' %</td>
   <td><i class="fa fa-trash"></i></td>
       </tr>';
  } 
}
////////////////////////////////////////
 if(isset($_POST['vhavtktscartsumjs']))
{ if(isset($_SESSION['setsestktsno']))
{ $setpricebydisc = count($_SESSION['setsestktsno']); 
  $setpriceby = $setpricebydisc * 1000;
  $setpricebycut = $setpriceby / 100 * $vfallstngf['discount'] ;
  $okdisicountvhtml = $setpriceby - $setpricebycut;
  $_SESSION['ttlrblses'] = $okdisicountvhtml;
  echo $okdisicountvhtml;
  
}else{
  echo 'Empty Cart';
}
}
////////////////////////////////////////
if(isset($_POST['vwinbarsjs']))
{ if(isset($_SESSION['ttlrblses'])){
   $ttlrblsesv = $_SESSION['ttlrblses'];
  if($ttlrblsesv < 1001){
    $mtrdmbar = mt_rand(50 , 70);
  }else if($ttlrblsesv > 1001 && $ttlrblsesv < 2001){
    $mtrdmbar = mt_rand(60 , 80);
  }else{
    $mtrdmbar = mt_rand(80 , 100);
  }
echo '<div class="progressbar" data-perc="'.$mtrdmbar.'%">
   <div class="bar"></div>
     <span class="label">'.$mtrdmbar.' %</span>
 </div>';
 
 
}else{
echo '<div class="progressbar" data-perc="60%">
   <div class="bar"></div>
     <span class="label">60 %</span>
 </div>';
 }
?>
<script>

   $(".progressbar").each(function(){
    $(this).find(".bar").animate({
      "width": $(this).attr("data-perc")
    },4000);
    $(this).find(".label").animate({
      "left": $(this).attr("data-perc")
    },4000);
  }); 
</script>
<? }
?>



<?
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
////////////////////////////////////////
if(isset($_POST['cnfrmtktsjs']))
{
  if(isset($_SESSION['setsestktsno']))
  { 
   $tridfpay = time();
   foreach ($_SESSION['setsestktsno'] as $tktnosql){
     $sestktnoto = $tktnosql['sestktno'];
 $sestktnordmto = $tktnosql['sestktnordm'];
     $sesqlcardto = $tktnosql['sesqlcard'];
     
    $setfbuypay="INSERT INTO `buytkts`(`byusr`, `wallet`, `trid`, `status`, `tktno`, `rdmcard`, `sqlcard`, `statusend`) VALUES ('$vusrlog','$vpayeer','$tridfpay',0,'$sestktnoto',$sestktnordmto,$sesqlcardto,0)";
    $setfbuypayq = mysqli_query($db,$setfbuypay); 
    if($setfbuypayq){ echo 1;} 
   ///////////////////
   //////////////
  }
   setcookie('tktridfp',$tridfpay,time() + 3600,'/');
  }else{
    echo 0;
  }
}
///////////////////////////////////////////
if(isset($_POST['vsesplyvaljs']))
{
  $vsesplyvaljs = mysqli_real_escape_string($db,$_POST['vsesplyvaljs']);
  $vblocknoforpostj = mysqli_real_escape_string($db,$_POST['vblocknoforpostj']);
  
   $tktplayd="UPDATE `buytkts` SET `statusend`=1 WHERE byusr = '$vusrlog' AND tktno='$vsesplyvaljs' AND rdmcard = '$vblocknoforpostj' ";
 $tktplaydq = mysqli_query($db,$tktplayd); 
	 //	if($tktplaydq)
	//	{ echo 1;	}  
}
///////////////////////////////////////////
if(isset($_POST['vsesplyvalwinjs']))
{
  $vsesplyvalwinjs = mysqli_real_escape_string($db,$_POST['vsesplyvalwinjs']);
  $bonuswonj = mysqli_real_escape_string($db,$_POST['bonuswonj']);
  
   $setwinbalfv = "INSERT INTO `wontabl`(`byusr`, `usrpayeer`, `tickets`, `bonus`) VALUES ('$vusrlog','$vpayeer','$vsesplyvalwinjs','$bonuswonj')";
   $setwinbalfvq = mysqli_query($db,$setwinbalfv); 
	
	 //	if($setwinbalfvq)
	//	{ echo 1;	}
}

//////// 
///////////////////////////////////////////
if(isset($_POST['remningtktsj']))
{
$onlyhvtkts = " SELECT COUNT(tktno) AS vtktsh FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0";
$onlyhvtktsq=mysqli_query($db,$onlyhvtkts);
$vtktshv=mysqli_fetch_assoc($onlyhvtktsq);
 echo $chkhvtktslst = $vtktshv['vtktsh'];
}

//////// 
if(isset($_POST['vgmailjs']))
{ echo $vusrlog; }
////////
//////// 
if(isset($_POST['vpayeerj']))
{ echo $vpayeer; }
////////
////////////
if(isset($_POST['vbanfjs']))
{ if($sban == 0)
  { echo '<b class="text-success"> Not Ban </b>';
  }else{ echo '<b class="text-danger"> Ban </b>';
  }
}
////////////






























































































if(isset($_POST['vfplaybhvbalsjs']))
{
  $hvbuyonlytbl1 = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ORDER BY bid DESC";
  $hvbuyonlytblq1 = mysqli_query($db,$hvbuyonlytbl1);
  
 while($vbuttbls1= mysqli_fetch_assoc($hvbuyonlytblq1)){
 $vbuttblsto1 .='
<h3 class="content-center" style=" background-image:radial-gradient( circle closest-side,rgba(255,255,28,0.887),rgb(223,144,0));border-radius:50%;box-shadow:1px 0px 3px black; min-width:2.3em;min-height:2.3em; width:2.3em;height:2.3em; text-align:center;"> <i style="font-size:1.5em;color:brown;">'.$vbuttbls1['tktno'].' </i></h3>';
 }
 echo $vbuttblsto1;
}
///////////////////////////////////////////

///////////////////////////////////////////
///////////////////////////////////////////
if(isset($_POST['vtktsplayupjs']))
{
$onlyhvtkts = " SELECT COUNT(tktno) AS vtktsh FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0";
$onlyhvtktsq = mysqli_query($db,$onlyhvtkts);
$vtktshv = mysqli_fetch_assoc($onlyhvtktsq);
 echo $vtktshv['vtktsh'];
}
///////////////////////////////////////////
if(isset($_POST['vhistoryjs']))
{
$alltkshv = " SELECT COUNT(tktno) AS totaltktshv FROM `buytkts` WHERE byusr = '$vusrlog'";
$alltkshvq = mysqli_query($db,$alltkshv);
$vtotltkts = mysqli_fetch_assoc($alltkshvq);

$totlwonstkts = " SELECT COUNT(winlos) AS totlwonstkts FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=1 AND winlos=1";
$totlwonstktsq = mysqli_query($db,$totlwonstkts);
$valwonstktf = mysqli_fetch_assoc($totlwonstktsq);

$onlyhvtkts = " SELECT COUNT(tktno) AS vtktsh FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0";
$onlyhvtktsq = mysqli_query($db,$onlyhvtkts);
$vtktshv = mysqli_fetch_assoc($onlyhvtktsq);




$cnfrmtkts .=' <li> <p class="text-gray-800 dark:text-gray-200"> Total Buy Tickets 
          <b class="text-lime-600 drak:text-lime-100">'. $vtotltkts['totaltktshv'] .'</b><b class="text-yellow-700 dark:text-yellow-400 fa fa-ticket"> </b> </p></li>

      <li> <p class="text-gray-800 dark:text-gray-200"> Total Won Tickets 
            <b class="text-lime-600 drak:text-lime-100"> '. $valwonstktf['totlwonstkts'].' </b><b class="text-yellow-700 dark:text-yellow-400 fa fa-ticket"> </b> </p></li>

        <li> <p class="text-gray-800 dark:text-gray-200"> Total have Tickets 
              <b class="text-lime-600 drak:text-lime-100">'.$vtktshv['vtktsh'] .'</b><b class="text-yellow-700 dark:text-yellow-400 fa fa-ticket"> </b> </p></li>';

echo $cnfrmtkts;
}
/////////////////////////////////////////
if(isset($_POST['vhstrybuyoutjs']))
{
  $hvbuyonlytbl = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ORDER BY bid DESC";
  $hvbuyonlytblq = mysqli_query($db,$hvbuyonlytbl);
  
 while($vbuttbls= mysqli_fetch_assoc($hvbuyonlytblq)){
 $vbuttblsto .='
 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
  <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
  '.$vbuttbls['byusr'].'
  </th>
  <td class="px-6 py-4 text-blue-400">
  '.$vbuttbls['wallet'].'
  </td>
  <td class="px-6 py-4">
<h3 class="content-center" style=" background-image:radial-gradient( circle closest-side,rgba(255,255,28,0.887),rgb(223,144,0));border-radius:50%;box-shadow:1px 0px 3px black; min-width:1.5em;min-height:1.5em; width:1.5em;height:1.5em; text-align:center;"> <i style="font-size:1em;color:brown;">'.$vbuttbls['tktno'].' </i></h3>

  </td>
  <td class="px-6 py-4">
  </td>
  <td class="px-6 py-4 text-right">
  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> '.$vbuttbls['date'].'</a>
  </td>
  </tr>';
 }
 echo $vbuttblsto;
}
///////////////////////////////////////////
if(isset($_POST['whenstopjs']))
{
  if(!isset($_COOKIE['playedtkts']))
  {
 $getrdm = mt_rand(1500,$rdmbns);
  
  $hvbuyonlytbl1 = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ORDER BY bid DESC";
  $hvbuyonlytblq1 = mysqli_query($db,$hvbuyonlytbl1);


$onlyhvtkts = " SELECT COUNT(tktno) AS vtktsh FROM `buytkts` WHERE byusr = '$vusrlog' AND status=1 AND statusend=0";
$onlyhvtktsq = mysqli_query($db,$onlyhvtkts);
$vtktshv = mysqli_fetch_assoc($onlyhvtktsq);
 $chkhvtktslst = $vtktshv['vtktsh'];
if($chkhvtktslst < 3)
{
 while($vbuttbls1= mysqli_fetch_assoc($hvbuyonlytblq1)){
 $vbuttblsto1 .='
<h3 class="content-center" style=" background-image:radial-gradient( circle closest-side,rgba(255,255,28,0.887),rgb(223,0,0));border-radius:50%;box-shadow:1px 0px 3px black; min-width:2.3em;min-height:2.3em; width:2.3em;height:2.3em; text-align:center;"> <i style="font-size:1.5em;color:brown;">'.$vbuttbls1['tktno'].' </i></h3>';
 }
 echo $vbuttblsto1.'<br></br><center> <h4 style="color:#ff8197;"> Not Matched Try Again </h4></center>';
 
  $setwinlos="UPDATE `buytkts` SET `statusend`=1,`winlos`=2 WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ";
    $setwinlosq = mysqli_query($db,$setwinlos); 
    
}else{
  echo '<br><center><b style="color:#00ae00;"> You have Won </b><b class="text-teal-700 dark:text-teal-200">'.$getrdm.'</b> <i class="fa fa-ruble text-cyan-600 dark:text-cyan-400"> </i><br><b class="text-teal-700 dark:text-teal-200"> Can See Won  Hitory </b></center><br>';
 
   $setwinlos="UPDATE `buytkts` SET `statusend`=1,`winlos`=1 WHERE byusr = '$vusrlog' AND status=1 AND statusend=0 ";
    $setwinlosq = mysqli_query($db,$setwinlos); 
    
  $setwinbalto = "UPDATE `userslog` SET  sumout=sumout + '$getrdm' WHERE uemail='$vusrlog'";
   $setwinbaltoq = mysqli_query($db,$setwinbalto);
   
  $setwinbalfv = "INSERT INTO `wontabl`(`byusr`, `usrpayeer`, `tickets`, `bonus`) VALUES ('$vusrlog','$vpayeer','$chkhvtktslst','$getrdm')";
   $setwinbalfvq = mysqli_query($db,$setwinbalfv);
} 
//////////////////
  setcookie('playedtkts','kuchbhi',time() + 84600,'/');
  }else{
    echo 4;
  }
}
//////////////////////////////////////
if(isset($_POST['valsumoutstbljs']))
{
$vsumoutbl = "SELECT * FROM `sumout` WHERE byusr='$vusrlog' ORDER BY outid DESC";
  $vsumoutblq = mysqli_query($db,$vsumoutbl);
  
 while($vsumoutblf = mysqli_fetch_assoc($vsumoutblq)){
 $vsumoutblv .='<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"> <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
          '.$vsumoutblf['byusr'].'
          </th>
          <td class="px-6 py-4 text-blue-400">
           '.$vsumoutblf['usrpayeer'].'
          </td>
          <td class="px-6 py-4">
     
          </td>
        <td class="px-6 py-4">
        '.$vsumoutblf['sumouts'].'  <i class="fa fa-ruble text-cyan-600 dark:text-cyan-400"> </i>
          </td>
          <td class="px-6 py-4 text-right">
          <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> '.$vsumoutblf['Date'].' </a>
          </td>
          </tr>'; }
       echo $vsumoutblv;
}

///////////////////////////////////////
///////////////////////////////////////
///////////////////////////////////////
///////////////////////////////////////


/* //////////////////////////////////////////
 //////////////////////////////////////////
 //////////////////////////////////////////
 ////////////////////////////////////////// */
 
 if(isset($_POST['clasumoutvaljs']))
 {
   $pwbalnc = mysqli_real_escape_string($db,$_POST['clasumoutvaljs']);
   
   if($pwbalnc > $wtofbl)
   {
     echo 0;
   } else{
    if($sban == 1 || $stngsban == 1){
     echo 2;
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
		'to' => $vpayeer,
		'comment' => 'Tickets',
	));
	// for updates
	if (empty($arTransfer['errors']))
	{
$pwbalslct = "UPDATE `userslog` SET `totalsumout`=totalsumout + '$pwbalnc', sumout=sumout - '$pwbalnc' WHERE uemail='$vusrlog'";
   $pwbalslctq = mysqli_query($db,$pwbalslct);
	  if($pwbalslctq){ echo 1; }
	$setwptbl = "INSERT INTO `sumout`(`byusr`, `usrpayeer`, `sumouts`) VALUES ('$vusrlog','$vpayeer','$pwbalnc')";
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
}
 
/* //////////////////////////////////////////
 //////////////////////////////////////////
 //////////////////////////////////////////
 ////////////////////////////////////////// */
 if(isset($_POST['vwontblsdivjs']))
 {
$vwontktstbl="SELECT * FROM `wontabl` WHERE byusr='$vusrlog' ORDER BY wonid DESC ";
  $vwontktstblq = mysqli_query($db,$vwontktstbl);
  
 while($vwontktstblf = mysqli_fetch_assoc($vwontktstblq)){
 $vwontktstblv .='<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
  <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
  '.$vwontktstblf['byusr'].'
  </th>
  <td class="px-6 py-4 text-blue-400">
  '.$vwontktstblf['usrpayeer'].'
  </td>
  <td class="px-6 py-4">
   '.$vwontktstblf['tickets'].'
  <i class="fa fa-ticket text-fuchsia-600 dark:text-cyan-400"> </i>
  </td>
  <td class="px-6 py-4">
   '.$vwontktstblf['bonus'].'  <i class="fa fa-ruble text-cyan-600 dark:text-cyan-400"> </i>
  </td>
  <td class="px-6 py-4 text-right">
  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> '.$vwontktstblf['Date'].'  </a>
  </td>
  </tr>';
  }
 echo $vwontktstblv;
 }
////////////
if(isset($_POST['cokorderidjs']))
{ echo $_COOKIE['tktridfp']; }
////////////





?>





