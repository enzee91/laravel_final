<?php

namespace App\Http\Controllers;
use App\DailySales;
use App\Price;
use Illuminate\Http\Request;

class DailySalesRecordsController extends Controller
{
    public function index(){
        $daily_sales = DailySales::all();
        $prices = Price::all();
        return view('admin.DailySalesRecords',compact('daily_sales','prices'));
}
}