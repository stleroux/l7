<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Faq;

class FaqRequest extends FormRequest
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
					'question'		=> 'required|min:3|max:255',
					'category'		=> 'required|min:0|not_in:0',
					'answer'			=> 'required',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'question'    	=> 'required|min:3|max:255',
					'category'		=> 'required|min:0|not_in:0',
					'answer'			=> 'required',
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
					'question.required'	=> 'The question cannot be blank',
					'question.min'			=> 'The question must be at least 3 characters',
					'question.max'			=> 'The question must not be longer than 255 characters',
					'category.required'	=> 'The category is required',
					'answer.required'		=> 'The answer cannot be blank',
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'question.required'	=> 'The question cannot be blank',
					'question.min'			=> 'The question must be at least 3 characters',
					'question.max'			=> 'The question must not be longer than 255 characters',
					'category.required'	=> 'The category is required',
					'answer.required'		=> 'The answer cannot be blank',
				];
			}
			default:break;
		}
	}
}
