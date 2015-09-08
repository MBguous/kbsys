<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedicineStocksStores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_stocks_stores', function (Blueprint $table) {
            $table->integer('store_id')->unsigned();
            $table->integer('medicine_stock_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->integer('quantity_remaining')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->string('username', 20);
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('medicine_stock_id')->references('id')->on('medicine_stocks');
            $table->foreign('username')->references('username')->on('users');
            $table->primary(['store_id','medicine_stock_id']);
        }); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicine_stocks_stores');
    }
}
