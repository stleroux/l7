<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Route;

class Material extends Model implements Searchable, Auditable
{
   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   
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

   public function getSearchResult(): SearchResult
   {
      if(Route::currentRouteName('') == 'admin.quickSearch' || Route::currentRouteName('') == 'admin.advSearch')
      {
         $url = route('admin.materials.show', $this->id);
      } else {
         $url = route('materials.show', $this->id);
      }

      return new SearchResult(
         $this,
         $this->name,
         $url
      );
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
