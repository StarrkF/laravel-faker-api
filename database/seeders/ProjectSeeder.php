<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Project;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Factory::create();

        for ($i=0; $i < 200; $i++) { 
            Project::create([
                'company_id'=>Company::inRandomOrder()->first()->id,
                'title'=> $faker->catchPhrase(),
                'amount'=> $faker->numberBetween(10,10000)
            ]);
        }
    }
}
