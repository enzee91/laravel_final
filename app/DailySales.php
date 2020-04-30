<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailySales extends Model
{
    public function getTotalSalesAttribute(){
        $total_sales = $this->num_of_liters_sold * $this->premium_price;
        return $total_sales;
 }
     public function getPremiumductPriceAttribute(){
         $premium_price=$this->premium_price;
         return $premium_price;
     }
}
