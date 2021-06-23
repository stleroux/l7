<?php

namespace App\Models;

use Carbon\Carbon;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable; //Required by Invoicer Clients
use OwenIt\Auditing\Contracts\Auditable;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use App\Contracts\Likeable;
use App\Models\Like;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Route;

class User extends Authenticatable implements Searchable, Auditable
// class User extends Authenticatable implements MustVerifyEmail
{
   use Notifiable;
   use SoftDeletes;
   use Favoriteability;
   use Sortable; //Required by Invoicer Clients
   use \OwenIt\Auditing\Auditable;
   use Loggable;

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   // protected $fillable = [
   //    'name', 'email', 'password',
   // ];
   protected $guarded = [];

   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = [
      'password', 'remember_token',
   ];

   /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
   protected $casts = [
      'email_verified_at' => 'datetime',
   ];

   protected $dates = ['created_at','updated_at','deleted_at'];

   // public const IS_ENABLED = 1;
   // public const IS_DISABLED = 0;

   /////////////////////////////////////////////////////////////////////
   // Set the default value for the dart_doubleOut field to 0
   protected $attributes = [
      'dart_doubleOut' => 0,
   ];

   public function getDartAttribute($attribute)
   {
      return $this->dartOptions()[$attribute];
   }

   public static function dartOptions()
   {
      return [
         0 => '0',         
         1 => '1',
         2 => '2',
         3 => '3',
         4 => '4',
         5 => '5',
         6 => '6',
         7 => '7',
         8 => '8',
         9 => '9',
         10 => '10',
         11 => '11',
         12 => '12',
         13 => '13',
         14 => '14',
         15 => '15',
         16 => '16',
         17 => '17',
         18 => '18',
         19 => '19',
         20 => '20',
      ];
   }
   /////////////////////////////////////////////////////////////////////

   /////////////////////////////////////////////////////////////////////
   // 
   /////////////////////////////////////////////////////////////////////
   // public function getUsersCountAttribute(){
   //    return $this->users()->count();
   // }

   /////////////////////////////////////////////////////////////////////
   // RELATIONSHIPS
   /////////////////////////////////////////////////////////////////////
   public function roles()
   {
      return $this->belongsToMany('App\Models\Role');
   }

   // A user has many links
   public function mylinks() {
      return $this->hasMany('App\Models\Mylink')->orderBy('name','desc');
   }

   /////////////////////////////////////////////////////////////////////
   // 
   /////////////////////////////////////////////////////////////////////
   /**
   * Check the user's roles relationship to see if the user has a or any roles
   */
   public function hasAnyRoles($roles)
   {
      if($this->roles()->whereIn('name', $roles)->first())
      {
         return true;
      }

      return false;
   }

   public function hasRole($role)
   {
      if($this->roles()->where('name', $role)->first())
      {
         return true;
      }

      return false;
   }


//////////////////////////////////////////////////////////////////////////////////////
// SCOPES
//////////////////////////////////////////////////////////////////////////////////////
   public function scopeApproved($query)
   {
      return $query
         // ->where('account_status', '=', $this->IS_ENABLED);
         ->where('account_status', '=', 1);
   }

   public function scopeDisabled($query)
   {
      return $query
         // ->where('account_status', '=', $this->IS_DISABLED);
         ->where('account_status', '=', 0);
   }

   // public function scopeNoRoles($query)
   // {
   //    return $query
   //       ->whereNull('roles');
   // }

   public function scopeTrashedCount($query)
   {
      return $query
         ->whereNotNull('deleted_at')
         ->withTrashed();
   }



   public function likes()
   {
      return $this->hasMany(Like::class);
   }

   public function like(Likeable $likeable): self
   {
      if ($this->hasLiked($likeable)) {
         return $this;
      }

      (new Like())
         ->user()->associate($this)
         ->likeable()->associate($likeable)
         ->save();

      return $this;
   }

   public function unlike(Likeable $likeable): self
   {
      if (! $this->hasLiked($likeable)) {
         return $this;
      }

      $likeable->likes()
         ->whereHas('user', fn($q) => $q->whereId($this->id))
         ->delete();

      return $this;
   }

   public function hasLiked(Likeable $likeable): bool
   {
      if (! $likeable->exists) {
         return false;
      }

      return $likeable->likes()
         ->whereHas('user', fn($q) =>  $q->whereId($this->id))
         ->exists();
   }

   public function getSearchResult(): SearchResult
   {
      if(Route::currentRouteName('') == 'admin.quickSearch' || Route::currentRouteName('') == 'admin.advSearch')
      {
         $url = route('admin.users.show', $this->id);
      } else {
         $url = route('users.show', $this->id);
      }

      return new SearchResult(
         $this,
         $this->email,
         $url
      );
   }
}
