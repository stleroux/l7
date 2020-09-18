<?php

namespace App\Http\Controllers\Admin\Invoicer;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\InvoicerClient;
use App\Models\User;
use Config;
use Gate;
use Session;


class ClientsController extends Controller
{

##################################################################################################################
#  ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
# ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
# ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
# ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
# ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#  ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct()
   {
		$this->middleware('auth');
		// Check if user has required permission
		// abort_unless(Gate::allows('invoicer-client'), 403);
   }


##################################################################################################################
#  ██████╗██████╗ ███████╗ █████╗ ████████╗███████╗
# ██╔════╝██╔══██╗██╔════╝██╔══██╗╚══██╔══╝██╔════╝
# ██║     ██████╔╝█████╗  ███████║   ██║   █████╗  
# ██║     ██╔══██╗██╔══╝  ██╔══██║   ██║   ██╔══╝  
# ╚██████╗██║  ██║███████╗██║  ██║   ██║   ███████╗
#  ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
// Show the form for creating a new resource
##################################################################################################################
	// public function create()
	// {
	// 	// Check if user has required permission
	// 	if(!checkPerm('invoicer_client_create')) { abort(401, 'Unauthorized Access'); }

	// 	return view('invoicer.clients.create');
	// }


##################################################################################################################
# ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
# ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
# ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
# ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
# ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
# ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
// Remove the specified resource from storage
// Used in the index page and trashAll action to soft delete multiple records
##################################################################################################################
	// public function destroy($id)
	// {
	// 	// Check if user has required permission
	//   if(!checkPerm('invoicer_client_delete')) { abort(401, 'Unauthorized Access'); }

	// 	$client = Client::find($id);
	// 	$client->delete();

	// 	// Set flash data with success message
	// 	Session::flash('danger','The client was deleted successfully.');

	// 	// Redirect
	// 	return redirect()->route('invoicer.clients');
	// }


##################################################################################################################
# ███████╗██████╗ ██╗████████╗
# ██╔════╝██╔══██╗██║╚══██╔══╝
# █████╗  ██║  ██║██║   ██║   
# ██╔══╝  ██║  ██║██║   ██║   
# ███████╗██████╔╝██║   ██║   
# ╚══════╝╚═════╝ ╚═╝   ╚═╝   
// Show the form for editing the specified resource
##################################################################################################################
	// public function edit($id)
	// {
	// 	// Check if user has required permission
	//   if(!checkPerm('invoicer_client_edit')) { abort(401, 'Unauthorized Access'); }

	// 	$client = Client::findOrFail($id);
		
	// 	return view('invoicer.clients.edit', compact('client'));
	// }


##################################################################################################################
# ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗
# ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝
# ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝ 
# ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗ 
# ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗
# ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝
// Display a list of resources
##################################################################################################################
	public function index()
	{
		// Check if user has required permission
	  	abort_unless(Gate::allows('invoicer-client'), 403);

	  // $clients = User::where('invoicer_client', 1)->paginate(Config::get('settings.rowsPerPage'));
	  $clients = User::sortable()->with('invoices')->where('company_name', '!=', '')->paginate(Config::get('settings.rowsPerPage'));

		return view('admin.invoicer.clients.index.index', compact('clients'));
	}


##################################################################################################################
# ███████╗███████╗ █████╗ ██████╗  ██████╗██╗  ██╗
# ██╔════╝██╔════╝██╔══██╗██╔══██╗██╔════╝██║  ██║
# ███████╗█████╗  ███████║██████╔╝██║     ███████║
# ╚════██║██╔══╝  ██╔══██║██╔══██╗██║     ██╔══██║
# ███████║███████╗██║  ██║██║  ██║╚██████╗██║  ██║
# ╚══════╝╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝
##################################################################################################################
	public function search(Request $request)
	{
		// Check if user has required permission
	  	abort_unless(Gate::allows('invoicer-client'), 403);

		if($request->selection == 'company') {
			$clients = User::where('company_name', 'like', '%' . $request->searchWord . '%')->paginate(10);
		}

		if($request->selection == 'contact') {
			$clients = User::
				where('username', 'like', '%' . $request->searchWord . '%')
				->Orwhere('first_name', 'like', '%' . $request->searchWord . '%')
				->Orwhere('last_name', 'like', '%' . $request->searchWord . '%')
				->paginate(10);
		}
		
		return view('admin.invoicer.clients.index.index', compact('clients'));
	}


##################################################################################################################
# ███████╗██╗  ██╗ ██████╗ ██╗    ██╗
# ██╔════╝██║  ██║██╔═══██╗██║    ██║
# ███████╗███████║██║   ██║██║ █╗ ██║
# ╚════██║██╔══██║██║   ██║██║███╗██║
# ███████║██║  ██║╚██████╔╝╚███╔███╔╝
# ╚══════╝╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ 
// Display the specified resource
##################################################################################################################
	public function show($id)
	{
		// Check if user has required permission
	  	abort_unless(Gate::allows('invoicer-client'), 403);	  

		// $client = Client::findOrFail($id);
		$client = User::findOrFail($id);
		// dd($client);

		return view('admin.invoicer.clients.show.show', compact('client'));
	}


##################################################################################################################
# ███████╗████████╗ ██████╗ ██████╗ ███████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗  
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
// Store a newly created resource in storage
##################################################################################################################
	// public function store(Request $request)
	// {
	// 	// validate the data
	// 	$this->validate($request, array(
	// 		'company_name' => 'required',
	// 		'contact_name' => 'required',
	// 		'email' => 'required|email'
	// 	));

