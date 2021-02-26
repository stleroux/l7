<?php

namespace App\Models;

use App\User;
use App\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Role extends Model implements Auditable
{
   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;

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
