$(window).scroll(function(){
    
    parallax();

    })

function parallax(){
    var wScroll = $(window).scrollTop();
    
    $('.parallax--box').css('top',-10+(wScroll*0.009)+'em')
     
    $('.parallax--box2').css('top',-10+(wScroll*0.007)+'em')   
    
     $('.parallax--box3').css('top',-10+(wScroll*0.008)+'em')   
    
    $('.parallax--box4').css('top',-22+(wScroll*0.010)+'em')
     
    $('.parallax--box5').css('top',-16+(wScroll*0.007)+'em')   
    
     $('.parallax--box6').css('top',-18+(wScroll*0.008)+'em')
    
     $('.parallax--box7').css('top',-31+(wScroll*0.015)+'em')
    
     $('.parallax--box8').css('top',-25+(wScroll*0.009)+'em')
     
    $('.parallax--box9').css('top',-20+(wScroll*0.007)+'em')   
    
     $('.parallax--box10').css('top',-21+(wScroll*0.008)+'em')
    
     $('.parallax--box11').css('top',-41+(wScroll*0.015)+'em')
    
    $('.parallax--box12').css('top',-35+(wScroll*0.015)+'em')
    
}