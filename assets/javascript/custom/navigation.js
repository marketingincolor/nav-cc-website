// for desktop arrow 
// 
$(document).ready(function() {
  $('#menu-markets').mouseover( function() {
    // $( '#menu-markets li' ).toggleClass('is-active');
    // $( '#menu-markets li ul').toggleClass('js-dropdown-active');
    //$('#menu-markets').toggleClass('desktop-menu');
    //$( '#menu-markets li').toggleClass('is-active');
    $( '#menu-markets li ul').addClass('js-dropdown-active');

  });

  $('#menu-markets li ul').mouseout( function() {
    // $( '#menu-markets li' ).toggleClass('is-active');
    // $( '#menu-markets li ul').toggleClass('js-dropdown-active');
    //$('#menu-markets').toggleClass('desktop-menu');
    //$( '#menu-markets li').toggleClass('is-active');
    $( '#menu-markets li ul').removeClass('js-dropdown-active');

  });
  
});
// $('#skewed-gold-nav').hover(function() {

// });
  // $('#arrow').hover( function() {
  //   //$( '#menu-markets li' ).toggleClass('is-active');
  //   $( '#menu-markets li ul').toggleClass('js-dropdown-active');
  // });
  
  // $('#arrow').click( function() {
  //   $( '#menu-markets li' ).toggleClass('is-active');
  //   $( '#menu-markets li ul').toggleClass('js-dropdown-active');
  //   $('#arrow img').toggleClass( 'flip' );
  // });

// Script for Mobile Menu
  $('.menu-toggle').click(function() {
      $('#toggle').toggleClass('active');
      $('#overlay').toggleClass('open');
  });


$(document).ready(function() {
  var padding = 42;
  var height = $(".mobile-wrap").height();
  var padding_height = height + padding;
  var contact_height = $('.mobile-wrap').height();
  //console.log("Mobile Wrap Height: " + height);

  $('#menu-toggle').click(function() { 
    //$("#contact-phone-spacer").toggleClass('show'); 
    //$('#contact-phone-spacer').css("height", height);
    $(".vertical .menu:nth-child(1)").css("top", height + "!important");
    $('#menu-toggle').css("display", "block");
      // $('.mobile-wrap').toggleClass('fixed');
      $('#menu-mobile-new-1').toggleClass('mobile-nav');
      $('#menu-mobile-new-1').css("height", "100%");
      $('.slick-track').toggleClass('absolute');
      // $('#menu-mobile-new-1').toggleClass('fixed');
      $('#menu-mobile-new-1').toggleClass('block');
      $('#contact-phone-header').toggleClass('absolute');
      $('#routing-widget-phone div').toggleClass('display-none');
      $('#routing-widget-desktop div').toggleClass('display-none');
  });
});


