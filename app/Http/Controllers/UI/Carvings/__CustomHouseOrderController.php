<?php
  
namespace App\Http\Controllers\UI\Carvings;
  
use App\Http\Controllers\Controller;
use App\Models\Carving;
use Illuminate\Http\Request;
  
class CustomHouseOrderController extends Controller
{



	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function HouseStepThree(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.signs.houses.step-three',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postHouseStepThree(Request $request)
	{
		// validate the data
		$request->validate([
			'pattern' => 'required',
		],
		[
			'pattern.required' => 'Please make a selection before proceesing.'
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
		$request->session()->put('pattern', $request->pattern);
  
		// return redirect()->route('carvings.create.stepFour');
		return redirect()->route('carvings.customOrders.house.step.four',compact('carving'));
	}




	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function HouseStepFour(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.houses.step-four',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postHouseStepFour(Request $request)
	{
		// dd("Post Accessories Step 4");
		// $validatedData = $request->validate([
		//     'stock' => 'required',
		//     'status' => 'required',
		// ]);
  
		// $product = $request->session()->get('product');
		// $product->fill($validatedData);
		// $request->session()->put('product', $product);
		$carving = $request->session()->get('carving');
  
		// return redirect()->route('carvings.create.stepFive');
		return redirect()->route('carvings.customOrders.house.step.five',compact('carving'));
	}


	public function HouseStepFive(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.houses.step-five',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postHouseStepFive(Request $request)
	{
		dd("Post Accessories Step 5");
		// $validatedData = $request->validate([
		//     'stock' => 'required',
		//     'status' => 'required',
		// ]);
  
		// $product = $request->session()->get('product');
		// $product->fill($validatedData);
		// $request->session()->put('product', $product);
		$carving = $request->session()->get('carving');
  
		// return redirect()->route('carvings.create.stepFive');
		return redirect()->route('carvings.customOrders.house.step.six',compact('carving'));
	}
}