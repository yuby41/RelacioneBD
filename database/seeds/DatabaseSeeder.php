<?php

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
        factory(App\Group::class, 3)->create();
        
        factory(App\Level::class)->create(['name' => 'Gold']);
        factory(App\Level::class)->create(['name' => 'Plate']);
        factory(App\Level::class)->create(['name' => 'Bronze']);
    }
}
