<?php
  
namespace App\Http\Controllers\UI\Carvings;
  
use App\Http\Controllers\Controller;
use App\Models\Carving;
use Illuminate\Http\Request;
  
class CustomSignOrderController extends Controller
{

	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function SignStepTwo(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.signs.step-two',compact('carving'));
	}


	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postSignStepTwo(Request $request)
	{
		// validate the data
		$request->validate([
			'signType' => 'required',
		],
		[
			'signType.required' => 'Please make a selection before proceesing.'
		]);

		// dd("Post Accessories Step 2");
		// $validatedData = $request->validate([
		//     'stock' => 'required',
		//     'status' => 'required',
		// ]);
  
		// $product = $request->session()->get('product');
		// $product->fill($validatedData);
		// $request->session()->put('product', $product);
		$carving = $request->session()->get('carving');
		$request->session()->put('signType', $request->signType);
  
		// return redirect()->route('carvings.create.stepThree');
		// return redirect()->route('carvings.customOrders.signs.houses.step.three',compact('carving'));


		if($request->signType == 'house')
		{
			return redirect()->route('carvings.customOrders.signs.houses.step.three');
		}
		elseif($request->signType == 'simple')
		{
			return redirect()->route('carvings.customOrders.signs.simple.step.three');
		}
		elseif($request->signType == 'graphic')
		{
			return redirect()->route('carvings.customOrders.signs.graphic.step.three');
		} else {
			dd("HERE");
		}
	}

	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function SignStepThree(Request $request)
	{
		$carving = $request->session()->get('carving');
  	dd("TEST");
		return view('UI.carvings.customOrders.signs.houses.step-three',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postSignStepThree(Request $request)
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
		$request->session()->put('pattern', $request->pattern);
  
		// return redirect()->route('carvings.create.stepFour');
		return redirect()->route('carvings.customOrders.sign.step.four',compact('carving'));
	}




	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function SignStepFour(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.signs.step-four',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postSignStepFour(Request $request)
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
		return redirect()->route('carvings.customOrders.sign.step.five',compact('carving'));
	}


	public function SignStepFive(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.signs.step-five',compact('carving'));
	}
  
	/**
	 * Show the step One Form for creating a new product.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function postSignStepFive(Request $request)
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
		return redirect()->route('carvings.customOrders.sign.step.six',compact('carving'));
	}
}