<?php

namespace App\Http\Controllers\Admin\Faqs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Carving;
use App\Models\CarvingImage;
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
        $image = CarvingImage::find($id);

        // Delete the image(s) and thumbnail(s) from storage
        $image_path = public_path().'/_carvings/'.$request->carving_id.'/'.$image->name;
        $thumbs_path = public_path().'/_carvings/'.$request->carving_id.'/thumbs/'.$image->name;
        $fs_path = public_path().'/_carvings/'.$request->carving_id.'/full_size/'.$image->name;
        unlink($image_path);
        unlink($thumbs_path);
        unlink($fs_path);

        // Check if there are any files left in the thumbs folder, if not, delete the folder
        if (count(glob('_carvings/' . $request->carving_id . "/thumbs/*")) === 0 ) { // empty
            // Delete the thumbs folder
            File::deleteDirectory(public_path('_carvings/'.$request->carving_id.'/thumbs/'));
            // Delete the full_size folder
            File::deleteDirectory(public_path('_carvings/' . $request->carving_id.'/full_size/'));
            // Delete the main folder
            File::deleteDirectory(public_path('_carvings/' . $request->carving_id));
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
            'image' => 'required | image | max:20000',
            'display_name' => 'required',
            'image_description' => 'required',
        ];

        $customMessages = [
            'image.required' => 'Required',
            'display_name.required' => 'Required',
            'image_description.required' => 'Required',            
        ];

        $this->validate($request, $rules, $customMessages);

        $carving = Carving::find($id);
        // dd($carving);
        // dd($request);
        // dd($id);

        // Check if a new image was submitted
        if ($request->hasFile('image')) {
            //Add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
// $resize_image = Image::make($filename->getRealPath());
            
            $image_location = public_path('_carvings/' . $id . '/' . $filename);
            $fs_image_location = public_path('_carvings/' . $id . '/full_size/' . $filename);
            $thumb_location = public_path('_carvings/' . $id . '/thumbs/' . $filename);

            if (!file_exists('_carvings/' . $id)) {
                mkdir('_carvings/' . $id, 0777, true);
            }
            
            // Check if full_size folder exists under the carving's ID
            if (!file_exists('_carvings/' . $id . '/full_size/')) {
               mkdir('_carvings/' . $id . '/full_size/', 0777, true);
            }

            // Check if Thumbs folder exists under the carving's ID
            if (!file_exists('_carvings/' . $id . '/thumbs/')) {
               mkdir('_carvings/' . $id . '/thumbs/', 0777, true);
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

        $img = New CarvingImage();
            $img->carving_id = $id;
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
