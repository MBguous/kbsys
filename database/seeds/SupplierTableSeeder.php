<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\ne_NP\Address($faker));
        $faker->addProvider(new Faker\Provider\ne_NP\Internet($faker));
        $faker->addProvider(new Faker\Provider\ne_NP\Person($faker));
        $faker->addProvider(new Faker\Provider\ne_NP\PhoneNumber($faker));

        foreach(range(1, 10) as $index) {
        	App\Supplier::create([
        		'name' => $faker->company(),
        		'location' => $faker->cityName(),
        		'email' => $faker->companyEmail(),
        		'telephone1' => $faker->phoneNumber(),
        		'telephone2' => $faker->phoneNumber(),
        		'date_added' => $faker->dateTimeThisYear($max = 'now'),
        		'default_order_mode' => 'delivery',
        		'is_enabled' => $faker->boolean($chanceOfGettingTrue = 50)
        	]);
        }
    }
}
