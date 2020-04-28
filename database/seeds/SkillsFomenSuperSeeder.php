<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsFomenSuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '佛门')->first();
        $npc = Npc::where('name', '大慧禅师')->first();

        $items = [
            [
                "level" => 1,
                "open_level" => 10,
                "type" => "super",
                "description" => "受到天魔里、七星方寸、盘丝岭、镇元五庄的封系法术时，封印回合数减半",
                "name" => "星穹之力"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "泽被苍生、止血的治疗量提高10%（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅰ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "罗汉金身、伽蓝战气的持续回合提高1回合（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅱ"
            ],
            [
                "level" => 2,
                "open_level" => 30,
                "type" => "super",
                "description" => "使用净世梵音时15%几率造成暴击（仅在非玩家战斗中有效）",
                "name" => "青冥·Ⅲ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用门派法术复活目标时，10%几率为其附加罗汉金身状态2回合",
                "name" => "蓝玉·Ⅰ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用门派法术复活目标时，若目标魔法低于25%，额外为其恢复自身等级*2.6的魔法值",
                "name" => "蓝玉·Ⅱ"
            ],
            [
                "level" => 3,
                "open_level" => 60,
                "type" => "super",
                "description" => "使用门派法术复活目标时，10%几率使目标携带的所有非封印状态回合数减1（最低回合数为1）",
                "name" => "蓝玉·Ⅲ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用门派的群体治疗法术时，6%几率造成暴击，每回合最多暴击一个",
                "name" => "橙光·Ⅰ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用治愈时，13%几率造成暴击；对伤势低于气血上限20%的目标使用时，暴击率翻倍",
                "name" => "橙光·Ⅱ"
            ],
            [
                "level" => 4,
                "open_level" => 80,
                "type" => "super",
                "description" => "使用止血时，13%几率造成暴击；对气血低于气血上限10%的目标使用时，暴击率翻倍",
                "name" => "橙光·Ⅲ"
            ],
            [
                "level" => 5,
                "open_level" => 90,
                "type" => "super",
                "description" => "星爆状态下若成功复活目标，则清除目标携带的所有非封印异常状态，并使其获得1回合的降生状态",
                "name" => "星爆"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用伽蓝战气、罗汉金身、明王镇狱时，13%几率使选中目标的持续回合数加2",
                "name" => "紫电·Ⅰ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用伽蓝战气、罗汉金身、明王镇狱时，6%几率使选中目标的效果额外提升",
                "name" => "紫电·Ⅱ"
            ],
            [
                "level" => 6,
                "open_level" => 100,
                "type" => "super",
                "description" => "使用伽蓝战气、罗汉金身、明王镇狱时，13%几率返还消耗的魔法值",
                "name" => "紫电·Ⅲ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "若回合末自身处于死亡状态，20%几率为己方所有存活单位恢复气血和伤势，每场战斗只触发一次",
                "name" => "赤霄·Ⅰ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "若伽蓝战气、罗汉金身、明王镇狱被驱散时，10%几率令目标获得2回合的抗属性异常状态",
                "name" => "赤霄·Ⅱ"
            ],
            [
                "level" => 7,
                "open_level" => 120,
                "type" => "super",
                "description" => "人物触发自动保护宠物几率增加13%",
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
