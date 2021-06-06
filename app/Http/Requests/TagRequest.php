<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Tag;

class TagRequest extends FormRequest
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
               'category'   => 'required|min:0|not_in:0',
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
               'name'    => 'required',
               'category'   => 'required|min:0|not_in:0',
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
               'name.required' => 'The category cannot be blank',
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
              'name.required' => 'This field cannot be blank',
              'name.required' => 'The category cannot be blank',
            ];
         }
         default:break;
      }
   }
}
