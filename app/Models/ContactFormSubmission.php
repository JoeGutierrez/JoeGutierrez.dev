<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
	use HasFactory;

	protected $fillable = [
		'first_name', 'last_name', 'email', 'phone', 'subject', 'message' // Added: 08/15/2021.
	];
}
