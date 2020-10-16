<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employe;
use App\Models\City;
use App\Models\Depertment;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         \App\Models\Employe::factory(15)->create();
         \App\Models\City::factory(10)->create();
         \App\Models\Depertment::factory(10)->create();
    }
}
