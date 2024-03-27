<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Product;
use App\Models\Theme;
use App\Models\User;
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
                    ->count(3)
                    ->sequence(
                        ['speciality' => 'Jewelry'],
                        ['speciality' => 'Pottery'],
                        ['speciality' => 'Glassblowing'],
                        ['speciality' => 'Leatherworking'],
                    )
//                    ->for(Theme::factory())
                    ->has(User::factory())
                    ->create();
    }
}
