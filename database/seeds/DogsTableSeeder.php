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

        Dog::create(['name' => 'Joe', 'age' => 5 ]);
        Dog::create(['name' => 'Jock', 'age' => 7 ]);
        Dog::create(['name' => 'Jackie', 'age' => 2 ]);
        Dog::create(['name' => 'Jane', 'age' => 9 ]);
    }
}
