<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JGDevController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get( '/', function() {
	return view('welcome');
} );
*/

Route::get( '/', [ JGDevController::class, 'home' ] )->name( 'home' );

Route::get( 'ce', [ JGDevController::class, 'condor_elite' ] )->name( 'condorElite' );

Route::get( 'dd', [ JGDevController::class, 'discount_dance' ] )->name( 'discountDance' );

Route::get( 'up', [ JGDevController::class, 'uat_parts' ] )->name( 'uatParts' );

Route::get( 'nch', [ JGDevController::class, 'nevada_corporate_headquarters' ] )->name( 'nevadaCorporateHeadquarters' ); // Added: 05/24/2021.

Route::get( 'portal', [ JGDevController::class, 'nch_portal' ] )->name( 'nchPortal' ); // Added: 05/24/2021.

Route::get( 'csc', [ JGDevController::class, 'csc' ] )->name( 'csc' ); // Added: 05/29/2021.

Route::get( 'vault', [ JGDevController::class, 'vault' ] )->name( 'vault' ); // Added: 05/30/2021.

Route::get( 'paul', [ JGDevController::class, 'paul' ] )->name( 'paul' ); // Added: 05/31/2021.

Route::get( 'vcl', [ JGDevController::class, 'vital_care_lab' ] )->name( 'vital' ); // Added: 05/31/2021.
