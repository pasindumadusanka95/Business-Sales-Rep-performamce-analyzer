<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesrepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesrep', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('email')->unique()->primary();;
            $table->string('address');
            $table->string('phone');
            $table->string('salary')->nullable();
            $table->string('grade')->nullable();
            $table->string('sales_per_month')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salesrep');
    }
}