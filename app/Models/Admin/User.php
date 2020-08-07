<?php

namespace App\Models\Admin;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;

class User extends Authenticatable
{
   use Notifiable;
   use SoftDeletes;
   use Favoriteability;

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
      return $this->belongsToMany('App\Models\Admin\Role');
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

}
