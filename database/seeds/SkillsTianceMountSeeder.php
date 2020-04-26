<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsTianceMountSeeder extends Seeder
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
                "type" => "mount",
                "open_level" => 70,
                "cost" => "当前气血的5%，40点精气，速率：100%，所需能量：5",
                "description" => "攻击目标后自身进入“运筹帷幄”状态一定回合，该状态下临时增加攻击，并随时可以直接使用“以守为攻”攻击目标（即不需要第一回合的蓄力），使用以守为攻后状态消失",
                "name"=> "运筹帷幄"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 70,
                "cost" => "气血上限的5%，30点精气，速率：100%，所需能量：4",
                "description" => "同时最多攻击敌方四个目标。当前气血≥气血上限的10%才能使用",
                "name"=> "刀光剑影"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 70,
                "cost" => "当前气血的5%，60点精气，速率：100%，所需能量：5",
                "description" => "忽视目标大量物理防御力进行物理攻击。当前气血≥气血上限的10%才能使用",
                "name"=> "势如破竹"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 70,
                "cost" => "当前气血的5%，50点精气，速率：100%，所需能量：5",
                "description" => "攻击目标后自身进入“金戈铁马”状态一定回合，如果将目标击倒则100%追击另一个目标。该状态下使用物理攻击或普通攻击目标时，吸取目标损失气血的20%恢复到自身（对鬼魂类目标无效）",
                "name"=> "金戈铁马"
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
