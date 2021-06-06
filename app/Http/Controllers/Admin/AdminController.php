<?php

namespace App\Http\Controllers\Admin;

use App\Charts\BugChart;
use App\Http\Controllers\Controller;
use App\Models\Bug;
use App\Models\Carving;
use App\Models\Feature;
use App\Models\InvoicerClient;
use App\Models\InvoicerInvoice;
use App\Models\InvoicerInvoiceItem;
use App\Models\InvoicerProduct;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Project;
use App\Models\Recipe;
use App\Models\Role;
use App\Models\User;
use Auth;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use OwenIt\Auditing\Audit;

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
		$usersActiveCount = User::approved()->count();
		$usersInactiveCount = User::disabled()->count();

		$rolesCount = Role::count();

		$permissionsCount = Permission::count();

		$projectsCount = Project::count();

		$carvingsCount = Carving::count();

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
		
		// $auditsCount = Audit::count();
		$auditsCount = \DB::table('audits')->count();

		$newBugsCount = Bug::where('status', 1)->count();
		$newFeaturesCount = Feature::where('status', 1)->count();

		//$pendingBugs = Bug::where('status', 2)->count();
		//$notReproduceableBugs = Bug::where('status', 3)->count();
		//$nonIssueBugs = Bug::where('status', 4)->count();
		//$resolvedBugs = Bug::where('status', 10)->count();

		$usersPerMonthChart_options = [
			'chart_title' => 'Users By Months',
			'model' => 'App\Models\User',
			'report_type' => 'group_by_date',
			'group_by_field' => 'created_at',
			'group_by_period' => 'month',
			'chart_type' => 'bar',
			// 'style_class' => ' bg-danger',
		];
		$usersPerMonthChart = new LaravelChart($usersPerMonthChart_options);

		$bugsByTypeChart_options = [
			'chart_title' => 'Bugs By Type',
			'model' => 'App\Models\Bug',
			'report_type' => 'group_by_string',
			'group_by_field' => 'status',
			'chart_type' => 'bar',
		];
		$bugsByTypeChart = new LaravelChart($bugsByTypeChart_options);

		$featuresByTypeChart_options = [
			'chart_title' => 'Features By Type',
			'model' => 'App\Models\Feature',
			'report_type' => 'group_by_string',
			'group_by_field' => 'status',
			'chart_type' => 'bar',
		];
		$featuresByTypeChart = new LaravelChart($featuresByTypeChart_options);

		$carvingsByCategoryChart_options = [
			'chart_title' => 'Carvings By Category',
			'model' => 'App\Models\Carving',
			'report_type' => 'group_by_string',
			'group_by_field' => 'category',
			'chart_type' => 'bar',
		];
		$carvingsByCategoryChart = new LaravelChart($carvingsByCategoryChart_options);

		$recipesByCategoryChart_options = [
			'chart_title' => 'Recipes By Category',
			'model' => 'App\Models\Recipe',
			'report_type' => 'group_by_relationship',
			'relationship_name'  => 'category',
			'group_by_field' => 'name',
			'chart_type' => 'bar',
		];
		$recipesByCategoryChart = new LaravelChart($recipesByCategoryChart_options);

		$projectsByCategoryChart_options = [
			'chart_title' => 'Projects By Category',
			'model' => 'App\Models\Project',
			'report_type' => 'group_by_string',
			'relationship_name'  => 'category',
			'group_by_field' => 'category',
			'chart_type' => 'bar',
		];
		$projectsByCategoryChart = new LaravelChart($projectsByCategoryChart_options);

		$billablesByItemChart_options = [
			'chart_title' => 'Best Selling Items',
			'model' => 'App\Models\InvoicerInvoiceItem',
			'report_type' => 'group_by_string',
			'group_by_field' => 'product',
			'chart_type' => 'bar',
		];
		$billablesByItemChart = new LaravelChart($billablesByItemChart_options);

		$totalEntries = InvoicerInvoice::sum('sub_total');
		$totalEstimates = InvoicerInvoice::where('status' , 'estimate')->sum('sub_total');
		$totalLogged = InvoicerInvoice::where('status' , 'logged')->sum('sub_total');
		$totalInvoiced = InvoicerInvoice::where('status', 'invoiced')->sum('sub_total');
		$totalPaid = InvoicerInvoice::where('status', 'paid')->sum('sub_total');

		$totalDeposits = InvoicerInvoice::sum('deposits');
		$totalDiscounts = InvoicerInvoice::sum('discounts');
		$totalPayments = DB::table('invoicer__invoices')->sum(DB::raw('payments'));
		
		$totalOwed = InvoicerInvoice::where('status', '!=', 'estimate')->sum('total');
		
		$estimatesCount = InvoicerInvoice::where('status','estimate')->count();
		$invoicesCount = InvoicerInvoice::where('status','!=','estimate')->count();
		$billableItemsCount = InvoicerInvoiceItem::count();
		$clientsCount = InvoicerClient::count();
		$productsCount = InvoicerProduct::count();
		
		$products = InvoicerProduct::all()->pluck('details','id');

		$carvings = Carving::all()->pluck('name','id');

		$otherItemsCount = DB::table('invoicer__invoice_items')
                    ->whereNotIn('product', $products)
                    ->whereNotIn('product', $carvings)
                    ->count();

		return view('admin.dashboard.index',
			compact(
				'newBugsCount',
				'newFeaturesCount',
				'usersTotalCount',
				'usersActiveCount',
				'usersInactiveCount',
				'rolesCount',
				'permissionsCount',
				'projectsCount',
				'carvingsCount',
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
				'auditsCount',
				// Charts
				'usersPerMonthChart',
				'bugsByTypeChart',
				'featuresByTypeChart',
				'carvingsByCategoryChart',
				'recipesByCategoryChart',
				'projectsByCategoryChart',
				'billablesByItemChart',
				// 'usersByRoleChart',
				// Invoicer
				'totalEntries',
				'totalEstimates',
				'totalLogged',
				'totalInvoiced',
				'totalPaid',
				'totalPayments',
				'totalDiscounts',
				'totalDeposits',
				'totalOwed',
				'estimatesCount',
				'invoicesCount',
				'billableItemsCount',
				'clientsCount',
				'productsCount',
				'otherItemsCount'
			)
		);
	}


##################################################################################################################
#
#
#
#
#
//
##################################################################################################################
	public function settings()
	{
		// Check if user has required permission
		abort_unless(Gate::allows('admin-settings'), 403);

		return view('admin.settings.index');
	}

}
