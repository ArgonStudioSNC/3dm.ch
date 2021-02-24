/*!
 * Load the portfolio cover image first before all other media
 */
var MQ = {sm: window.matchMedia("(min-width: 576px)")};

var newImg = new Image;
var styleElem = document.head.appendChild(document.createElement("style"));
newImg.onload = function() {
    styleElem.innerHTML = "#home-fullscreen:after {background-image:url("+newImg.src+");}";
    $('#home-fullscreen').addClass('ready');
}

function loadBackground(){
    if(MQ.sm.matches){
        let s = $('#home-fullscreen');
        if (s.length) newImg.src = s.data('img');
    }
}
loadBackground();
MQ.sm.addListener(loadBackground);
