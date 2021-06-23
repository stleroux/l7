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

class Feature extends Model implements Searchable, Auditable, Likeable, Viewable
{
   use SoftDeletes;
   use \OwenIt\Auditing\Auditable;
   use Likes;
   use InteractsWithViews;

   protected $guarded = [];

   protected $removeViewsOnDelete = true;

   public const IS_NEW = 1;
   public const IS_UNDER_REVIEW = 2;
   public const IS_PENDING = 3;
   public const IS_IMPLEMENTED = 4;
   public const IS_REJECTED = 5;

   // Set the default value for the status field to 0
   protected $attributes = [
      'status' => 1,
   ];

   public function getStatusAttribute($attribute)
   {
      return $this->statusOptions()[$attribute];
   }

   public static function statusOptions()
   {
      return [
         1 => 'New',
         2 => 'Under Review',
         3 => 'Pending',
         4 => 'Implemented',
         5 => 'Rejected',
      ];
   }

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   public function user()
   {
      return $this->belongsTo('App\Models\User');
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

   // public function scopeNew($query)
   // {
   //    return $query
   //       ->where('status', 1);
   // }

   public function getSearchResult(): SearchResult
   {
      if(Route::currentRouteName('') == 'admin.quickSearch' || Route::currentRouteName('') == 'admin.advSearch')
      {
         $url = route('admin.features.show', $this->id);
      } else {
         $url = route('features.show', $this->id);
      }

      return new SearchResult(
         $this,
         $this->title,
         $url
      );
   }

}
