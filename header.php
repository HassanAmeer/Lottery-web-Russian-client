


<? 

include '../config.php'; 

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);







?>


 
<style>
 #google_translate_element select{
 background:#f6edfd;
 color:#383ffa;
 border: none;
 font-size :1rem;
 border-radius:3px;
 }
 .goog-logo-link{
   display:none!important;
  }
 .goog-te-gadget{
 color:transparent!important;
 } 
 .goog-te-banner-frame{
 display:none !important;
 }
 
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}

/**********************/
#google_translate_element select{
   background-color:#f6edfd;
   color:#383ffa;
   border: none;
   border-radius:3px;

 }
/**********************/
 .goog-logo-link{
    display:none !important;
   }
 .goog-te-gadget{
  color:transparent!important;
  }
 .goog-te-gadget-icon{
  background:none !important;
  }
  

/**********************/
/**********************/
/**********************
#google_translate_element { height:10px !important; width: 15px !important; overflow: hidden !important; }
/**********************/
/**********************/
/**********************/
  .goog-te-banner-frame{
 display:none !important;
 }
  /**********************/
/**********************/
 #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
.goog-text-highlight { background: none !important; box-shadow: none !important;}
</style>






<script type="text/javascript">// <![CDATA[
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: "ru,en"}, 'google_translate_element');
}
// ]]></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>



<header class="header-section">
      <div class="header-top">
          <div class="container">
              <div class="row justify-content-between">
                  <div class="col-lg-6 col-md-6">
                      <div class="header-top-left d-flex">
                 <div class="" style="width:10rem; display:flex; flex-direction:row;">
                     
                        
                     <div><i class="fa fa-globe"></i></div>  <div id="google_translate_element"></div>

                 </div>
                          <div class="support-part">
                              <a href="tel:<? echo $chkq['phone1']; ?>"><i class="fa fa-headphones"></i>Support</a>
                          </div>
                          <div class="email-part">
                              <a href="mailto:<? echo $chkq['email']; ?>"><i class="fa fa-envelope"></i><span class="__cf_email__"> <? echo $chkq['email']; ?> </span></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                      <div class="header-top-right">
                          <div class="header-cart-count">
                              <i class="fa fa-shopping-cart"></i>
                              <span> Buy </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <nav class="navbar navbar-expand-xl">
            <a class="site-logo site-title" href="index.php"><img src="assets/images/logo.png" alt="site-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu-toggle"></span>
            </button>




      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav main-menu ml-auto">
          <li><a href="index.php">Home</a></li>
          <li><a href="lottery-result.php">results</a></li>
          <li class="menu_has_children"><a href="#0">lotteries</a>
            <ul class="sub-menu">
              <li><a href="all-lottery-one.php">all lotteries One</a></li>
              <li><a href="all-lottery-two.php">all lotteries Two</a></li>
            </ul>
          </li>
          <li class="menu_has_children"><a href="#0">blog</a>
            <ul class="sub-menu">
              <li><a href="blog.php">Blog</a></li>
            </ul>
          </li>
          <li class="menu_has_children"><a href="#0">pages</a>
            <ul class="sub-menu">
              <li><a href="about.php">about us</a></li>
              <li><a href="affiliate.php">affiliate</a></li>
              <li><a href="how-to-play.php">how to play</a></li>
              <li><a href="latest-winner.php">latest winner</a></li>
              <li><a href="faq.php">faq</a></li>
            </ul>
          </li>
          <li><a href="contact.php">contact us</a></li>
        </ul>
        <div class="header-join-part">
          <a href="login.php" type="button" class="cmn-btn">join us</a>
        </div>
      </div>



          </nav>
        </div>
      </div><!-- header-bottom end -->
    </header>