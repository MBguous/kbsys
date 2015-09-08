<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBillMedicines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_medicines', function (Blueprint $table) {
            $table->integer('bill_id')->unsigned();
            $table->integer('medicine_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->decimal('unit_price', 6, 2);
            $table->decimal('amount', 7 ,2);
            $table->foreign('medicine_id')->references('id')->on('medicines');
            $table->foreign('bill_id')->references('id')->on('bills');
            $table->primary(['bill_id','medicine_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bill_medicines');
    }
}
