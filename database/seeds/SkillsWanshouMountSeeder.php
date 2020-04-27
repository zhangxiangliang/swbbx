<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsWanshouMountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '万兽岭')->first();
        $npc = Npc::where('name', '万兽之王')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值和50点精气，速率：100%，所需能量：4",
                "description" => "物理攻击敌人，并吸取目标所扣气血的20%恢复到自身（对鬼魂类目标无效），同时获得血噬状态3回合，该状态下发起的攻击会无视目标的伤害减免，攻击结束后消失",
                "name" => "血噬"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值和40点精气，速率：120%，所需能量：5",
                "description" => "物理攻击敌人，同时自身一定回合内获得“反击”状态，受到平砍或物理法术攻击都将自动反击",
                "name" => "狂战八方"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值和60点精气，速率：100%，所需能量：5",
                "description" => "同时攻击敌方四个目标，并有一定几率令目标当回合陷入“错乱”状态",
                "name" => "狮王怒吼"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值和60点精气，速率：180%，所需能量：4",
                "description" => "临时提高速度攻击敌人，攻击后自身附加免疫封印法术一回合，但受到任何伤害结果增加15%",
                "name" => "凌空闪"
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
