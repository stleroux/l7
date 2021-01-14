<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
	use SoftDeletes;
	
   protected $guarded = [];

   protected $dates = ['created_at','updated_at','deleted_at'];

   // Set the default value for the status field to 0
   protected $attributes = [
      'category' => 0,
   ];

   public function getCategoryAttribute($attribute)
   {
      return $this->categoriesOptions()[$attribute];
   }

   public function categoriesOptions()
   {
      return [
         0 => 'Select One',
         'carvings'  => 'Carvings',
         'projects'  => 'Projects',
         'recipes'   => 'Recipes',
      ];
   }

	//////////////////////////////////////////////////////////////////////////////////////
	// RELATIONSHIPS
	//////////////////////////////////////////////////////////////////////////////////////
   public function carvings()
   {
      // return $this->belongsTo(\App\Models\Carving::class, 'projects__projects');
      return $this->belongsTo(\App\Models\Carving::class);
   }

   public function comments()
   {
      return $this->morphMany('\App\Models\Comment', 'commentable')->orderBy('id','desc');
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
