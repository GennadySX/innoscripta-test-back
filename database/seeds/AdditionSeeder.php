<?php

use App\Addition;
use Illuminate\Database\Seeder;

class AdditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $addition = new Addition();
        $addition->fill([
            'name' => 'Pickle',
            'description' => 'blah blah',
            'image' => '/uploads/cucumber.jpg',
            'cost' => '5.22'
        ])->save();


        $addition = new Addition();
        $addition->fill([
            'name' => 'Tomato sauce ',
            'description' => 'blah blah',
            'image' => '/uploads/sauce.jpg',
            'cost' => '7.22'
        ])->save();


        $addition = new Addition();
        $addition->fill([
            'name' => 'Fries',
            'description' => 'blah blah',
            'image' => '/uploads/fries.png',
            'cost' => '3.22'
        ])->save();
    }
}
