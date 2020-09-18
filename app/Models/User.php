<?php

namespace App\Models;

use Carbon\Carbon;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
// class User extends Authenticatable implements MustVerifyEmail
{
   use Notifiable;
   use SoftDeletes;
   use Favoriteability;
   use Sortable;

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
      return $this->belongsToMany('App\Models\Role');
   }

   // A client has many invoices
   public function invoices() {
      return $this->hasMany('App\Models\InvoicerInvoice')->orderBy('id','desc');
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
   public function scopeActive($query)
   {
      return $query
         ->where('account_status', '=', 1);
   }

   public function scopeInactive($query)
   {
      return $query
         ->where('account_status', '=', 0);
   }

}
