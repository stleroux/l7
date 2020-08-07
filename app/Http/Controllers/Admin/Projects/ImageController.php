<?php

namespace App\Http\Controllers\Admin\Projects;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Projects\Project;
use App\Models\Admin\Projects\Image;
use Session;
use Image as Img;
use File;

class ImageController extends Controller
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
      // only allow authenticated users to access these pages
      //$this->middleware('auth', ['except'=>['index','show']]);
      // changing auth to guest would only allow guests to access these pages
      // you can also restrict the actions by adding ['except' => 'name_of_action'] at the end
      $this->middleware('auth');
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
    public function destroy(Request $request, $id)
    {
        // Find the image ID
        $image = Image::find($id);

        // Delete the image(s) and thumbnail(s) from storage
        $image_path = public_path().'/_projects/'.$request->project_id.'/'.$image->name;
        $thumbs_path = public_path().'/_projects/'.$request->project_id.'/thumbs/'.$image->name;
        $fs_path = public_path().'/_projects/'.$request->project_id.'/full_size/'.$image->name;
        unlink($image_path);
        unlink($thumbs_path);
        unlink($fs_path);

        // Check if there are any files left in the thumbs folder, if not, delete the folder
        if (count(glob('_projects/' . $request->project_id . "/thumbs/*")) === 0 ) { // empty
            // Delete the thumbs folder
            File::deleteDirectory(public_path('_projects/'.$request->project_id.'/thumbs/'));
            // Delete the full_size folder
            File::deleteDirectory(public_path('_projects/' . $request->project_id.'/full_size/'));
            // Delete the main folder
            File::deleteDirectory(public_path('_projects/' . $request->project_id));
        }

        // Delete DB entry
        $image->delete($image->id);

        Session::flash('success', 'Image deleted succesfully.');
        return redirect()->back();
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
    public function store(Request $request, $id)
    {
        $rules = [
            'image' => 'required | mimes:jpeg,jpg,png | max:20000',
            'display_name' => 'required',
            'image_description' => 'required',
        ];

        $customMessages = [
            'image.required' => 'Required',
            'display_name.required' => 'Required',
            'image_description.required' => 'Required',            
        ];

        $this->validate($request, $rules, $customMessages);

        $project = Project::find($id);
        // dd($project);
        // dd($request);
        // dd($id);

        // Check if a new image was submitted
        if ($request->hasFile('image')) {
            //Add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
// $resize_image = Image::make($filename->getRealPath());
            
            $image_location = public_path('_projects/' . $id . '/' . $filename);
            $fs_image_location = public_path('_projects/' . $id . '/full_size/' . $filename);
            $thumb_location = public_path('_projects/' . $id . '/thumbs/' . $filename);

            if (!file_exists('_projects/' . $id)) {
                mkdir('_projects/' . $id, 0777, true);
            }
            
            // Check if full_size folder exists under the project's ID
            if (!file_exists('_projects/' . $id . '/full_size/')) {
               mkdir('_projects/' . $id . '/full_size/', 0777, true);
            }

            // Check if Thumbs folder exists under the project's ID
            if (!file_exists('_projects/' . $id . '/thumbs/')) {
               mkdir('_projects/' . $id . '/thumbs/', 0777, true);
            }

// $resize_image->resize(150, 150, function($constraint){
//       $constraint->aspectRatio();
//      })->save($thumb_location . '/' . $filename);

            Img::make($image)
                ->resize(800, 600, function($constraint)
                    {
                        $constraint->aspectRatio();
                    }
                )
                ->orientate()
                ->save($image_location);

            Img::make($image)
                ->resize(250, 250, function($constraint)
                    {
                        $constraint->aspectRatio();
                    }
                )
                ->orientate()
                ->save($thumb_location);

            Img::make($image)
                ->orientate()
                ->save($fs_image_location);
        }

        $img = New Image();
            $img->project_id = $id;
            $img->name = $filename;
            $img->display_name = $request->display_name; 
            $img->description = $request->image_description;
        $img->save();

        Session::flash('success', 'Image added succesfully.');
        return redirect()->back();
    }

##################################################################################################################
# ██    ██ ██████  ██████   █████  ████████ ███████ 
# ██    ██ ██   ██ ██   ██ ██   ██    ██    ██      
# ██    ██ ██████  ██   ██ ███████    ██    █████   
# ██    ██ ██      ██   ██ ██   ██    ██    ██      
#  ██████  ██      ██████  ██   ██    ██    ███████ 
// UPDATE :: Update the specified resource in storage
##################################################################################################################
    public function update(Request $request, $id)
    {
        // dd('update controller');
        $rules = [
            'display_name' => 'required',
            'image_description' => 'required',
        ];

        $customMessages = [
            'display_name.required' => 'Required',
            'image_description.required' => 'Required',            
        ];

        $this->validate($request, $rules, $customMessages);

        $image = Image::findOrFail($id);
        // dd($image);
        // dd($request);
        // dd($id);
            $image->display_name = $request->display_name; 
            $image->description = $request->image_description;
        $image->save();

        Session::flash('success', 'Image added succesfully.');
        return redirect()->back();
    }
}
