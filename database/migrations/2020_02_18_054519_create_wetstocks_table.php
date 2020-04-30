<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWetstocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wet_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('gross_sales');
            $table->string('opng_invty');
            $table->string('purchase_del');
            $table->string('clsng_invty');
            $table->string('dipstk_rdg');
            $table->string('act_invty');
            $table->string('dly_var');
            $table->string('percent_var');
            $table->string('mulative_var');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wet_stocks');
    }
}
