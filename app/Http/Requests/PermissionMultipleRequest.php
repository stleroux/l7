<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Permission;

class PermissionMultipleRequest extends FormRequest
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
               'modelName'   => 'required',
               // 'permName'   => 'required',
               "permName"    => "required|array|min:1",
               "permName.*"  => "required|string|distinct|min:3",
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
               'modelName'    => 'required|alpha',
               'permName'    => 'required',
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
               'modelName.required' => 'The model name cannot be blank',
               'permName.required' => 'The permisison name cannot be blank',
               'permName.string' => 'The permisison name must be a string',
               'permName.min' => 'The permisison name must be at least 3 characters',
               'permName.distinct' => 'The permisison name must be unique',
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
               'modelName.required' => 'This field cannot be blank',
               'permName.required' => 'This field cannot be blank',
               'permName.string' => 'The permisison name must be a string',
               'permName.min' => 'The permisison name must be at least 3 characters',
            ];
         }
         default:break;
      }
   }
}
