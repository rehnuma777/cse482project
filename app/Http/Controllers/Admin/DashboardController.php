<?php

namespace App\Http\Controllers\Admin;

use App\Reservation;
use App\services;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
      public function index()
    {
        $servicesCount = services::count();
        $sliderCount= Slider::count();
        $reservations = Reservation::where('status',false)->get();
        return view('admin.dashboard',compact('servicesCount','sliderCount','reservations'));
    }
 }
