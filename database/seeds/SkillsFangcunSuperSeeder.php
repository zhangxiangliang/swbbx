<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsFangcunSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '七星方寸')->first();
        $npc = Npc::where('name', '大觉金仙')->first();

        $items = [
            [
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "被法术恢复气血效果增加20%",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "封印持续的回合数+1（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "封印的基础命中率和命中率上限+5%（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "太乙神雷的暴击率增加15%（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用缥缈符后，当回合受到攻击时都有13%几率使伤害结果降低15%",
                "name" => "蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "受到单体攻击时若自身处于被封印状态，有13%几率获得1回合飘缈符状态",
                "name" => "蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "受到地府或鬼魂单位的攻击时，减少13%的伤害结果",
                "name" => "蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "单体封印法术失败时，有13%几率返还此次技能的消耗",
                "name" => "橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "回合末若自身当前气血低于上限20%，则有13%几率使用一次凝神归元",
                "name" => "橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "自身气血低于上限15%时，受治疗的效果额外增加6%（与巨灵·阴共存时，该效果减半）",
                "name" => "橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "星爆状态下可无消耗使用门派法术，使用后自身当回合受到的伤害加成提高20%",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体封印法术的基础命中率提升3%",
                "name" => "紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "当敌方没有任何单位被封印时，单体封印法术增加3%的封印基础命中率和最高命中率",
                "name" => "紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "单体封印法术失败时，下次单体封印法术的基础命中率和最高命中率均提升3%（与行者·阴共存时，该效果减半）",
                "name" => "紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "使用灵台清明有10%几率不增加自身的“重创”状态",
                "name" => "赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "使用同缚符时有6%几率使自身获得的封印状态回合数-1",
                "name" => "赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "镇魂符同时降低目标13%的防御力和20%的灵力",
                "name" => "赤霄·Ⅲ"
            ],
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
