<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
use Route;

class Offering extends Model implements Searchable, Auditable, Likeable, Viewable
{
   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   use Likes;
   use InteractsWithViews;

   protected $guarded = [];

   protected $dates = ['created_at','updated_at','deleted_at'];

   protected $removeViewsOnDelete = true;

   // // Set the default value for the status field to 0
   // protected $attributes = [
   //    'category' => 0,
   // ];

   // public function getCategoryAttribute($attribute)
   // {
   //    return $this->categoriesOptions()[$attribute];
   // }

   // public function categoriesOptions()
   // {
   //    return [
   //       // 'parent'    => 'Parent',
   //       0           => 'Select One',
   //       'sign'      => 'Sign',
   //       'plaque'    => 'Plaque',
   //       'tray'      => 'Tray',
   //    ];
   // }

   //////////////////////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   //////////////////////////////////////////////////////////////////////////////////////
   // public function carvings()
   // {
   //    // return $this->belongsTo(\App\Models\Carving::class, 'projects__projects');
   //    return $this->belongsTo(\App\Models\Carving::class);
   // }

   // public function comments()
   // {
   //    return $this->morphMany('\App\Models\Comment', 'commentable')->orderBy('id','desc');
   // }

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
         $url = route('admin.faqs.show', $this->id);
      } else {
         $url = route('faqs.show', $this->id);
      }

      return new SearchResult(
         $this,
         $this->question,
         $url
      );
   }

}
