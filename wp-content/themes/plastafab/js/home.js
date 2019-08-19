//------------------------------------------------------home page animations--//
jQuery(document).ready(function($) {
//--------------------------------------------------------view product botton--//
    $(".title button").hide().slideDown({duration:1000, queue:false});
    $(".title button").hide().fadeIn({duration:1000, queue:false});
//-----------------------------------------------------------------box upper--//
    $(".box-upper").hide().slideDown({duration:1500, queue:false});
    $(".box-upper").hide().fadeIn({duration:1500, queue:false});
//-------------------------------------------------------------scroll events--//
//-----------------------------------------------------------------home page--//
var $animation_elements = $('.wwd-heading, .service-spp, .service-cpm, .service-se, .about-heading, .box-left, .box-right, .testimonial-heading, .testimonial-1, .testimonial-2, .testimonial-3, .folders, .slip-cases, .dividers, .cases, .ring-binders, .wallets, .contact, .block-back, .block-front');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);

  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
      (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
});