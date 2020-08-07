<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Permission;

class Role extends Model
{
   use SoftDeletes;

   protected $dates = ['created_at','updated_at','deleted_at'];

   /////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   /////////////////////////////////////////////////////////////////////
   public function users()
   {
      return $this->belongsToMany('App\Models\Admin\User');
   }

   public function permissions()
   {
      return $this->belongsToMany('App\Models\Admin\Permission');
   }

}
