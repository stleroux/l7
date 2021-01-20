<?php

namespace App\Http\Controllers\Admin;

// use App\Charts\BugChart;
use App\Http\Controllers\Controller;
// use App\Models\Bug;
// use App\Models\Carving;
// use App\Models\Feature;
// use App\Models\InvoicerClient;
// use App\Models\InvoicerInvoice;
// use App\Models\InvoicerInvoiceItem;
// use App\Models\InvoicerProduct;
// use App\Models\Permission;
// use App\Models\Post;
// use App\Models\Project;
// use App\Models\Recipe;
// use App\Models\Role;
// use App\Models\User;
use Auth;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class FrontendController extends Controller
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
		$greeting   = DB::table('general')->where('name', '=', 'greeting')->first();
      $newUser    = DB::table('general')->where('name', '=', 'newUser')->first();
      $carvings   = DB::table('general')->where('name', '=', 'carvings')->first();
      $projects   = DB::table('general')->where('name', '=', 'projects')->first();
      $recipes    = DB::table('general')->where('name', '=', 'recipes')->first();
      $blogs      = DB::table('general')->where('name', '=', 'blog')->first();
		// dd($greeting);

		return view('admin.frontend.general.index', compact('greeting','newUser','carvings','projects','recipes','blogs'));
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
   // public function edit(Material $material)
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('admin-dashboard'), 403);

   //    // $material = Material::find($id);

   //    return view('admin.frontend.homepage');
   // }


##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██      
# ██    ██ ██████  ██   ██ ███████    ██    █████   
# ██    ██ ██      ██   ██ ██   ██    ██    ██      
#  ██████  ██      ██████  ██   ██    ██    ███████ 
// UPDATE :: Update the specified resource in storage
##################################################################################################################
    public function update(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('admin-dashboard'), 403);

      // $item = DB::table('general')->where('name', '=', $request->name)->first();
      // dd($item);
      // Bug::findOrFail($bug->id);
      // dd($bug);

      // validate the data
      $this->validate($request, [
         'title' => 'required|min:5',
         'body' => 'required',
      ]);

      // assign values from form fields
      // $item->title = $request->title;
      // $item->body = $request->body;
      // dd($bug);
      // Save the data
      // $item->save();


DB::table('general')->where('name', $request->name)->update(['title' => $request->title, 'body'=>$request->body]);



      $notification = [
         'message' => 'The item has been updated successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'continue') {
         return redirect()->back()->with($notification);
      }

      // return redirect()->route('admin.bugs.index')->with($notification);
      return redirect()->back();
   }


}
