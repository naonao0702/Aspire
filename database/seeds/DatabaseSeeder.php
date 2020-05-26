<?php

use App\LessonChapter;
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
        $this->call([
            LanguagesTableSeeder::class,
            lesson_chaptersTableSeeder::class,
            chapter_itemsTable::class,
        ]);
    }
}
