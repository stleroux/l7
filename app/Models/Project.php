<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use OwenIt\Auditing\Contracts\Auditable;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;

class Project extends Model implements Searchable, Auditable, Likeable
{
   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   use Likes;
   
   protected $guarded = [];

   // protected $table = 'projects__projects';

   protected $dates = ['created_at','updated_at','deleted_at','completed_at'];

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
         1 => 'Decoration',
         2 => 'Furniture',
         3 => 'General',
         4 => 'Storage',
         5 => 'Wall Hanging',
         1000 => 'Lastest 4',
      ];
   }


   //////////////////////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   //////////////////////////////////////////////////////////////////////////////////////
   // public function category()
   // {
   //    return $this->hasOne(\App\Models\Category::class);
   // }

   public function finishes()
   {
      // return $this->belongsToMany(\App\Models\ProjectFinish::class, 'projects__finish_project', 'project_id', 'finish_id');
      return $this->belongsToMany(\App\Models\Finish::class);
   }

   public function materials()
   {
      // return $this->belongsToMany(\App\Models\ProjectMaterial::class, 'projects__material_project', 'project_id', 'material_id');
      return $this->belongsToMany(\App\Models\Material::class);
   }

   public function images()
   {
      return $this->hasMany(\App\Models\ProjectImage::class);
   }

   public function comments()
   {
      return $this->morphMany('\App\Models\Comment', 'commentable')->orderBy('id','desc');
   }

   public function tags()
   {
      return $this->belongsToMany('App\Models\Tag')->orderBy('name','asc');
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

   public function getSearchResult(): SearchResult
   {
      
      $url = route('projects.show', $this->id);

      return new SearchResult(
         $this,
         $this->name,
         $url
      );
   }

}
