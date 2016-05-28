jQuery(document).ready(function(){
      jQuery('.slider-wrapper').slick({
        dots: true,
        autoplay: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });

      jQuery('.page-slider').slick({
        dots: true,
        autoplay: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });

    });

$(function () {
  $('.footer').click(function () {
     if ($(window).width() < 1024) {
      $('.footer .footer-list').slideUp();

      if( $(this).hasClass('active') ) {
        $(this).removeClass('active');
        $(this).find('.footer-list').slideUp();
      } else {
        $('.footer').removeClass('active');
        $(this).addClass('active');
        $(this).find('.footer-list').slideDown();
      }
    }
  });

    $(".products-hover").hover(function(){
      if($('ul.menu li a.products-top-menu').hasClass("active")){
        $('ul.menu li a.products-top-menu').removeClass("active");
          $('.products-submenu').css("display","none");
      }else{
        $('ul.menu li a.products-top-menu').addClass("active");
          $('.products-submenu').css("display","block");
      }
    });


  $(".services-hover").hover(function(){
      if($('ul.menu li a.services-top-menu').hasClass("active")){
        $('ul.menu li a.services-top-menu').removeClass("active");
          $('.services-sub-menu').css("display","none");

      }else{
        $('ul.menu li a.services-top-menu').addClass("active");
          $('.services-sub-menu').css("display","block");
      }
    });


   $(".about-hover").hover(function(){
      if($('ul.menu li a.about-top-menu').hasClass("active")){
        $('ul.menu li a.about-top-menu').removeClass("active");
          $('.about-sub-menu').css("display","none");
      }else{
        $('ul.menu li a.about-top-menu').addClass("active");
          $('.about-sub-menu').css("display","block");

      }
    });


   $('.product-slider-syncing').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});


$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.product-slider-syncing',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});



 $('.vehicle-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  adaptiveHeight: true,
  fade: true,
  asNavFor: '.select-vehicle-nav'
});


$('.select-vehicle-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.vehicle-slider',
  dots: false,
  centerMode: true,
  focusOnSelect: true,
   responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
    dots: false,
      }
    }

    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$('.video-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.select-video-nav'
});


