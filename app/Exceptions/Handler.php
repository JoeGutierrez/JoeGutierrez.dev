<?php

// Created: 08/29/2021.

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Log;
use Throwable;
use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Illuminate\Support\Facades\Mail;

class Handler extends ExceptionHandler
{
	/**
	 * A list of the exception types that are not reported.
	 *
	 * @var array
	 */
	protected $dontReport = [
		//
	];

	/**
	 * A list of the inputs that are never flashed for validation exceptions.
	 *
	 * @var array
	 */
	protected $dontFlash = [
		'password',
		'password_confirmation',
	];

	/**
	 * Report or log an exception.
	 *
	 * @param \Throwable $exception
	 * @return void
	 *
	 * @throws \Exception
	 */
	public function report( Throwable $exception )
	{
			 // emails.exception is the template of your email
			 // it will have access to the $error that we are passing below

		if( $this->shouldReport( $exception ) ) {
			 $this->sendEmail( $exception ); // sends an email
		}

		 return parent::report( $exception );

	}

	/**
	 * Render an exception into an HTTP response.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param \Throwable $exception
	 * @return \Symfony\Component\HttpFoundation\Response
	 *
	 * @throws \Throwable
	 */
	public function render( $request, Throwable $exception )
	{
		return parent::render( $request, $exception );
	}

	public function sendEmail( Throwable $exception )
	{
		try {
			$e = FlattenException::create( $exception );
			$handler = new HtmlErrorRenderer( true ); // True raises the debug flag.

			$content = $handler->getBody( $e );
			$content = strlen( $content ) > 20000 ? substr( $content, 0, 20000 ) : $content; // If the email content is greater than 20,000 characters, trim it to 20,000 characters.

			$data = [
				'content' => $content,
				'full_url' => url()->full()
			];

			Mail::send( 'emails.exception', $data, function( $message ) {
				$message->to( [ 'joegutierrezdev@gmail.com' => 'Joe Gutierrez' ] )->subject( 'JoeGutierrez.dev Exception: ' . request()->fullUrl() );
			} );
		}
		catch( Throwable $exception ) {
			Log::error( $exception );
		}
	}
}
