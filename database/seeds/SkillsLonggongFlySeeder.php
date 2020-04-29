<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsLonggongFlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '东海龙宫')->first();
        $npc = Npc::where('name', '龙王敖广')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*2.6点魔法值，能量消耗：5",
                "description" => "使用水系法术忽视目标灵力进行攻击，攻击后自身进入“飞龙镇海”状态，该状态下使用门派法术攻击时，会忽视选中目标的灵力",
                "name" => "飞龙镇海"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3点魔法值，所需能量：5",
                "description" => "使用火系法术随机攻击敌方八次，若成功击倒玩家，则下回合自身免疫封印状态",
                "name" => "龙行八荒"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，人物等级*6点魔法值",
                "description" => "使用水系法术攻击对方5个目标，并且至少令选中目标速度降低20%",
                "name" => "潮浪之漩"
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
