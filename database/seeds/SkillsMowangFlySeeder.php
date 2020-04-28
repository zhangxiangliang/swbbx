<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsMowangFlySeeder extends Seeder
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
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "name" => "地裂术",
                "description" => "使用土系法术攻击3个目标，并有概率降低目标防御2回合",
                "cost" => "达到飞升境界，技能达到130级，人物等级*2点魔法值，所需能量：2"
            ],
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "name" => "魔神附体",
                "description" => "使用火系法术攻击目标，同时使自己进入“魔神附体”状态5回合，该状态下对敌人造成伤害不会增加愤怒值，同时提高法术命中、伤害结果与暴击率，但会增加自身受到伤害结果和被封印的成功率",
                "cost" => "达到飞升境界，技能达到130级，人物等级*5点魔法值，所需能量：6"
            ],
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "name" => "焚世魔焰",
                "description" => "使用无属性法术攻击对方4个目标，并令自己在接下来的一定回合内使用的法术转化为无属性法术",
                "cost" => "达到飞升境界，技能达到140级，人物等级*6点魔法值"
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
