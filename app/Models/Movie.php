<?php

namespace App\Models;

use Auth;
use Config;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Kyslik\ColumnSortable\Sortable;

class Movie extends Model
{
   use SoftDeletes;
   use Favoriteable;
   use Sortable;

   protected $guarded = [];

   protected $dates = ['deleted_at'];

   public $sortable = ['id', 'title', 'category', 'views', 'imdb_no', 'running_time', 'created_at', 'updated_at'];

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
         0 => 'Select',
         1 => 'Action',
         2 => 'Adult',
         3 => 'Adventure',
         4 => 'Animation',
         5 => 'Anime',
         6 => 'Children',
         7 => 'Classic',
         8 => 'Comedy',
         9 => 'Crime',
         10 => 'Disaster',
         11 => 'Documentary',
         12 => 'Drama',
         13 => 'Family',
         14 => 'Fantasy',
         15 => 'Film Noir',
         16 => 'Horror',
         17 => 'Martial Arts',
         18 => 'Musical',
         19 => 'Romance',
         20 => 'Science-Fiction',
         21 => 'Special Interest',
         22 => 'Sports',
         23 => 'Suspense / Thriller',
         24 => 'Television',
         25 => 'War',
         26 => 'Western',
      ];
   }

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   public function comments()
   {
      return $this->morphMany('\App\Models\Comment', 'commentable')->orderBy('id','desc');
   }
   

//////////////////////////////////////////////////////////////////////////////////////
// SCOPES
//////////////////////////////////////////////////////////////////////////////////////
   public function scopeSearch($query, $val)
   {
      return $query
         ->where('title', 'like', '%'.$val.'%')
         ->orWhere('imdb_no', 'like', '%'.$val.'%')
         ->orWhere('overview', 'like', '%'.$val.'%')
      ;
   }

//////////////////////////////////////////////////////////////////////////////////////
// ACCESSORS
//////////////////////////////////////////////////////////////////////////////////////
   public function getCreatedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getUpdatedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

   public function getPublishedAtAttribute($date)
   {
      if($date){
         $date = new \Carbon\Carbon($date);
         $date = $date->format(Config::get('settings.dateFormat'));
         return $date;
      }
   }

}
