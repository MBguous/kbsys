<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            //id, customer_id, payment_type, bill_date, amount, discount, net_amount, advanced, remaining, username, store_no
            $table->increments('id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->enum('payment_type',['cash','credit'])->default('cash');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->decimal('service_charge', 5, 2);
            $table->decimal('amount', 7,2);
            $table->decimal('discount', 4,2);
            $table->decimal('net_amount', 7, 2);
            $table->integer('advanced')->unsigned();
            $table->decimal('remaining', 7, 2);
            $table->string('username', 20);
            $table->integer('store_id')->unsigned();
            $table->foreign('store_id')->references('id')->on('stores');
            $table->foreign('username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bills');
    }
}
