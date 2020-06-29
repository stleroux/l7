<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
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
               'name'   => 'required',
               'email'  => 'required|email|unique:users,email',
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
               'name'    => 'required',
               'email' => "required|unique:users,email,{$this->user->id}"
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
               'email.required'  => 'The email cannot be blank',
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
              'name.required' => 'This field cannot be blank',
               'email.required'  => 'This field cannot be blank',
            ];
         }
         default:break;
      }
   }
}
