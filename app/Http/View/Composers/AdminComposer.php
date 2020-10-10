<?php

namespace App\Http\View\Composers;

use App\Models\Bug;
use App\Models\Feature;
use Illuminate\View\View;

class AdminComposer
{
	
	public function compose(View $view)
	{
		$newBugsCount = Bug::where('status', 1)->count();
		$view->with('newBugsCount', $newBugsCount);
		
		$newFeaturesCount = Feature::where('status', 1)->count();
		$view->with('newFeaturesCount', $newFeaturesCount);

		$view->with('newNotificationsCount', $newBugsCount + $newFeaturesCount);
	}

}