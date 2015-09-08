<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSupplierInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->unsigned();
            $table->string('invoice_no',20);
            $table->date('invoice_created_at');
            $table->enum('mode_of_order',['delivery','pickup'])->default('delivery');
            $table->decimal('amount_paid', 8, 2);
            $table->decimal('delivery_charge', 7, 2);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->foreign('supplier_id')->references('id')->on('medicine_suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('supplier_invoices');
    }
}
