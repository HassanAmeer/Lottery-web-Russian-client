
<?

include '../config.php'; 

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
</head>
<body>


  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

        <!-- template-version start -->
        <div class="template-version">
          <button type="button" style="border-radius:20px 0 0 20px;"><i class="fa fa-adjust">  </i></button>
          <div class="color-version-area">
            <a href="blog.php" class="dark-vesion">Dark</a>
            <a href="../blog.php" class="light-vesion">Light</a>
          </div>
        </div>


  <div class="main-dark-version">
    <!--  header-section start  -->
    <?php include 'header.php' ?>
    <!--  header-section end  -->


    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="assets/images/01.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-page-banner-area">
              <h1 class="page-title">Blog 01</h1>
              <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="#0">Blog</a></li>
                  <li class="breadcrumb-item active">Blog 01</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- blog-grid-section start -->
    <section class="blog-section section-padding">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-8">
            <div class="row m-bottom-not-30">
<?php
   $limit = 3;
   if(isset($_GET['page'])){
       $page = $_GET['page'];
   }else{
       $page = 1;
   }
  $offset = ($page - 1) * $limit;
///////
    $rowscript = "SELECT COUNT(*) from blogs";
    $rowqry = mysqli_query($db, $rowscript);
    $total_rows = mysqli_fetch_array($rowqry)[0];
    $total_page = ceil($total_rows / $limit);

  //to show with while
   $vscall = "SELECT * FROM blogs ORDER BY id DESC LIMIT $offset, $limit";
   $vallscp = mysqli_query($db, $vscall);
    
 while($vsfetch = mysqli_fetch_array($vallscp))
 {
?>
   <div class="col-lg-12">
    <div class="post-item m-bottom-30">
      <div class="thumb">
        <img src="../assets/images/blog/<? echo $vsfetch['img']; ?>" alt="image">
      </div>
      <div class="content">
    <h3 class="post-title"><a href="#0"><? echo $vsfetch['title']; ?></a></h3>
        <ul class="post-meta">
          <li><a href="#0"><span>BY</span><? echo $vsfetch['bythis']; ?></a></li>
          <li><a href="#0"><i class="fa fa-calendar"></i><? echo substr($vsfetch['time'],0,11); ?></a></li>
          <li><a href="#0"><i class="fa fa-clock-o"></i><? echo substr($vsfetch['time'],11,17); ?></a></li>
        </ul>
        <p><? echo $vsfetch['description']; ?></p>
        <a href="#0" class="blog-btn">read more</a>
      </div>
    </div>
  </div><!-- post-item end -->
<? } ?>      
 </div>
           
           
           
            
          <div class="row">
            <div class="col-12">
              <nav class="d-pagination" aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                  <li class="page-item previous"><a href="?page=1"><i class="fa fa-chevron-left"></i> First </a></li>
                 
   <?php 
                for($i = 1; $i <= $total_page; $i++){
                    if($page == $i){
                          echo "<li class='page-item active'><a href='?page=$i'>".$i."</a></li>";
                    }else{
                         echo "<li class='page-item'><a href='?page=$i'>".$i."</a></li>";
                    }
                }
            ?>
                 
                 
                  <li class="page-item next"><a href="?page=<?php echo $total_page;?>"> Last <i class="fa fa-chevron-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
          
          
          
          
          
          
          </div>
          <div class="col-lg-3">
            <div class="sidebar">
              <div class="widget widget_subscribe">
                <h5 class="widget-sub-title">Subscriber</h5>
                <h3 class="widget-title">For NewsLetter</h3>
                <form class="subscribe-form">
                  <input type="email" name="subs_email" id="subs_email" placeholder="Email address">
                  <input type="submit" value="subscribe">
                </form>
              </div><!-- widget end -->
              <div class="widget widget_categories">
                <h3 class="widget-title">categories</h3>
                <ul>
                  <li><a href="#0">All<span>(99)</span></a></li>
                  <li><a href="#0">Jackpot<span>(77)</span></a></li>
                  <li><a href="#0">Winners<span>(49)</span></a></li>
                  <li><a href="#0">Powerball<span>(70)</span></a></li>
                  <li><a href="#0">Mega Millions<span>(89)</span></a></li>
                  <li><a href="#0">Inspiration<span>(93)</span></a></li>
                  <li><a href="#0">Bonus<span>(38)</span></a></li>
                </ul>
              </div><!-- widget end -->
              <div class="widget widget_latest_post">
                <h3 class="widget-title">latest posts</h3>
                <ul class="small-post-list">
                  <li class="small-post">
                    <div class="small-post-thumb">
                      <img src="assets/images/blog/w1.jpg" alt="image">
                    </div>
                    <div class="small-post-content">
                      <h6 class="post-title"><a href="#0">First PowerBall Plus winner of...</a></h6>
                      <ul class="post-meta">
                        <li><a href="#0">11 June 2022</a></li>
                      </ul>
                    </div>
                  </li><!-- small-post end -->
                  <li class="small-post">
                    <div class="small-post-thumb">
                      <img src="assets/images/blog/w2.jpg" alt="image">
                    </div>
                    <div class="small-post-content">
                      <h6 class="post-title"><a href="#0">First PowerBall Plus winner of...</a></h6>
                      <ul class="post-meta">
                        <li><a href="#0">11 June 2022</a></li>
                      </ul>
                    </div>
                  </li><!-- small-post end -->
                  <li class="small-post">
                    <div class="small-post-thumb">
                      <img src="assets/images/blog/w3.jpg" alt="image">
                    </div>
                    <div class="small-post-content">
                      <h6 class="post-title"><a href="#0">First PowerBall Plus winner of...</a></h6>
                      <ul class="post-meta">
                        <li><a href="#0">11 June 2022</a></li>
                      </ul>
                    </div>
                  </li><!-- small-post end -->
                  <li class="small-post">
                    <div class="small-post-thumb">
                      <img src="assets/images/blog/w4.jpg" alt="image">
                    </div>
                    <div class="small-post-content">
                      <h6 class="post-title"><a href="#0">First PowerBall Plus winner of...</a></h6>
                      <ul class="post-meta">
                        <li><a href="#0">11 June 2022</a></li>
                      </ul>
                    </div>
                  </li><!-- small-post end -->
                </ul>
              </div><!-- widget end -->
              <div class="widget widget_archives">
                <h3 class="widget-title">Archives</h3>
                <ul>
                  <li><a href="#0">23 November 2022<span>(99)</span></a></li>
                  <li><a href="#0">07 January 2022<span>(77)</span></a></li>
                  <li><a href="#0">20 October 2022<span>(49)</span></a></li>
                  <li><a href="#0">13 May 2022<span>(70)</span></a></li>
                  <li><a href="#0">07 January 2022<span>(89)</span></a></li>
                  <li><a href="#0">23 November 2022<span>(93)</span></a></li>
                  <li><a href="#0">13 May 2022<span>(38)</span></a></li>
                </ul>
              </div><!-- widget end -->
              <div class="widget widget_tags">
                <h3 class="widget-title">Tags</h3>
                <div class="tags">
                  <a href="#0">lotto tips</a>
                  <a href="#0">Jackpot</a>
                  <a href="#0">Mega Millions </a>
                  <a href="#0">Lotto</a>
                  <a href="#0">Powerball</a>
                  <a href="#0">Winners</a>
                  <a href="#0">Bonus</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- blog-grid-section end -->
    <!-- footer-section start -->
    <?php include 'footer.php' ?>
    <!-- footer-section end -->
  </div>

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
</body>
</html>