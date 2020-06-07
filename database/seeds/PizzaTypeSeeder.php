
<?php

use Illuminate\Database\Seeder;

class PizzaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pizza_type = new \App\PizzaType();
        $pizza_type->fill([
            'pizza_id'=>'1',
            'name'=>'Small',
            'cost'=>'15.55',
        ])->save();
        $pizza_type = new \App\PizzaType();
        $pizza_type->fill([
            'pizza_id'=>'1',
            'name'=>'Middle',
            'cost'=>'17.55',
        ])->save();
        $pizza_type = new \App\PizzaType();
        $pizza_type->fill([
            'pizza_id'=>'1',
            'name'=>'Large',
            'cost'=>'19.55',
        ])->save();

        $pizza_type = factory(\App\PizzaType::class, 27)->create();

    }
}
