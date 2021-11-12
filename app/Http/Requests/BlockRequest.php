<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Block;

class BlockRequest extends FormRequest
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
					'title'		=> 'required|min:5',
					'page'		=> 'required',
					'name'		=> 'required|unique:blocks,name',
					'body'		=> 'required',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'title'		=> 'required|min:5',
					'page'		=> 'required',
					'name'		=> "required|unique:blocks,name,{$this->block->id}",
					'body'		=> 'required',
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
					'title.required'	=> 'The title cannot be blank',
					'title.min'			=> 'The title must be at least 5 characters',
					'page.required'		=> 'The page is required',
					'name.required'		=> 'The name is required',
					'name.unique'		=> 'The name must be unique',
					'body.required'		=> 'The answer cannot be blank',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'title.required'	=> 'The title cannot be blank',
					'title.min'			=> 'The title must be at least 5 characters',
					'page.required'		=> 'The page is required',
					'name.required'		=> 'The name is required',
					'name.unique'		=> 'The name is already taken',
					'body.required'		=> 'The answer cannot be blank',
				];
			}
			default:break;
		}
	}
}
