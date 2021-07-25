<?php
// Created: 07/18/2021.

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormValidationRequest;

class FormSubmissionController extends Controller
{
	public function form_submission( FormValidationRequest $request ) {
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
		$subject = 'JoeGutierrez.dev Form Submission, Subject: ' . strip_tags( request( 'home_page_contact_form_subject' ) );
		$message = 'Message:<br>' . request( 'home_page_contact_form_message' ) . '<br>';

		$headers = [
			'MIME-Version: 1.0',
			'Content-type: text/html; charset=iso-8859-1',
			'X-Priority: 3',
			'X-Mailer: PHP ' . phpversion(),
			'Organization: JoeGutierrez.dev',
			'From: ' . strip_tags( request( 'home_page_contact_form_name' ) ) . ' <' . request( 'home_page_contact_form_email' ) . '>',
			'Cc: Joe Gutierrez <ninjajoeg@gmail.com>',
			'Reply-To: ' . strip_tags( request( 'home_page_contact_form_name' ) ) . ' <' . request( 'home_page_contact_form_email' ) . '>',
			'Return-Path: Joe Gutierrez <joegutierrezdev@gmail.com>'
		];

		$headers = implode( "\r\n", $headers ); // "\r\n" must be in double quotes--NOT single. Otherwise, the headers won't be displayed right.

		mail( $to, $subject, $message, $headers );

		return view( 'home' );
	}
}
