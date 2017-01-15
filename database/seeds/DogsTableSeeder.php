<?php

use App\Dog;
use Illuminate\Database\Seeder;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dog::truncate();
        Dog::create(['name' => 'Joe']);
        Dog::create(['name' => 'Jock']);
        Dog::create(['name' => 'Jackie']);
        Dog::create(['name' => 'Jane']);
    }
}
