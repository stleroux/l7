<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bug;
use App\Models\Feature;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Project;
use App\Models\Recipe;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Gate;

use App\Charts\BugChart;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

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
      abort_unless(Gate::allows('admin-dashboard'), 403);

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

      $postsCount = Post::count();
      $userPostsTotalCount = Post::where('user_id', Auth::id())->count();
      $userPostsPublishedCount = Post::where('user_id', Auth::id())->published()->count();
      $userPostsUnpublishedCount = Post::where('user_id', Auth::id())->unpublished()->count();
      $userPostsFutureCount = Post::where('user_id', Auth::id())->futurePosts()->count();
      $userPostsTrashedCount = Post::where('user_id', Auth::id())->trashed()->count();

      // $newBugsCount = Bug::where('status', 1)->count();
      // $newFeaturesCount = Feature::where('status', 1)->count();
      // $newNotificationsCount = $newBugsCount + $newFeaturesCount;

      // $bugs = Bug::pluck('status');
      $newBugs = Bug::where('status', 1)->count();
      $pendingBugs = Bug::where('status', 2)->count();
      $notReproduceableBugs = Bug::where('status', 3)->count();
      $nonIssueBugs = Bug::where('status', 4)->count();
      $resolvedBugs = Bug::where('status', 10)->count();

      // $bugs = Bug::pluck('user_id','created_at');
      // $bugs = Bug::pluck('user_id','status');
      // $bugs = Bug::pluck('created_at','status');
      
      // $chart = new BugChart;
      
      // return $bugs->keys();
      // return $bugs->values();

      // $chart->labels(['One','Two','Three','Four']);
      // $chart->labels($bugs->keys());
      // $chart->labels(['New','Pending','Not Reproduceable','Non Issue','Resolved']);
      // $chart->dataset('Bugs', 'bar', [$newBugs, $pendingBugs,$notReproduceableBugs,$nonIssueBugs,$resolvedBugs])
              // ->backgroundColor('red');
      // $chart->dataset('My dataset 1', 'bar', [1, 2, 3, 4]);
      // $chart->dataset('My dataset 2', 'bar', [10, 20, 30, 40]);
      // $chart->dataset('My dataset 3', 'bar', [5, 9, 21, 15]);


$usersPerMonthChart_options = [
  'chart_title' => 'Users By Months',
  'report_type' => 'group_by_date',
  'model' => 'App\Models\User',
  'group_by_field' => 'created_at',
  'group_by_period' => 'month',
  'chart_type' => 'bar',
  // 'style_class' => ' bg-danger',
];
$usersPerMonthChart = new LaravelChart($usersPerMonthChart_options);

$bugsByTypeChart_options = [
  'chart_title' => 'Bugs By Type',
  'report_type' => 'group_by_string',
  'model' => 'App\Models\Bug',
  'group_by_field' => 'status',
  'chart_type' => 'bar',
];
$bugsByTypeChart = new LaravelChart($bugsByTypeChart_options);

$featuresByTypeChart_options = [
  'chart_title' => 'Features By Type',
  'report_type' => 'group_by_string',
  'model' => 'App\Models\Feature',
  'group_by_field' => 'status',
  'chart_type' => 'bar',
];
$featuresByTypeChart = new LaravelChart($featuresByTypeChart_options);

// $rolesByTypeChart_options = [
//   'chart_title' => 'Users by Roles',
//   // 'report_type' => 'group_by_string',
//   'report_type' => 'group_by_relationship',
//   'model' => 'App\Models\Role',
//   'relationship_name' => 'users', // represents function user() on Role model
//   'group_by_field' => 'id', // users.name
//   // 'aggregate_function' => 'sum',
//   // 'aggregate_field' => 'name',
//   'chart_type' => 'bar',
// ];
// $rolesByTypeChart = new LaravelChart($rolesByTypeChart_options);
      
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
              'userRecipesTrashedCount',
              'postsCount',
              'userPostsTotalCount',
              'userPostsUnpublishedCount',
              'userPostsPublishedCount',
              'userPostsFutureCount',
              'userPostsTrashedCount',
              'usersPerMonthChart',
              'bugsByTypeChart',
              'featuresByTypeChart',
              // 'rolesByTypeChart',
              // ,
              // 'newBugsCount',
              // 'newFeaturesCount',
              // 'newNotificationsCount'
            )
      );
   }
}

