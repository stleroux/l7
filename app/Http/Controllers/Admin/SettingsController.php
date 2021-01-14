<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Config;
use Gate;

class SettingsController extends Controller
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
		return view('admin.settings.index');
	}


##################################################################################################################
# ███████ ████████  ██████  ██████  ███████ 
# ██         ██    ██    ██ ██   ██ ██      
# ███████    ██    ██    ██ ██████  █████   
#      ██    ██    ██    ██ ██   ██ ██      
# ███████    ██     ██████  ██   ██ ███████ 
// Store a newly created resource in storage
##################################################################################################################
	// public function store(SettingRequest $request)
	public function store(Request $request)
	{
		// dd($request->authorFormat);

		// validate the data
      $this->validate($request, [
         'appName' => 'required',
         'login_count_warning' => 'required',
         'authorFormat' => 'required',
         'dateFormat' => 'required',
         // 'description' => 'required',
      ]);

		if ($file = file_get_contents(base_path('config/settings.php'))) {

			// App Name
			$file = str_replace(
				"'appName' => '".Config::get('settings.appName')."'",
				"'appName' => '".$request->appName."'",
				$file);

			// App URL
			$file = str_replace(
				"'appURL' => '".Config::get('settings.appURL')."'",
				"'appURL' => '".$request->appURL."'",
				$file);

			// Login Count Warning
			$file = str_replace(
				"'login_count_warning' => '".Config::get('settings.login_count_warning')."'",
				"'login_count_warning' => '".$request->login_count_warning."'",
				$file);

			// Author Format
			$file = str_replace(
				"'authorFormat' => '".Config::get('settings.authorFormat')."'",
				"'authorFormat' => '".$request->authorFormat."'",
				$file);

			// Date Format
			$file = str_replace(
				"'dateFormat' => '".Config::get('settings.dateFormat')."'",
				"'dateFormat' => '".$request->dateFormat."'",
				$file);

			// No Records Found
			$file = str_replace(
				"'noRecordsFound' => '".Config::get('settings.noRecordsFound')."'",
				"'noRecordsFound' => '".$request->noRecordsFound."'",
				$file);

			// Site Version No
			$file = str_replace(
				"'siteVersionNo' => '".Config::get('settings.siteVersionNo')."'",
				"'siteVersionNo' => '".$request->siteVersionNo."'",
				$file);

			// Incoicer Version No
			$file = str_replace(
				"'invoicerVersionNo' => '".Config::get('settings.invoicerVersionNo')."'",
				"'invoicerVersionNo' => '".$request->invoicerVersionNo."'",
				$file);

			// Homepage Blog Count
			$file = str_replace(
				"'homepageBlogCount' => '".Config::get('settings.homepageBlogCount')."'",
				"'homepageBlogCount' => '".$request->homepageBlogCount."'",
				$file);

			// Popular Count
			$file = str_replace(
				"'popularCount' => '".Config::get('settings.popularCount')."'",
				"'popularCount' => '".$request->popularCount."'",
				$file);

			// Rows per table while paginating results
			$file = str_replace(
				"'perPage' => '".Config::get('settings.perPage')."'",
				"'perPage' => '".$request->perPage."'",
				$file);

			// Rows per table while paginating results
			$file = str_replace(
				"'carvings' => '".Config::get('settings.carvings')."'",
				"'carvings' => '".$request->carvings."'",
				$file);

			// Rows per table while paginating results
			$file = str_replace(
				"'projects' => '".Config::get('settings.projects')."'",
				"'projects' => '".$request->projects."'",
				$file);

			// Rows per table while paginating results
			$file = str_replace(
				"'recipes' => '".Config::get('settings.recipes')."'",
				"'recipes' => '".$request->recipes."'",
				$file);

			// Rows per table while paginating results
			$file = str_replace(
				"'blog' => '".Config::get('settings.blog')."'",
				"'blog' => '".$request->blog."'",
				$file);

			// Rows per table while paginating results
			$file = str_replace(
				"'darts' => '".Config::get('settings.darts')."'",
				"'darts' => '".$request->darts."'",
				$file);

			file_put_contents(base_path('config/settings.php'), $file);
		}

		$notification = array(
			'message' => 'The settings have been updated successfully!', 
			'alert-type' => 'success'
		);

   	// return redirect()->route('admin.settings.updated')->with($notification);
   	return redirect()->route('admin.settings.updated');

   }


##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████  ██████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██       ██   ██
# ██    ██ ██████  ██   ██ ███████    ██    █████    ██   ██
# ██    ██ ██      ██   ██ ██   ██    ██    ██       ██   ██
#  ██████  ██      ██████  ██   ██    ██    ███████  ██████ 
// UPDATE :: Update the specified resource in storage
##################################################################################################################
	public function updated()
	{
		return view('admin.settings.updated');
	}

}
