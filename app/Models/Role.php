<?php

namespace App\Models;

use App\User;
use App\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
   use SoftDeletes;

   protected $guarded = [];
   
   protected $dates = ['created_at','updated_at','deleted_at'];

   /////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   /////////////////////////////////////////////////////////////////////
   public function users()
   {
      return $this->belongsToMany('App\Models\User');
   }

   public function permissions()
   {
      return $this->belongsToMany('App\Models\Permission');
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
