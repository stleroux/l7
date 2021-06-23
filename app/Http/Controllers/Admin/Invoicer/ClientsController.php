<?php

namespace App\Http\Controllers\Admin\Invoicer;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\InvoicerClient;
use App\Models\InvoicerInvoice;
// use App\Models\User;
use Config;
use Gate;
use Session;


class ClientsController extends Controller
{

##################################################################################################################
#   ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
#  ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
#  ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
#  ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
#  ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#   ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct()
   {
      $this->middleware('auth');
      // Check if user has required permission
      // abort_unless(Gate::allows('invoicer-client'), 403);
   }


##################################################################################################################
#   ██████╗██████╗ ███████╗ █████╗ ████████╗███████╗
#  ██╔════╝██╔══██╗██╔════╝██╔══██╗╚══██╔══╝██╔════╝
#  ██║     ██████╔╝█████╗  ███████║   ██║   █████╗  
#  ██║     ██╔══██╗██╔══╝  ██╔══██║   ██║   ██╔══╝  
#  ╚██████╗██║  ██║███████╗██║  ██║   ██║   ███████╗
#   ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
# Show the form for creating a new resource
##################################################################################################################
   public function create()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-client'), 403);

      return view('admin.invoicer.clients.create.create');
   }


##################################################################################################################
#  ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
#  ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
#  ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
#  ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
#  ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
#  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
# Remove the specified resource from storage
##################################################################################################################
   public function destroy($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-client'), 403);

      $client = InvoicerClient::find($id);
      
      $client->delete();

      // Set flash data with success message
      Session::flash('danger','The client was deleted successfully.');

      return redirect()->back();
   }


##################################################################################################################
#  ███████╗██████╗ ██╗████████╗
#  ██╔════╝██╔══██╗██║╚══██╔══╝
#  █████╗  ██║  ██║██║   ██║   
#  ██╔══╝  ██║  ██║██║   ██║   
#  ███████╗██████╔╝██║   ██║   
#  ╚══════╝╚═════╝ ╚═╝   ╚═╝   
# Show the form for editing the specified resource
##################################################################################################################
   public function edit($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-client'), 403);

      $client = InvoicerClient::findOrFail($id);
      
      return view('admin.invoicer.clients.edit.edit', compact('client'));
   }


##################################################################################################################
#  ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗
#  ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝
#  ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝ 
#  ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗ 
#  ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗
#  ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝
# Display a list of resources
##################################################################################################################
   public function index()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-client'), 403);

      $clients = InvoicerClient::sortable()->paginate(Config::get('settings.rowsPerPage'));

      return view('admin.invoicer.clients.index.index', compact('clients'));
   }


##################################################################################################################
#  ███████╗███████╗ █████╗ ██████╗  ██████╗██╗  ██╗
#  ██╔════╝██╔════╝██╔══██╗██╔══██╗██╔════╝██║  ██║
#  ███████╗█████╗  ███████║██████╔╝██║     ███████║
#  ╚════██║██╔══╝  ██╔══██║██╔══██╗██║     ██╔══██║
#  ███████║███████╗██║  ██║██║  ██║╚██████╗██║  ██║
#  ╚══════╝╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝╚═╝  ╚═╝
##################################################################################################################
   public function search(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-client'), 403);

      if($request->selection == 'company') {
         $clients = InvoicerClient::where('company_name', 'like', '%' . $request->searchWord . '%')->paginate(10);
      }

      if($request->selection == 'contact') {
         $clients = InvoicerClient::where('contact_name', 'like', '%' . $request->searchWord . '%')->paginate(10);
      }
      
      return view('admin.invoicer.clients.index.index', compact('clients'));
   }


##################################################################################################################
#  ███████╗██╗  ██╗ ██████╗ ██╗    ██╗
#  ██╔════╝██║  ██║██╔═══██╗██║    ██║
#  ███████╗███████║██║   ██║██║ █╗ ██║
#  ╚════██║██╔══██║██║   ██║██║███╗██║
#  ███████║██║  ██║╚██████╔╝╚███╔███╔╝
#  ╚══════╝╚═╝  ╚═╝ ╚═════╝  ╚══╝╚══╝ 
# Display the specified resource
##################################################################################################################
   public function show($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-client'), 403);     

      $client = InvoicerClient::with('invoices')->findOrFail($id);

      // Get all associated Audits
      $audits = $client->audits()->with('user')->orderBy('id','desc')->get();

      return view('admin.invoicer.clients.show.show', compact('client','audits'));
   }



