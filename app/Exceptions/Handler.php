<?php

// Created: 08/29/2021.

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Log;
use Throwable;
use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Illuminate\Support\Facades\Mail;
use DOMDocument;

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
			if( get_class( $exception ) === 'Facade\Ignition\Exceptions\ViewException' ) { // Prevent the "FlattenException::create() must be an instance of Exception, instance of TypeError given" error in the logs.
				$e = FlattenException::create( $exception );
				$handler = new HtmlErrorRenderer( true ); // True raises the debug flag.

				$content = $handler->getBody( $e );
				$content = strlen( $content ) > 20000 ? substr( $content, 0, 20000 ) : $content; // If the email content is greater than 20,000 characters, trim it to 20,000 characters.

				$dom = new DOMDocument;
				$dom->loadHTML( $content, LIBXML_NOERROR ); // The LIBXML_NOERROR argument is to suppress (in the logs) the ErrorException: DOMDocument::loadHTML(): Tag svg invalid in Entity, line: 6 in app/Exceptions/Handler.php:82. That error happens because loadHTML() doesn't support HTML5 elements. Sources: https://stackoverflow.com/questions/9149180/domdocumentloadhtml-error#64471875 https://www.php.net/manual/en/domdocument.loadhtml.php#118107 Added: 09/05/2021.
				$h1 = $dom->getElementsByTagName( 'h1' )[ 0 ]->textContent;

				$data = [
					'content' => $content,
					'full_url' => url()->full(),
				];

				Mail::send( 'emails.exception', $data, function( $message ) use ( $h1 ) {
					$message->to( [ 'joegutierrezdev@gmail.com' => 'Joe Gutierrez' ] )->subject( 'JoeGutierrez.dev Exception: ' . $h1 );
				} );
			}
		}
		catch( Throwable $exception ) {
			Log::error( $exception );
		}
	}
}
