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

        if (!MQ.sm) {
            $(document).one("scroll click",function(){
                closeSplashscreen();
            });
        }
    }
}

function closeSplashscreen(){
    var bgImage = window.getComputedStyle(document.querySelector('#home-fullscreen'), ':after').getPropertyValue('background-image');
    var isBgImageLoaded = bgImage.localeCompare('none');
    if (MQ.sm.matches) {
        if(isBgImageLoaded != 0) {
            $("#navigation").css('display', 'none');
            $("#portfolio").removeClass("d-none");
            $(window).trigger('resize').trigger('scroll');
            $("#splashscreen").fadeOut("slow");
            $(document).one("scroll",function(){
                $("#navigation").fadeIn();
            });
        } else {
            window.setTimeout(function(){
                console.log('timeout');
                closeSplashscreen();
            }, 500);
        }
    } else {
        $("#portfolio").removeClass("d-none");
        $("#splashscreen").fadeOut("slow");
    }
}

// RESPONSIVE FLEX
function updateFlex(elem){
    elem.parentElement.style.flex = elem.naturalWidth / elem.naturalHeight;
}

// PARALLAX INIT
function setParallaxRatio(elem){
    if (elem.naturalWidth != 1){
        elem.removeAttribute('onLoad');
        $(elem.closest('.parallax-window')).parallax({
            aspectRatio: elem.naturalWidth / elem.naturalHeight,
            mirrorSelector: "#parallax-mirror-container",
            zIndex: "5",
            overScrollFix: true,
            afterSetup: window.setTimeout(function(){$(window).trigger('resize')}, 500)
        })
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