$('.select-video-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.video-slider',
  dots: false,
  centerMode: false,
  focusOnSelect: true,
   responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
    dots: false,
      }
    }

    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});







    //$("#tabs").tabs();

  /***********Product-Tabs**********************/
    $(".product-types").tabs();


  $('a.parts-accessories').click(function(){
    $('ul.accessories-sub-menu').slideToggle();
    if( $('.li-accessories').hasClass('active') ){

      $('.li-accessories').removeClass('active');

    } else {
      $('.li-accessories').removeClass('active');
      $('.li-accessories').addClass("active");
    }

  });


  $('.job-position').click(function(){
    $(this).next('.job-description').slideToggle();
    if( $(this).hasClass('active') ){

      $('.job-position').removeClass('active');

    } else {
      $('.job-position').removeClass('active');
      $(this).addClass("active");
    }

    $(this).parent().siblings().children().next().slideUp();
  });

  $('.dealer-address').click(function(){
    $(this).next('.dealer-description').slideToggle();
    if( $(this).hasClass('active') ){

      $('.dealer-address').removeClass('active');

    } else {
      $('.dealer-address').removeClass('active');
      $(this).addClass("active");
    }

    $(this).parent().siblings().children().next().slideUp();
  });


   $('.embassy_loc').click(function () {
     $(this).next('.embassy-description').slideToggle();

    if( $(this).hasClass('active') ){
      $('.embassy_loc').removeClass('active');

    } else {
      $('.embassy_loc').removeClass('active');
      $(this).addClass("active");
    }

    $(this).parent().siblings().children().next().slideUp();
  });

  $('.mail-textbox a').click(function(){
    $('.mail-textbox').hide();
    $('h4.thankyou').show();

  });


   /**************************************************************/


  /***************Mobile-JS******************************************/

  /*********Mobile Toggle*********************/

   /*$("#secondary-menu-toggle").css("height",$( document ).height()-82);*/
    $(".navbar-secondary-menu").on("click",function(){
     $(window).scrollTop(0);
      if($(this).hasClass("active")){
        $(this).removeClass("active");
    $('html').removeClass("open-active");
    $('body').removeClass("open-active");
        $("#secondary-menu-toggle").slideUp( "fast", function() {
          $(this).css("display","none");

        });
      }else{
        $(this).addClass("active");
    $('html').addClass("open-active");
    $('body').addClass("open-active");
       /* $("#secondary-menu-toggle").css("height",$( document ).height()-82);*/
        $("#secondary-menu-toggle").slideDown( "slow", function() {
          $(this).css("display","block");
      $(".main-menu").removeClass("active");
        });
      }

    $('.navbar-main-menu').removeClass('active');
      $('#main-menu-toggle').css("display","none");
     /* $('.main-menu span.location_icon').css("visibility","visible");*/
    });


   /* $("#main-menu-toggle").css("height",$( document ).height()-82);*/
    $(".navbar-main-menu").on("click",function(){
     $(window).scrollTop(0);
      if($(this).hasClass("active")){
        $(this).removeClass("active");
    $('html').removeClass("open-active");
    $('body').removeClass("open-active");
    $(".main-menu").removeClass("active");
        $("#main-menu-toggle").slideUp( "fast", function() {
          $(this).css("display","none");
       /*$('span.location_icon').css("visibility","visible");
        $('span.icon-bar').css("visibility","visible");*/
      /*$('.main-menu span.location_icon').css("visibility","visible");*/

        });
      }else{
        $(this).addClass("active");
    $(".main-menu").addClass("active");
    $('html').addClass("open-active");
    $('body').addClass("open-active");
       /* $("#main-menu-toggle").css("height",$( document ).height()-82);*/
        $("#main-menu-toggle").slideDown( "slow", function() {
          $(this).css("display","block");
       $('.navbar-main-menu span.location_icon').css("visibility","hidden");

        });
      }

    $('.navbar-secondary-menu').removeClass('active');
      $('#secondary-menu-toggle').css("display","none");

    });


  /****************Products-dropdown-mobile****************************************/

  $('.btn-menu').click(function(){
    $(this).next('ul.menu-dropdown').slideToggle();
    if( $(this).hasClass('active') ){

      $('.btn-menu').removeClass('active');

    } else {
      $('.btn-menu').removeClass('active');
      $(this).addClass("active");
    }

    $(this).parent().siblings().children().next().slideUp();
  });


  $('.pro_button').click(function(){
    if( $(this).parent().hasClass('active') ){
      $(this).parent().removeClass('active');
      $(this).parent().addClass('testing');
      $('.testing ul').slideUp();
      $(this).parent().removeClass('testing');
    }else{
      $('#products-sub-menu-mobile li').addClass('inactive');
      $('#products-sub-menu-mobile li').removeClass('active');
      $(this).parent().removeClass('inactive');
      $(this).parent().addClass('active');
      $('#products-sub-menu-mobile li.inactive ul').slideUp();
      $('#products-sub-menu-mobile li.active ul').slideToggle();
    }
  });





  /****************Parts-&-Services-dropdown-mobile****************************************/

  $('.btn-accessories').click(function(){
    $('#accessories-sub-menu-mobile').slideToggle();
    if( $('.li-accessories-mobile').hasClass('active') ){

      $('.li-accessories-mobile').removeClass('active');

    } else {
      $('.li-accessories-mobile').removeClass('active');
      $('.li-accessories-mobile').addClass("active");
    }

  });

  /************Slick-slider-toggle*********************************/


  $('.slider-wrapper').slick({
    dots: true,
    infinite: true,
    speed: 300,
  });


  $('.featured-product-slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
     dotsClass: 'custom_paging',
    customPaging: function (slider, i) {
        console.log(slider);
        return (i + 1) + '/' + slider.slideCount;
    }
      }
    }
  ]
});


$('.product-types-container').slick({
  dots: true,
  infinite: true,
  speed: 300,
  arrows: false,
  slidesToShow: 4,
  slidesToScroll: 4,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
    dots: true,
    arrows: true,
      }
    }

    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



$('#review-wrapper').readmore({
  speed: 500,
  lessLink: '<a class="read-less" href="#">READ LESS</a>',
  moreLink: '<a class="read-more" href="#">READ MORE</a>'
});

$('.engine-img').click(function(){
  $('.engine-img').addClass("inactive");
  $(this).removeClass("inactive");

 });


 $('.results-info').click(function () {
      $('ul.results-info-list').slideUp();

      if( $(this).hasClass('active') ) {
        $(this).removeClass('active');
        $(this).find('ul.results-info-list').slideUp("fast");
      } else {
        $('.results-info').removeClass('active');
        $(this).addClass('active');
        $(this).find('ul.results-info-list').slideDown("fast");
      }
  });

$('.select-engine-dropdown').click(function(){
    $('.engine-list').slideToggle();
    if( $('.select-engine-dropdown').hasClass('active') ){

      $('.select-engine-dropdown').removeClass('active');

    } else {
      $('.select-engine-dropdown').removeClass('active');
      $(this).addClass("active");
    }

  });

$('.engine-list li').click(function(){
  $('.engine-list li').addClass("inactive");
  $(this).removeClass("inactive");

  $('.engine-list').slideUp();
  $('.select-engine-dropdown').removeClass('active');
  var url = $(this).find('img').attr('src');
  $('.engine-img-selected img').attr('src',url);

});

