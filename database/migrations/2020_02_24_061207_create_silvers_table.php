<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSilversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('silvers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('date');
            $table->string('num_of_liters_sold');
            $table->string('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('silvers');
    }
}
