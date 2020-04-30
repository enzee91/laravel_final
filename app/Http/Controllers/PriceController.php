<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
class PriceController extends Controller
{
    public function index(){
       
        return view('pricing.price');
}
   
        public function store(Request $request)
    {
       // dd($request->all());
        $postData = $this->validate($request,[
        
            'premium_price' => 'required',
            'silver_price' => 'required',
            'diesel_price' => 'required',
            'date'=>'required',
            
            ]);

            $prices = new Price;
            $prices ->date = $request->date;
            $prices ->premium_price = $request->premium_price;
            $prices ->silver_price = $request->silver_price;
            $prices ->diesel_price = $request->diesel_price;
            $prices ->save();

            
            return redirect()->route('pricing.Price')->withStatus('Values Added');
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

