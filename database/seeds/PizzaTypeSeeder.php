<?php

use App\PizzaType;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PizzaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $size = ['Small', 'Middle', 'Large'];
        for ($i = 0; $i <= 8; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $pizza_type = new PizzaType();
                $pizza_type->fill([
                    'pizza_id' => $i,
                    'name' => $size[$j],
                    'cost' => $faker->randomFloat(2, 10, 50),
                ])->save();
            }
        }
    }
}
