<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarvingImage extends Model
{
	use SoftDeletes;
	
   protected $guarded = [];

   protected $table = 'carvings_images';

   protected $dates = ['created_at','updated_at','deleted_at'];

	//////////////////////////////////////////////////////////////////////////////////////
	// RELATIONSHIPS
	//////////////////////////////////////////////////////////////////////////////////////
   public function carving()
   {
      // return $this->belongsTo(\App\Models\Carving::class, 'projects__projects');
      return $this->belongsTo(\App\Models\Carving::class);
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
