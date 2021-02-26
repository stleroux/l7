<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Finish extends Model implements Auditable
{
   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   
   protected $guarded = [];

   //protected $table = 'projects__finishes';

   protected $dates = ['created_at','updated_at','deleted_at'];

// Set the default value for the sheen field to 0
   protected $attributes = [
      'sheen' => 0,
   ];

   public function getSheenAttribute($attribute)
   {
      return $this->sheenOptions()[$attribute];
   }

   public function sheenOptions()
   {
      return [
         0 => 'Select',
         1 => 'Low Luster',
         2 => 'Satin',
         3 => 'Semi-gloss',
         4 => 'Gloss',
      ];
   }

   //////////////////////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   //////////////////////////////////////////////////////////////////////////////////////
   public function projects()
   {
      // return $this->belongsToMany('App\Models\Project::class', 'projects__finish_project', 'project_id');
      // return $this->belongsToMany('App\Models\Project::class', 'finish_project');
      return $this->belongsToMany(App\Models\Project::class);
   }

   public function carvings()
   {
      // return $this->belongsToMany('App\Models\Project::class', 'projects__finish_project', 'project_id');
      // return $this->belongsToMany('App\Models\Carving::class', 'carving_finish');
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
   //       $date = $date->format(setting('dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }

   // public function getUpdatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(setting('dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }


}