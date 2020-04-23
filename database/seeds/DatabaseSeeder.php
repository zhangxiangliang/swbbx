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
        // 基础
        $this->call(UsersSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(TopicsSeeder::class);
        $this->call(ServersSeeder::class);
        $this->call(RepliesSeeder::class);

        // 地图
        $this->call(MapsSeeder::class);

        // 物品数据
        $this->call(ItemsAquaticSeeder::class);
        $this->call(ItemsGemSeeder::class);
        $this->call(ItemsProduceSeeder::class);

        // 产物
        $this->call(ProducesBarbecueSeeder::class);
        $this->call(ProducesFavoriteSeeder::class);

        // NPC
        $this->call(NpcsSeeder::class);

        // 导师
        $this->call(MapsTeacherSeeder::class);

        // 门派技能
        $this->call(SkillTianceBaseSeeder::class);
        $this->call(SkillTianceMountSeeder::class);

        // 科举题库
        $this->call(QuestionsChessSeeder::class);
        $this->call(QuestionsGameSeeder::class);
        $this->call(QuestionsGeographySeeder::class);
        $this->call(QuestionsHistorySeeder::class);
        $this->call(QuestionsIdiomSeeder::class);
        $this->call(QuestionsLawSeeder::class);
        $this->call(QuestionsLifeSeeder::class);
        $this->call(QuestionsLiteratureSeeder::class);
        $this->call(QuestionsMathSeeder::class);
        $this->call(QuestionsMedicineSeeder::class);
        $this->call(QuestionsMusicSeeder::class);
        $this->call(QuestionsReligionSeeder::class);
        $this->call(QuestionsRiddleSeeder::class);
        $this->call(QuestionsTeaSeeder::class);
    }
}
