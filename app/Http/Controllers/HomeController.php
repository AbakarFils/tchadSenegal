<?php

namespace App\Http\Controllers;

use App\Formalite;
use App\Slider;
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
        $sliders = Slider::all();
        $formalites = Formalite::all();
        return view('welcome',compact('sliders','formalites'));
    }
}
