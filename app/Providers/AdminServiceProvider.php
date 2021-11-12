<?php

namespace App\Providers;

use App\Models\Bug;
use App\Models\Carving;
use App\Models\Feature;
use App\Models\InvoicerInvoice;
use App\Models\Permission;
use App\Models\Project;
use App\Models\Role;
use Illuminate\Support\ServiceProvider; // We are going to use the User model

class AdminServiceProvider extends ServiceProvider
{
	public function boot()
	{
		// $users = User::orderBy('created_at', 'desc')->take(10)->get(); // Get the last 10 registered users
		// view()->share('lastUsers', $users); // Pass the $users variable to all views
		view()->share('newBugsCount', Bug::where('status', 1)->count());
		view()->share('newFeaturesCount', Feature::where('status', 1)->count());
		view()->share('carvingsCount', Carving::count());
		view()->share('rolesCount', Role::count());
		view()->share('permissionsCount', Permission::count());
		view()->share('projectsCount', Project::count());

		view()->share('quotesCount', InvoicerInvoice::where('status','quote')->count());
		view()->share('estimatesCount', InvoicerInvoice::where('status','estimate')->count());
		view()->share('invoicedCount', InvoicerInvoice::where('status','invoiced')->count());
		view()->share('paidCount', InvoicerInvoice::where('status','paid')->count());
		view()->share('workOrdersCount', InvoicerInvoice::where('status','workOrder')->count());
		view()->share('completedCount', InvoicerInvoice::where('status','completed')->count());
		view()->share('shippedCount', InvoicerInvoice::where('status','shipped')->count());
		view()->share('pickedUpCount', InvoicerInvoice::where('status','pickedUp')->count());
		view()->share('canceledCount', InvoicerInvoice::where('status','canceled')->count());
		view()->share('invoicesCount', InvoicerInvoice::where('status','!=','estimate')->count());

		// $view->with('rolesCount', $rolesCount);
		// $view->with('permissionsCount', $permissionsCount);
		// $view->with('projectsCount', $projectsCount);

	}
	

	public function register()
	{

	}
}