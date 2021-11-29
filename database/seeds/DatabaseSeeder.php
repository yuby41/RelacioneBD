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

        factory(App\User::class, 5)->create()->each(function ($user){
            $profile = $user->profile()->save(factory(App\Profile::class)->make());
            $profile->location()->save(factory(App\Location::class)->make());
            $user->groups()->attach($this->array(rand(1, 3)));
            $user->image()->save(factory(App\Image::class)->make([
                'url' => 'https://lorempixel.com/90/90/'
            ]));
        });
    }

    public function array($max)
    {
        $values = [];

        for($i=1; $i < $max; $i++) {
            $values[] = $i;
        }
    }

}
