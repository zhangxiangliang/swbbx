<?php

use App\Models\Map;
use App\Models\Npc;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class SkillsMowangMountSeeder extends Seeder
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
                "type" => "mount",
                "open_level" => 10,
                "name" => "噬骨烈焰",
                "description" => "使用火系法术攻击敌人并使其中“魔法毒”，攻击后自身进入“噬骨烈焰”一定回合，该状态下攻击时一定几率让目标受到“魔法毒”影响",
                "cost" => "（坐骑等级*3）点魔法值40点精气，速率：100%，所需能量：5"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 10,
                "name" => "天崩地裂",
                "description" => "使用土系法术攻击敌方最多6个目标",
                "cost" => "（坐骑等级*3）点魔法值30点精气，速率：100%，所需能量：4"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 10,
                "name" => "星火燎原",
                "description" => "使用火系法术攻击敌人并且再追击一个目标（30%追击原目标、70%追击其它目标），追击造成的伤害为正常伤害的30%至80%",
                "cost" => "（坐骑等级*4）点魔法值60点精气，速率：100%，所需能量：5"
            ],
            [
                "level" => 0,
                "type" => "mount",
                "open_level" => 10,
                "name" => "牛气冲天",
                "description" => "为己方或敌方附加状态，令目标一定回合内临时提高速度。使用时同时为目标增加一定愤怒",
                "cost" => "（坐骑等级*4）点魔法值70点精气，速率：100%，所需能量：5"
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
