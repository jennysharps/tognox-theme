/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */

    /* getting viewport width */
    var responsive_viewport = $(window).width();

    /* if is below 481px */
    if (responsive_viewport < 481) {

    } /* end smallest screen */

    /* if is larger than 481px */
    if (responsive_viewport > 481) {

    } /* end larger than 481px */

    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {

        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });

    }

    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {

    }

    var carousel = $('#carousel.flexslider');

    if( carousel.length > 0 ) {
        carousel.flexslider({
            animation: "slide",
            pauseOnHover: true,
            useCSS: false
        });
    }

    var responsiveNavToggler = $(".toggle-menu-mobile"),
        mainContainer = $('body');
    responsiveNavToggler.click( function() {
            mainContainer.toggleClass('nav-open');
    });


    // see whether device supports touch events (a bit simplistic, but...)
    var hasTouch = ("ontouchstart" in window);
    var iOS5 = /iPad|iPod|iPhone/.test(navigator.platform) && "matchMedia" in window;

    // hook touch events for drop-down menus
    // NB: if has touch events, then has standards event handling too
    // but we don't want to run this code on iOS5+
    if (hasTouch && document.querySelectorAll && !iOS5) {
        var i, len, element,
            dropdowns = document.querySelectorAll("#menu-top-nav li.menu-parent-item > a");

        function menuTouch(event) {
            // toggle flag for preventing click for this link
            var i, len, noclick = !(this.dataNoclick);

            // reset flag on all links
            for (i = 0, len = dropdowns.length; i < len; ++i) {
                dropdowns[i].dataNoclick = false;
            }

            // set new flag value and focus on dropdown menu
            this.dataNoclick = noclick;
            this.focus();
        }

        function menuClick(event) {
            // if click isn't wanted, prevent it
            if (this.dataNoclick) {
                event.preventDefault();
            }
        }

        for (i = 0, len = dropdowns.length; i < len; ++i) {
            element = dropdowns[i];
            element.dataNoclick = false;
            element.addEventListener("touchstart", menuTouch, false);
            element.addEventListener("click", menuClick, false);
        }
    }

}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );