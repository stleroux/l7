<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Permission;

class Role extends Model
{
   use SoftDeletes;

   /////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   /////////////////////////////////////////////////////////////////////
   public function users()
   {
      return $this->belongsToMany('App\User');
   }

   public function permissions()
   {
      return $this->belongsToMany('App\Permission');
   }

}
