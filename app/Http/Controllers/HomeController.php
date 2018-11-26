<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Services;
use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function index()
    {
        $sliders = Slider::all(); 
        $services = Services::all();
        $item = Item::all();
        return view('welcome',compact('sliders','services','item'));
    }
}
