<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Specefication;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$specefiations = Specefication::all();
    	$ads = Advertisement::all();
        return view('welcome')->with('specefications',$specefiations)->with('ads', $ads);
    }

}
