<?php

namespace App\Models;

use Auth;
use App\Contracts\Likeable;
use App\Models\Category;
use App\Models\Concerns\Likes;
use Carbon\Carbon;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use OwenIt\Auditing\Contracts\Auditable;
use Route;

class Recipe extends Model implements Searchable, Auditable, Likeable, Viewable
{
   use SoftDeletes;
   use Favoriteable;
   use \OwenIt\Auditing\Auditable;
   use Likes;
   use InteractsWithViews;

   protected $dates = ['deleted_at', 'published_at'];

   protected $removeViewsOnDelete = true;

   // protected $fillable = [
   //    'title',
   //    'ingredients',
   //    'methodology',
   //    'image',
   //    'category_id',
   //    'servings',
   //    'prep_time',
   //    'cook_time',
   //    'personal',
   //    'views',
   //    'source',
   //    'author_notes',
   //    'publis_notes',
   //    'user_id',
   //    'modified_by_id',
   //    'last_viewed_by_id',
   //    'published_at',
   //    'last_viewd_on'      
   // ];

   public const IS_PERSONAL_NO = 0;
   public const IS_PERSONAL_YES = 1;

   // Set the default value for the status field to 0
   protected $attributes = [
      'personal' => 0,
   ];

   public function getPersonalAttribute($attribute)
   {
      return $this->personalOptions()[$attribute];
   }

   public function personalOptions()
   {
      return [
         0 => 'No',
         1 => 'Yes',
      ];
   }

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   public function comments()
   {
      return $this->morphMany('\App\Models\Comment', 'commentable')->orderBy('id','desc');
   }
   
   public function user()
   {
      return $this->belongsTo('App\Models\User');
   }

   public function modifiedBy()
   {
      return $this->belongsTo('App\Models\User');
   }

   public function lastViewedBy()
   {
      return $this->belongsTo('App\Models\User');
   }

   public function category()
   {
      return $this->belongsTo('App\Models\Category');
   }

   // used in the add and remove favorite
   // public function favorites() {
   //    if(Auth::check()) {
   //       return $this->belongsToMany('App\User')->where('user_id','=',Auth::user()->id);
   //       // return $this->belongsToMany('App\User');
   //    // } else {
   //    //    return $this->belongsToMany('App\User');
   //    }
   // }

//////////////////////////////////////////////////////////////////////////////////////
// SCOPES
//////////////////////////////////////////////////////////////////////////////////////
   public function scopePublic($query)
   {
      return $query
         // ->where('personal', '=', 0);
         ->where('personal', '=', self::IS_PERSONAL_NO);
   }

   public function scopePrivate($query)
   {
      return $query
         // ->where('personal', '=', 1);
         ->where('personal', '=', self::IS_PERSONAL_YES);
   }

   public function scopePublished($query)
   {
      return $query
         ->where('published_at', '<=', Carbon::now())
         ->where('deleted_at', '=', null);
   }
   
   public function scopeUnpublished($query)
   {
      return $query
         ->where('published_at', '=', NULL);
   }

   public function scopeTrashed($query)
   {
      return $query
         ->where('deleted_at', '!=', NULL)
         ->withTrashed();
   }

   public function scopeTrashedCount($query)
   {
      return $query
         ->whereNotNull('deleted_at')
         ->withTrashed();
   }
   
   public function scopeMyRecipes($query)
   {
      if(Auth()->check()) {
         return $query
            ->where('user_id', '=', Auth::user()->id);
            // ->orderBy('title','ASC');
      }
   }

   public function scopeNewRecipes($query)
   {
      return $query
         ->where('created_at', '>=' , Auth::user()->previous_login_date);
   }

   public function scopeFuture($query)
   {
      return $query
         ->where('published_at', '>', Carbon::Now());
   }


//////////////////////////////////////////////////////////////////////////////////////
// ACCESSORS
//////////////////////////////////////////////////////////////////////////////////////
   // public function getCreatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(Config::get('settings.dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }

   // public function getUpdatedAtAttribute($date)
   // {
   //    if($date){
   //       $date = new \Carbon\Carbon($date);
   //       $date = $date->format(Config::get('settings.dateFormat'));
   //       return $date;
   //    }
      
   //    // return 'N/A';
   // }


   public function getSearchResult(): SearchResult
   {
      
      if(Route::currentRouteName('') == 'admin.quickSearch' || Route::currentRouteName('') == 'admin.advSearch')
      {
         $url = route('admin.recipes.show', $this->id);
      } else {
         $url = route('recipes.show', $this->id);
      }

      return new SearchResult(
         $this,
         $this->title,
         $url
      );
   }

}
