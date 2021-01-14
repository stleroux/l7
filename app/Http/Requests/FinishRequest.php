<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Finish;

class FinishRequest extends FormRequest
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
					'name' => 'required',
		         'type' => '',
		         'color_name' => '',
		         'color_code' => '',
		         'sheen' => '',
		         'manufacturer' => 'sometimes',
		         'upc' => 'sometimes',
		         'notes' => 'sometimes',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'name' => 'required',
		         'type' => '',
		         'color_name' => '',
		         'color_code' => '',
		         'sheen' => '',
		         'manufacturer' => 'sometimes',
		         'upc' => 'sometimes',
		         'notes' => 'sometimes',
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
					'name.required' => 'The name cannot be blank',
					'name.min' => 'The name must be at least 3 characters',
					'name.max' => 'The name must not be longer than 255 characters',
					// 'category.required' => 'The category is required',
					// 'description.required' => 'The description cannot be blank',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'name.required' => 'The name cannot be blank',
					'name.min' => 'The name must be at least 3 characters',
					'name.max' => 'The name must not be longer than 255 characters',
					// 'category.required' => 'The category is required',
					// 'description.required' => 'The description cannot be blank',
				];
			}
			default:break;
		}
	}
}
