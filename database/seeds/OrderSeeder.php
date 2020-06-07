<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $order = new \App\Order();
        $order->fill([
            'user_id'=>null,
            'pizza_id'=>1,
            'pizza_type_id'=>1,
            'fullName'=> 'Jack Daniel',
            'phone' => '+1 245 244 5250',
        ])->save();
    }
}
