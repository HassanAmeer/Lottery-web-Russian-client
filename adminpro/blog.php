<?
/////////''''  Start Upload scripts from admin
include '../config.php';
session_start();
 error_reporting(0);
if(!isset($_SESSION['adminses']))
{ header('location:../index.php');}

if(isset($_POST['Uploadbtn1']) )
{
$imgup = $_FILES['uscriptimg']['name'];
$imguptmp = $_FILES['uscriptimg']['tmp_name'];

 $bythis = mysqli_real_escape_string($db,$_POST['bythis']);
 $utitle1 = mysqli_real_escape_string($db,$_POST['titleup1']);
 $udesc1 = mysqli_real_escape_string($db,$_POST['descup1']);

    // check for img or not Other Files

// if img is not empty check others validity to update

  
 $mbcheck1 = $_FILES['uscriptimg']['size']/(1024*1024);
  
  
    if($mbcheck1 > 10)
  { echo  '<div class="alert alert-danger" role="alert">image is greater then 10 MB</div>'; exit; }
  
  // to check extension
   $srcimg = strtolower(pathinfo($imgup, PATHINFO_EXTENSION));
	// Using strtolower to overcome case sensitive

$ext = array('gif','jpg','jpeg','png','svg','webp','');
	if (in_array($srcimg, $ext))
{
    $folderimg = "../assets/images/blog/".$imgup;
   move_uploaded_file($imguptmp, $folderimg);
   
    // To insert data uploaded
    $uploadto = "INSERT INTO `blogs` (bythis, img, title, description) VALUES ('$bythis','$imgup','$utitle1','$udesc1')";
    
 $otherqry = mysqli_query($db,$uploadto) or die('not sql'.mysqli_error($db)) ;
     if($otherqry)
     { echo '<div class="alert alert-success" role="alert"> upload Successfully !</div>';
     }else{ echo '<div class="alert alert-danger" role="alert"> upload Not ! !</div>';}
 // end of inserting other data 
   } // end else
  else{ echo '<div class="alert alert-danger" role="alert"> This is not Images in jpg! jpeg! png! gif! svg! </div>';  }
   // end of file  extension with all other data to uploads
}

/////// End of Upload Part

?>









<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>



<style>
  #bgimages{
    background-image:url('../assets/images/inner-page-bg.jpg');
    background-size:cover;
    background-repeat:none;
    width:100%;
    height: auto;
  }
  .formbg{
    width:80%; margin-left:10%;
  }
  @media all and (max-width:500px)
  {  .formbg{
   width:98%; margin-left:2%; }
  }
  @media all and (min-width:2200px)
  {  .formbg{
   width:60%; margin-left:20%; }
  }
</style>

  <!-- @@@@@@@ p2 @@@@@@ Uploaded div here down-->

  <div id="bgimages"><center>
      <br>
     <h1 class="b text-info"> Post For Blog </h1>
     </center>
    <hr class="b " style="background-color:gold; height:6px">

<nav aria-label="breadcrumb" style="margin-left:2rem;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="endash.php"> Dashboard </a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog Posts Uplaods </li>
  </ol>
</nav>

<img src="../assets/images/about-image.jpg" style="width:60%;margin-left:20%; opacity:0.6; box-shadow:1px 1px 20px navy;">
<br>

  </div>  

<div class="formbg">
     <center>
     <h4 class="bg-secondry b text-danger">Images should be less then 10 MB</h4>
     </center>
     
<form method="post" id="formupload" enctype="multipart/form-data">

<br>
  <h2 class="b text-warning">1. </h2>
  <h3 class=" b text-success"> Choose Post Images / required </h3>
  <input name="uscriptimg" class="form-control form-control-lg b bg-danger text-warning" id="thumbimg1" type="file" required="" accept="images/*"  style="width:100%;"/>
  
  <br>
<h2 class="b text-warning">2. </h2>
<div class="input-group" style="width:100%;">
  <span class="input-group-text"> Post Uploaded By </span>
  <input type="text" name="bythis" aria-label="First name" class="form-control">
</div>

  <br>
<h2 class="b text-warning">3. </h2>
<div class="input-group" style="width:100%;">
  <span class="input-group-text"> Title Of Post </span>
  <input type="text" name="titleup1" aria-label="First name" class="form-control">
</div>

<br>
<h2 class="b text-warning">4. </h2>
<div class="input-group" style="width:100%; height:10rem;">
  <span class="input-group-text">  Description </span>
  <textarea class="form-control" name="descup1" aria-label="With textarea" s></textarea>
</div>

<br>
<br>
<button name="Uploadbtn1" class="btn btn-primary" type="submit"> Upload Post </button>



</form>
</div>

  <!--  end up upload div -->










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

























