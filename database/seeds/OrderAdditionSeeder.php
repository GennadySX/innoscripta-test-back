<?php

use Illuminate\Database\Seeder;

class OrderAdditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $order_addition = new \App\OrderAddition();
        $order_addition->fill([
            'order_id'=>1,
            'addition_id'=>1
        ])->save();
    }
}
