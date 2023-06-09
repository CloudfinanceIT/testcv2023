<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
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
		$first_customer_id = DB::table("customers")->orderBy("id","asc")->first()->id;
		$last_customer_id = DB::table("customers")->orderBy("id","desc")->first()->id;
        DB::table("orders")->delete();
        for ($i=0;$i<10000;$i++){
			DB::table("orders")->insert([
				"created_at" => now(),
				"updated_at" => now(),
				"order_date" => now()->subDays(mt_rand(2,50)),
				"customer_id" => mt_rand($first_customer_id,$last_customer_id),
				"total_amount" => $this->faker->randomFloat(2,50,500000)
			]);
		}
    }
}
