<?php

use Illuminate\Database\Seeder;

class LangBoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lang_box = new \App\LangBox();
        $lang_box->fill([
            'model_type'=>\App\Pizza::class,
            'model_id' => '1',
            'column_name' => 'name',
            'language_id' => 2,
            'value' => "Mexicano`s"
        ])->save();
    }
}
