<?php

use Illuminate\Database\Seeder;

class DollarBrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $broker = new \App\DollarBroker();
        $broker->fill([
            'name' => 'Euro',
            'percent' => 0.14

        ])->save();
    }
}
