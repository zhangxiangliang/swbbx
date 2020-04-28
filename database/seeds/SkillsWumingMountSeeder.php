<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWumingMountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '无名谷')->first();
        $npc = Npc::where('name', '姬长歌')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 50点精气，速率：100%，所需能量：5",
                "description" => "物理攻击目标，并令其余两名攻击力高的玩家获得“灭魂”状态1回合，该状态下攻击目标可无视目标的复活、保命类效果",
                "name" => "灭魂印"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 50点精气，速率：100%，所需能量：5",
                "description" => "物理攻击并在一定回合内降低目标速度，同时自身提高相应的速度（不可叠加使用次数）",
                "name" => "挪移刃"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 45点精气，速率：180%，所需能量：4",
                "description" => "提高速率和攻击力对目标造成伤害，令自己进入隐身状态一回合",
                "name" => "遁虚影"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 45点精气，速率：100%，所需能量：5",
                "description" => "临时降低速度攻击敌人，同时令目标3回合内无法获得增益状态，使用锢神攻击处于“迟月”状态下的目标，可连续攻击两次，连击后状态消失",
                "name" => "迟月破击"
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
