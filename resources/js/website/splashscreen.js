/*!
 * Handles the 3DM splashscreen while loading the portfolio page
 */
var MQ = {sm: window.matchMedia("(min-width: 576px)")};

$(splashscreen);

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
