<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsFangcunFlySeeder extends Seeder
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
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*3点魔法值，所需能量：4",
                "description" => "有几率令对手在一定回合内无法使用法术，封印成功则自身也进入封印状态",
                "name" => "同缚符"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到130级，人物等级*5点魔法值，所需能量：4",
                "description" => "为自己或队友附加反射状态2回合，可将受到的封印效果转移给敌方施法目标。使用后进入“重创”状态2回合，该状态下受到的伤害结果增加20%",
                "name" => "灵台清明"
            ],
            [
                "level" => 0,
                "open_level" => 130,
                "type" => "fly",
                "cost" => "达到飞升境界，技能达到140级，人物等级*6点魔法值",
                "description" => "有几率令敌方最多7个目标进入睡眠状态，使用后自身速度降低一定回合",
                "name" => "梦境主宰"
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
