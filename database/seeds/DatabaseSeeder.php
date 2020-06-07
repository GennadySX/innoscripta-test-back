<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PizzaSeeder::class);
        $this->call(PizzaTypeSeeder::class);
        $this->call(AdditionSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(LangBoxSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderAdditionSeeder::class);

    }
}
