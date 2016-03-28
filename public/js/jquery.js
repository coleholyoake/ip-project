var moveForce = 30; // max popup movement in pixels
var rotateForce = 20; // max popup rotation in deg

$(document).mousemove(function(e) {
    var docX = $(document).width();
    var docY = $(document).height(); 
    
    var moveX = (e.pageX - docX/2) / (docX/2) * -moveForce;
    var moveY = (e.pageY - docY/2) / (docY/2) * -moveForce;
    
    var rotateY = (e.pageX / docX * rotateForce*2) - rotateForce;
    var rotateX = -((e.pageY / docY * rotateForce*2) - rotateForce);
    
    $('.popup')
        .css('left', moveX+'px')
        .css('top', moveY+'px')
        .css('transform', 'rotateX('+rotateX+'deg) rotateY('+rotateY+'deg)');

    $('.popup-2')
        .css('right', moveX+'px')
        .css('bottom', moveY+'px')
        .css('transform', 'rotateX('-rotateX-'deg) rotateY('-rotateY-'deg)');
});

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        margin:0,
        loop:true,
        autoWidth:true,
        items:4,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });

    /*Set height of sections to window height*/
    $( ".above-the-fold" ).each(function(){
        var $this = $(this);
        $this.css({'min-height':($(window).height())+500+'px'});

        /*Recalculate on window resize*/
        $(window).resize(function(){
        $this.css({'min-height':($(window).height())+500+'px'});
        });
    });


    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });

    var divs = $('.scroll-down');
    $(window).on('scroll', function() {
       var st = $(this).scrollTop();
    divs.css({ 'opacity' : (1 - st/350) });
});
});