	// 	// save the data in the database
	// 	$client = new client;
	// 		$client->company_name = $request->company_name;
	// 		$client->contact_name = $request->contact_name;
	// 		$client->address = $request->address;
	// 		$client->city = $request->city;
	// 		$client->state = $request->state;
	// 		$client->zip = $request->zip;
	// 		$client->notes = $request->notes;
	// 		$client->telephone = $request->telephone;
	// 		$client->cell = $request->cell;
	// 		$client->fax = $request->fax;
	// 		$client->email = $request->email;
	// 		$client->website = $request->website;
	// 		// $client->user_id = 1;
	// 	$client->save();

	// 	// set a flash message to be displayed on screen
	// 	Session::flash('success','The client was successfully saved!');

	// 	// redirect to another page
	//    return redirect()->route('invoicer.clients');
	//    // return redirect()->route('invoicer.clients')->with('success','The client was successfully saved!');
	// }


##################################################################################################################
# ██╗   ██╗██████╗ ██████╗  █████╗ ████████╗███████╗
# ██║   ██║██╔══██╗██╔══██╗██╔══██╗╚══██╔══╝██╔════╝
# ██║   ██║██████╔╝██║  ██║███████║   ██║   █████╗  
# ██║   ██║██╔═══╝ ██║  ██║██╔══██║   ██║   ██╔══╝  
# ╚██████╔╝██║     ██████╔╝██║  ██║   ██║   ███████╗
#  ╚═════╝ ╚═╝     ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝
// UPDATE :: Update the specified resource in storage
##################################################################################################################
	// public function update(Request $request, $id)
	// {
	// 	// validate the data
	// 	$this->validate($request, array(
	// 		'company_name' => 'required',
	// 		'contact_name' => 'required',
	// 		'email' => 'required|email'
	// 	));

	// 	$client = Client::find($id);
	// 		$client->company_name = $request->company_name;
	// 		$client->contact_name = $request->contact_name;
	// 		$client->address = $request->address;
	// 		$client->city = $request->city;
	// 		$client->state = $request->state;
	// 		$client->zip = $request->zip;
	// 		$client->notes = $request->notes;
	// 		$client->telephone = $request->telephone;
	// 		$client->cell = $request->cell;
	// 		$client->fax = $request->fax;
	// 		$client->email = $request->email;
	// 		$client->website = $request->website;
	// 	$client->save();
		
	// 	// Set flash data with success message
	// 	Session::flash ('info', 'The client was successfully updated!');

	// 	// Redirect
	// 	return redirect()->route('invoicer.clients');
	// }

	
}