<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Auth;
use Gate;

class AdminController extends Controller
{
##################################################################################################################
#  ██████  ██████  ███    ██ ███████ ████████ ██████  ██    ██  ██████ ████████ 
# ██      ██    ██ ████   ██ ██         ██    ██   ██ ██    ██ ██         ██    
# ██      ██    ██ ██ ██  ██ ███████    ██    ██████  ██    ██ ██         ██    
# ██      ██    ██ ██  ██ ██      ██    ██    ██   ██ ██    ██ ██         ██    
#  ██████  ██████  ██   ████ ███████    ██    ██   ██  ██████   ██████    ██    
##################################################################################################################
   public function __construct()
   {
      $this->middleware('auth');
   }


##################################################################################################################
# ██ ███    ██ ██████  ███████ ██   ██ 
# ██ ████   ██ ██   ██ ██       ██ ██  
# ██ ██ ██  ██ ██   ██ █████     ███   
# ██ ██  ██ ██ ██   ██ ██       ██ ██  
# ██ ██   ████ ██████  ███████ ██   ██ 
// Display a list of resources
##################################################################################################################
   public function index(Request $request)
   {
      // Check if user has required permission
      // abort_unless(Gate::allows('admin-dashboard'), 403);

      $usersTotalCount = User::count();
      $usersActiveCount = User::active()->count();
      $usersInactiveCount = User::inactive()->count();

      $rolesCount = Role::count();
      $permissionsCount = Permission::count();
      $projectsCount = Project::count();
      $recipesCount = Recipe::count();
      $userRecipesTotalCount = Recipe::where('user_id', Auth::id())->count();
      $userRecipesPublishedCount = Recipe::where('user_id', Auth::id())->published()->count();
      $userRecipesUnpublishedCount = Recipe::where('user_id', Auth::id())->unpublished()->count();
      $userRecipesFutureCount = Recipe::where('user_id', Auth::id())->future()->count();
      $userRecipesTrashedCount = Recipe::where('user_id', Auth::id())->trashed()->count();
      

      return
         view('admin.dashboard.index',
            compact(
              'usersTotalCount',
              'usersActiveCount',
              'usersInactiveCount',
              'rolesCount',
              'permissionsCount',
              'projectsCount',
              'recipesCount',
              'userRecipesTotalCount',
              'userRecipesUnpublishedCount',
              'userRecipesPublishedCount',
              'userRecipesFutureCount',
              'userRecipesTrashedCount'
            )
      );
   }
}

