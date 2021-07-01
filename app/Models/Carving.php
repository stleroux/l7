<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use OwenIt\Auditing\Contracts\Auditable;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
use Route;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Carving extends Model implements Searchable, Auditable, Likeable, Viewable, Buyable
{
   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   use Likes;
   use InteractsWithViews;
   use \Gloudemans\Shoppingcart\CanBeBought;
   
   protected $guarded = [];

   // protected $table = 'carvings__carvings';

   protected $dates = ['created_at','updated_at','deleted_at','completed_at'];

   protected $removeViewsOnDelete = true;

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
         'coasters'  => 'Coasters',
         'dishes'    => 'Dishes',
         'other'     => 'Others',
         'plaques'   => 'Plaques',
         'signs'     => 'Signs',
         'trays'     => 'Trays',
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
      return $this->hasMany(\App\Models\CarvingImage::class);
   }

   public function comments()
   {
      return $this->morphMany('\App\Models\Comment', 'commentable')->orderBy('id','desc');
   }

   public function tags()
   {
      return $this->belongsToMany('\App\Models\Tag')->orderBy('name','asc');
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

   //////////////////////////////////////////////////////////////////////////////////////
   // SHOPPING CART
   //////////////////////////////////////////////////////////////////////////////////////
   public function getBuyableIdentifier($options = null) {
      return $this->id;
   }

   public function getBuyableDescription($options = null) {
      return $this->name;
   }

   public function getBuyablePrice($options = null) {
      return $this->price;
   }
   
   public function getBuyableWeight($options = null) {
      // return $this->weight;
      return 0;
   }


   //////////////////////////////////////////////////////////////////////////////////////
   // SEARCH
   //////////////////////////////////////////////////////////////////////////////////////
   public function getSearchResult(): SearchResult
   {
      if(Route::currentRouteName('') == 'admin.quickSearch' || Route::currentRouteName('') == 'admin.advSearch')
      {
         $url = route('admin.carvings.show', $this->id);
      } else {
         $url = route('carvings.show', $this->id);
      }

      return new SearchResult(
         $this,
         $this->name,
         $url
      );
   }

}
