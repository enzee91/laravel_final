<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WetStock extends Model
{
    public function getClosingInventoryAttribute(){
        $clsng_invty= (($this->opng_invty+$this->purchase_del)-$this->gross_sales);
        return $clsng_invty;
       
    }
    public function getDailyVarAttribute(){
        $dly_var = ($this->act_invty - (($this->opng_invty + $this->purchase_del) - $this->gross_sales));
        return $dly_var;
    }
    public function getPercentVarAttribute(){
        $percent_var = (($this->act_invty - (($this->opng_invty + $this->purchase_del) - $this->gross_sales)) / $this->gross_sales);
        return $percent_var;
    }
}
