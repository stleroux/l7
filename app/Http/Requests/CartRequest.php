<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use App\Models\Cart;

class CartRequest extends FormRequest
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
					'first_name' => 'required',
					'last_name'	=> 'required',
					'email' => 'required|email|unique:users,email',
					'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
					'address' => 'required_if:shippingRequired,1',
					'city' => 'required_if:shippingRequired,1',
					'province' => 'required_if:shippingRequired,1',
					'zip' => 'required_if:shippingRequired,1',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					// 'title'		=> 'required|min:5',
					// 'page'		=> 'required',
					// 'name'		=> "required|unique:blocks,name,{$this->block->id}",
					// 'body'		=> 'required',
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
					'first_name.required'	=> 'The first name is required',
					'last_name.required'	=> 'The last name is required',
					'email.required'		=> 'The email is required',
					'email.unique'			=> 'The email is already taken. Please enter a new one.',
					'phone.required'		=> 'A phone or cell number is required',
					'phone.min'				=> 'Are you missing numbers?',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					// 'title.required'	=> 'The title cannot be blank',
					// 'title.min'			=> 'The title must be at least 5 characters',
					// 'page.required'		=> 'The page is required',
					// 'name.required'		=> 'The name is required',
					// 'name.unique'		=> 'The name is already taken',
					// 'body.required'		=> 'The answer cannot be blank',
				];
			}
			default:break;
		}
	}
}
