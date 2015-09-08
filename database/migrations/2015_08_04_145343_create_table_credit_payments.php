<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCreditPayments extends Migration
{
    /**
     * Run the migrations.
     * create table credit_payments
     * @return void
     */
    public function up()
    {
        Schema::create('credit_payments', function (Blueprint $table) {
            //id, date_time_of_payment, amount
            $table->integer('customer_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->decimal('amount', 7, 2);
            $table->primary(['customer_id', 'created_at']);
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     * Drop table credit_payments
     * @return void
     */
    public function down()
    {
        Schema::drop('credit_payments');
    }
}
