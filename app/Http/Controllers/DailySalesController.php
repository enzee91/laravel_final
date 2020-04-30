<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DailySales;
use App\Price;
class DailySalesController extends Controller
{
    public function index(){
        return view('daily_sales.DailySales');
    }

    public function store(Request $request)
    {
       // dd($request->all());
        $postData = $this->validate($request,[
        
            'date' => 'required',
            'num_of_liters_sold' => 'required',
            
            ]);

            $dailysales = new DailySales;
            $dailysales ->date = $request->date;
            $dailysales ->num_of_liters_sold = $request->num_of_liters_sold;
            $dailysales ->product = $request->product;
            $dailysales ->save();
            
            
            return redirect()->route('daily_sales.DailySales')->withStatus('Values Added');
        }
}
