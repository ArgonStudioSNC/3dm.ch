/*!
 * Hides the navbar on scroll down for Mobile
 */
var prevScrollPos = window.pageYOffset || document.documentElement.scrollTop;
var MQ = {sm: window.matchMedia("(min-width: 576px)")};

$(hideShowNavbar);

function hideShowNavbar(){
    $(window).scroll(function(){
        hideShowNavbarInner()
    });
    MQ.sm.addListener(hideShowNavbarInner);
}

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
