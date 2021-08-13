<?php

namespace Database\Seeders;
use App\Models\Users;
use App\Models\user_domicilio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Users::factory(100)->create();
        user_domicilio::factory(100)->create();
    }
}
