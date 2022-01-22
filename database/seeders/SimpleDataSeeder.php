<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\SimpleData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models;

class SimpleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //SimpleData::factory(10)->has(Author::factory())->create();
        SimpleData::factory(10)->make()->each(function ($simple_data) {

            $author = Author::factory()->create();
            $simple_data->authors()->associate($author);
            $simple_data->save();

        });


    }
}
