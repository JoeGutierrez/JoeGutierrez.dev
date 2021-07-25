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
			'home_page_contact_form_name' => 'required|max:30|min:3',
			'home_page_contact_form_email' => 'required|string|email:rfc,dns,filter|max:50',
			'home_page_contact_form_subject' => 'required|max:80|min:3',
			'home_page_contact_form_message' => 'required|max:500|min:5'
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
