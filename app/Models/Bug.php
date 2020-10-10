<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bug extends Model
{
   use SoftDeletes;

   protected $guarded = [];
   
   // Set the default value for the status field to 0
   protected $attributes = [
      'status' => 1,
   ];

   public function getStatusAttribute($attribute)
   {
      return $this->statusOptions()[$attribute];
   }

   public static function statusOptions()
   {
      return [
         
         1 => 'New',
         2 => 'Pending',
         3 => 'Not Reproducible',
         4 => 'Non Issue',
         10 => 'Resolved',
      ];
   }

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   public function creator()
   {
      return $this->belongsTo('App\Models\User', 'user_id');
   }


}
