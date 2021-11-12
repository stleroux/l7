<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Faq;

class OfferingRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

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
					'name'			=> 'required|min:3|max:255',
					'category'		=> 'required|min:0|not_in:0',
					// 'answer'			=> 'required',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'name'	    	=> 'required|min:3|max:255',
					'category'		=> 'required|min:0|not_in:0',
					// 'answer'			=> 'required',
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
					'name.required'		=> 'The name cannot be blank',
					'name.min'			=> 'The name must be at least 3 characters',
					'name.max'			=> 'The name must not be longer than 255 characters',
					'category.required'	=> 'The category is required',
					// 'answer.required'		=> 'The answer cannot be blank',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'name.required'		=> 'The name cannot be blank',
					'name.min'			=> 'The name must be at least 3 characters',
					'name.max'			=> 'The name must not be longer than 255 characters',
					'category.required'	=> 'The category is required',
					// 'answer.required'		=> 'The answer cannot be blank',
				];
			}
			default:break;
		}
	}
}
