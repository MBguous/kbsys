<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedicines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('name', 35);
            $table->string('desc', 100);
            $table->integer('minimum_stock_level')->unsigned();
            $table->integer('default_supplier')->unsigned();
            $table->boolean('is_outdated')->default(0);
            $table->timestamps();
            $table->foreign('default_supplier')->references('id')->on('medicine_suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicines');
    }
}
