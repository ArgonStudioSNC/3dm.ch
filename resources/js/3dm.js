var MQ = {};

// INITIALIZE
$(document).ready(function(){
    MQ.sm = window.matchMedia("(min-width: 576px)");
    splashscreen();
    hideShowNavbar();

    // APPEAR ON DOCUMENT READY
    $('body').css('display', 'block');
});

// SPLASHSCREEN
function splashscreen(){
    if($("#splashscreen").length){
        window.setTimeout(function(){
            closeSplashscreen();
        }, 2500);

        if (MQ.sm.matches) {
            $("#navigation").css('display', 'none');
            $(window).ready(function() {
                $(this).one("wheel click",function(){
                    closeSplashscreen();
                });
            });
        }
    }
}

function closeSplashscreen(){
    if (MQ.sm.matches) {
        if($('#home-fullscreen').hasClass('ready')) {
            $("#portfolio").removeClass("d-none");
            $(window).trigger('resize').trigger('scroll');
            $("#splashscreen").fadeOut("slow");
            $(document).one("scroll",function(){
                $("#navigation").fadeIn();
            });
        } else {
            window.setTimeout(function(){
                closeSplashscreen();
            }, 500);
        }
    } else {
        $("#portfolio").removeClass("d-none");
        $("#splashscreen").fadeOut("slow");
    }
}

// HIDE NAVBAR ON SCROLL DOWN @MOBILE
var prevScrollPos = window.pageYOffset || document.documentElement.scrollTop;

function hideShowNavbarInner(){
    if(MQ.sm.matches){
        $('#navigation').removeClass('hide');
    } else {
        var currentScrollPos = Math.min(Math.max(window.pageYOffset || document.documentElement.scrollTop, 0), $(document).height() - $(window).height() -100);
        if(currentScrollPos > prevScrollPos) {
            $('#navigation').addClass('hide');
        }
        else if(currentScrollPos < prevScrollPos) {
            $('#navigation').removeClass('hide');
        }
        prevScrollPos = currentScrollPos;
    }
}

function hideShowNavbar(){
    $(window).scroll(function(){
        hideShowNavbarInner()
    });
    MQ.sm.addListener(hideShowNavbarInner);
}
