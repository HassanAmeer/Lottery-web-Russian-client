<?php
include 'config.php';
session_start();
$vusrlog = $_COOKIE['coklog'];

$vlog = "SELECT * FROM `userslog` WHERE uemail = '$vusrlog'";
$vlogq =mysqli_query($db,$vlog);
$vlogf = mysqli_fetch_array($vlogq);
 $bythisref = $vlogf['refby'];
 $reflevels = $vlogf['reflevel'];
//////////////////////////////////////
$tktridfp = $_COOKIE['tktridfp'];

if (!in_array($_SERVER['REMOTE_ADDR'], array('185.71.65.92', '185.71.65.189', '149.202.17.210'))) return;

if (isset($_POST['m_operation_id']) && isset($_POST['m_sign']))
{
	$m_key = $seckey;

	$arHash = array(
		$_POST['m_operation_id'],
		$_POST['m_operation_ps'],
		$_POST['m_operation_date'],
		$_POST['m_operation_pay_date'],
		$_POST['m_shop'],
		$_POST['m_orderid'],
		$_POST['m_amount'],
		$_POST['m_curr'],
		$_POST['m_desc'],
		$_POST['m_status']
	);

	if (isset($_POST['m_params']))
	{
		$arHash[] = $_POST['m_params'];
	}

	$arHash[] = $m_key;

	$sign_hash = strtoupper(hash('sha256', implode(':', $arHash)));

	if ($_POST['m_sign'] == $sign_hash && $_POST['m_status'] == 'success')
	{
	  $paidamounts = 	$_POST['m_amount'];
	//	ob_end_clean(); exit($_POST['m_orderid'].'|success');
////////////////////////////////
$setsqlcards = "SELECT * FROM `buytkts` WHERE byusr = '$vusrlog' AND trid='$tktridfp'";
  $setsqlcardsq = mysqli_query($db,$setsqlcards);
  
 while($setcards= mysqli_fetch_assoc($setsqlcardsq))
 {
		$vcards = $setcards['sqlcard'];
		$vtktno = $setcards['tktno'];
		if($vcards == 1)
		{ $sqlc1 = "UPDATE `cardpiker1` SET `saled`=1 WHERE tktnos = '$vtktno'";
     $sqlc1q = mysqli_query($db,$sqlc1); 
   }else if($vcards == 2){
     $sqlc1 = "UPDATE `cardpiker2` SET `saled`=1 WHERE tktnos = '$vtktno'";
     $sqlc1q = mysqli_query($db,$sqlc1); 
   }else if($vcards == 3){
     $sqlc1 = "UPDATE `cardpiker3` SET `saled`=1 WHERE tktnos = '$vtktno'";
     $sqlc1q = mysqli_query($db,$sqlc1); 
   }else if($vcards == 4){
     $sqlc1 = "UPDATE `cardpiker4` SET `saled`=1 WHERE tktnos = '$vtktno'";
     $sqlc1q = mysqli_query($db,$sqlc1); 
   }else if($vcards == 5){
     $sqlc1 = "UPDATE `cardpiker5` SET `saled`=1 WHERE tktnos = '$vtktno'";
     $sqlc1q = mysqli_query($db,$sqlc1); 
   }
 }
   //////////////////////////////////
  $buytktsk="UPDATE `buytkts` SET `status`=1 WHERE byusr = '$vusrlog' AND trid='$tktridfp' ";
    $buytktskq = mysqli_query($db,$buytktsk); 
    ////////
   //////////////////////////////////
   $havsum="UPDATE `userslog` SET `sum`= sum + '$paidamounts' WHERE uemail='$vusrlog' ";
   $havsumq = mysqli_query($db,$havsum); 
    ////////
       $bythisref = $vlogf['refby'];
  if($bythisref > 0){
  if($paidamounts > 0){
 if($vlogf['reflevel'] == 0)
  { $bonus = $paidamounts/100*10;
   $setbonus = "UPDATE `userslog` SET `sumout`=sumout+'$bonus',`reflevel`=reflevel+1,`refbonus`=refbonus+'$bonus' WHERE uid='$bythisref'";
   mysqli_query($db,$setbonus);
  }elseif($vlogf['reflevel'] == 1){
   $bonus = $paidamounts/100*5;
   $setbonus = "UPDATE `userslog` SET `sumout`=sumout+'$bonus',`reflevel`=reflevel+1,`refbonus`=refbonus+'$bonus' WHERE uid='$bythisref'";
   mysqli_query($db,$setbonus);
  }elseif($vlogf['reflevel'] == 2){
     $bonus = $paidamounts/100*3;
   $setbonus = "UPDATE `userslog` SET `sumout`=sumout+'$bonus',`reflevel`=reflevel+1,`refbonus`=refbonus+'$bonus' WHERE uid='$bythisref'";
    mysqli_query($db,$setbonus);
    }
   }
  }
  /////// end add bonus
    
		if($buytktskq)
		{ header('location: home.php');	}

	}

	ob_end_clean(); exit($_POST['m_orderid'].'|error');
}
?>