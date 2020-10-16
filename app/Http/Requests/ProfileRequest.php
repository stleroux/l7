<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;
use Auth;

class ProfileRequest extends FormRequest
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



		switch($this->method())
		{
			case 'GET':
			case 'DELETE':
			{
				return [];
			}
			case 'POST':
			{
				return [
					// 'first_name' => 'required',
					// 'last_name' => 'required',
					// 'email'  => 'required|email|unique:users,email',
					// 'company_name' => 'required_if:invoicer_client,==,on',
					// 'telephone' => 'required_if:invoicer_client,==,on',
					// 'address_1' => 'required_if:invoicer_client,==,on',
					// 'city' => 'required_if:invoicer_client,==,on',
					// 'province' => 'required_if:invoicer_client,==,on',
					// 'postal_code' => 'required_if:invoicer_client,==,on',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'first_name' => 'required',
					'last_name' => 'required',
					'email' => 'required|unique:users,email,'. Auth::user()->id,
					// 'email' => "required|unique:users,email," . Auth::user()->id,
					'company_name' => 'required_if:invoicer_client,==,on',
					'telephone' => 'required_if:invoicer_client,==,on',
					'address_1' => 'required_if:invoicer_client,==,on',
					'city' => 'required_if:invoicer_client,==,on',
					'province' => 'required_if:invoicer_client,==,on',
					'postal_code' => 'required_if:invoicer_client,==,on',
				];
			}
			default:break;
		}
	}

	public function messages()
	{
		switch($this->method())
		{
			case 'GET':
			case 'DELETE':
			{
				return [];
			}
			case 'POST':
			{
				return [
					// 'first_name.required' => 'The first name cannot be blank',
					// 'last_name.required' => 'The last name cannot be blank',
					// 'email.required' => 'The email cannot be blank',
					// 'company_name.required_if' => 'The :attribute field is required when :other is Yes.',
					// 'telephone.required_if' => 'The :attribute field is required when :other is Yes.',
					// 'address_1.required_if' => 'The :attribute field is required when :other is Yes.',
					// 'city.required_if' => 'The :attribute field is required when :other is Yes.',
					// 'province.required_if' => 'The :attribute field is required when :other is Yes.',
					// 'postal_code.required_if' => 'The :attribute field is required when :other is Yes.',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'first_name.required' => 'This first name cannot be blank',
					'last_name.required' => 'This last name cannot be blank',
					'email.required'  => 'The email cannot be blank',
					'company_name.required_if' => 'The :attribute field is required when :other is Yes.',
					'telephone.required_if' => 'The :attribute field is required when :other is Yes.',
					'address_1.required_if' => 'The :attribute field is required when :other is Yes.',
					'city.required_if' => 'The :attribute field is required when :other is Yes.',
					'province.required_if' => 'The :attribute field is required when :other is Yes.',
					'postal_code.required_if' => 'The :attribute field is required when :other is Yes.',
				];
			}
			default:break;
		}
	}
}
