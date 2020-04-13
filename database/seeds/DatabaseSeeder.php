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
        $this->call(UsersTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(RepliesTableSeeder::class);

        // 科举题库
        $this->call(QuestionChessSeeder::class);
        $this->call(QuestionGameSeeder::class);
        $this->call(QuestionGeographySeeder::class);
        $this->call(QuestionHistorySeeder::class);
        $this->call(QuestionIdiomSeeder::class);
        $this->call(QuestionLawSeeder::class);
        $this->call(QuestionLifeSeeder::class);
        $this->call(QuestionLiteratureSeeder::class);
        $this->call(QuestionMathSeeder::class);
        $this->call(QuestionMedicineSeeder::class);
        $this->call(QuestionMusicSeeder::class);
        $this->call(QuestionReligionSeeder::class);
        $this->call(QuestionRiddleSeeder::class);
        $this->call(QuestionTeaSeeder::class);
    }
}
