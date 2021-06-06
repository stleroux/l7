<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Haruncpi\LaravelUserActivity\Traits\Loggable;

class Bug extends Model implements Auditable
{
   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   use Loggable;

   protected $guarded = [];
   
   // Set the default value for the status field to 0
   protected $attributes = [
      'status' => 1,
   ];

   public const IS_NEW = 1;
   public const IS_PENDING = 2;
   public const IS_NOT_REPRODUCIBLE = 3;
   public const IS_NON_ISSUE = 4;
   public const IS_RESOLVED = 10;

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

//////////////////////////////////////////////////////////////////////////////////////
// SCOPES
//////////////////////////////////////////////////////////////////////////////////////
   public function scopeTrashedCount($query)
   {
      return $query
         ->whereNotNull('deleted_at')
         ->withTrashed();
   }

}
