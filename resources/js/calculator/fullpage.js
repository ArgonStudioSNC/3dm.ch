import fullpage from 'fullpage.js';

var fullPageInstance = new fullpage('#fullpage', {
    licenseKey: '05D7C50C-67174C6E-877298FC-CCC2F404',
    verticalCentered: false,
    onLeave: function(origin, destination, direction) {
        if (destination.isFirst) {
            $('#slide-up').prop("disabled",true);
        } else {
            $('#slide-up').prop("disabled",false);
        }
        if (destination.isLast) {
            $('#slide-down').prop("disabled",true);
        } else {
            $('#slide-down').prop("disabled",false);
        }
        $('#my-fp-nav ').css('stroke', getComputedStyle(destination.item).color);
    },
    afterLoad: function(origin, destination, direction) {
    },
});
