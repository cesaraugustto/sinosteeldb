<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoiceItems', function (Blueprint $table) {
            $table->id();
            $table->integer("invoice_id");
            $table->integer("matSup_id");
            $table->foreign('invoice_id')->references('id')->on('invoice');
            $table->foreign('matSup_id')->references('id')->on('matsup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
}
