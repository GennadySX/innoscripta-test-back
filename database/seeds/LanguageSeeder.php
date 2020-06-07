<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $lang = new \App\Language();
        $lang->fill([
            'name'=> 'English',
            'lang_code' => 'en'
        ])->save();

        $lang = new \App\Language();
        $lang->fill([
            'name'=> 'Spanish',
            'lang_code' => 'sp'
        ])->save();
    }
}
