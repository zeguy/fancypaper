<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreakevenController extends Controller {

	public function display() {
		return view('prints.breakeven')->with([
			'message' => session('message')
		]);
	}

	public function calculate(Request $request) {

		$this->validate($request, [
			'cost' => 'required|min:0|numeric'
		]);

		if ($request->has('shipping')) {
			$cost = $request->input('cost') + 25;
		} else {
			$cost = $request->input('cost');
		}

		$platform = $request->input('platform');

		if ($platform == 'ebay') {
			$breakeven = round(($cost + 0.3)/0.871);
		} elseif ($platform =='expresso') {
			$breakeven = round(($cost + 0.3)/0.971);
		} else {
			$breakeven = round(($cost + 0.6)/0.942);
		}

		return redirect('/prints/breakeven')->with([
			'message' => "Your breakeven for this print is approximately $" .$breakeven
		]);
	}
}
