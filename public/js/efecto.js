$(document).ready(function() {
    $("#tratamiento1").hide();
    $('.col-tratamientos').hide(0);
    $(window).scroll(function(){
        var windowHeight = $(window).scrollTop();
        var mainstart = $("#main").offset();
         mainstart = mainstart.top;
     
        if(windowHeight >= mainstart  ){
            setTimeout(function(){
                $('#tratamiento1').fadeIn(1500);
                $('#tratamiento2').fadeIn(1500);
            },1000);
            setTimeout(function(){
                $('#tratamiento3').fadeIn(1500);
            },2000);
            setTimeout(function(){
                $('#tratamiento4').fadeIn(1500);
            },3000);
            setTimeout(function(){
                $('#tratamiento5').fadeIn(1500);
            },4000);
            setTimeout(function(){
                $('#tratamiento6').fadeIn(1500);
            },5000);

        }else{
            $("#tratamiento1").hide();
            $('.col-tratamientos').hide();
        }
     });

     
 });