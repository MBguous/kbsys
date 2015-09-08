<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\User::create([
    		'username' => 'admin',
    		'password' => bcrypt('admin'),
    		'name' => 'Temp Name',
    		'email' => 'temp.email@example.com',
    		'telephone1' => 'temp phone1',
    		'telephone2' => 'temp phone2',
    		'address' => 'temp address',
    		'is_enabled' => 1
    		]);
    }
 }
