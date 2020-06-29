<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;

class AdminController extends Controller
{
   /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
   {
      $this->middleware('auth');
   }

   /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
   public function index(Request $request)
   {
      $usersCount = User::count();
      $rolesCount = Role::count();
      $permissionsCount = Permission::count();
      return view('admin.dashboard', compact('usersCount','rolesCount','permissionsCount'));
   }
}

