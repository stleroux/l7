<?php
  
namespace App\Http\Controllers\UI\Carvings\CustomOrder\Sign\HouseNumber;
  
use App\Http\Controllers\Controller;
use App\Models\Carving;
use Illuminate\Http\Request;
  
class NumberController extends Controller
{
	public function create(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.signs.houses.number',compact('carving'));
	}
  

	public function store(Request $request)
	{
		// validate the data
		$request->validate([
			'number' => 'required',
		],
		[
			'number.required' => 'Please make a selection before proceeding.'
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
		$request->session()->put('number', $request->number);
  
		// return redirect()->route('carvings.create.stepFour');
		return redirect()->route('carvings.customOrder.sign.house.font.create',compact('carving'));
	}

}