$('.sub-page-dropdown').click(function(){
  $('#sub-page-items').slideToggle();
  if( $('.sub-page-dropdown').hasClass('active') ){
    $('.sub-page-dropdown').removeClass('active');
  }else{
    $('.sub-page-dropdown').addClass('active');
  }
});


$('.mobile-list-dealer li').click(function(){
    $('#sub-page-items').slideUp();
    $('.active-page').html($(this).html());
  });


/*$('.engine-img a').click(function() {
  var engineID = $(this).attr('id').split('-');
  $('.brochureEngine').css('display','none');
  var id = engineID[1];
  $('#brochure-'+id).css('display','block');

});*/

$('.input-group.date').datepicker({
  icons: {
    time: "fa fa-clock-o",
    date: "fa fa-calendar",
    up: "fa fa-arrow-up",
    down: "fa fa-arrow-down"
  }

});

$('.birthdates').datepicker();

$('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
});

$('a.compute').click(function() {
  $('.bpi-results-container').css("display","block");
});

$('.featured-slick-counter').html($('.slick-counter2').html());

/**
$('.featured-product-slider .slick-prev, .featured-product-slider .slick-next').click(function(){
  var slickcnt = $('.featured-product-slider .slick-track .slick-active .slick-counter2 h4').text();
  $('.featured-slick-counter h4').text(slickcnt);
});
**/

$('.select-vehicle-nav, .select-video-nav').click(function() {
  $.each($('.flowplayer'),function(index,value){
    $(this).data("flowplayer").stop();
  });

});

$('.menu_cat_link').click(function(){
  if (window.location.hash != null && window.location.hash != '')
      $('body').animate({
        scrollTop: $(window.location.hash).offset().top
      }, 1500);
});

$("#bus_rq").click(function(){
        $("#busModal").modal();
    });

$('ul.sub-links li').click(function(){
    if( $('ul.sub-links li').hasClass('active') ){

      $('ul.sub-links li').removeClass('active');

    } else {
      $('ul.sub-links li').removeClass('active');
      $(this).addClass("active");
    }

  });



});



// The smallest jQuery Overlay plugin
$.fn.overlay = function() {

    var ACTIVE = "is-active";

    function toggle(el) {
        $("body").toggleClass("is-overlayed", !!el);

        if (el) {
            el.addClass(ACTIVE).trigger("open");
        } else {
            els.filter("." + ACTIVE).removeClass(ACTIVE).trigger("close");
        }
    }

    // trigger elements
    var els = this.click(function () {
        toggle($(this));
    });

    // esc key
    $(document).keydown(function (e) {
        if (e.which == 27) {
            toggle();
        }
    });

    // close
    $(".close", this).click(function (e) {
        toggle();
        e.stopPropagation();
    });

    return els;
};

// wait until DOM is ready
$(function () {
    // the player will fill the entire overlay
    // so we only need an overlay where inline video is supported
    if (flowplayer.support.inlineVideo) {

        // construct overlays
        $(".overlay").overlay().on("close", function() {

            // when overlay closes -> unload flowplayer
            flowplayer($(".flowplayer", this)).unload();

        });
    }
});




/*
$(function() {
  var player;

  $('.video-1').fancybox({
    tpl: {
      // wrap template with custom inner DIV: the empty player container
      wrap: '<div class="fancybox-wrap" tabIndex="-1">' +
            '<div class="fancybox-skin">' +
            '<div class="fancybox-outer">' +
            '<div id="player">' + // player container replaces fancybox-inner
            '</div></div></div></div>'
    },

    beforeShow: function () {
      var base = this.href.slice(1),
          cdn = "//stream.flowplayer.org/";

      // install player into empty container
      player = flowplayer("#player", {
        autoplay: true,
        ratio: 9/16,
        qualities: "216p,360p,720p,1080p",
        defaultQuality: "360p",
        rtmp: "rtmp://s3b78u0kbtx79q.cloudfront.net/cfx/st",
        clip: {
          autoplay: true,
          sources: [
            { type: "application/x-mpegurl", src: cdn + base + ".m3u8" },
            { type: "video/webm",            src: cdn + base + ".webm" },
            { type: "video/mp4",             src: cdn + base + ".mp4" },
            { type: "video/flash",           src: "mp4:" + base }
          ]
        }
      });

    },
    beforeClose: function () {
      // important! shut down the player as fancybox removes container
      player.shutdown();
    }
  });

});
*/


/**************
$(document).ready(function () {
  var $window = $(window)
    , $card = $('.product-types-container')
    , toggleSlick;

  toggleSlick = function () {
    if ($window.width() < 767) {
      $card.slick();
    } else {
      $card.unslick();
    }
  }

  $window.resize(toggleSlick);
  toggleSlick();

  var target = $('.slick-mobile-gallery');
if(target.hasClass('slick-initialized'))
  target.unslick();
});

*/


