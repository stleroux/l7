<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialRequest;
use App\Models\Category;
use App\Models\Material;
use Illuminate\Http\Request;
use Gate;
use Session;

class MaterialsController extends Controller
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
      abort_unless(Gate::allows('material-create'), 403);

      $material = New Material();

      return view('admin.materials.create', compact('material'));
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
   public function destroy(Material $material)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-delete'), 403);

      // $material = Material::find($id);

      $material->delete();

      // Set flash data with success message
      Session::flash('success','The material was deleted successfully.');
      // Redirect
      return redirect()->route('admin.materials.index');
   }


// ##################################################################################################################
// # ██████╗ ███████╗██╗     ███████╗████████╗███████╗
// # ██╔══██╗██╔════╝██║     ██╔════╝╚══██╔══╝██╔════╝
// # ██║  ██║█████╗  ██║     █████╗     ██║   █████╗  
// # ██║  ██║██╔══╝  ██║     ██╔══╝     ██║   ██╔══╝  
// # ██████╔╝███████╗███████╗███████╗   ██║   ███████╗
// # ╚═════╝ ╚══════╝╚══════╝╚══════╝   ╚═╝   ╚══════╝
// // Mass Delete selected rows - all selected records
// ##################################################################################################################
//    public function delete(Material $material)
//    {
//       // Check if user has required permission
//       abort_unless(Gate::allows('material-delete'), 403);

//       return view('admin.materials.delete', compact('material'));
//    }


##################################################################################################################
# ███████╗██████╗ ██╗████████╗
# ██╔════╝██╔══██╗██║╚══██╔══╝
# █████╗  ██║  ██║██║   ██║   
# ██╔══╝  ██║  ██║██║   ██║   
# ███████╗██████╔╝██║   ██║   
# ╚══════╝╚═════╝ ╚═╝   ╚═╝   
// Show the form for editing the specified resource
##################################################################################################################
   public function edit(Material $material)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-edit'), 403);

      // $material = Material::find($id);

      return view('admin.materials.edit', compact('material'));
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
      abort_unless(Gate::allows('material-manage'), 403);

      $materials = Material::All();

      return view('admin.materials.index', compact('materials'));
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
   public function store(MaterialRequest $request, Material $material)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-create'), 403);

      $material->name = $request->name;
      $material->type = $request->type;
      $material->manufacturer = $request->manufacturer;
      $material->upc = $request->upc;
      $material->notes = $request->notes;

      if($material->save())
      {
         $notification = [
            'message' => 'The material has been created successfully!', 
            'alert-type' => 'success'
         ];

         if ($request->submit == 'update')
         {
            // return redirect()->back()->with($notification);
            return redirect()->route('admin.materials.index')->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.materials.edit', $material)->with($notification);
         }

         return redirect()->route('admin.materials.index');
      }

      // Session::flash('store','The material was added successfully.');
      return redirect()->route('admin.materials.index')->with($notification);
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
   public function show(Material $material, Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-manage'), 403);

      $material = Material::find($material->id);

      return view('admin.materials.show', compact('material'));
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
   public function update(MaterialRequest $request, Material $material)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-edit'), 403);

      $material->name = $request->name;
      $material->type = $request->type;
      $material->manufacturer = $request->manufacturer;
      $material->upc = $request->upc;
      $material->notes = $request->notes;

      if($material->save())
      {
         $notification = [
            'message' => 'The material has been created successfully!', 
            'alert-type' => 'success'
         ];

         if ($request->submit == 'update')
         {
            // return redirect()->back()->with($notification);
            return redirect()->route('admin.materials.index')->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return redirect()->route('admin.materials.edit', $material)->with($notification);
         }

         return redirect()->route('admin.materials.index');
      }
   }





