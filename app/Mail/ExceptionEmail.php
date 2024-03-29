<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExceptionEmail extends Mailable
{
	use Queueable, SerializesModels;

	public $content;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->content = $content;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		return $this->view( 'emails.exception' )->with( 'content', $this->content );
	}
}
