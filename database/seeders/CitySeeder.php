<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = include(app_path('includes/cities.php'));

        // $cities = [
        //     "id" => 1,
        //     "name" => "Andorra la Vella",
        //     "state_id" => 488,
        //     "country_id" => 6,
        //     "created_at" => "2019-10-05 23:58:06",
        //     "updated_at" => "2019-10-05 23:58:06",
        // ];


        City::insert($cities);
    }
}
