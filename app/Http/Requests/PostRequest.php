<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Post;

class PostRequest extends FormRequest
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
         'title'         => 'required|regex:/^[\pL\s\-]+$/u|min:5|max:255|',
         'body'          => 'required',
         'category_id'   => 'required|integer',
         'published_at'  => 'sometimes',
         'tags'          => 'sometimes',
         'public_notes'  => 'sometimes',
         'image'         => 'sometimes|image|mimes:jpeg,jpg,png,bmp,gif',
         'source'        => 'sometimes',
         'private_notes' => 'sometimes',
         ];
       }
       case 'PUT':
       case 'PATCH':
       {
         return [
         'title'         => 'required|regex:/^[\pL\s\-]+$/u|min:5|max:255|',
         'body'          => 'required',
         'category_id'   => 'required|integer',
         'published_at'  => 'sometimes',
         'tags'          => 'sometimes',
         'public_notes'  => 'sometimes',
         'image'         => 'sometimes|image|mimes:jpeg,jpg,png,bmp,gif',
         'source'        => 'sometimes',
         'private_notes' => 'sometimes',
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
         'title.required'        => 'Enter the title for this post',
         'title.min'             => 'The title must be at least 5 characters',
         'title.max'             => 'The title must be less than 255 characters',
         'title.regex'           => 'Title can only contain alpha characters (Aa - Zz)',
         'category_id.required'  => 'The category is required',
         ];
       }
       case 'PUT':
       case 'PATCH':
       {
         return [
         'title.required'        => 'Enter the title for this post',
         'title.min'             => 'The title must be at least 5 characters',
         'title.max'             => 'The title must be less than 255 characters',
         'title.regex'           => 'Title can only contain alpha characters (Aa - Zz)',
         'category_id.required'  => 'The category is required',
         ];
       }
       default:break;
     }
   }
}
