<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pizza = new \App\Pizza();
        $pizza->fill([
            'name'=>'Mexicano',
            'composition'=>"Ham, tomato, cheese, dough, mayonnaise",
            'image'=>'/uploads/pizza_1.png',
            'description' => 'this is delicious!'
        ])->save();

        $pizza = factory(\App\Pizza::class, 7)->create();
    }
}
