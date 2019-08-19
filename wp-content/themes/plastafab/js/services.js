//-------------------------------------------------services page animations--//
jQuery(document).ready(function($) {
//-------------------------------------------------------------scroll events--//
//-------------------------------------------------------------services page--//
var $animation_elements = $('.services-heading, .services-encapsulating-left, .services-encapsulating-right, .services-printing-left, .services-printing-right, .services-alteration-left, .services-alteration-right, .services-packaging-left, .services-packaging-right, .services-screen-left, .services-screen-right, .services-stamp-left, .services-stamp-right');
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