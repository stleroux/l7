<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Recipe;

class RecipeRequest extends FormRequest
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
               // 'title'   => 'required',
            'title'         => 'required|regex:/^[\pL\s\-]+$/u|min:5|max:255|',
            'ingredients'   => 'required',
            'methodology'   => 'required',
            'image'         => 'image',
            'category_id'   => 'required|min:0|not_in:0',
            // 'servings'      => 'required|integer',
            // 'prep_time_hours'     => 'required',
            // 'prep_time_minutes'     => 'required',
            // 'cook_time_hours'     => 'required',
            // 'cook_time_minutes'     => 'required',
            'source'        => 'sometimes',
            'personal'      => 'sometimes',
            'private_notes' => 'sometimes',
            'public_notes'  => 'sometimes',
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
            'title'         => 'required|regex:/^[\pL\s\-]+$/u|min:5|max:255|',
            'ingredients'   => 'required',
            'methodology'   => 'required',
            'image'         => 'image',
            'category_id'   => 'required|min:0|not_in:0',
            // 'servings'      => 'required|integer',
            // 'prep_time_hours'     => 'required',
            // 'prep_time_minutes'     => 'required',
            // 'cook_time_hours'     => 'required',
            // 'cook_time_minutes'     => 'required',
            'source'        => 'sometimes',
            'personal'      => 'sometimes',
            'private_notes' => 'sometimes',
            'public_notes'  => 'sometimes',
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
            'title.required'                => 'Enter the name of the recipe',
            'title.min'                     => 'The title must be at least 5 characters',
            'title.max'                     => 'The title must be less than 255 characters',
            'title.regex'                   => 'Title can only contain alpha characters (Aa - Zz)',
            'category_id.required'          => 'The category is required',
            'ingredients.required'          => 'List the recipe ingredients',
            'methodology.required'          => 'Please enter the recipe\'s methodology',
            'servings.required'             => 'Required',
            'prep_time_hours.required'      => 'Required',
            'prep_time_minutes.required'    => 'Required',
            'cook_time_hours.required'      => 'Required',
            'cook_time_minutes.required'    => 'Required',
            ];
         }
         case 'PUT':
         case 'PATCH':
         {
            return [
            'title.required'                => 'Enter the name of the recipe',
            'title.min'                     => 'The title must be at least 5 characters',
            'title.max'                     => 'The title must be less than 255 characters',
            'title.regex'                   => 'Title can only contain alpha characters (Aa - Zz)',
            'category_id.required'          => 'The category is required',
            'ingredients.required'          => 'List the recipe ingredients',
            'methodology.required'          => 'Please enter the recipe\'s methodology',
            'servings.required'             => 'Required',
            'prep_time_hours.required'      => 'Required',
            'prep_time_minutes.required'    => 'Required',
            'cook_time_hours.required'      => 'Required',
            'cook_time_minutes.required'    => 'Required',
            ];
         }
         default:break;
      }
   }
}
