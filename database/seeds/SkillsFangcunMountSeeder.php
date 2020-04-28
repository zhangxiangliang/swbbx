<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsFangcunMountSeeder extends Seeder
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
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*5）点魔法值 40点精气，速率：100%，所需能量：5",
                "description" => "使用变身卡将自己或队友变身，持续至战斗结束；并为目标附加受封印成功率减少25%状态一定回合",
                "name" => "七十二变"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 60点精气，速率：100%，所需能量：6",
                "description" => "一定几率将敌方最多两个目标催眠，令其一定回合内无法进行任何行动；但受到伤害即解除，连续对同一目标使用，成功率降低",
                "name" => "入梦秘符"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "速率：100%",
                "description" => "有几率将敌方最多两个目标陷地，令其诺干回合内无法使用物理攻击和逃跑，并降低物理防御力和灵力",
                "name" => "陷地秘符"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 50点精气，速率：100%，所需能量：4",
                "description" => "一定几率使本方最多全部队员逃离战斗，回到各自的门派",
                "name" => "筋斗云"
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
