<?php

use Illuminate\Database\Seeder;
use App\Film;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Film::class, 40) -> create();
    }
}
