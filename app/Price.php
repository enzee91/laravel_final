<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{
   public function getTotalSalesAttribute(){
        $total_sale=$this->num_of_liters_sold * $this->premium_price;
        return $this->premium_price;
        
        }


        public function getProductPriceAttribute(){
            $product_price=0;
            if($this->product==='premium'){
                $product_price = $this->premium_price;
            }else if($this->product==='silver'){
                $product_price = $this->silver;
            }else if($this->product==='diesel'){
                $product_price = $this->diesel;
    }
            return $product_price;
        }
    }


