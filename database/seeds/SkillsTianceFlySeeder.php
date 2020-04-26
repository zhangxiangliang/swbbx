<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTianceFlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '天策')->first();
        $npc = Npc::where('name', '程将军')->first();

        $items = [
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "cost" => "达到飞升境界，技能达到130级，当前气血≥气血上限的50%，消耗的气血随攻击次数而增加，所需能量：7",
                "description" => "连续攻击目标直至出现未命中，命中随攻击次数而降低，使用后虚弱2回合，降低一定防御和灵力，同时不能进行任何行动",
                "name" => "一鼓作气",
            ],
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "cost" => "达到飞升境界，技能达到130级，当前气血≥气血上限的10%，当前气血的5%，所需能量：6",
                "description" => "攻击目标同时为自身附加“突袭”状态5回合，该状态下攻击力提高且攻击不会触发保护",
                "name" => "突袭",
            ],
            [
                "level" => 0,
                "type" => "fly",
                "open_level" => 130,
                "cost" => "达到飞升境界，技能达到140级，当前气血的5%，所需能力：5",
                "description" => "临时提高攻击力对目标造成伤害，并使目标进入“重伤”状态3回合，该状态下受到的治疗效果降低30%；若自身气血比例低于目标气血比例，本次攻击额外忽视目标10%防御力",
                "name" => "舍我其谁",
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
