<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
   public function handle($request, Closure $next)
   {
      $user = \Auth::user();

      if(!app()->runningInConsole() && $user)
      {
         $roles = Role::with('permissions')->get();

         foreach($roles as $role)
         {
            foreach($role->permissions as $permissions)
            {
               $permissionsArray[$permissions->name][] = $role->id;
            }
         }

         foreach($permissionsArray as $name => $roles)
         {
            Gate::define($name, function (\App\User $user) use ($roles)
            {
               return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
            });
         }
      }

      return $next($request);
   }
}
