<?php

// Created: 08/13/2021.
// The command I used to create this file was: php artisan make:command sql
// The command I ran to create the database was: php artisan sql:createdb joegutierrez_dev.

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class sql extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'sql:createdb {name?}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new SQL database schema based on the database config file.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$schemaName = $this->argument( 'name' ) ?: config( 'database.connections.mysql.database' );
		$charset = config( 'database.connections.mysql.charset', 'utf8mb4' );
		$collation = config( 'database.connections.mysql.collation', 'utf8mb4_unicode_520_ci' );

		config( [ 'database.connections.mysql.database' => null ] );

		$query = 'CREATE DATABASE IF NOT EXISTS ' . $schemaName . ' CHARACTER SET ' . $charset . ' COLLATE ' . $collation . ';';

		DB::statement( $query );

		config( [ 'database.connections.mysql.database' => $schemaName ] );
	}
}
