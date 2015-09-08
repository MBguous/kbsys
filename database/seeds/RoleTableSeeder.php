<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create(['name' => 'Super Admin']);
        App\Role::create(['name' => 'Admin']);
        App\Role::create(['name' => 'User']);
    }
}
