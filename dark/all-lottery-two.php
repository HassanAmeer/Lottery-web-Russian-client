






<?

include '../config.php'; 

$chkstng = "SELECT * FROM `ghstng` WHERE stngid = 1";
$chkstg =mysqli_query($db,$chkstng);
$chkq = mysqli_fetch_array($chkstg);
$d = $chkq['end_date'];
  $h = $chkq['end_h'];
  $m = $chkq['end_m'];
  $s = $chkq['end_s'];
  $timfphp = $chkq['timef'];

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
            <a href="all-lottery-two.php" class="dark-vesion">Dark</a>
            <a href="../all-lottery-two.php" class="light-vesion">Light</a>
          </div>
        </div>


  <div class="main-dark-version">
    <!--  header-section start  -->
    <?php include 'header.php' ?>

    <!-- inner-page-banner start -->
    <section class="inner-page-banner has_bg_image" data-background="assets/images/02.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-page-banner-area">
              <h1 class="page-title">PowerBall</h1>
              <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item"><a href="login.php">all lotteries</a></li>
                  <li class="breadcrumb-item active">result</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- inner-page-banner end -->

    <!-- single-categories-play-section start -->
    <section class="single-categories-play-section section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-cat-play-area">
              <div class="single-header d-flex justify-content-between">
                <div class="left d-flex">
                  <div class="icon">
                    <img src="assets/images/elements/jackpot-1.png" alt="">
                  </div>
                  <div class="content">
                    <h3 class="title"> Powerball</h3>
                    <span class="amount"> 541,000,000</span>
                  </div>
                </div>
                <div class="right text-right">
                  <span class="draw-days draw-timer"> </span>
                  <div class="header-btn-area">
                    <a href="login.php" type="button" id="quick-pick-all"> Pick ? </a>
                    <button type="button" id="add-item"><i class="fa fa-plus"></i></button>
                    <button type="button" id="delete-item"><i class="fa fa-trash"></i></button>
                  </div>
                </div>
              </div><!-- single-header end -->
              <div class="single-body">
                <div class="single-body-inner d-flex">
                  <div class="play-card">
                    <button type="button" class="close-play-card"><i class="fa fa-times"></i></button>
                    <div class="play-card-inner text-center">
                      <div class="play-card-header">
                        <span class="number-amount">Pick lottery</span>
                        <div class="header-btn-area">
                          <button type="button" id="quick-pick1"> Card </button>
                          <button type="button" id="clear-pick1"> 29 </button>
                        </div>
                      </div>
                      <div class="play-card-body">
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                          <li>8</li>
                          <li class="active">9</li>
                          <li>10</li>
                          <li>11</li>
                          <li>12</li>
                          <li class="active">13</li>
                          <li>14</li>
                          <li>15</li>
                          <li>16</li>
                          <li>17</li>
                          <li>18</li>
                          <li>19</li>
                          <li class="active">20</li>
                          <li>21</li>
                          <li class="active">22</li>
                          <li>23</li>
                          <li>24</li>
                          <li>25</li>
                          <li>26</li>
                          <li>27</li>
                          <li>28</li>
                          <li class="active">29</li>
                          <li>30</li>
                          <li>31</li>
                          <li>32</li>
                          <li>33</li>
                          <li>34</li>
                          <li>35</li>
                          <li>36</li>
                          <li>37</li>
                          <li>38</li>
                          <li>39</li>
                          <li>40</li>
                          <li>41</li>
                          <li>42</li>
                          <li>43</li>
                          <li>44</li>
                          <li>45</li>
                          <li>46</li>
                          <li>47</li>
                          <li>48</li>
                          <li>49</li>
                          <li>50</li>
                        </ul>
                 
                    
                      </div>
                      <div class="play-card-footer">
                        <p class="play-card-footer-text">Selected Numbers:</p>
                        <div class="selected-numbers">
                          <span>9</span>
                          <span>13</span>
                          <span>20</span>
                          <span>22</span>
                          <span>29</span>
                          <span>8</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- play-card end -->
                  <div class="play-card">
                    <button type="button" class="close-play-card"><i class="fa fa-times"></i></button>
                    <div class="play-card-inner text-center">
                      <div class="play-card-header">
                        <span class="number-amount">Pick lottery</span>
                        <div class="header-btn-area">
                          <button type="button" id="quick-pick2"> Card </button>
                          <button type="button" id="clear-pick2"> 18 </button>
                        </div>
                      </div>
                      <div class="play-card-body">
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                          <li>8</li>
                          <li class="active">9</li>
                          <li>10</li>
                          <li>11</li>
                          <li>12</li>
                          <li class="active">13</li>
                          <li>14</li>
                          <li>15</li>
                          <li>16</li>
                          <li>17</li>
                          <li>18</li>
                          <li>19</li>
                          <li class="active">20</li>
                          <li>21</li>
                          <li class="active">22</li>
                          <li>23</li>
                          <li>24</li>
                          <li>25</li>
                          <li>26</li>
                          <li>27</li>
                          <li>28</li>
                          <li class="active">29</li>
                          <li>30</li>
                          <li>31</li>
                          <li>32</li>
                          <li>33</li>
                          <li>34</li>
                          <li>35</li>
                          <li>36</li>
                          <li>37</li>
                          <li>38</li>
                          <li>39</li>
                          <li>40</li>
                          <li>41</li>
                          <li>42</li>
                          <li>43</li>
                          <li>44</li>
                          <li>45</li>
                          <li>46</li>
                          <li>47</li>
                          <li>48</li>
                          <li>49</li>
                          <li>50</li>
                        </ul>

                  
                      </div>
                      <div class="play-card-footer">
                        <p class="play-card-footer-text">Selected Numbers:</p>
                        <div class="selected-numbers">
                          <span>9</span>
                          <span>13</span>
                          <span>20</span>
                          <span>22</span>
                          <span>29</span>
                          <span>8</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- play-card end -->
                  <div class="play-card">
                    <button type="button" class="close-play-card"><i class="fa fa-times"></i></button>
                    <div class="play-card-inner text-center">
                      <div class="play-card-header">
                        <span class="number-amount">Pick lottery</span>
                        <div class="header-btn-area">
                          <button type="button" id="quick-pick3"> Card </button>
                          <button type="button" id="clear-pick3"> 15 </button>
                        </div>
                      </div>
                      <div class="play-card-body">
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                          <li>8</li>
                          <li class="active">9</li>
                          <li>10</li>
                          <li>11</li>
                          <li>12</li>
                          <li class="active">13</li>
                          <li>14</li>
                          <li>15</li>
                          <li>16</li>
                          <li>17</li>
                          <li>18</li>
                          <li>19</li>
                          <li class="active">20</li>
                          <li>21</li>
                          <li class="active">22</li>
                          <li>23</li>
                          <li>24</li>
                          <li>25</li>
                          <li>26</li>
                          <li>27</li>
                          <li>28</li>
                          <li class="active">29</li>
                          <li>30</li>
                          <li>31</li>
                          <li>32</li>
                          <li>33</li>
                          <li>34</li>
                          <li>35</li>
                          <li>36</li>
                          <li>37</li>
                          <li>38</li>
                          <li>39</li>
                          <li>40</li>
                          <li>41</li>
                          <li>42</li>
                          <li>43</li>
                          <li>44</li>
                          <li>45</li>
                          <li>46</li>
                          <li>47</li>
                          <li>48</li>
                          <li>49</li>
                          <li>50</li>
                        </ul>
                   
                
                      </div>
                      <div class="play-card-footer">
                        <p class="play-card-footer-text">Selected Numbers:</p>
                        <div class="selected-numbers">
                          <span>9</span>
                          <span>13</span>
                          <span>20</span>
                          <span>22</span>
                          <span>29</span>
                          <span>8</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- play-card end -->
                  <div class="play-card">
                    <button type="button" class="close-play-card"><i class="fa fa-times"></i></button>
                    <div class="play-card-inner text-center">
                      <div class="play-card-header">
                        <span class="number-amount">Pick lottery</span>
                        <div class="header-btn-area">
                          <button type="button" id="quick-pick4">Card </button>
                          <button type="button" id="clear-pick4"> 34 </button>
                        </div>
                      </div>
                      <div class="play-card-body">
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                          <li>8</li>
                          <li class="active">9</li>
                          <li>10</li>
                          <li>11</li>
                          <li>12</li>
                          <li class="active">13</li>
                          <li>14</li>
                          <li>15</li>
                          <li>16</li>
                          <li>17</li>
                          <li>18</li>
                          <li>19</li>
                          <li class="active">20</li>
                          <li>21</li>
                          <li class="active">22</li>
                          <li>23</li>
                          <li>24</li>
                          <li>25</li>
                          <li>26</li>
                          <li>27</li>
                          <li>28</li>
                          <li class="active">29</li>
                          <li>30</li>
                          <li>31</li>
                          <li>32</li>
                          <li>33</li>
                          <li>34</li>
                          <li>35</li>
                          <li>36</li>
                          <li>37</li>
                          <li>38</li>
                          <li>39</li>
                          <li>40</li>
                          <li>41</li>
                          <li>42</li>
                          <li>43</li>
                          <li>44</li>
                          <li>45</li>
                          <li>46</li>
                          <li>47</li>
                          <li>48</li>
                          <li>49</li>
                          <li>50</li>
                        </ul>
                       
                
                      </div>
                      <div class="play-card-footer">
                        <p class="play-card-footer-text">Selected Numbers:</p>
                        <div class="selected-numbers">
                          <span>9</span>
                          <span>13</span>
                          <span>20</span>
                          <span>22</span>
                          <span>29</span>
                          <span>8</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- play-card end -->
                  <div class="play-card">
                    <button type="button" class="close-play-card"><i class="fa fa-times"></i></button>
                    <div class="play-card-inner text-center">
                      <div class="play-card-header">
                        <span class="number-amount">Pick 5 Numbers</span>
                        <div class="header-btn-area">
                          <button type="button" id="quick-pick5"> Card </button>
                          <button type="button" id="clear-pick5"> 22 </button>
                        </div>
                      </div>
                      <div class="play-card-body">
                        <ul class="number-list">
                          <li>1</li>
                          <li>2</li>
                          <li>3</li>
                          <li>4</li>
                          <li>5</li>
                          <li>6</li>
                          <li>7</li>
                          <li>8</li>
                          <li class="active">9</li>
                          <li>10</li>
                          <li>11</li>
                          <li>12</li>
                          <li class="active">13</li>
                          <li>14</li>
                          <li>15</li>
                          <li>16</li>
                          <li>17</li>
                          <li>18</li>
                          <li>19</li>
                          <li class="active">20</li>
                          <li>21</li>
                          <li class="active">22</li>
                          <li>23</li>
                          <li>24</li>
                          <li>25</li>
                          <li>26</li>
                          <li>27</li>
                          <li>28</li>
                          <li class="active">29</li>
                          <li>30</li>
                          <li>31</li>
                          <li>32</li>
                          <li>33</li>
                          <li>34</li>
                          <li>35</li>
                          <li>36</li>
                          <li>37</li>
                          <li>38</li>
                          <li>39</li>
                          <li>40</li>
                          <li>41</li>
                          <li>42</li>
                          <li>43</li>
                          <li>44</li>
                          <li>45</li>
                          <li>46</li>
                          <li>47</li>
                          <li>48</li>
                          <li>49</li>
                          <li>50</li>
                        </ul>

                 
                      </div>
                      <div class="play-card-footer">
                        <p class="play-card-footer-text">Selected Numbers:</p>
                        <div class="selected-numbers">
                          <span>9</span>
                          <span>13</span>
                          <span>20</span>
                          <span>22</span>
                          <span>29</span>
                          <span>8</span>
                        </div>
                      </div>
                    </div>
                  </div><!-- play-card end -->
                </div>
              </div><!-- single-body end -->
              <div class="single-footer d-flex justify-content-between">
                <div class="left">
                  <span>Winning Chances</span>
                  <div class="progress">
                    <div class="progress-bar">50%</div>
                  </div>
                </div>
                <div class="right d-flex justify-content-between">
                  <div class="content">
                    <p>
                      <span>1 draw with 1 ticket:</span>
                      <span class="amount"> 1 x 1000 <i class="fa fa-ruble text-primary"> </i></span>
                    </p>
                    <p>
                      <span>Total Discount:</span>
                      <span class="amount"> 0 <i class="fa fa-ruble text-primary"> </i></span>
                    </p>
                  </div>
                  <div class="card-cart-btn-area">
                    <a href="login.php" class="single-cart-btn">
                      <span class="amount"> 1000 <i class="fa fa-ruble text-primary"> </i></span>
                      add to cart
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- single-categories-play-section end -->

    <!-- overview-section start -->
    <section class="overview-section section-padding border-top section-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-header text-center">
              <h2 class="section-title">Quick overview</h2>
              <p>Basic Guide for Casuals looking to step up how to get started </p>
            </div>
          </div>
        </div>
        <div class="row m-bottom-not-30">
          <div class="col-lg-4 col-md-6">
            <div class="overview-item text-center">
              <div class="icon"><img src="assets/images/01.png" alt="icon"></div>
              <div class="content">
                <h3 class="title">How to Play</h3>
                <p>Select 5 numbers between 1-50 and two Lucky Stars from 1-12. Complete as many entries as you like and click the green ‘continue’ button to complete your transaction.Sit back and wait for the results. Good luck!</p>
                <a href="lottery-result.php">Go to Results page</a>
              </div>
            </div>
          </div><!-- overview-item end -->
          <div class="col-lg-4 col-md-6">
            <div class="overview-item text-center">
              <div class="icon"><img src="assets/images/02.png" alt="icon"></div>
              <div class="content">
                <h3 class="title">Why play with  <? echo $chkq['sitename']; ?> </h3>
                <p>It’s the most popular draw in Europe and it has earned its reputation with good reason. Sit back and  wait for the results. We are providing the most updated.  Complete as many entries as you like and click the green. Good luck!</p>
                <a href="login.php">See Prize breakdown</a>
              </div>
            </div>
          </div><!-- overview-item end -->
          <div class="col-lg-4 col-md-6">
            <div class="overview-item text-center">
              <div class="icon"><img src="assets/images/03.png" alt="icon"></div>
              <div class="content">
                <h3 class="title">When’s the draw?</h3>
                <p>We are aware of the fact that up-to-date and reliable lottery draw results are very important to each player. Complete as many entries as you like and click the green. We are providing the most updated lottery draw.</p>
                <a href="faq.php">Go to FAQs</a>
              </div>
            </div>
          </div><!-- overview-item end -->
        </div>
      </div>
    </section>
    <!-- overview-section end -->

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
    
    <script>
/////////////////////////////////////////
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
   
  $(".draw-timer").html( 'draw in ' + d + ' days');
    
  
  },1000);
  ///// end 
/////////////////////////////////////

/////////////////////////////////////
/////////////////////////////////////
/////////////////////////////////////
    </script>
</body>
</html>