<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use OwenIt\Auditing\Contracts\Auditable;

class Tag extends Model
// implements Auditable
{
	use SoftDeletes;
   // use \OwenIt\Auditing\Auditable;
	
	// protected $fillable = ['name','category'];
   protected $guarded = [];

   // Set the default value for the status field to 0
   protected $attributes = [
      'category' => 0,
   ];

   public function getCategoryAttribute($attribute)
   {
      return $this->categoryOptions()[$attribute];
   }

   public function categoryOptions()
   {
      return [
         0 => 'Select',
         1 => 'Carving',
         2 => 'Post',
         3 => 'Project',
         4 => 'Other',
      ];
   }
   //////////////////////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   //////////////////////////////////////////////////////////////////////////////////////
	public function posts()
	{
		return $this->belongsToMany('App\Models\Post');
	}

   public function projects()
   {
      return $this->belongsToMany('App\Models\Project');
      // return $this->belongsToMany('App\Post', 'nameOfTable (post_tag)', 'this model id', 'foreign model id');
   }

   public function carvings()
   {
      return $this->belongsToMany('App\Models\Carving');
      // return $this->belongsToMany('App\Post', 'nameOfTable (post_tag)', 'this model id', 'foreign model id');
   }

   // public function scopeNewTags($query)
   // {
   //    return $query
   //       ->where('created_at', '>=' , Auth::user()->last_login_date)
   //       //->where('user_id', '=', Auth::user()->id)
   //       ->orderBy('name','DESC');
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
}