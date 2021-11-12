<?php
  
namespace App\Http\Controllers\UI\Carvings;
  
use App\Http\Controllers\Controller;
use App\Models\Carving;
use Illuminate\Http\Request;
  
class CustomAccessoryOrderController extends Controller
{

	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function accessoryStepTwo(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.accessories.step-two',compact('carving'));
	}


	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postAccessoryStepTwo(Request $request)
	{
		// dd("Post Accessories Step 2");
		// $validatedData = $request->validate([
		//     'stock' => 'required',
		//     'status' => 'required',
		// ]);
  
		// $product = $request->session()->get('product');
		// $product->fill($validatedData);
		// $request->session()->put('product', $product);
		$carving = $request->session()->get('carving');
  
		// return redirect()->route('carvings.create.stepThree');
		return redirect()->route('carvings.customOrders.accessories.step.three',compact('carving'));
	}

	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function accessoryStepThree(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.accessories.step-three',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postAccessoryStepThree(Request $request)
	{
		// dd("Post Accessories Step 3");
		// $validatedData = $request->validate([
		//     'stock' => 'required',
		//     'status' => 'required',
		// ]);
  
		// $product = $request->session()->get('product');
		// $product->fill($validatedData);
		// $request->session()->put('product', $product);
		$carving = $request->session()->get('carving');
  
		// return redirect()->route('carvings.create.stepFour');
		return redirect()->route('carvings.customOrders.accessories.step.four',compact('carving'));
	}




	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function accessoryStepFour(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.accessories.step-four',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postAccessoryStepFour(Request $request)
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
		return redirect()->route('carvings.customOrders.accessories.step.five',compact('carving'));
	}


	public function accessoryStepFive(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.accessories.step-five',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postAccessoryStepFive(Request $request)
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
		return redirect()->route('carvings.customOrders.accessories.step.six',compact('carving'));
	}
}