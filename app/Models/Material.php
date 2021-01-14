<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
   use SoftDeletes;
   
   protected $guarded = [];

   // protected $table = 'projects__materials';

   protected $dates = ['created_at','updated_at','deleted_at'];

   //////////////////////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   //////////////////////////////////////////////////////////////////////////////////////
   public function projects()
   {
      // return $this->belongsToMany('App\Models\Project::class', 'projects__material_project');
      // return $this->belongsToMany('App\Models\Project::class', 'material_project');
      return $this->belongsToMany(App\Models\Project::class);
   }

   public function carvings()
   {
      // return $this->belongsToMany('App\Models\Project::class', 'projects__material_project');
      // return $this->belongsToMany('App\Models\Carving::class', 'carving_material');
      return $this->belongsToMany(App\Models\Carving::class);
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


   //////////////////////////////////////////////////////////////////////////////////////
   // ACCESSORS
   //////////////////////////////////////////////////////////////////////////////////////
   // public function getCreatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       // Now modify and return the date
   //       $date = $date->format(setting('dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }

   // public function getUpdatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       // Now modify and return the date
   //       $date = $date->format(setting('dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }

}
