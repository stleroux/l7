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

		$newBugs = Bug::where('status', 1)->count();
		$pendingBugs = Bug::where('status', 2)->count();
		$notReproduceableBugs = Bug::where('status', 3)->count();
		$nonIssueBugs = Bug::where('status', 4)->count();
		$resolvedBugs = Bug::where('status', 10)->count();

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

		$totalSales = InvoicerInvoice::sum('sub_total');
		$totalPayments = DB::table('invoicer__invoices')->sum(DB::raw('payments + deposits'));
		$totalDiscounts = InvoicerInvoice::sum('discounts');
		$totalOwed = InvoicerInvoice::sum('total');
		$invoicesCount = InvoicerInvoice::count();
		$billableItemsCount = InvoicerInvoiceItem::count();
		$clientsCount = InvoicerClient::count();
		$productsCount = InvoicerProduct::count();
		
		$products = InvoicerProduct::all()->pluck('details','id');
		// dd($products);
		$carvings = Carving::all()->pluck('name','id');
		// dd($carvings);
		$otherItemsCount = DB::table('invoicer__invoice_items')
                    ->whereNotIn('product', $products)
                    ->whereNotIn('product', $carvings)
                    ->count();
      // dd($otherItemsCount);


		return view('admin.dashboard.index',
			compact(
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
				'usersPerMonthChart',
				'bugsByTypeChart',
				'featuresByTypeChart',
				'totalSales',
				'totalPayments',
				'totalDiscounts',
				'totalOwed',
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
