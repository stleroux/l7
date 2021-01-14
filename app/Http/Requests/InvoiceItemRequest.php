<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\InvoicerInvoiceItem;

class InvoiceItemRequest extends FormRequest
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
					'quantity' => 'required',
					'price' => 'required',
					'carving' => 'required_without_all:product,item',
					'product' => 'required_without_all:carving,item',
					'item' => 'required_without_all:carving,product',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					// 'title'    		=> 'required|min:3',
					// 'status'	   	=> 'required|min:0|not_in:0',
					// 'description'	=> 'required|min:5',
					// 'resolution' 	=> 'required_if:status,==,10|min:5',
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
					'quantity.required' => 'The quantity is required.',
					'price.required' => 'The price is required.',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'title.required' => 'The title cannot be blank',
					'title.min' => 'The title must be at least 3 characters',
					'status.required' => 'The status is required',
					'description.required' => 'The description cannot be blank',
					'description.min' => 'The description must be at least 3 characters',					
					'resolution.required_if' => 'The :attribute field is required when Status is set to Resolved.',
					'resolution.min' => 'The resolution must be at least 5 characters',					
				];
			}
			default:break;
		}
	}
}
