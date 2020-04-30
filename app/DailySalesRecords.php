<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailySalesRecords extends Model
{
    public function getTotalSalesAttribute(){
       $total_sales = $this->num_of_liters_sold * $this->premium_price;
       return 'werw';
}
   
}