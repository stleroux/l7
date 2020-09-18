<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Role;

class RoleRequest extends FormRequest
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
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
               'name'    => 'required',
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
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
              'name.required' => 'This field cannot be blank',
            ];
         }
         default:break;
      }
   }
}