##################################################################################################################
# ███    ███  █████  ███████ ███████     ██████  ███████ ███████ ████████ ██████   ██████  ██    ██ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██         ██    ██   ██ ██    ██  ██  ██  
# ██ ████ ██ ███████ ███████ ███████     ██   ██ █████   ███████    ██    ██████  ██    ██   ████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██           ██    ██    ██   ██ ██    ██    ██    
# ██      ██ ██   ██ ███████ ███████     ██████  ███████ ███████    ██    ██   ██  ██████     ██    
##################################################################################################################
   public function massDestroy(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-delete'), 403);

      $materials = explode(',', $request->input('mass_destroy_pass_checkedvalue'));
      
      if(!$request->input('mass_destroy_pass_checkedvalue'))
      {

         $notification = array(
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         );

      } else {
         
         foreach ($materials as $material_id) {
            $material = Material::findOrFail($material_id);
            $material->delete();
         }

         $notification = array(
            'message' => 'The selected project materials have been deleted successfully!', 
            'alert-type' => 'success'
         );

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████  ███████ ██      ███████ ████████ ███████ 
# ██   ██ ██      ██      ██         ██    ██      
# ██   ██ █████   ██      █████      ██    █████   
# ██   ██ ██      ██      ██         ██    ██      
# ██████  ███████ ███████ ███████    ██    ███████ 
// Mass Delete selected rows - all selected records
##################################################################################################################
   public function delete($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-delete'), 403);

      $material = Material::onlyTrashed()->findOrFail($id);
      // dd($material);
      
      // delete the user
      $material->forceDelete();

      $notification = array(
         'message' => 'The selected project material has been deleted successfully!', 
         'alert-type' => 'success'
      );

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ███    ███  █████  ███████ ███████     ██████  ███████ ██      ███████ ████████ ███████ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██      ██         ██    ██      
# ██ ████ ██ ███████ ███████ ███████     ██   ██ █████   ██      █████      ██    █████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██      ██      ██         ██    ██      
# ██      ██ ██   ██ ███████ ███████     ██████  ███████ ███████ ███████    ██    ███████ 
##################################################################################################################
   public function massDelete(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-delete'), 403);

      $materials = explode(',', $request->input('mass_delete_pass_checkedvalue'));
      
      if(!$request->input('mass_delete_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be deleted.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($materials as $material_id) {
            $material = Material::onlyTrashed()->findOrFail($material_id);
            $material->forceDelete();
         }

         $notification = [
            'message' => 'The selected project materials have been permanently deleted!',
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ██████  ███████ ███████ ████████  ██████  ██████  ███████ 
# ██   ██ ██      ██         ██    ██    ██ ██   ██ ██      
# ██████  █████   ███████    ██    ██    ██ ██████  █████   
# ██   ██ ██           ██    ██    ██    ██ ██   ██ ██      
# ██   ██ ███████ ███████    ██     ██████  ██   ██ ███████ 
// RESTORE TRASHED FILE
##################################################################################################################
   public function restore($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-manage'), 403);
      
      $material = Material::onlyTrashed()->findOrFail($id);

      // Restore the user
      $material->restore();

      $notification = [
         'message' => 'The project material was restored successfully!', 
         'alert-type' => 'success'
      ];

      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ███    ███  █████  ███████ ███████     ██████  ███████ ███████ ████████  ██████  ██████  ███████ 
# ████  ████ ██   ██ ██      ██          ██   ██ ██      ██         ██    ██    ██ ██   ██ ██      
# ██ ████ ██ ███████ ███████ ███████     ██████  █████   ███████    ██    ██    ██ ██████  █████   
# ██  ██  ██ ██   ██      ██      ██     ██   ██ ██           ██    ██    ██    ██ ██   ██ ██      
# ██      ██ ██   ██ ███████ ███████     ██   ██ ███████ ███████    ██     ██████  ██   ██ ███████ 
##################################################################################################################
   public function massRestore(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-manage'), 403);

      $materials = explode(',', $request->input('mass_restore_pass_checkedvalue'));

      if(!$request->input('mass_restore_pass_checkedvalue'))
      {

         $notification = [
            'message' => 'Please select entries to be restore.', 
            'alert-type' => 'error'
         ];

      } else {
         
         foreach ($materials as $material_id) {
            $material = Material::onlyTrashed()->findOrFail($material_id);
            $material->restore();
         }

         $notification = [
            'message' => 'The selected project materials have been restored successfully!', 
            'alert-type' => 'success'
         ];

      }
      
      return redirect()->back()->with($notification);
   }


##################################################################################################################
# ████████ ██████   █████  ███████ ██   ██ ███████ ██████  
#    ██    ██   ██ ██   ██ ██      ██   ██ ██      ██   ██ 
#    ██    ██████  ███████ ███████ ███████ █████   ██   ██ 
#    ██    ██   ██ ██   ██      ██ ██   ██ ██      ██   ██ 
#    ██    ██   ██ ██   ██ ███████ ██   ██ ███████ ██████  
// Display a list of resources that have been trashed (Soft Deleted)
##################################################################################################################
   public function trashed()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('material-manage'), 403);

      $materials = Material::onlyTrashed()->get();

      return view('admin.materials.index', compact('materials'));
   }


##################################################################################################################
#██╗   ██╗ █████╗ ██╗     ██╗██████╗  █████╗ ████████╗███████╗    ██████╗ ███████╗ ██████╗ ██╗   ██╗███████╗███████╗████████╗
#██║   ██║██╔══██╗██║     ██║██╔══██╗██╔══██╗╚══██╔══╝██╔════╝    ██╔══██╗██╔════╝██╔═══██╗██║   ██║██╔════╝██╔════╝╚══██╔══╝
#██║   ██║███████║██║     ██║██║  ██║███████║   ██║   █████╗      ██████╔╝█████╗  ██║   ██║██║   ██║█████╗  ███████╗   ██║   
#╚██╗ ██╔╝██╔══██║██║     ██║██║  ██║██╔══██║   ██║   ██╔══╝      ██╔══██╗██╔══╝  ██║▄▄ ██║██║   ██║██╔══╝  ╚════██║   ██║   
# ╚████╔╝ ██║  ██║███████╗██║██████╔╝██║  ██║   ██║   ███████╗    ██║  ██║███████╗╚██████╔╝╚██████╔╝███████╗███████║   ██║   
#  ╚═══╝  ╚═╝  ╚═╝╚══════╝╚═╝╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚══════╝    ╚═╝  ╚═╝╚══════╝ ╚══▀▀═╝  ╚═════╝ ╚══════╝╚══════╝   ╚═╝   
##################################################################################################################

   // private function validateRequest()
   // {
   //    return request()->validate([
   //       'name' => 'required',
   //       'type' => 'sometimes',
   //       'manufacturer' => 'sometimes',
   //       'upc' => 'sometimes',
   //       'notes' => 'sometimes',
   //    ]);
   // }




}
