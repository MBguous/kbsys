<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedicineDamageLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_damage_logs', function (Blueprint $table) {
            $table->integer('medicine_stock_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->integer('quantity')->unsigned();
            $table->enum('damaged_type',['accidental','delivery', 'supplier fault', 'storage', 'transfer', 'expired'])->default('expired');
            $table->string('username', 20);
            $table->foreign('username')->references('username')->on('users');
            $table->foreign('medicine_stock_id')->references('id')->on('medicine_stocks');
            $table->primary(['medicine_stock_id','created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medicine_damage_logs');
    }
}
