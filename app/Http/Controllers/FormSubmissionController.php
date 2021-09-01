<?php
// Created: 07/18/2021.

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormValidationRequest;
use Helper;
use App\Models\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;

class FormSubmissionController extends Controller
{
	public function form_submission( FormValidationRequest $request ) {

		$name = strip_tags( request( 'home_page_contact_form_name' ) );
		$first_name = Helper::first_and_last_name( 'first', $name );
		$last_name = Helper::first_and_last_name( 'last', $name );
		$email = strip_tags( request( 'home_page_contact_form_email' ) );
		$phone = strip_tags( request( 'home_page_contact_form_phone' ) );
		$subject = strip_tags( request( 'home_page_contact_form_subject' ) );
		$body = strip_tags( request( 'home_page_contact_form_message' ) );

		ContactFormSubmission::create( // Insert the contact form submission into the database. Added: 08/14/2021.
			[
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email,
				'phone' => $phone,
				'subject' => $subject,
				'message' => $body
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

		$admin_to = [ 'joegutierrezdev@gmail.com' => 'Joe Gutierrez' ];
		$admin_subject = 'JoeGutierrez.dev Form Submission, Subject: ' . $subject;

		$data = [
			'name' => $name,
			'email' => $email,
			'phone' => $phone,
			'subject' => $subject,
			'body' => $body
		];

		Mail::send( 'emails.home-page-form-submission', $data, function ( $admin_email ) use ( $admin_to, $admin_subject ) { // Added: 08/28/2021.
			$admin_email->to( $admin_to )->subject( $admin_subject );
		} );

		return view( 'home' );
	}
}
