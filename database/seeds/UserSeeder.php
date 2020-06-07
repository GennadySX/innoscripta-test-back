<?php

use Illuminate\Database\Seeder;

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
            'password'=>'unlock001',
        ])->save();
    }
}
