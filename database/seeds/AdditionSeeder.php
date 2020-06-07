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
            'name' => 'Tomato sauce ',
            'description' => 'blah blah',
            'image' => '/uploads/tomato_sauce.jpg',
            'cost' => '5.22'
        ])->save();
    }
}
