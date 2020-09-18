<?php

namespace App\Http\Controllers\Admin\Invoicer;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\InvoicerProduct;
use Config;
use Gate;
use Session;

class ProductsController extends Controller
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
	public function create()
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-product'), 403);

		return view('admin.invoicer.products.create.create');
	}


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
	public function destroy($id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-product'), 403);

		$product = InvoicerProduct::find($id);
		$product->delete();

		// Set flash data with success message
		$notification = [
			'message' => 'The product was deleted successfully.', 
			'alert-type' => 'success'
		];

		// Redirect
		return redirect()->route('admin.invoicer.products')->with($notification);
	}


##################################################################################################################
# ███████╗██████╗ ██╗████████╗
# ██╔════╝██╔══██╗██║╚══██╔══╝
# █████╗  ██║  ██║██║   ██║   
# ██╔══╝  ██║  ██║██║   ██║   
# ███████╗██████╔╝██║   ██║   
# ╚══════╝╚═════╝ ╚═╝   ╚═╝   
// Show the form for editing the specified resource
##################################################################################################################
	public function edit($id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-product'), 403);	  

		$product = InvoicerProduct::findOrFail($id);
		
		return view('admin.invoicer.products.edit.edit', compact('product'));
	}


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
		abort_unless(Gate::allows('invoicer-product'), 403);

		$products = InvoicerProduct::sortable()
			->orderBy('code','asc')
			->paginate(Config::get('settings.rowsPerPage'));

		return view('admin.invoicer.products.index.index', compact('products'));
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
		abort_unless(Gate::allows('invoicer-product'), 403);

		if($request->selection == 'code') {
			$products = InvoicerProduct::where('code', 'like', '%' . $request->searchWord . '%')->paginate(10);
		}

		if($request->selection == 'details') {
			$products = InvoicerProduct::where('details', 'like', '%' . $request->searchWord . '%')->paginate(10);
		}
		
		return view('admin.invoicer.products.index.index', compact('products'));
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
		abort_unless(Gate::allows('invoicer-product'), 403);

		$product = InvoicerProduct::findOrFail($id);

		return view('admin.invoicer.products.show.show', compact('product'));
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
	public function store(Request $request)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-product'), 403);

		// validate the data
		$this->validate($request, array(
			'code' => 'required|unique:invoicer__products,code',
			'details' => 'required',
		));

		// save the data in the database
		$product = new InvoicerProduct;
			$product->code = $request->code;
			$product->details = $request->details;
		$product->save();

		// set a flash message to be displayed on screen
		$notification = array(
		   'message' => 'The product was added successfully.',
		   'alert-type' => 'success'
		);

		// redirect to another page
	   return redirect()->route('admin.invoicer.products')->with($notification);
	}


##################################################################################################################
# ██╗   ██╗██████╗ ██████╗  █████╗ ████████╗███████╗
# ██║   ██║██╔══██╗██╔══██╗██╔══██╗╚══██╔══╝██╔════╝
# ██║   ██║██████╔╝██║  ██║███████║   ██║   █████╗  
# ██║   ██║██╔═══╝ ██║  ██║██╔══██║   ██║   ██╔══╝  
# ╚██████╔╝██║     ██████╔╝██║  ██║   ██║   ███████╗
#  ╚═════╝ ╚═╝     ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝
// UPDATE :: Update the specified resource in storage
##################################################################################################################
	public function update(Request $request, $id)
	{
		// Check if user has required permission
		abort_unless(Gate::allows('invoicer-product'), 403);
		
		// validate the data
		$this->validate($request, array(
			'code' => 'required|unique:invoicer__products,code,' . $id,
			// 'code' => 'required',
			'details' => 'required',
		));

		$product = InvoicerProduct::find($id);
			$product->code = $request->code;
			$product->details = $request->details;
		$product->save();
		
		// Set flash data with success message
		$notification = array(
		   'message' => 'The product was updated successfully!',
		   'alert-type' => 'success'
		);

		// Redirect
		return redirect()->route('admin.invoicer.products')->with($notification);
	}


}
