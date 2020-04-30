<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
class PriceListController extends Controller
{
    public function index(){
        $prices = Price::all();
        return view('admin.PriceList',compact('prices'));

}
    public function update(Request $request){
    $request->validate([
        'premium_price' => 'required',
        'silver_price' => 'required',
        'diesel_price' => 'required'
    ]);
        
    $prices = Price::find($request->id);
    if($prices){
        $prices->premium_price = $request->premium_price;
        $prices->silver_price = $request->silver_price;
        $prices->diesel_price = $request->diesel_price;
        $prices->save();
    }
    
    return redirect()->back()->withStatus('Prices Updated.');

}
}
