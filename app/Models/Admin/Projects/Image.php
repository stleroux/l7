<?php

namespace App\Models\Admin\Projects;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
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
      return $this->belongsTo(\App\Models\Admin\Projects\Project::class, 'projects__projects');
   }

}
