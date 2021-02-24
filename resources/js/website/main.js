var MQ = {};
    MQ.sm = window.matchMedia("(min-width: 576px)");

// INITIALIZE
$(document).ready(function(){
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


var x = window.matchMedia("(min-width: 576px)");

// load large background image first
var newImg = new Image;
var styleElem = document.head.appendChild(document.createElement("style"));
newImg.onload = function() {
    styleElem.innerHTML = "#home-fullscreen:after {background-image:url("+newImg.src+");}";
    $('#home-fullscreen').addClass('ready');
}

function loadBackground(){
    if(MQ.sm.matches){
        newImg.src = $('#home-fullscreen').data('img');
    }
}
loadBackground();
MQ.sm.addListener(loadBackground);

// PARRALLAX
$('picture.flex-child > img').on('load', test);
$('picture.flex-child > img').each(test);

function test() {
    if (this.naturalWidth != 0) {
        this.parentElement.style.flex = this.naturalWidth / this.naturalHeight;
    }
}

$('.parallax-slider').find('img').on('load', test2);
$('.parallax-slider').find('img').each(test2);

function test2() {
    if (this.naturalWidth != 0){
        this.removeAttribute('onLoad');
        $(this.closest('.parallax-window')).parallax({
            naturalWidth : this.naturalWidth,
            naturalHeight : this.naturalHeight,
            mirrorContainer: "#parallax-mirror-container",
            zIndex: "5",
            overScrollFix: true
        })
    }
}