##################################################################################################################
#  ███████╗████████╗ ██████╗ ██████╗ ███████╗
#  ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
#  ███████╗   ██║   ██║   ██║██████╔╝█████╗  
#  ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
#  ███████║   ██║   ╚██████╔╝██║  ██║███████╗
#  ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
# Store a newly created resource in storage
##################################################################################################################
   public function store(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-client'), 403);

      // Client create modal
      if($request->popup)
      {
         $validator = \Validator::make($request->all(), [
               'contact_name' => 'required|unique:invoicer__clients',
            'telephone' => 'required',
            'email' => 'required|email|unique:invoicer__clients'
           ]);

           if ($validator->fails()) {
               return redirect()
                        ->route('admin.invoicer.invoices.create')
                           ->withErrors($validator, 'clientErrors')
                           ->withInput();
           }

           // set a flash message to be displayed on screen
         $notification = [
            'message' => 'The client was successfully added!',
            'alert-type' => 'success'
         ];
         // return redirect('register')->withErrors($validator, 'login');
               // save the data in the database
         $client = new InvoicerClient;
            $client->company_name = $request->company_name;
            $client->contact_name = $request->contact_name;
            $client->address = $request->address;
            $client->telephone = $request->telephone;
         $client->save();

            return redirect()->route('admin.invoicer.invoices.create')->with($notification);
      }

      // Regular client create
      // validate the data
      $this->validate($request, array(
         'contact_name' => 'required',
         'telephone' => 'required',
         'email' => 'required|email|unique:invoicer__clients'
      ));

      // save the data in the database
      $client = new InvoicerClient;
         $client->company_name = $request->company_name;
         $client->contact_name = $request->contact_name;
         $client->address = $request->address;
         $client->city = $request->city;
         $client->state = $request->state;
         $client->zip = $request->zip;
         $client->notes = $request->notes;
         $client->telephone = $request->telephone;
         $client->cell = $request->cell;
         $client->fax = $request->fax;
         $client->email = $request->email;
         $client->website = $request->website;
      $client->save();

      // set a flash message to be displayed on screen
      Session::flash('success','The client was successfully saved!');

      
      return redirect()->route('admin.invoicer.clients');
   }


##################################################################################################################
#  ██╗   ██╗██████╗ ██████╗  █████╗ ████████╗███████╗
#  ██║   ██║██╔══██╗██╔══██╗██╔══██╗╚══██╔══╝██╔════╝
#  ██║   ██║██████╔╝██║  ██║███████║   ██║   █████╗  
#  ██║   ██║██╔═══╝ ██║  ██║██╔══██║   ██║   ██╔══╝  
#  ╚██████╔╝██║     ██████╔╝██║  ██║   ██║   ███████╗
#   ╚═════╝ ╚═╝     ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝
# Update the specified resource in storage
##################################################################################################################
   public function update(Request $request, $id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('invoicer-client'), 403);

      // validate the data
      $this->validate($request, array(
         'contact_name' => 'required',
         'telephone' => 'required',
         // 'email' => 'required|email'
         // 'email' => "required|email|unique:invoicer__clients,email,{$this->invoicerClient->id}"
         // 'email' => 'unique:invoicer__clients,email,' . $this->id
         'email' => 'required|email|unique:invoicer__clients,email,'.$id.',id'
      ));

      $client = InvoicerClient::find($id);
         $client->company_name = $request->company_name;
         $client->contact_name = $request->contact_name;
         $client->address = $request->address;
         $client->city = $request->city;
         $client->state = $request->state;
         $client->zip = $request->zip;
         $client->notes = $request->notes;
         $client->telephone = $request->telephone;
         $client->cell = $request->cell;
         $client->fax = $request->fax;
         $client->email = $request->email;
         $client->website = $request->website;
      $client->save();
      
      // Set flash data with success message
      Session::flash ('info', 'The client was successfully updated!');

      // Redirect
      return redirect()->route('admin.invoicer.clients');
   }

   
}
