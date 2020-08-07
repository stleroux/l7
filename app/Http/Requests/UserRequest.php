<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\User;

class UserRequest extends FormRequest
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
               'first_name' => 'required',
               'last_name' => 'required',
               'email'  => 'required|email|unique:users,email',
               'company_name' => 'required_if:invoicer_client,==,on',
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
               'first_name' => 'required',
               'last_name' => 'required',
               'email' => "required|unique:users,email,{$this->user->id}",
               'company_name' => 'required_if:invoicer_client,==,on',
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
               'first_name.required' => 'The first name cannot be blank',
               'last_name.required' => 'The last name cannot be blank',
               'email.required' => 'The email cannot be blank',
               'company_name.required_if' => 'The :attribute field is required when :other is Yes.',
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
            ];
         }
         default:break;
      }
   }
}
