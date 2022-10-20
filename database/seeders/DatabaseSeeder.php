<?php

namespace Database\Seeders;

use App\Models\Error;
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
        //$this->call(SimpleDataSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(CvDataSeeder::class);
        $this->call(HomeSeeder::class);
        $this->call(ErrorSeeder::class);
       // $this->call(HomeSeeder::class);
    }
}
