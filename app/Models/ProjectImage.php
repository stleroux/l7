<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectImage extends Model
{
	use SoftDeletes;
	
   protected $guarded = [];

   protected $table = 'projects__images';

   protected $dates = ['created_at','updated_at','deleted_at'];

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   public function project()
   {
      return $this->belongsTo(\App\Models\Project::class, 'projects__projects');
   }

}
