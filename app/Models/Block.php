<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
   // Set the default value for the status field to 0
   protected $attributes = [
      'page' => 1,
   ];

   public function getPageAttribute($attribute)
   {
      return $this->pageOptions()[$attribute];
   }

   public static function pageOptions()
   {
      return [
         1 => 'Homepage',
         2 => 'About',
         // 3 => 'Not Reproducible',
         // 4 => 'Non Issue',
         // 10 => 'Resolved',
      ];
   }

}
