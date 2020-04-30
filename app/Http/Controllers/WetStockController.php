<?php

namespace App\Http\Controllers;
use App\WetStock;
use Illuminate\Http\Request;

class WetStockController extends Controller
{
    public function index()
    {
        
        return view('wet_stock.WetStock');
    }
    public function store(Request $request)
    {
       // dd($request->all());
        $postData = $this->validate($request,[
        
            'date' => 'required',
            'gross_sales' => 'required',
            'opng_invty' => 'required',
            'purchase_del' => 'required',
            //'clsng_invty' => 'required',
            'dipstk_rdg' => 'required',
            'act_invty' => 'required',
            //'dly_var' => 'required',
            //'percent_var' => 'required',
            'mulative_var' => 'required',
            ]);

            $wetstocks = new WetStock;
            $wetstocks ->date = $request->date;
            $wetstocks ->gross_sales = $request->gross_sales ? $request->gross_sales: 'N/A';
            $wetstocks ->opng_invty = $request->opng_invty;
            $wetstocks->purchase_del = $request->purchase_del;
            //$wetstocks ->clsng_invty = $request->clsng_invty;
            $wetstocks ->dipstk_rdg = $request->dipstk_rdg;
            $wetstocks ->act_invty = $request->act_invty;
            //$wetstocks ->dly_var = $request->dly_var;
            //$wetstocks ->percent_var = $request->percent_var;
            $wetstocks ->mulative_var = $request->mulative_var;
            $wetstocks ->save();

            
            return redirect()->route('wet_stock.WetStock')->withWarning('Values Added');
        }
        
}
