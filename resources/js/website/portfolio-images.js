$( document ).ready(function() {
    $('picture.flex-child > img').each(flexRatio);
    $('.parallax-slider').find('img').each(myParallax);
});

/*!
 * Sets the ratio for statics flexible images
 */
$('picture.flex-child > img').on('load', flexRatio);
function flexRatio() {
    if (this.naturalWidth != 0) {
        this.parentElement.style.flex = this.naturalWidth / this.naturalHeight;
    }
}
/*!
 * Activates the parallax effet plugin
 */
$('.parallax-slider').find('img').on('load', myParallax);
function myParallax() {
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
