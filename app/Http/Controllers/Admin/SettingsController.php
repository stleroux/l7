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

			//
			$file = str_replace(
				"'carvings' => '".Config::get('settings.carvings')."'",
				"'carvings' => '".$request->carvings."'",
				$file);

			//
			$file = str_replace(
				"'projects' => '".Config::get('settings.projects')."'",
				"'projects' => '".$request->projects."'",
				$file);

			//
			$file = str_replace(
				"'recipes' => '".Config::get('settings.recipes')."'",
				"'recipes' => '".$request->recipes."'",
				$file);

			//
			$file = str_replace(
				"'blog' => '".Config::get('settings.blog')."'",
				"'blog' => '".$request->blog."'",
				$file);

			//
			$file = str_replace(
				"'darts' => '".Config::get('settings.darts')."'",
				"'darts' => '".$request->darts."'",
				$file);

			file_put_contents(base_path('config/settings.php'), $file);
		}


		if ($file = file_get_contents(base_path('config/invoicer.php'))) {

			$file = str_replace(
				"'companyName' => '".Config::get('invoicer.companyName')."'",
				"'companyName' => '".$request->companyName."'",
				$file);

			$file = str_replace(
				"'address_1' => '".Config::get('invoicer.address_1')."'",
				"'address_1' => '".$request->address_1."'",
				$file);

			$file = str_replace(
				"'address_2' => '".Config::get('invoicer.address_2')."'",
				"'address_2' => '".$request->address_2."'",
				$file);

			$file = str_replace(
				"'city' => '".Config::get('invoicer.city')."'",
				"'city' => '".$request->city."'",
				$file);

			$file = str_replace(
				"'state' => '".Config::get('invoicer.state')."'",
				"'state' => '".$request->state."'",
				$file);

			$file = str_replace(
				"'zip' => '".Config::get('invoicer.zip')."'",
				"'zip' => '".$request->zip."'",
				$file);

			$file = str_replace(
				"'telephone' => '".Config::get('invoicer.telephone')."'",
				"'telephone' => '".$request->telephone."'",
				$file);

			$file = str_replace(
				"'fax' => '".Config::get('invoicer.fax')."'",
				"'fax' => '".$request->fax."'",
				$file);

			$file = str_replace(
				"'email' => '".Config::get('invoicer.email')."'",
				"'email' => '".$request->email."'",
				$file);

			$file = str_replace(
				"'website' => '".Config::get('invoicer.website')."'",
				"'website' => '".$request->website."'",
				$file);

			$file = str_replace(
				"'wsibNo' => '".Config::get('invoicer.wsibNo')."'",
				"'wsibNo' => '".$request->wsibNo."'",
				$file);

			$file = str_replace(
				"'wsibRate' => '".Config::get('invoicer.wsibRate')."'",
				"'wsibRate' => '".$request->wsibRate."'",
				$file);

			$file = str_replace(
				"'hstNo' => '".Config::get('invoicer.hstNo')."'",
				"'hstNo' => '".$request->hstNo."'",
				$file);

			$file = str_replace(
				"'hstRate' => '".Config::get('invoicer.hstRate')."'",
				"'hstRate' => '".$request->hstRate."'",
				$file);

			$file = str_replace(
				"'incomeTaxRate' => '".Config::get('invoicer.incomeTaxRate')."'",
				"'incomeTaxRate' => '".$request->incomeTaxRate."'",
				$file);

			$file = str_replace(
				"'version' => '".Config::get('invoicer.version')."'",
				"'version' => '".$request->version."'",
				$file);

			file_put_contents(base_path('config/invoicer.php'), $file);
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
