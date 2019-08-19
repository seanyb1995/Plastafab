//--------------------------------------------------products page animations--//
jQuery(document).ready(function($) {
    function scrollToAnchor(aid){
    var aTag = $("[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
    }
    
    $(".slide").click(function() {
       scrollToAnchor('scroll');
    });
    $(".fill").click(function() {
       scrollToAnchor('scroll');
    });
});