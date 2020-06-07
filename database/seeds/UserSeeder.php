<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new \App\User();
        $user->fill([
            'email'=>'root@mail.com',
            'name'=>'John Doe',
            'password'=>bcrypt('unlock001'),
        ])->save();

        $user = factory(App\User::class, 3)->create();
    }
}
