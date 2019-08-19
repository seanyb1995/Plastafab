//--------------------------------------------------products page animations--//
jQuery(document).ready(function($) {
  $(".slide").mouseenter(function(){
    $( ".left-box" ).animate({ 
      width: "100%"
    }, 0, function() {
      // Animation complete.
    });
    $( ".text h3, .text p" ).css({
      color: "white"
    });
    $( ".text button" ).css({
      background: "0",
      border: "2px solid white"
    });
  });
  
  $(".slide").mouseleave(function(){
    $( ".left-box" ).animate({ 
      width: "50%"
    }, 0, function() {
      // Animation complete.
    });
     $( ".text h3" ).css({
      color: "black"
    });
    $( ".text p" ).css({
      color: "grey"
    });
    $( ".text button" ).css({
      background: "red",
      color: "white",
      border: "none"
    });
  });
//-------------------------------------------------------------scroll events--//
//-------------------------------------------------------------products page--//
var $animation_elements = $('.left-box, .text, .vinyl-text, .vinyl-image, .polypropylene-text , .polypropylene-image, .bound-casemade-text, .bound-casemade-image, .vinyl, .vinyl-text, .vinyl-image, .vinyl-heading, #filter, .product-card');
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
//-----------------------------------------------------product list dropdown--//
    $('.dropdown-el').click(function() {
      $(this).toggleClass('expanded');
    });
//--------------------------------------------------------------product card--//
  // Open modal in AJAX callback
});