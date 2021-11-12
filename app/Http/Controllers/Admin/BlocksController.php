<?php

namespace App\Http\Controllers\Admin;

// use App\Charts\BugChart;
use App\Http\Controllers\Controller;
use App\Models\Block;
use Auth;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BlockRequest;
// use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class BlocksController extends Controller
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
   public function index(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('block-manage'), 403);

      $blocks = Block::all();

      return view('admin.blocks.index', compact('blocks'));
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
      abort_unless(Gate::allows('block-create'), 403);

      $block = New Block();

      return view('admin.blocks.create', compact('block'));
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
   public function store(BlockRequest $request, Block $block)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('block-create'), 403);

      // validate the data
      // $this->validate($request, [
      // 'page' => 'required',
      // "name" => 'required|unique:blocks,name',
      // 'title' => 'required|min:5',
      // 'body' => 'required',
      // ]);

         // assign values from form fields
         $block->title = $request->title;
         $block->page = $request->page;
         $block->name = $request->name;
         $block->body = $request->body;

      // Save the data
      if($block->save())
      {
         $notification = [
            'message' => 'The block has been created successfully!', 
            'alert-type' => 'success'
         ];

         if ($request->submit == 'new')
         {
            return redirect()->back()->with($notification);
         }

         if ($request->submit == 'continue')
         {
            return view('admin.blocks.edit', compact('block'))->with($notification);
         }

      }

      return redirect()->route('admin.blocks.index')->with($notification);
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
   public function show(Block $block)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('block-show'), 403);

      return view('admin.blocks.show', compact('block'));
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
   public function edit(Block $block)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('block-edit'), 403);

      return view('admin.blocks.edit', compact('block'));
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
    public function update(BlockRequest $request, Block $block)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('block-edit'), 403);

      // validate the data
      // $this->validate($request, [
      //    'page' => 'required',
      //    'name' => 'required|unique:blocks,name,'.$block->id,
      //    'title' => 'required|min:5',
      //    'body' => 'required',
      // ]);

      // assign values from form fields
      $block->title = $request->title;
      $block->page = $request->page;
      $block->name = $request->name;
      $block->body = $request->body;

      // Save the data
      $block->save();

      $notification = [
         'message' => 'The item has been updated successfully!', 
         'alert-type' => 'success'
      ];

      if ($request->submit == 'continue') {
         return redirect()->back()->with($notification);
      }

      return redirect()->route('admin.blocks.index')->with($notification);
   }


}
