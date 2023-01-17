

<?

include '../config.php'; 
if(isset($_COOKIE['coklog']))
{ header('location:home.php'); }

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);

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
</head>
<body>

 
  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

        <!-- template-version start -->
        <div class="template-version">
          <button type="button" style="border-radius:20px 0 0 20px;"><i class="fa fa-adjust">  </i></button>
          <div class="color-version-area">
            <a href="login.php" class="dark-vesion">Dark</a>
            <a href="../login.php" class="light-vesion">Light</a>
          </div>
        </div>


  <div class="main-dark-version">
    <!--  header-section start  -->
<?php include 'header.php'; ?>
    <!--  header-section end  -->















<div class="bluepopup" style="display:none;">
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 200px; z-index:700; right:0; border-right:14px solid rgb(0, 102, 255);">
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
<div style="display:flex; flex-direction:row; border-radius:15px 0 0 15px;box-shadow:1px 1px 10px black; position:fixed; bottom: 150px; z-index:700; right:0; border-right:14px solid rgb(230, 3, 48);">
  <div style="display:flex; flex-direction:row;">
   <img src="assets/images/Coffee-red.gif" style="width:2.5em;">
  </div>
  <div style="color:rgb(236, 17, 46); margin-top:0.5em; margin-left:5px; margin-right:5px;">
   <b class="popinerred"> Warning </b>
  </div>
  <button class="popclosebtnred" style="border: none; outline-offset:none;"> X </button>
 </div>
</div>



























<style>
  #formsetgrop{
width:60%;margin-left: 20%;margin-right: 20%; margin-top: 8%; margin-bottom: 8%; box-shadow:1px 0px 4px rgb(36, 153, 231);
  }
  @media all and (max-width:500px)
  {
#formsetgrop{
width:96%;margin-left: 2%;margin-right: 2%; }
  }
  #cpatuarefreshv{
    background-image:url('assets/images/cap.jpg') ;
    font-size: 1rem;
    color:blue;
    text-align:center;
  }
</style>








<div id="formsetgrop">

         
         
    <div class="login-registration-area">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="false">Registration</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
          <div class="login-form cmn-frm">
              <div class="frm-group">
                <label>Username or Email Address</label>
                <input type="email" name="login_email" id="loginemail" placeholder="Username or Email Address">
                <i class="fa fa-user"></i>
              </div>
              <div class="frm-group">
                <label>Password</label>
                <input type="password" name="login_pass" id="loginpass" placeholder="Enter Password">
                <i class="fa fa-lock"></i>
              </div>
              <div class="frm-group">
                <input type="submit" name="registration_submit2" id="signbtn" value="login">
              </div>
              <div class="frm-group">
                <div class="checkbox-area">
                  <input type="checkbox" id="login_remember_pass">
                  <label for="login_remember_pass">Remember Password</label>
                </div>
                <div class="forgot-pass-area">
                    <p>You don’t have an account?<a href="#0">Register Now</a></p>
                </div>
              </div>
        
            </div>
          </div>
          <div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="registration-tab">
            <div class="registration-form cmn-frm">
              <div class="frm-group">
                <label>Username or Email Address</label>
                <input type="email" name="registration_email" id="regemail" placeholder="Username or Email Address">
                <i class="fa fa-user"></i>
              </div>
              <div class="frm-group">
                <label>Password</label>
                <input type="password" name="registration_pass" id="regpass" placeholder="Enter Password">
                <i class="fa fa-lock"></i>
              </div>
              <div class="frm-group">
                <label> Payeer </label>
                <input type="password" name="registration_re_pass" id="regpayeer" placeholder="Enter Payeer">
              <i class="fa fa-ruble"></i>
              </div>
              <div class="frm-group">
                <label>Confirm captua </label>
           <input style="text-align:center;" type="text" name="registration_re_pass" id="captuaval" placeholder="Enter Captua">
              <i id="cpatuarefreshv" onclick="cpatuarefreshf()" style="min-width:7rem; font-size:1.3rem"> </i>
              </div>
              <div class="frm-group">
                <input type="submit" name="registration_submit" id="signupbtn" value="Registration">
              </div>
              <div class="frm-group">
                <div class="checkbox-area">
                  <input type="checkbox" id="registration_remember_pass">
                  <label for="registration_remember_pass">I Agree with the Terms of Use</label>
                </div>
                <div class="forgot-pass-area">
                    <p>Already have an account?<a href="#0">Login</a></p>
                </div>
              </div>
    
            </div>
           
          </div>
        </div>
      </div>

</div>






























          <?php include 'footer.php' ?>



      
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

  </script>
  <script>
      jQuery(document).ready(function() {
        jQuery('#vmap').vectorMap({
          map: 'world_en',
          color: '#434574',
          backgroundColor: '#f7fcff',
          hoverOpacity: 0.8,
          selectedColor: '#eaedef',
          scaleColors: ['#434574', '#434574'],
          normalizeFunction: 'polynomial'
        });
      });
    </script>  
   <script>
///////////////////////////////
/////////////single ///////////////
 $(document).on('click','#signbtn',function(){
   var loginemail = $('#loginemail').val();
   var loginpass = $('#loginpass').val();
   if(loginemail == "" || loginpass == "")
   { 
    $('.redpopup').fadeIn();
     $('.popinerred').html('All fields are required');
   }else{
      $.post(
      "jaxo1.php",
      {loginemailj:loginemail , loginpassj:loginpass},
       function(loginfchk){
       if(loginfchk == 1){ 
     window.location.href = 'home.php';
     }else if(loginfchk == 2){
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Wrong Account Data');
      }  }); // end post
   }
  });
///////////////////////////////
///////////////////////////////
///////////////////////////////
/////////////// ///////////////
 $(document).on('click','#signupbtn',function(){
   var regphone = $('#regemail').val();
   var regpass = $('#regpass').val();
   var regpayeer = $('#regpayeer').val();
  // var regreff = $('#regreff').val();
   var captuaval = $('#captuaval').val();
   
  if(regphone == "" || regpass == "")
   {
     $('.redpopup').fadeIn();
     $('.popinerred').html('× All feilds are required');
   }else if(captuaval == captchav){
      $.post(
      "jaxo1.php",
      {regphonejs:regphone,regpassj:regpass,regpayeerjs:regpayeer},
   function(chkregf){
   if(chkregf == 1){
       $('.bluepopup').fadeIn();
       $('.popinerblue').html(' Account Created');
     }else if(chkregf == 0){
      $('.redpopup').fadeIn();
     $('.popinerred').html(' Already Have an Account');
      }  }); // end post 
    }else{
     $('.redpopup').fadeIn();
     $('.popinerred').html('× Invalid Captua');
    }
  });
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

////////////////////////

////////////////////////
function cpatuarefreshf(){
    chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    captchav = chars[Math.floor(Math.random() * chars.length )];
    for(var i=0; i<3; i++){
    captchav = captchav + chars[Math.floor(Math.random() * chars.length )];
    }
    $('#cpatuarefreshv').html(captchav);
}         
//////////////

//////////////

window.onLoad = cpatuarefreshf();
    </script>
    
    
    
</body>
</html>