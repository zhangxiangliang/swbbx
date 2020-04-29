<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsLonggongMountSeeder extends Seeder
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
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*5）点魔法值和50点精气，速率：230%，所需能量：5",
                "description" => "使用水系法术攻击敌人并且自身当回合隐身，同时自身一定回合内物理躲避率增加",
                "name" => "龙隐"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值和30点精气，速率：100%，所需能量：4",
                "description" => "使用雷系法术攻击敌方最多7个目标",
                "name" => "雷神之锤"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值和70点精气，速率：100%，所需能量：6",
                "description" => "减少敌方全体一定的气血和魔法值。如果2回合内目标连续受到“怒龙吟”攻击，则受到的气血和魔法值伤害会减少",
                "name" => "怒龙吟"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：100%，所需能量：5",
                "description" => "使用水系法术忽略目标大量灵力进行攻击",
                "name" => "千叠浪"
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
