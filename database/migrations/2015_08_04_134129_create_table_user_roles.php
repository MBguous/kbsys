<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserRoles extends Migration
{
    /**
     * Run the migrations.
     * create table user_roles
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->string('username', 20);
            $table->integer('role_id')->unsigned();
            $table->foreign('username')->references('username')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['username', 'role_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * drops table user_roles
     * @return void
     */
    public function down()
    {
        Schema::drop('user_roles');
    }
}
