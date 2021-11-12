<?php
  
namespace App\Http\Controllers\UI\Carvings\CustomOrder\Sign;
  
use App\Http\Controllers\Controller;
use App\Models\Carving;
use Illuminate\Http\Request;
  
class TypeController extends Controller
{
	public function create(Request $request)
	{
		$carving = $request->session()->get('carving');
  
		return view('UI.carvings.customOrders.signs.create',compact('carving'));
	}


	public function store(Request $request)
	{
		// validate the data
		$request->validate([
			'signType' => 'required',
		],
		[
			'signType.required' => 'Please make a selection before proceeding.'
		]);

		$carving = $request->session()->get('carving');
		$request->session()->put('signType', $request->signType);

		if($request->signType == 'house')
		{
			return redirect()->route('carvings.customOrder.sign.house.material.create');
		}
		elseif($request->signType == 'simple')
		{
			// dd("HERE");
			return redirect()->route('carvings.customOrder.sign.simple.material.create');
		}
		elseif($request->signType == 'graphic')
		{
			return redirect()->route('carvings.customOrder.sign.graphic.material.create');
		} else {
			dd("HERE");
		}
	}
	
}
