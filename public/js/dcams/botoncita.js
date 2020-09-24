$(document).ready(function(){
    $('.botoncita').click(function(){
          $('body, html').animate({
              scrollTop: '0px'
          }, 2000);
      });

    $(window).scroll(function(){
      if( $(this).scrollTop() > 300 ){
        $('.botoncita').slideDown(500);
      } else {
        $('.botoncita ').slideUp(500);
      }
    });
});