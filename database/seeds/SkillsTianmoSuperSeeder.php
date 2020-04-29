<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTianmoSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '天魔里')->first();
        $npc = Npc::where('name', '袁飞')->first();

        $items = [
            [
                "level" => 1,
                "type" => "super",
                "open_level" => 10,
                "name" => "星穹之力",
                "description" => "暗器伤害效果增加；使用暗器有5%概率出现暗器暴击"
            ],
            [
                "level" => 2,
                "type" => "super",
                "open_level" => 30,
                "name" => "青冥·Ⅰ",
                "description" => "封印持续的回合数+1（仅在非玩家战斗中有效）"
            ],
            [
                "level" => 2,
                "type" => "super",
                "open_level" => 30,
                "name" => "青冥·Ⅱ",
                "description" => "封印的基础命中率和命中率上限+5%（仅在非玩家战斗中有效）"
            ],
            [
                "level" => 2,
                "type" => "super",
                "open_level" => 30,
                "name" => "青冥·Ⅲ",
                "description" => "雨露千本和镰鼬斩的暴击率增加15%（仅在非玩家战斗中有效）"
            ],
            [
                "level" => 3,
                "type" => "super",
                "open_level" => 60,
                "name" => "蓝玉·Ⅰ",
                "description" => "进入潜行状态的当回合受到攻击有20%几率使伤害结果降低15%"
            ],
            [
                "level" => 3,
                "type" => "super",
                "open_level" => 60,
                "name" => "蓝玉·Ⅱ",
                "description" => "空蝉状态下不再降低防御力，但受到的伤害结果增加30%"
            ],
            [
                "level" => 3,
                "type" => "super",
                "open_level" => 60,
                "name" => "蓝玉·Ⅲ",
                "description" => "受到携带毒状态的目标攻击时，伤害减少6%"
            ],
            [
                "level" => 4,
                "type" => "super",
                "open_level" => 80,
                "name" => "橙光·Ⅰ",
                "description" => "单体封印法术失败时，有13%几率返还此次技能的消耗"
            ],
            [
                "level" => 4,
                "type" => "super",
                "open_level" => 80,
                "name" => "橙光·Ⅱ",
                "description" => "击倒目标后，有10%几率回复自身5%的最大生命值"
            ],
            [
                "level" => 4,
                "type" => "super",
                "open_level" => 80,
                "name" => "橙光·Ⅲ",
                "description" => "每回合结束时，有13%几率清除自身的减速类状态"
            ],
            [
                "level" => 5,
                "type" => "super",
                "open_level" => 90,
                "name" => "星爆",
                "description" => "成功出手后(除防御、保护、逃跑外），自身进入3回合的潜行状态 "
            ],
            [
                "level" => 6,
                "type" => "super",
                "open_level" => 100,
                "name" => "紫电·Ⅰ",
                "description" => "单体封印法术的基础命中率提升3%"
            ],
            [
                "level" => 6,
                "type" => "super",
                "open_level" => 100,
                "name" => "紫电·Ⅱ",
                "description" => "当敌方没有任何单位被封印时，单体封印法术增加3%的封印基础命中率和最高命中率"
            ],
            [
                "level" => 6,
                "type" => "super",
                "open_level" => 100,
                "name" => "紫电·Ⅲ",
                "description" => "单体封印法术失败时，下次单体封印法术的基础命中率和最高命中率均提升3%（与行者·阴共存时，该效果减半）"
            ],
            [
                "level" => 7,
                "type" => "super",
                "open_level" => 120,
                "name" => "赤霄·Ⅰ",
                "description" => "每场战斗前3次施放特技的愤怒值消耗减少6%，与愤怒腰带共存时，效果减半"
            ],
            [
                "level" => 7,
                "type" => "super",
                "open_level" => 120,
                "name" => "赤霄·Ⅱ",
                "description" => "攻击气血低于上限20%的目标时，10%几率使本次伤害增加攻击目标2%最大生命的伤害值"
            ],
            [
                "level" => 7,
                "type" => "super",
                "open_level" => 120,
                "name" => "赤霄·Ⅲ",
                "description" => "瞒天过海封印失败时，自身的瞒天过海状态有20%几率增加1回合"
            ]
        ];

        $items = collect($items)->map(function ($item) use ($map, $npc) {
            return array_merge($item, [
                "map_id" => $map["id"],
                "npc_id" => $npc["id"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray();

        Skill::insert($items);
    }
}
