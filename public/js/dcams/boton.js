$(document).ready(function(){
    $('.botoncito').click(function(){
          $('body, html').animate({
              scrollTop: '0px'
          }, 2000);
      });

    $(window).scroll(function(){
      if( $(this).scrollTop() > 300 ){
        $('.botoncito').slideDown(500);
      } else {
        $('.botoncito').slideUp(500);
      }
    });
});