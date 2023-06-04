<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatsupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matsup', function (Blueprint $table) {
            $table->id();
            $table->integer('mat_id');
            $table->integer('sup_id');
            $table->foreign('mat_id')->references('id')->on('materials');
            $table->foreign('sup_id')->references('id')->on('supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matsup');
    }
}
