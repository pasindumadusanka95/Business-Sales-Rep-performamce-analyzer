<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('dateOfSale');
            $table->string('shop_name');
            $table->string('shop_address');
            $table->string('stock_type');
            $table->string('quantity');
            $table->integer('unit_price');
            $table->integer('discount');
            $table->integer('total_price');
            $table->integer('receiptNo');
            $table->string('remarks')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}