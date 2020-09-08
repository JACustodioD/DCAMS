$(document).ready(function(){
    $('.botoncito').click(function(){
          $('body, html').animate({
              scrollTop: '0px'
          }, 300);
      });

    $(window).scroll(function(){
      if( $(this).scrollTop() > 0 ){
        $('.botoncito').slideDown(300);
      } else {
        $('.botoncito').slideUp(300);
      }
    });
});