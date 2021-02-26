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

class User extends Authenticatable implements Auditable
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

   /////////////////////////////////////////////////////////////////////
   // Set the default value for the status field to 0
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

   // // A client has many invoices
   // public function invoices() {
   //    return $this->hasMany('App\Models\InvoicerInvoice')->orderBy('id','desc');
   // }

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
         ->where('account_status', '=', 1);
   }

   public function scopeDisabled($query)
   {
      return $query
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

}
