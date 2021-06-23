<?php

namespace App\Http\View\Composers;

use App\Models\Bug;
use App\Models\Feature;
use App\Models\Permission;
use App\Models\Project;
use App\Models\Role;
use Illuminate\View\View;

class DashboardComposer
{
	
	public function compose(View $view)
	{

		$rolesCount = Role::count();
		$view->with('rolesCount', $rolesCount);

		$permissionsCount = Permission::count();
		$view->with('permissionsCount', $permissionsCount);

		$projectsCount = Project::count();
		$view->with('projectsCount', $projectsCount);

		// $newBugsCount = Bug::where('status', 1)->count();
		// $view->with('newBugsCount', $newBugsCount);
		
		// $newFeaturesCount = Feature::where('status', 1)->count();
		// $view->with('newFeaturesCount', $newFeaturesCount);

		// $view->with('carvingsCount', Carving::count());

		// $view->with('newNotificationsCount', $newBugsCount + $newFeaturesCount);
	}

}