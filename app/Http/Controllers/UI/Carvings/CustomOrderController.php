<?php
  
namespace App\Http\Controllers\UI\Carvings;
  
use App\Http\Controllers\Controller;
use App\Models\Carving;
use Illuminate\Http\Request;
use Session;

class CustomOrderController extends Controller
{
	public function create(Request $request)
	{
		$carving = $request->session()->get('carving');
		return view('UI.carvings.customOrders.create',compact('carving'));
	}
  

	public function store(Request $request)
	{
		// validate the data
		$request->validate([
			'item' => 'required',
		],
		[
			'item.required' => 'Please make a selection before proceeding.'
		]);

		$request->session()->put('item', $request->item);
		// return print_r(session()->all());

		if($request->item == 'accessory')
		{
			// return redirect()->route('carvings.customOrders.accessory.step.two');
			return view('UI.carvings.customOrders.accessories.step-two');
		}
		elseif($request->item == 'other')
		{
			// return redirect()->route('carvings.customOrders.other.step.two');
			return view('UI.carvings.customOrders.others.step-two');
		}
		elseif($request->item == 'plaque')
		{
			// return redirect()->route('carvings.customOrders.plaque.step.two');
			return view('UI.carvings.customOrders.plaques.step-two');
		}
		elseif($request->item == 'sign')
		{
			return redirect()->route('carvings.customOrder.sign.type.create');
			// return view('UI/carvings/customOrders/signs/step-two');
		}
		elseif($request->item == 'tray')
		{
			// return redirect()->route('carvings.customOrders.tray.step.two');
			return view('UI.carvings.customOrders.trays.step-two');
		} else {
			dd("HERE");
		}
	}

	public function reset()
	{
		Session::forget('item');
		Session::forget('signType');
		Session::forget('material');
		Session::forget('pattern');
		Session::forget('style');
		Session::forget('size');
		Session::forget('height');
		Session::forget('width');
		Session::forget('number');
		Session::forget('font');
		Session::forget('color');
		Session::forget('finish');
		// dd(session()->all());

		return redirect()->route('carvings.customOrder.create');
	}

}
