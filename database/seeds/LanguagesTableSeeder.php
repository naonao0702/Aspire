<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'language' => 'PHP',
                'language_detail' => 'PHPの詳細',
            ],
            [
                'language' => 'Java',
                'language_detail' => 'Javaの詳細',
            ],
            [
                'language' => 'Python',
                'language_detail' => 'Pythonの詳細',
            ],
            [
                'language' => 'Swift',
                'language_detail' => 'Swiftの詳細',
            ],
        ]);
    }
}
