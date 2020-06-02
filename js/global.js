$(function (){
    var winW = $(window).width(); 
    wow = new WOW(
      {
        boxClass:     'wow',  
        animateClass: 'animated',
        offset:       0,     
        mobile:       true, 
        live:         true,
      }
    );
    wow.init();
    $(".btn-mobile").click(function(){
        $("body").toggleClass("open-menu");
    });
});