(function($){
  "use strict";

  jQuery(document).ready(function(e) {
      background();
  });
  function background()
  {
    var img=$('.has_bg_image');
    img.css('background-image', function () {
      var bg = ('url(' + $(this).data('background') + ')');
      return bg;
    });
  }

  // menu options custom affix
  var fixed_top = $(".header-section");
  $(window).on("scroll", function(){
      if( $(window).scrollTop() > 500){  
          fixed_top.addClass("animated fadeInDown menu-fixed");
      }
      else{
          fixed_top.removeClass("animated fadeInDown menu-fixed");
      }
  });

  $(window).on('load', function(){

      //preloader
      $("#preloader").delay(300).animate({
        "opacity" : "0"
        }, 500, function() {
        $("#preloader").css("display","none");
    });

    // color version change
  $('.template-version button').on('click', function(){
    $('.template-version').toggleClass('open');
  });

     // run test on initial page load
     checkSize();
     // run test on resize of the window
     $(window).resize(checkSize);

    //menu options custom affix
    var fixed_top = $(".header-section");
    $(window).on("scroll", function(){
      
      if( $(this).scrollTop() > 50 ){  
        fixed_top.addClass("header-close");
      }
      else{
        fixed_top.removeClass("header-close");
      }
    });

    setInterval(function(){ 
      $(".banner-elements-part").addClass("active")
    }, 1000);

    var swiper = new Swiper(".testimonial-slider", {
      effect: "coverflow",
      loop: 0,
      slidesPerView: "auto",
      grabCursor: 1,
      parallax: 0,
      centeredSlides: true,
      coverflowEffect: {
          rotate: 0,
          stretch: 80,
          depth: 200,
          modifier: 1,
          slideShadows: !1
      },
      navigation: {
        nextEl: '.button-next',
        prevEl: '.button-prev',
      },
    });

  });

  //Function to the css rule
  function checkSize(){
    if (window.matchMedia('(max-width: 1199px)').matches) {
      // js code for responsive drop-down-menu-item with swing effect
      $(".navbar-collapse>ul>li>a, .navbar-collapse ul.sub-menu>li>a").on("click", function() {
        var element = $(this).parent("li");
        if (element.hasClass("open")) {
          element.removeClass("open");
          element.find("li").removeClass("open");
          element.find("ul").slideUp(500,"linear");
        }
        else {
          element.addClass("open");
          element.children("ul").slideDown();
          element.siblings("li").children("ul").slideUp();
          element.siblings("li").removeClass("open");
          element.siblings("li").find("li").removeClass("open");
          element.siblings("li").find("ul").slideUp();
        }
      });
    }
  }

  //js code for mobile menu 
  $(".menu-toggle").on("click", function() {
      $(this).toggleClass("is-active");
  });

  // countdown plungin init
  $('.draw-timer').countdown('2019/6/10', function(event) {
    $(this).html(event.strftime(''
      +'<div><span>%D</span><p>days</p></div>'
      +'<div><span>%H</span><p>hrs</p></div>'
      +'<div><span>%M</span><p>mins</p></div>'
      +'<div><span>%S</span><p>sec</p></div>'));
  });

  $('#remainTime1').countdown('2019/08/10', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime2').countdown('2019/07/25', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime3').countdown('2019/09/10', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime4').countdown('2019/08/10', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime5').countdown('2019/09/01', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  $('#remainTime6').countdown('2019/08/29', function(event) {
    $(this).html(event.strftime('%D days %H:%M:%S'));
  });

  // lightcase plugin init
  $('a[data-rel^=lightcase]').lightcase();

   // progress bar
   $(".progressbar").each(function(){
    $(this).find(".bar").animate({
      "width": $(this).attr("data-perc")
    },3000);
    $(this).find(".label").animate({
      "left": $(this).attr("data-perc")
    },3000);
  });

  $('.brand-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });

  $(".play-card-body .number-list li").on('click', function(){
    $(this).toggleClass("active");
  });

  // Show or hide the sticky footer button
  $(window).on("scroll", function() {
    if ($(this).scrollTop() > 200) {
        $(".scroll-to-top").fadeIn(200);
    } else {
        $(".scroll-to-top").fadeOut(200);
    }
  });
  // Animate the scroll to top
  $(".scroll-to-top").on("click", function(event) {
    event.preventDefault();
    $("html, body").animate({scrollTop: 0}, 800);
  });


})(jQuery);