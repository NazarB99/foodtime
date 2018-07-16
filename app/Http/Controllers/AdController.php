<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class AdController extends Controller
{
	public function list(  ) {
		$ads = Advertisement::all();
		return view('ad.list')->with('ads',$ads);
    }

	public function create(  ) {
		return view('ad.create');
	}

	public function store(  ) {

		$this->validate(request(),[
			'activity' => 'required',
			'img' => 'required|image'
		]);
		$featured = request()->img ;

		$featured_new_name = time() . $featured->getClientOriginalName();

		$featured->move('images/category',$featured_new_name);

		Advertisement::create([
			'active' => request()->activity,
			'img' => 'images/category/' . $featured_new_name
		]);

		return redirect()->route('ad.list');
	}

	public function edit( $id ) {
		$ad = Advertisement::find($id);
		return view('ad.edit')->with('ad',$ad);
	}

	public function update( $id ) {
		$ad = Advertisement::find($id);

		if (request()->hasFile('featured')){

			$featured = request()->featured;

			$featured_new_name = time() . $featured->getClientOriginalName();

			$featured->move('images/category/',$featured_new_name);
			$ad->img = 'images/category/' . $featured_new_name;
		}

		$ad->active = request()->activity;
		$ad->save();
		
		return redirect()->route('ad.list');
	}

	public function delete( $id ) {
		$ad = Advertisement::find($id);
		$ad->delete();
		return redirect()->route('ad.list');
	}
}
