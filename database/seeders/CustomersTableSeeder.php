<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
	protected $faker;
	
	public function __construct(Generator $faker){
		$this->faker=$faker;
	}
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table("customers")->delete();
        for ($i=0;$i<1000;$i++){
			DB::table("customers")->insert([
				"created_at" => now(),
				"updated_at" => now(),
				"recorded_at" => now()->subDays(mt_rand(2,50)),
				"name" => $this->faker->name(),
				"surname" => $this->faker->lastName(),
				"city" => $this->faker->city(),
				"tel" => $this->faker->phoneNumber()
			]);
		}
    }
}
