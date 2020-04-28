<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsMowangSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '魔王山')->first();
        $npc = Npc::where('name', '平天大圣')->first();

        $items = [
            [
                "level" => 1,
                "type" => "super",
                "open_level" => 10,
                "name" => "星穹之力",
                "description" => "10%的几率完全招架住敌人的物理攻击（躲避本次攻击），使用法术时提高2%法暴概率"
            ],
            [
                "level" => 2,
                "type" => "super",
                "open_level" => 30,
                "name" => "青冥·Ⅰ",
                "description" => "漫天狂沙和魔王真火有15%几率多攻击一个目标（仅在非玩家战斗中有效）"
            ],
            [
                "level" => 2,
                "type" => "super",
                "open_level" => 30,
                "name" => "青冥·Ⅱ",
                "description" => "巡山小妖附带高级神佑复生技能（仅在非玩家战斗中有效）"
            ],
            [
                "level" => 2,
                "type" => "super",
                "open_level" => 30,
                "name" => "青冥·Ⅲ",
                "description" => "漫天狂沙和魔王真火的伤害结果增加10%（仅在非玩家战斗中有效）"
            ],
            [
                "level" => 3,
                "type" => "super",
                "open_level" => 60,
                "name" => "蓝玉·Ⅰ",
                "description" => "漫天狂沙和魔王真火的暴击率增加10%"
            ],
            [
                "level" => 3,
                "type" => "super",
                "open_level" => 60,
                "name" => "蓝玉·Ⅱ",
                "description" => "漫天狂沙和魔王真火有10%几率出现连击，连击伤害为50%"
            ],
            [
                "level" => 3,
                "type" => "super",
                "open_level" => 60,
                "name" => "蓝玉·Ⅲ",
                "description" => "漫天狂沙和魔王真火在原伤害的基础上波动90%~110%"
            ],
            [
                "level" => 4,
                "type" => "super",
                "open_level" => 80,
                "name" => "橙光·Ⅰ",
                "description" => "击倒目标时，有13%几率使下次攻击不增加愤怒，3回合内有效"
            ],
            [
                "level" => 4,
                "type" => "super",
                "open_level" => 80,
                "name" => "橙光·Ⅱ",
                "description" => "击倒目标时，有20%几率增加自身10点愤怒，每回合最多触发1次"
            ],
            [
                "level" => 4,
                "type" => "super",
                "open_level" => 80,
                "name" => "橙光·Ⅲ",
                "description" => "造成法术暴击时，6%几率增加自身5点愤怒，每回合最多触发1次"
            ],
            [
                "level" => 5,
                "type" => "super",
                "open_level" => 90,
                "name" => "星爆",
                "description" => "星爆状态下，攻击选中命中的目标获得持续4回合的魔法毒状态，其他目标则有60%几率进入魔法毒状态"
            ],
            [
                "level" => 6,
                "type" => "super",
                "open_level" => 100,
                "name" => "紫电·Ⅰ",
                "description" => "同个回合内受到3次攻击后，每再受到1次攻击，自身当回合的伤害结果就增加4%，最多加成20%"
            ],
            [
                "level" => 6,
                "type" => "super",
                "open_level" => 100,
                "name" => "紫电·Ⅱ",
                "description" => "同个回合内损失气血上限的15%后，每再受到气血上限5%的伤害，自身当回合的伤害结果就增加6%，最多加成30%"
            ],
            [
                "level" => 6,
                "type" => "super",
                "open_level" => 100,
                "name" => "紫电·Ⅲ",
                "description" => "对本回合复活的目标，增加6%的伤害结果（和巨灵·阳共存时，该效果减半）"
            ],
            [
                "level" => 7,
                "type" => "super",
                "open_level" => 120,
                "name" => "赤霄·Ⅰ",
                "description" => "攻击带有魔法毒单位的目标时，暴击时额外增加13%的伤害结果"
            ],
            [
                "level" => 7,
                "type" => "super",
                "open_level" => 120,
                "name" => "赤霄·Ⅱ",
                "description" => "攻击带有魔法毒单位的目标时，有20%的几率使魔法毒的持续回合数加2"
            ],
            [
                "level" => 7,
                "type" => "super",
                "open_level" => 120,
                "name" => "赤霄·Ⅲ",
                "description" => "自身被复活的当回合受到的伤害结果降低9%"
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
