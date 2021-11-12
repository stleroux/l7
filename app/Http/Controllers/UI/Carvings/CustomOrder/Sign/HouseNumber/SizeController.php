<?php
  
namespace App\Http\Controllers\UI\Carvings\CustomOrder\Sign\HouseNumber;
  
use App\Http\Controllers\Controller;
use App\Models\Carving;
use Illuminate\Http\Request;
  
class SizeController extends Controller
{
	public function create(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.signs.houses.size',compact('carving'));
	}
  

	public function store(Request $request)
	{
		// validate the data
		$request->validate([
			'height' => 'required',
			'width' => 'required'
		],
		[
			'height.required' => 'Please enter the desired height before proceeding.',
			'width.required' => 'Please enter the desired width before proceeding.'
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
		$request->session()->put('height', $request->height);
		$request->session()->put('width', $request->width);
  
		// return redirect()->route('carvings.create.stepFour');
		return redirect()->route('carvings.customOrder.sign.house.number.create',compact('carving'));
	}

}
