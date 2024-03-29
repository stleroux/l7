<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use OwenIt\Auditing\Auditable;
//use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Category extends Model //implements AuditableContract
{
   use SoftDeletes;
   //use Auditable;

   // Manually tell the model which table to use
   // Not needed if you call the table Categories (following the conventions)
   protected $table = 'categories';

   protected $dates = ['created_at','updated_at','deleted_at'];   

   // protected $guarded = ['id'];

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   // public function categories()
 //   {
 //      return $this->hasMany(Category::class);
 //   }

 //   public function childrenCategories()
 //   {
 //      return $this->hasMany(Category::class)->with('categories');
 //   }
  // public function children()
  //  {
  //     return $this->hasMany(Category::class)->with('categories');
  //  }

   public function parent() {
      return $this->belongsTo(self::class, 'parent_id')->orderBy('name')->withTrashed();
   }

   public function children() {
      return $this->hasMany(Category::class, 'parent_id')->orderBy('name')->withTrashed();
   }

   // 1 category has many posts
   // a related entry needs to be added to the post model
   // public function posts()
   // {
   //    return $this->hasMany('App\Models\Posts\Post');
   // }

   // 1 category belongsToMany recipes
   // a related entry needs to be added to the post model
   // public function recipes()
   // {
   //    return $this->hasMany('App\Models\Recipes\Recipe');
   // }

   // public function projects()
   // {
   //    return $this->hasMany('App\Models\Projects\Project');
   // }


//////////////////////////////////////////////////////////////////////////////////////
// SCOPES
//////////////////////////////////////////////////////////////////////////////////////
   // public function scopeNewCategories($query)
 //   {
 //      return $query
 //         ->where('created_at', '>=' , Auth::user()->last_login_date)
 //         //->where('user_id', '=', Auth::user()->id)
 //         ->orderBy('name','DESC');
 //   }
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

   /**
   * Always capitalize the name when we retrieve it
   */
   // public function getNameAttribute($value) {
   //    return ucfirst($value);
   // }


}
