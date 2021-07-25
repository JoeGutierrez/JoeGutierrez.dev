// Isotope (isotope-layout), GLightbox and AOS (Animate on Scroll) are loaded from resources/js/portfolio/main.js. Added: 05/01/2021.

window.Swiper = require( './portfolio/swiper-bundle.min' );
window.lozad = require( 'lozad' ); // For lazy-loading images. Sources: https://www.npmjs.com/package/lozad https://css-tricks.com/lozad-js-performant-lazy-loading-images/ https://www.sitepoint.com/five-techniques-lazy-load-images-website-performance/ Added: 05/01/2021.
global.$ = global.jQuery = require( 'jquery' );

require( './bootstrap' );

//require( './portfolio/aos' );
require( './portfolio/bootstrap.bundle' );
//require( './portfolio/glightbox' );
//require( './portfolio/isotope.pkgd' );
require( './portfolio/purecounter' );
require( './portfolio/typed' );
require( './portfolio/noframework.waypoints' );
require( './portfolio/main' );
require( './form-validation-jquery-ajax' ); // Added: 07/23/2021.

require( './script' );
