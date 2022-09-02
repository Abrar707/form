<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Abrar;
use faker\factory as Faker;

class abrarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker=Faker::create();
            for( $i = 1; $i<=100; $i++){

            $customer=new Abrar;
            $customer->name=$faker->name;
            $customer->uni="IUB";
            $customer->department="BSIT";
            $customer->city=$faker->city;
            $customer->password=$faker->password;
            $customer->save();
        }

    }
}
