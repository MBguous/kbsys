<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoles extends Migration
{
    /**
     * Run the migrations. 
     * Create table roles
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Drop table roles
     * @return void
     */
    public function down()
    {
        Schema::drop('roles');
    }
}
