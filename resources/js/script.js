/* globals lozad */

( function() {
	'use strict';

	/*	Since I started lazy-loading images with Lozad.js, the isotope-layout package used in the portfolio section stopped working. The portfolio thumbnail images were the right width, but they were very short in height.
		Isotope-layout couldn't calculate the height of the images because they were lazy-loaded. To fix that, I had to use the window.portfolioIsotope.arrange() method to refresh the isotope-layout portfolio.
		My first idea was to call window.portfolioIsotope.arrange() when the portfolio was visible (in view), but I would've needed a JavaScript plugin to detect when "div.portfolio-container" was visible.
		Instead, I used the MutationObserver() class to detect the "div.portfolio-container" node for changes. When Lozad.js loads an image, it adds the data-loaded="true" attribute to the <img> element.
		Each time the "div.portfolio-container" was mutated with a new "data-loaded" attribute, my custom arrangePortfolioIsotope() function calls window.portfolioIsotope.arrange() to refresh the isotope-layout and
		show the lazy-loaded images right.
		Source: Myself, mutation-observer.html on my sample-code.
		Added: 05/01/2021.
	*/
	function arrangePortfolioIsotope() {

		if( document.querySelector( 'div.portfolio-container' ) ) { // Prevent the "Uncaught TypeError: Failed to execute 'observe' on 'MutationObserver': parameter 1 is not of type 'Node'" when observer.observe( target, config ); is called from a "Project Information" page, since those pages don't have a <div class="portfolio-container"> element. Source: Myself. 05/24/2021.

			const lozadObserver = lozad(); // Initialize Lozad.js to lazy load images with the "lozad" class. Source: https://www.npmjs.com/package/lozad Added: 05/01/2021.
			lozadObserver.observe();

			var numberOfPortfolioImagesLoaded = 0,
				target = document.querySelector( 'div.portfolio-container' ),
				observer = new MutationObserver( mutate ), // Pass the mutate() function by reference.
				config = { attributes: true, characterData: true, childList: true, subtree: true };

			observer.observe( target, config );

			function mutate( mutations ) { // This is MutationObserver()'s callback function.
				mutations.forEach( function( mutation ) {

					if( mutation.type === 'attributes' && mutation.attributeName === 'data-loaded' && typeof window.portfolioIsotope !== 'undefined' && window.portfolioIsotope !== null ) { // The typeof operator is used to prevent the "Uncaught TypeError: Cannot read property 'arrange' of undefined" in a browser's JavaScript console when reloading the home page with the portfolio section's title in view. Source: Myself. Added: 05/24/2021.
						window.portfolioIsotope.arrange();
						numberOfPortfolioImagesLoaded++;

						if( numberOfPortfolioImagesLoaded === 9 ) {
							setTimeout( function() {
								window.portfolioIsotope.arrange(); // I added this final call on a slight delay since the last portfolio image wasn't appearing right on mobile (its height was very short).
								observer.disconnect(); // After the ninth and final portfolio image has been loaded, disconnect the observer to prevent wasting system resources.
							}, 500 );
						}
					}

				} ); // End mutations.forEach().
			}

		}

	} // End arrangePortfolioIsotope().

	document.addEventListener( 'DOMContentLoaded', function() {
		arrangePortfolioIsotope();
	} ); // End document.addEventListener( 'DOMContentLoaded' ).

} ) (); // End self-executing anonymous function.
