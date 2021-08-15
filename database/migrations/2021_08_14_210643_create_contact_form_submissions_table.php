<?php

// Created: 08/14/2021.

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormSubmissionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'contact_form_submissions', function( Blueprint $table ) {
			$table->id();

			$table->string( 'first_name', 30 )->nullable( false );
			$table->string( 'last_name', 30 )->nullable( false ); // Both the first and last names must be allowed to be the maximum's 30 characters in case someone enters just one very long first name or one very long last name.
			$table->string( 'phone', 20 )->nullable( false );
			$table->string( 'email', 50 )->nullable( false );
			$table->string( 'subject', 80 )->nullable( false );
			$table->string( 'message', 500 )->nullable( false );

			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists( 'contact_form_submissions' );
	}
}
