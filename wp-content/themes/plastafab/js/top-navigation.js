
//-------------------------------------------------------------dropdown menu--//
jQuery(document).ready(function($) {
    $(".sub-menu").hide();
    $("#menu-main-navigation > li:nth-child(2) > a:nth-child(1)").mouseenter(function(){
        $(".sub-menu").show(); 
    });
    $(".sub-menu").mouseleave(function(){
        $(".sub-menu").hide();
    });
});