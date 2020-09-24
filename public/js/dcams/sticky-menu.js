$(document).ready(function(){
    $('.sticky-menu').animate(function(){
          $('body, html').animate({
              scrollTop: '20px'
          }, 2000);
      });

    $(window).scroll(function(){
      if( $(this).scrollTop() > 100 ){
        $('.sticky-menu').slideDown(500);
      } else {
        $('.sticky-menu').slideUp(500);
      }
    });
});