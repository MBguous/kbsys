<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     * create table customers
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 35);
            $table->enum('sex',['male','female'])->default('male');
            $table->date('DOB');
            $table->string('telephone', 10);
            $table->string('address', 40);
            $table->integer('credit_limit')->unsigned();
            $table->decimal('credit', 7, 2);
            $table->decimal('discount', 4, 2);
            $table->boolean('is_enabled')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Drop table customers
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
