<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grade');
            $table->float('basic_sal',8,2);
            $table->float('add_rate',8,2);
            $table->integer('target');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_management');
    }
}
