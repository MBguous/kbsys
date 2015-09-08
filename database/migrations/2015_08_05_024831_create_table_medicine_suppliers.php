<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedicineSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 35);
            $table->string('location',40);
            $table->string('email',50);
            $table->string('telephone1', 10);
            $table->string('telephone2',10);
            $table->date('date_added');
            $table->enum('default_order_mode', ['delivery','pickup'])->default('delivery');
            $table->boolean('is_enabled');
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
        Schema::drop('medicine_suppliers');
    }
}
