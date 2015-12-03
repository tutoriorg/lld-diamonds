$(document).ready(function(){
    //scroll body
     $('a.scroll_wr').click( function(){ // если в href начинается с # или ., то ловим клик
	    var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href
        if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
	    $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
        }
	    return false; // выключаем стандартное действие
    });
    //video control
    $('.video_wr').click(function() {
//        $('video').trigger('play');
//        $('#movie1')[0].paused ?  $('#movie1')[0].play() :  $('#movie1')[0].pause();
        if ($('#movie1')[0].paused) {
            $('#movie1')[0].play();
            $(".buttom_video_wr").css('display','none')
        } else {
            $('#movie1')[0].pause();
            $(".buttom_video_wr").css('display','inline-block')
        }
    });
    //start sandwich
    $(".sandwich").click(function() {
        $(".sandwich").toggleClass("active");
    });
    $(".sandwich").click(function () {
        $(".top_bar_mobile .mobile_menu").toggleClass("active");
    });
     $(".sandwich").click(function () {
        if ($(".header_menu .nav_bar").is(":visible")) {
            $(".header_menu .nav_bar").slideUp(400);
        } else {
            $(".header_menu .nav_bar").slideDown(400);
        }
    });
    //end sandwich
    //start owl-carousel
      $('.owl-carousel').owlCarousel({

        items : 6,
        responsiveClass:true,
        navigation: true,
        pagination: false,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                450:{
                    items:3,
                    nav:false
                },
                768:{
                    items:2,
                    nav:true
                },
                991:{
                    items:6,
                    nav:true
                },
                1200:{
                    items:6,
                    nav:true,
                    loop:true
                }
            }
      });
    //end owl-carousel
});
