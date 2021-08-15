<?php
// Created: 07/18/2021.

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
{
	/**
	* Determine if the user is authorized to make this request.
	*
	* @return bool
	*/
	public function authorize()
	{
		return true;
	}

	/**
	* Get the validation rules that apply to the request.
	*
	* @return array
	*/
	public function rules()
	{
		return [
			'home_page_contact_form_name' => 'required|min:3|max:30',
			'home_page_contact_form_email' => 'required|string|email:rfc,dns,filter|max:50',
			'home_page_contact_form_phone' => 'required|string|min:14|max:20', // Added: 08/14/2021.
			'home_page_contact_form_subject' => 'required|min:3|max:80',
			'home_page_contact_form_message' => 'required|min:5|max:500'
		];
	}

	/**
	* Custom <input name=""> attributes for validation.
	*
	* @return array
	*/
	public function attributes() // Added: 07/24/2021.
	{
		return [
			'home_page_contact_form_name' => 'name',
			'home_page_contact_form_email' => 'email',
			'home_page_contact_form_phone' => 'phone', // Added: 08/14/2021.
			'home_page_contact_form_subject' => 'subject',
			'home_page_contact_form_message' => 'message'
		];
	}

	/**
	* Custom messages for validation.
	*
	* @return array
	*/
	public function messages()
	{
		return [
			'home_page_contact_form_email.email' => 'A valid email address is required.', // The default message is horrible: "The email must be a valid email address." Source: Myself. Added: 07/18/2021.
		];
	}
}
