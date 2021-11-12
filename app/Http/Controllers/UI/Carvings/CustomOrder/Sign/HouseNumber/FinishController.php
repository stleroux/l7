<?php
  
namespace App\Http\Controllers\UI\Carvings\CustomOrder\Sign\HouseNumber;
  
use App\Http\Controllers\Controller;
use App\Models\Carving;
use Illuminate\Http\Request;
  
class FinishController extends Controller
{
	public function create(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.signs.houses.finish',compact('carving'));
	}
  

	public function store(Request $request)
	{
		// validate the data
		$request->validate([
			'finish' => 'required',
		],
		[
			'finish.required' => 'Please make a selection before proceesing.'
		]);

		// dd("Post Accessories Step 3");
		// $validatedData = $request->validate([
		//     'stock' => 'required',
		//     'status' => 'required',
		// ]);
  
		// $product = $request->session()->get('product');
		// $product->fill($validatedData);
		// $request->session()->put('product', $product);
		$carving = $request->session()->get('carving');
		$request->session()->put('finish', $request->finish);
  
		// return redirect()->route('carvings.create.stepFour');
		// return ("CONFIRMATION PAGE");
		// return redirect()->route('carvings.customOrders.confirmation',compact('carving'));
		return view('UI.carvings.customOrders.confirmation', compact('carving'));
	}

}
