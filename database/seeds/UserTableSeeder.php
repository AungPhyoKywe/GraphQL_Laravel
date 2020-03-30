<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::truncate();

        $faker = \Faker\Factory::create();
        \App\User::create([

            'name' => 'apk',
            'email' => 'apk44@gmail.com',
            'password' => bcrypt('secret'),

        ]);

        foreach( range(1,100) as $i)
        {
            \App\User::create([

                'name' => $faker->name,
                'email'=> $faker->email,
                'password'=>Str::random(32)
            ]);
        }
    }
}
