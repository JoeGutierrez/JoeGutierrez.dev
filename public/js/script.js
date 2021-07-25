function scrollToContactSection() { // Used in app/Http/Controllers/JGDevController.php and app/Http/Controllers/FormSubmissionController.php. Don't put this function in resources/js/script.js as it'll get minified and won't be able to be called by name. Added: 07/24/2021.
	document.getElementById( 'contact' ).scrollIntoView( { block: 'end', behavior: 'smooth' } );

	setTimeout( function() {
		// There's two scrollIntoView() calls because with just one, it wasn't scrolling all the way down to the contact section. That's probably because the portfolio images are lazy-loaded, so JS wasn't able to accurately calculate the height. To compensate for that, the first scrollIntoView() call scrolls to about the middle part of the Portfolio section, then the second call to scrollIntoView() actually reaches the Contact section. Added: 07/24/2021.
		document.getElementById( 'contact' ).scrollIntoView( { block: 'end', behavior: 'smooth' } );
	}, 1000 ); // Don't try reducing the time. I tried lowering it to 500 ms and it wouldn't work on the first try, just subsequent times. Added: 07/24/2021.
}
