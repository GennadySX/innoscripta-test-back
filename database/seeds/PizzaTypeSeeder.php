
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
            'name'=>'Mexicano',
            'cost'=>'24.55',
        ])->save();
    }
}
