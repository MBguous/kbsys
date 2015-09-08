<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     * Creates the users table
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->string('username', 20)->primary();
            $table->string('password', 60);
            $table->string('name', 35);
            $table->string('email', 60)->unique();
            $table->string('telephone1', 10);
            $table->string('telephone2', 10);
            $table->string('address', 40);
            $table->boolean('is_enabled')->default(1);
            $table->rememberToken();
            $table->timestamps();
            //$2y$10$2ucPV2KdAExNVzcRDY7ZJeD92n4aWxomD1wFioSh6mgn9tILg6r8q
        });
    }

    /**
     * Reverse the migrations.
     * drops table users
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
