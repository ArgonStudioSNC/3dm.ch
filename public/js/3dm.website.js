// SPLASHSCREEN

var skipss = false;
$(document).ready(function(){
    if(document.getElementById("splashscreen")){
            window.setTimeout(function(){
                skipss = true;
                closeSplashscreen();
            }, 3000);

            $(document).on("scroll",function(){
                if(!skipss){
                    skipss = true;
                    closeSplashscreen();
                }
                $("#navigation").fadeIn();

            });

            $(window).on("load", function() {
                closeSplashscreen();
            });
    }
});

function closeSplashscreen(){
    if (skipss && document.readyState === "complete"){
        $("#splashscreen").fadeOut("slow");
        history.scrollRestoration = "auto";
        if (history.replaceState) {
            window.history.replaceState(null, "Portfolio - 3DM - Visualisations architecturales", "/portfolio");
        } else {
            document.location.href = "/portfolio";
        }
    }
}


// SMOOTH SCROLLING

$(document).ready(function(){
    // Add smooth scrolling to all links
    $(".smooth-scrolling").on('click', function(event) {
        $this = this;
        // Make sure we access an element from the same page
        if (this.pathname.indexOf(window.location.pathname) == 0){
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: (hash != "") ? ($(hash).offset().top) : 0
            }, 800, 'swing', function(){

                if (!$this.classList.contains('silent')){
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    if(history.pushState) {
                        history.pushState(null, null, hash);
                    }
                    else {
                        location.hash = hash;
                    }
                }
            });
        } // End if
    });
});
