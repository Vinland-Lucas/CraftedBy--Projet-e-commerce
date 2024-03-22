<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\City;
use App\Models\Speciality;
use App\Models\Theme;
use App\Models\Zip_Code;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::factory()
                    ->count(10)
                    ->for(Zip_Code::factory(), City::factory(), Theme::factory())
                    ->has(Speciality::factory()->count(5))
                    ->create();
    }
}
