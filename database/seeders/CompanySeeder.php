<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Project;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();

        for ($i=0; $i < 50; $i++) { 

            $name=$faker->company();
            $email='info@'.Str::slug($name).'.com';

            Company::create([
                'name' => $name,
                'head_count' => $faker->numberBetween(1,200),
                'email' => $email
            ]);
            
        }
    }
}
