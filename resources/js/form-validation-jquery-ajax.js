// Created: 07/18/2021.

( function () {
	'use strict';

	$( document ).ready( function () {
		$( 'form#homePageContactForm' ).on( 'submit', function ( eventObj ) { // To test posting with Laravel instead of jQuery AJAX, just change the on() method's selector.
			eventObj.preventDefault();
			$( this ).find( 'button[ type="submit" ]' ).prop( 'disabled', true ).html( '<div class="loader"></div>' ); // Disable the submit button after the form has been submitted to prevent multiple submits. Without this, the user will be able to click the submit button several times, allowing the form to be submitted multiple times. To be able to test that, I added a three-second delay in app/Http/Controllers/TestController.php to simulate data being sent via an API or posting to a database. That will delay the success() and error() methods, allowing you to confirm the submit button has been disabled. Source: https://stackoverflow.com/questions/13606573/disable-button-after-submit-with-jquery#13606633 Added: 01/18/2021.
			// html( '<div class="loader"></div>' ) is used to insert a CSS loading spinner to indicate that the form is sending. It provides a better UX. Source: https://www.w3schools.com/howto/howto_css_loader.asp Added: 01/30/2021.

			$.ajax( {
				type: 'post',
				url: '/',
				data: $( 'form#homePageContactForm' ).serialize(), // The form fields you're first sending to the controller, then second to the request class for validation, including the Laravel CSRF token, $( 'form#homePageContactForm input[name="_token"]' ).val(), to prevent the "419 | Page Expired" Laravel error when submitting a form.
				/*
				IMPORTANT! Don't set the dataType! The reason for that is that it's dynamic! On an ajax() error, it returns JSON; but on ajax() success, it returns HTML. So, let the ajax() method detect it for you. At first, I was setting it to "json" but then I noticed the success function was never triggering, even when the form was submitted successfully, and that was the reason. Sources: Myself https://stackoverflow.com/questions/46895031/ajax-request-keeps-returning-error-function-in-laravel#46895091 Added: 01/09/2021.
				dataType: 'json', // The response format.
				*/
				success: function( responseHTML ) {
					$( 'div#homePageContactFormContainer div.alert-success' ).removeClass( 'd-none' ); // Instead of inserting a new "success" element with jQuery, I decided to show/hide them with both the jQuery and Laravel versions. That way, you're not inserting two separate elements, a success element for jQuery AJAX validation and one for Laravel validation. There's just ONE element that'll get shown/hidden with both versions. That makes it easier to maintain.
					$( 'form#homePageContactForm' ).addClass( 'd-none' );
				},
				error: function( err ) { // Don't try changing "err" to "error" since there's already another argument named "error."
					$( 'form#homePageContactForm button[ type="submit" ]' ).prop( 'disabled', false ).text( 'Send Message' );
//					console.log( 'The submit button has been re-enabled since there are validation errors.' );

					if( err.status === 422 ) { // When the status code is 422, it's a validation issue.
/*
						console.log( 'Error 422' );
						console.log( err.responseJSON.message );
						console.log( err.responseJSON );
						console.log( err.responseJSON.errors );
*/

						// Clear any errors from the previous submit.
						$( 'form#homePageContactForm span.invalid-feedback' ).text( '' ).removeClass( 'd-inline' ); // Hide all of the error messages.
						$( 'form#homePageContactForm .is-invalid' ).removeClass( 'is-invalid' ); // Hide the exclamation point in a circle Bootstrap icon and return the form field's border color from red to its regular color.

						// Display any Laravel validation errors via the DOM.
						$.each( err.responseJSON.errors, function( index, error ) {
							var element = $( document ).find( 'form#homePageContactForm [name = "' + index + '"]' );

							if( element.attr( 'type' ) === 'text' || element[ 0 ].nodeName === 'TEXTAREA' || element[ 0 ].nodeName === 'SELECT' ) {
								element.addClass( 'is-invalid' ); // Show the exclamation point in a circle Bootstrap icon inside the form field and make the form field's border red.
								element.next().text( error[ 0 ] ).removeClass( 'd-none' ); // Insert the error message to the span.invalid-feedback element.
							}
							else if( element.attr( 'type' ) === 'radio' ) {
								$( element[ 1 ] ).parent().next().text( error[ 0 ] ).addClass( 'd-inline' ); // $( element[ 1 ] ) is used to select only the second radio button. Otherwise, the error message is printed twice.
							}
						} );
					}
					else if( err.status === 405 ) { // This error usually happens when ajax() is sending to the wrong URL.
						// Example 405 HTTP response code error message: The POST method is not supported for this route. Supported methods: GET, HEAD.
						console.log( err.responseJSON.message );
					}
					else {
						console.log( err.responseText );
						console.log( err );
						console.log( err.responseJSON.message );
					}
				}
			} );
		} );

	} ); // End $( document ).ready().

} ) (); // End self-executing anonymous function.
