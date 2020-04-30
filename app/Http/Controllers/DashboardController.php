<?php

namespace App\Http\Controllers;
use App\WetStock;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $wet_stocks = WetStock::all();
        return view('admin.dashboard',compact('wet_stocks'));

    }
   // 'date'=> 'required|date_format:Y-m-d',
}





