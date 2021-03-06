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

/*Set height of sections to window height*/
    // $( ".above-the-fold" ).each(function(){
    //     var $this = $(this);
    //     $this.css({'min-height':($(window).height())+500+'px'});

        /*Recalculate on window resize*/
    //     $(window).resize(function(){
    //     $this.css({'min-height':($(window).height())+500+'px'});
    //     });
    // });

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        margin:0,
        loop:true,
        autoWidth:true,
        items:4,
        nav:true,
    navText: [
      "<h4 class='center inline'> <i class='fa fa-arrow-left' aria-hidden='true'></i> </h4>",
      "<h4 class='center inline'> <i class='fa fa-arrow-right' aria-hidden='true'></i> </h4>"
      ],
        // autoplay:true,
        // autoplayTimeout:3000,
        autoplayHoverPause:true
    });

    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 800);
        return false;
    });

    var scrollDown = $('.scroll-down');
    var navbar = $('.navbar');
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
        scrollDown.css({ 'opacity' : (1 - st/200) });
        // navbar.css({ 'opacity' : (1 - st/50) });
    });

    // $(window).scroll(function(){

    //     var wScroll = $(this).scrollTop();

    //     if(wScroll > $('.flyincontainer1').offset().top - $(window).height()){
    //         $('.flyin1').css({'transform': 'translate(' + offset + 'px, ' + Math.abs(offset * 0.4) + 'px)'});
    //     };

    //     if(wScroll > $('.flyincontainer2').offset().top - $(window).height()){
    //         var offset = (Math.min(0, wScroll - $('.flyincontainer2').offset().top + $(window).height() /2 - 300)).toFixed();
    //         $('.flyin2').css({'transform': 'translate(' + Math.abs(offset) + 'px, ' + Math.abs(offset) + 'px)'});
    //     };
    
    // });
    $(function() { 
    var videos  = $(".videoWrapper");
 
        videos.on("click", function(){
            var elm = $(this),
                conts   = elm.contents(),
                le      = conts.length,
                ifr     = null;
 
            for(var i = 0; i<le; i++){
              if(conts[i].nodeType == 8) ifr = conts[i].textContent;
            }
 
            elm.addClass("player").html(ifr);
            elm.off("click");
        });
    });
});




