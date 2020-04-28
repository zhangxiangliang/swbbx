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
        $this->call(ItemsGemSeeder::class);
        $this->call(ItemsCropSeeder::class);
        $this->call(ItemsAquaticSeeder::class);

        // 产物
        $this->call(ProducesBarbecueSeeder::class);
        $this->call(ProducesFavoriteSeeder::class);
        $this->call(ProducesGemSeeder::class);
        $this->call(ProducesAquaticSeeder::class);
        $this->call(ProducesLevelSeeder::class);
        $this->call(ProducesCropSeeder::class);

        // NPC
        $this->call(NpcsSeeder::class);

        // 导师
        $this->call(MapsTeacherSeeder::class);

        // 天策技能
        $this->call(SkillsTianceBaseSeeder::class);
        $this->call(SkillsTianceMountSeeder::class);
        $this->call(SkillsTianceFlySeeder::class);
        $this->call(SkillsTianceSuperSeeder::class);

        // 地府技能
        $this->call(SkillsDifuBaseSeeder::class);
        $this->call(SkillsDifuMountSeeder::class);
        $this->call(SkillsDifuFlySeeder::class);
        $this->call(SkillsDifuSuperSeeder::class);

        // 五庄技能
        $this->call(SkillsWuzhuangBaseSeeder::class);
        $this->call(SkillsWuzhuangMountSeeder::class);
        $this->call(SkillsWuzhuangFlySeeder::class);
        $this->call(SkillsWuzhuangSuperSeeder::class);

        // 万兽技能
        $this->call(SkillsWanshouBaseSeeder::class);
        $this->call(SkillsWanshouMountSeeder::class);
        $this->call(SkillsWanshouFlySeeder::class);
        $this->call(SkillsWanshouSuperSeeder::class);

        // 佛门技能
        $this->call(SkillsFomenBaseSeeder::class);
        $this->call(SkillsFomenMountSeeder::class);
        $this->call(SkillsFomenFlySeeder::class);
        $this->call(SkillsFomenSuperSeeder::class);

        // 方寸技能
        $this->call(SkillsFangcunBaseSeeder::class);
        $this->call(SkillsFangcunMountSeeder::class);
        $this->call(SkillsFangcunFlySeeder::class);
        $this->call(SkillsFangcunSuperSeeder::class);

        // 无名谷技能
        $this->call(SkillsWumingBaseSeeder::class);
        $this->call(SkillsWumingMountSeeder::class);
        $this->call(SkillsWumingFlySeeder::class);
        $this->call(SkillsWumingSuperSeeder::class);

        // 魔王技能
        $this->call(SkillsMowangBaseSeeder::class);
        $this->call(SkillsMowangMountSeeder::class);
        $this->call(SkillsMowangFlySeeder::class);
        $this->call(SkillsMowangSuperSeeder::class);

        // 天宫技能
        $this->call(SkillsTiangongBaseSeeder::class);
        $this->call(SkillsTiangongMountSeeder::class);
        $this->call(SkillsTiangongFlySeeder::class);
        $this->call(SkillsTiangongSuperSeeder::class);

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
