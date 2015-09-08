<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedicineStocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medicine_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->integer('quantity')->unsigned();
            $table->integer('quantity_remaining')->unsigned();
            $table->date('expiry_date');
            $table->boolean('is_stock_cleared')->default(0);
            $table->string('username', 20);
            $table->integer('supplier_invoice_id')->unsigned();
            $table->decimal('amount_paid',7,2);
            $table->decimal('unit_cost_price',7,2);
            $table->decimal('unit_mrp',7,2);
            $table->integer('batch_no')->unsigned();
            $table->foreign('medicine_id')->references('id')->on('medicines');
            $table->foreign('username')->references('username')->on('users');
            $table->foreign('supplier_invoice_id')->references('id')->on('supplier_invoices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicine_stocks');
    }
}
