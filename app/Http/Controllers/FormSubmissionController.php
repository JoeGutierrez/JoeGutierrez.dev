<?php
// Created: 07/18/2021.

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormValidationRequest;
use Helper;
use App\Models\ContactFormSubmission;

class FormSubmissionController extends Controller
{
	public function form_submission( FormValidationRequest $request ) {

		$name = strip_tags( request( 'home_page_contact_form_name' ) );
		$first_name = Helper::first_and_last_name( 'first', $name );
		$last_name = Helper::first_and_last_name( 'last', $name );
		$email = strip_tags( request( 'home_page_contact_form_email' ) );
		$phone = strip_tags( request( 'home_page_contact_form_phone' ) );
		$subject = strip_tags( request( 'home_page_contact_form_subject' ) );
		$message = strip_tags( request( 'home_page_contact_form_message' ) );

		ContactFormSubmission::create( // Insert the contact form submission into the database. Added: 08/14/2021.
			[
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'phone' => $phone,
				'subject' => $subject,
				'message' => $message
			]
		);

		if( request( 'form_id' ) === 'homePageContactForm' ) {
			echo <<< html
				<script type="application/javascript">
					document.addEventListener( 'DOMContentLoaded', function( eventObj ) {
						scrollToContactSection(); // Defined in /js/script.js.
					} );
				</script>
html;
		}

		$to = 'Joe Gutierrez <joegutierrezdev@gmail.com>';
		$subject = 'JoeGutierrez.dev Form Submission, Subject: ' . $subject;
		$message = 'Message:<br>' . $message . '<br>';

		$headers = [
			'MIME-Version: 1.0',
			'Content-type: text/html; charset=iso-8859-1',
			'X-Priority: 3',
			'X-Mailer: PHP ' . phpversion(),
			'Organization: JoeGutierrez.dev',
			'From: ' . $name . ' <' . $email . '>',
			'Cc: Joe Gutierrez <ninjajoeg@gmail.com>',
			'Reply-To: ' . $name . ' <' . $email . '>',
			'Return-Path: Joe Gutierrez <joegutierrezdev@gmail.com>'
		];

		$headers = implode( "\r\n", $headers ); // "\r\n" must be in double quotes--NOT single. Otherwise, the headers won't be displayed right.

		mail( $to, $subject, $message, $headers );

		return view( 'home' );
	}
}
