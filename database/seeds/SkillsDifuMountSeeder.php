<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsDifuMountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $map = Map::where('name', '幽冥地府')->first();
        $npc = Npc::where('name', '地藏菩萨')->first();

        $items = [
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：100%，所需能量：5",
                "description" => "复活己方倒地鬼魂宠物，令其气血恢复至满；对敌方倒地的鬼魂宠物使用，则召唤一个该宠物的镜像为己方作战，只能对玩家的宠物使用",
                "name" => "行尸走肉"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 50点精气，速率：100%，所需能量：5",
                "description" => "令对手一定回合进入锢魂状态，该状态下攻击力、法术攻击力、防御力降低，有概率使技能效果翻倍，若翻倍则该技能的能量清0",
                "name" => "锢魂之术"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*4）点魔法值 60点精气，速率：100%，所需能量：5",
                "description" => "对敌方已中“蚀心蛊”的目标使用，一定几率使其最多传染4个同伴",
                "name" => "死亡凋零"
            ],
            [
                "level" => 0,
                "open_level" => 70,
                "type" => "mount",
                "cost" => "（坐骑等级*3）点魔法值 40点精气，速率：180%，所需能量：4",
                "description" => "解除自己或队友所中的盘丝岭封印法术，并附加免疫盘丝岭封印法术状态一定回合，自身处于禁止使用法术状态时无法使用",
                "name" => "绝情令"
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
