$(document).ready(function(){
    $(".fullscreen-img").css("height", getViewportHeight());

    $("#navigation").sticky({topSpacing:80});

    function getViewportHeight(){
        return window.innerHeight
        || document.documentElement.clientHeight
        || document.body.clientHeight;
    }

    window.addEventListener('resize', function()
    {
        // responsize home screen
        $(".fullscreen-img").css("height", getViewportHeight());
    });
});
