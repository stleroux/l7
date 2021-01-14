<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feature extends Model
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
         2 => 'Under Review',
         3 => 'Pending',
         4 => 'Implemented',
         5 => 'Rejected',
      ];
   }

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   public function user()
   {
      return $this->belongsTo('App\Models\User');
   }

//////////////////////////////////////////////////////////////////////////////////////
// SCOPES
//////////////////////////////////////////////////////////////////////////////////////
   public function scopeTrashedCount($query)
   {
      return $query
         ->whereNotNull('deleted_at')
         ->withTrashed();
   }

   // public function scopeNew($query)
   // {
   //    return $query
   //       ->where('status', 1);
   // }
   
}
