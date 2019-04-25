let m1 = 4,m2 = 2,s1 = 0, s2 = 0;
function act_timer(m1,m2,s1,s2){
  if(!(m1==0&&m2==0&&s1==0&&s2==0)){
    s2--;

    if(s2==-1&&s1>0){
      s2=9;
      s1=s1-1;
    }else if(s2==-1&&s1==0){
      s1=5;
      s2=9;
      m2=m2-1;
    }
    if(m2==-1&&m1>0){
      m2=9;
      m1=m1-1;
    }else if(m2==-1&&m1==0){
      m2=0;
    }

    $('.timer').html("<li class='timer__list'><span class='timer__list__item timer__list__item1'>0</span><span class='timer__list__item timer__list__item2'>0</span></li><li class='timer__list'><span class='timer__list__dotted'>:</span></li><li class='timer__list'><span class='timer__list__item timer__list__item1'>"+m1+"</span><span class='timer__list__item timer__list__item2'>"+m2+"</span></li><li class='timer__list'><span class='timer__list__dotted'>:</span></li><li class='timer__list'><span class='timer__list__item timer__list__item1'>"+s1+"</span><span class='timer__list__item timer__list__item2'>"+s2+"</span></li>");
    if(m1==0&&m2==0&&s1<1){
      $('.timer li:last-child span').css('color','#d31812');
    }
        setTimeout("act_timer("+m1+','+m2+','+s1+','+s2+")", 1000);
    }
}

setInterval(act_timer(m1,m2,s1,s2),1000)

var slider;

$(window).load(function(){
if(window.innerWidth < 767 && window.innerWidth > 599) {
    slider = $('.bx-slider').bxSlider({
      slideWidth: 590,
      minSlides: 1,
      maxSlides: 1,
      adaptiveHeight: true,
      infiniteLoop: true
    });
  }else if(window.innerWidth < 600 && window.innerWidth > 300) {
    slider = $('.bx-slider').bxSlider({
      slideWidth: 290,
      minSlides: 1,
      maxSlides: 1,
      adaptiveHeight: true,
      infiniteLoop: true
    });
  }else{
    slider = $('.bx-slider').bxSlider({
      slideWidth: 750,
      minSlides: 1,
      maxSlides: 1,
      adaptiveHeight: true,
      infiniteLoop: true
    });
  };


});

$(window).resize(function () {

  if(window.innerWidth < 767 && window.innerWidth > 599) {
    slider.reloadSlider({
      slideWidth: 590,
      minSlides: 1,
      maxSlides: 1,
      adaptiveHeight: true,
      infiniteLoop: true
    });
  }else if(window.innerWidth < 600 && window.innerWidth > 300) {
    slider.reloadSlider({
      slideWidth: 290,
      minSlides: 1,
      maxSlides: 1,
      adaptiveHeight: true,
      infiniteLoop: true
    });
  }else{
    slider.reloadSlider({
      slideWidth: 750,
      minSlides: 1,
      maxSlides: 1,
      adaptiveHeight: true,
      infiniteLoop: true
    });
  };

});
